# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

import sys
_b=sys.version_info[0]<3 and (lambda x:x) or (lambda x:x.encode('latin1'))
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


from google.api import annotations_pb2 as google_dot_api_dot_annotations__pb2
from google.protobuf import struct_pb2 as google_dot_protobuf_dot_struct__pb2
from google.protobuf import timestamp_pb2 as google_dot_protobuf_dot_timestamp__pb2
from google.protobuf import any_pb2 as google_dot_protobuf_dot_any__pb2
from google.protobuf import empty_pb2 as google_dot_protobuf_dot_empty__pb2
from github.com.mwitkow.go_proto_validators import validator_pb2 as github_dot_com_dot_mwitkow_dot_go__proto__validators_dot_validator__pb2


DESCRIPTOR = _descriptor.FileDescriptor(
  name='schema.proto',
  package='stategate',
  syntax='proto3',
  serialized_options=_b('Z\tstategate'),
  serialized_pb=_b('\n\x0cschema.proto\x12\tstategate\x1a\x1cgoogle/api/annotations.proto\x1a\x1cgoogle/protobuf/struct.proto\x1a\x1fgoogle/protobuf/timestamp.proto\x1a\x19google/protobuf/any.proto\x1a\x1bgoogle/protobuf/empty.proto\x1a\x36github.com/mwitkow/go-proto-validators/validator.proto\"6\n\tObjectRef\x12\x14\n\x04type\x18\x01 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\x12\x13\n\x03key\x18\x02 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\"d\n\x06Object\x12\x14\n\x04type\x18\x01 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\x12\x13\n\x03key\x18\x02 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\x12/\n\x06values\x18\x03 \x01(\x0b\x32\x17.google.protobuf.StructB\x06\xe2\xdf\x1f\x02 \x01\"x\n\nSearchOpts\x12\x14\n\x04type\x18\x01 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\x12\x13\n\x03key\x18\x02 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\x12\x0b\n\x03min\x18\x03 \x01(\x03\x12\x0b\n\x03max\x18\x04 \x01(\x03\x12\x15\n\x05limit\x18\x05 \x01(\x03\x42\x06\xe2\xdf\x1f\x02\x10\x00\x12\x0e\n\x06offset\x18\x06 \x01(\x03\"\"\n\nStreamOpts\x12\x14\n\x04type\x18\x01 \x01(\tB\x06\xe2\xdf\x1f\x02X\x01\"\x8e\x01\n\x05\x45vent\x12\x13\n\x02id\x18\x01 \x01(\tB\x07\xe2\xdf\x1f\x03\x90\x01\x00\x12)\n\x06object\x18\x02 \x01(\x0b\x32\x11.stategate.ObjectB\x06\xe2\xdf\x1f\x02 \x01\x12/\n\x06\x63laims\x18\x03 \x01(\x0b\x32\x17.google.protobuf.StructB\x06\xe2\xdf\x1f\x02 \x01\x12\x14\n\x04time\x18\x04 \x01(\x03\x42\x06\xe2\xdf\x1f\x02\x10\x00\"*\n\x06\x45vents\x12 \n\x06\x65vents\x18\x01 \x03(\x0b\x32\x10.stategate.Event2\xf5\x02\n\x10StateGateService\x12W\n\tSetObject\x12\x11.stategate.Object\x1a\x16.google.protobuf.Empty\"\x1f\x82\xd3\xe4\x93\x02\x19\"\x17/api/{type}/state/{key}\x12U\n\tGetObject\x12\x14.stategate.ObjectRef\x1a\x11.stategate.Object\"\x1f\x82\xd3\xe4\x93\x02\x19\x12\x17/api/{type}/state/{key}\x12U\n\x0cStreamEvents\x12\x15.stategate.StreamOpts\x1a\x10.stategate.Event\"\x1a\x82\xd3\xe4\x93\x02\x14\x12\x12/api/{type}/events0\x01\x12Z\n\x0cSearchEvents\x12\x15.stategate.SearchOpts\x1a\x11.stategate.Events\" \x82\xd3\xe4\x93\x02\x1a\x12\x18/api/{type}/events/{key}B\x0bZ\tstategateb\x06proto3')
  ,
  dependencies=[google_dot_api_dot_annotations__pb2.DESCRIPTOR,google_dot_protobuf_dot_struct__pb2.DESCRIPTOR,google_dot_protobuf_dot_timestamp__pb2.DESCRIPTOR,google_dot_protobuf_dot_any__pb2.DESCRIPTOR,google_dot_protobuf_dot_empty__pb2.DESCRIPTOR,github_dot_com_dot_mwitkow_dot_go__proto__validators_dot_validator__pb2.DESCRIPTOR,])




