package server

import (
	"encoding/json"
	"github.com/pkg/errors"
	"os"
	"strconv"
	"strings"
)

type Config struct {
	Port             int64
	Debug            bool
	TLSCertFile      string
	TLSKeyFile       string
	AuthDisabled     bool
	JWKSUri          string
	RequestPolicy    string
	ResponsePolicy   string
	CorsAllowOrigins []string
	CorsAllowMethods []string
	CorsAllowHeaders []string
	ChannelProvider  map[string]string
	StorageProvider  map[string]string
	CacheProvider    map[string]string
}

func (c *Config) LoadEnv() error {
	var (
		port             = os.Getenv("STATEGATE_PORT")
		debug            = os.Getenv("STATEGATE_DEBUG")
		tlsCertFile      = os.Getenv("STATEGATE_TLS_CERT_FILE")
		tlsKeyFile       = os.Getenv("STATEGATE_TLS_KEY_FILE")
		authDisabled     = os.Getenv("STATEGATE_AUTH_DISABLED")
		jwksURI          = os.Getenv("STATEGATE_JWKS_URI")
		requestPolicy    = os.Getenv("STATEGATE_REQUEST_POLICY")
		responsePolicy   = os.Getenv("STATEGATE_RESPONSE_POLICY")
		storageProvider  = os.Getenv("STATEGATE_STORAGE_PROVIDER")
		cacheProvider    = os.Getenv("STATEGATE_CACHE_PROVIDER")
		channelProvider  = os.Getenv("STATEGATE_CHANNEL_PROVIDER")
		corsAllowOrigins = os.Getenv("STATEGATE_CORS_ALLOW_ORIGINS")
		corsAllowMethods = os.Getenv("STATEGATE_CORS_ALLOW_METHODS")
		corsAllowHeaders = os.Getenv("STATEGATE_CORS_ALLOW_HEADERS")
	)
	if corsAllowHeaders != "" {
		c.CorsAllowHeaders = strings.Split(corsAllowHeaders, ",")
	}
	if corsAllowOrigins != "" {
		c.CorsAllowOrigins = strings.Split(corsAllowOrigins, ",")
	}
	if corsAllowMethods != "" {
		c.CorsAllowMethods = strings.Split(corsAllowMethods, ",")
	}
	if port != "" {
		p, err := strconv.Atoi(port)
		if err != nil {
			return err
		}
		c.Port = int64(p)
	}
	if debug != "" {
		this, _ := strconv.ParseBool(debug)
		c.Debug = this
	}
	if tlsCertFile != "" {
		c.TLSCertFile = tlsCertFile
	}
	if tlsKeyFile != "" {
		c.TLSCertFile = tlsKeyFile
	}
	if authDisabled != "" {
		this, _ := strconv.ParseBool(authDisabled)
		c.AuthDisabled = this
	}
	if jwksURI != "" {
		c.JWKSUri = jwksURI
	}
	if requestPolicy != "" {
		c.RequestPolicy = requestPolicy
	}
	if responsePolicy != "" {
		c.ResponsePolicy = responsePolicy
	}
	if storageProvider != "" {
		provider := map[string]string{}
		if err := json.Unmarshal([]byte(storageProvider), &provider); err != nil {
			return errors.Wrap(err, "failed to unmarshal storage provider JSON")
		}
		c.StorageProvider = provider
	}
	if cacheProvider != "" {
		provider := map[string]string{}
		if err := json.Unmarshal([]byte(cacheProvider), &provider); err != nil {
			return errors.Wrap(err, "failed to unmarshal cache provider JSON")
		}
		c.CacheProvider = provider
	}
	if channelProvider != "" {
		provider := map[string]string{}
		if err := json.Unmarshal([]byte(channelProvider), &provider); err != nil {
			return errors.Wrap(err, "failed to unmarshal channel provider JSON")
		}
		c.ChannelProvider = provider
	}
	return nil
}

func (c *Config) SetDefaults() {
	if c.Port == 0 {
		c.Port = 8080
	}
}

func (c *Config) Validate() error {
	if c.Port <= 0 {
		return errors.New("config: empty port")
	}
	if c.StorageProvider == nil {
		return errors.New("config: empty storage provider (JSON string)")
	}
	if c.CacheProvider == nil {
		return errors.New("config: empty cache provider (JSON string)")
	}
	if c.ChannelProvider == nil {
		return errors.New("config: empty channel provider (JSON string)")
	}
	return nil
}
