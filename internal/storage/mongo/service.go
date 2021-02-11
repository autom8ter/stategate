package mongo

import (
	"context"
	"fmt"
	stategate "github.com/autom8ter/stategate/gen/grpc/go"
	"github.com/spf13/cast"
	"go.mongodb.org/mongo-driver/bson"
	"go.mongodb.org/mongo-driver/mongo"
	"go.mongodb.org/mongo-driver/mongo/options"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	"google.golang.org/protobuf/types/known/structpb"
	"time"
)

type Provider struct {
	db *mongo.Database
}

func NewProvider(db *mongo.Database) *Provider {
	return &Provider{db: db}
}

func (p Provider) SetObject(ctx context.Context, object *stategate.Object) error {
	filter := bson.D{
		{Key: "key", Value: object.GetKey()},
	}

	update := bson.M{
		"$set": bson.M(object.GetValues().AsMap()),
	}
	opts := options.Update().SetUpsert(true)
	_, err := p.db.Collection(object.GetType()).UpdateOne(ctx, filter, update, opts)
	if err != nil {
		return err
	}
	return nil
}

func (p Provider) SaveEvent(ctx context.Context, e *stategate.Event) error {
	_, err := p.db.Collection(fmt.Sprintf("%s_events", e.GetObject().GetType())).InsertOne(ctx, bson.M(map[string]interface{}{
		"id":   e.Id,
		"time": e.GetTime(),
		"object": bson.M{
			"type":  e.GetObject().GetType(),
			"key":   e.GetObject().GetKey(),
			"value": bson.M(e.GetObject().GetValues().AsMap()),
		},
		"claims": bson.M(e.GetClaims().AsMap()),
	}))
	if err != nil {
		return err
	}
	return nil
}

func (p *Provider) GetObject(ctx context.Context, ref *stategate.ObjectRef) (*stategate.Object, error) {
	filter := bson.D{
		{Key: "key", Value: ref.GetKey()},
	}
	var result bson.M

	if err := p.db.Collection(ref.GetType()).FindOne(ctx, filter).Decode(&result); err != nil {
		if err == mongo.ErrNoDocuments {
			return nil, status.Error(codes.NotFound, "not found")
		}
		return nil, err
	}
	object := &stategate.Object{
		Type: ref.GetType(),
		Key:  cast.ToString(result["key"]),
	}
	delete(result, "_id")
	strct, _ := structpb.NewStruct(result)
	object.Values = strct
	return object, nil
}

func (p *Provider) SearchEvents(ctx context.Context, opts *stategate.SearchOpts) (*stategate.Events, error) {
	o := options.Find()
	if opts.GetLimit() > 0 {
		o.SetLimit(opts.GetLimit())
	}
	if opts.GetOffset() > 0 {
		o.SetSkip(opts.GetOffset())
	}
	filter := bson.D{
		{
			Key:   "object.key",
			Value: opts.GetKey(),
		},
	}
	if opts.Min > 0 {
		filter = append(filter, bson.E{
			Key:   "time",
			Value: bson.M{"$gte": opts.GetMin()},
		})
	}
	if opts.Max > 0 {
		filter = append(filter, bson.E{
			Key:   "time",
			Value: bson.M{"$lte": opts.GetMax()},
		})
	}
	cur, err := p.db.Collection(fmt.Sprintf("%s_events", opts.GetType())).Find(ctx, filter, o)
	if err != nil {
		return nil, err
	}
	defer cur.Close(ctx)
	var results []bson.M
	if err := cur.All(ctx, &results); err != nil {
		return nil, err
	}
	var events []*stategate.Event
	for _, r := range results {
		var e = &stategate.Event{
			Id:     "",
			Object: &stategate.Object{},
			Claims: nil,
			Time:   cast.ToInt64(r["time"]),
		}
		e.Id = cast.ToString(r["id"])
		object, ok := r["object"].(bson.M)
		if ok {
			d, _ := structpb.NewStruct(cast.ToStringMap(object["value"]))
			e.Object.Values = d
			e.Object.Key = cast.ToString(object["key"])
			e.Object.Type = cast.ToString(object["type"])
		}
		claims, ok := r["claims"].(bson.M)
		if ok {
			d, _ := structpb.NewStruct(claims)
			e.Claims = d
		}
		events = append(events, e)
	}
	return &stategate.Events{Events: events}, nil
}

func (p *Provider) Close() error {
	ctx, cancel := context.WithTimeout(context.Background(), 5*time.Second)
	defer cancel()
	return p.db.Client().Disconnect(ctx)
}