_OBJECTREF = _descriptor.Descriptor(
  name='ObjectRef',
  full_name='stategate.ObjectRef',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='type', full_name='stategate.ObjectRef.type', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='key', full_name='stategate.ObjectRef.key', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=232,
  serialized_end=286,
)


_OBJECT = _descriptor.Descriptor(
  name='Object',
  full_name='stategate.Object',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='type', full_name='stategate.Object.type', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='key', full_name='stategate.Object.key', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='values', full_name='stategate.Object.values', index=2,
      number=3, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002 \001'), file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=288,
  serialized_end=388,
)


_SEARCHOPTS = _descriptor.Descriptor(
  name='SearchOpts',
  full_name='stategate.SearchOpts',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='type', full_name='stategate.SearchOpts.type', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='key', full_name='stategate.SearchOpts.key', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='min', full_name='stategate.SearchOpts.min', index=2,
      number=3, type=3, cpp_type=2, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='max', full_name='stategate.SearchOpts.max', index=3,
      number=4, type=3, cpp_type=2, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='limit', full_name='stategate.SearchOpts.limit', index=4,
      number=5, type=3, cpp_type=2, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002\020\000'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='offset', full_name='stategate.SearchOpts.offset', index=5,
      number=6, type=3, cpp_type=2, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=390,
  serialized_end=510,
)


_STREAMOPTS = _descriptor.Descriptor(
  name='StreamOpts',
  full_name='stategate.StreamOpts',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='type', full_name='stategate.StreamOpts.type', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002X\001'), file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=512,
  serialized_end=546,
)


_EVENT = _descriptor.Descriptor(
  name='Event',
  full_name='stategate.Event',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='id', full_name='stategate.Event.id', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\003\220\001\000'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='object', full_name='stategate.Event.object', index=1,
      number=2, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002 \001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='claims', full_name='stategate.Event.claims', index=2,
      number=3, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002 \001'), file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='time', full_name='stategate.Event.time', index=3,
      number=4, type=3, cpp_type=2, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=_b('\342\337\037\002\020\000'), file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=549,
  serialized_end=691,
)


_EVENTS = _descriptor.Descriptor(
  name='Events',
  full_name='stategate.Events',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='events', full_name='stategate.Events.events', index=0,
      number=1, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=693,
  serialized_end=735,
)

_OBJECT.fields_by_name['values'].message_type = google_dot_protobuf_dot_struct__pb2._STRUCT
_EVENT.fields_by_name['object'].message_type = _OBJECT
_EVENT.fields_by_name['claims'].message_type = google_dot_protobuf_dot_struct__pb2._STRUCT
_EVENTS.fields_by_name['events'].message_type = _EVENT
DESCRIPTOR.message_types_by_name['ObjectRef'] = _OBJECTREF
DESCRIPTOR.message_types_by_name['Object'] = _OBJECT
DESCRIPTOR.message_types_by_name['SearchOpts'] = _SEARCHOPTS
DESCRIPTOR.message_types_by_name['StreamOpts'] = _STREAMOPTS
DESCRIPTOR.message_types_by_name['Event'] = _EVENT
DESCRIPTOR.message_types_by_name['Events'] = _EVENTS
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

ObjectRef = _reflection.GeneratedProtocolMessageType('ObjectRef', (_message.Message,), dict(
  DESCRIPTOR = _OBJECTREF,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.ObjectRef)
  ))
_sym_db.RegisterMessage(ObjectRef)

Object = _reflection.GeneratedProtocolMessageType('Object', (_message.Message,), dict(
  DESCRIPTOR = _OBJECT,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.Object)
  ))
_sym_db.RegisterMessage(Object)

SearchOpts = _reflection.GeneratedProtocolMessageType('SearchOpts', (_message.Message,), dict(
  DESCRIPTOR = _SEARCHOPTS,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.SearchOpts)
  ))
_sym_db.RegisterMessage(SearchOpts)

StreamOpts = _reflection.GeneratedProtocolMessageType('StreamOpts', (_message.Message,), dict(
  DESCRIPTOR = _STREAMOPTS,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.StreamOpts)
  ))
_sym_db.RegisterMessage(StreamOpts)

Event = _reflection.GeneratedProtocolMessageType('Event', (_message.Message,), dict(
  DESCRIPTOR = _EVENT,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.Event)
  ))
_sym_db.RegisterMessage(Event)

Events = _reflection.GeneratedProtocolMessageType('Events', (_message.Message,), dict(
  DESCRIPTOR = _EVENTS,
  __module__ = 'schema_pb2'
  # @@protoc_insertion_point(class_scope:stategate.Events)
  ))
_sym_db.RegisterMessage(Events)


DESCRIPTOR._options = None
_OBJECTREF.fields_by_name['type']._options = None
_OBJECTREF.fields_by_name['key']._options = None
_OBJECT.fields_by_name['type']._options = None
_OBJECT.fields_by_name['key']._options = None
_OBJECT.fields_by_name['values']._options = None
_SEARCHOPTS.fields_by_name['type']._options = None
_SEARCHOPTS.fields_by_name['key']._options = None
_SEARCHOPTS.fields_by_name['limit']._options = None
_STREAMOPTS.fields_by_name['type']._options = None
_EVENT.fields_by_name['id']._options = None
_EVENT.fields_by_name['object']._options = None
_EVENT.fields_by_name['claims']._options = None
_EVENT.fields_by_name['time']._options = None

_STATEGATESERVICE = _descriptor.ServiceDescriptor(
  name='StateGateService',
  full_name='stategate.StateGateService',
  file=DESCRIPTOR,
  index=0,
  serialized_options=None,
  serialized_start=738,
  serialized_end=1111,
  methods=[
  _descriptor.MethodDescriptor(
    name='SetObject',
    full_name='stategate.StateGateService.SetObject',
    index=0,
    containing_service=None,
    input_type=_OBJECT,
    output_type=google_dot_protobuf_dot_empty__pb2._EMPTY,
    serialized_options=_b('\202\323\344\223\002\031\"\027/api/{type}/state/{key}'),
  ),
  _descriptor.MethodDescriptor(
    name='GetObject',
    full_name='stategate.StateGateService.GetObject',
    index=1,
    containing_service=None,
    input_type=_OBJECTREF,
    output_type=_OBJECT,
    serialized_options=_b('\202\323\344\223\002\031\022\027/api/{type}/state/{key}'),
  ),
  _descriptor.MethodDescriptor(
    name='StreamEvents',
    full_name='stategate.StateGateService.StreamEvents',
    index=2,
    containing_service=None,
    input_type=_STREAMOPTS,
    output_type=_EVENT,
    serialized_options=_b('\202\323\344\223\002\024\022\022/api/{type}/events'),
  ),
  _descriptor.MethodDescriptor(
    name='SearchEvents',
    full_name='stategate.StateGateService.SearchEvents',
    index=3,
    containing_service=None,
    input_type=_SEARCHOPTS,
    output_type=_EVENTS,
    serialized_options=_b('\202\323\344\223\002\032\022\030/api/{type}/events/{key}'),
  ),
])
_sym_db.RegisterServiceDescriptor(_STATEGATESERVICE)

DESCRIPTOR.services_by_name['StateGateService'] = _STATEGATESERVICE

# @@protoc_insertion_point(module_scope)
