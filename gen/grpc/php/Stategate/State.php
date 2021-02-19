<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Stategate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State represents a single record(k/v pairs) with a unique key with a given [type](https://en.wikipedia.org/wiki/Type_system), belonging to a particular [domain](https://en.wikipedia.org/wiki/Domain-driven_design)
 * Services/Users should use state related methods to persist & interact with the current state of an application/domain.
 *
 * Generated from protobuf message <code>stategate.State</code>
 */
class State extends \Google\Protobuf\Internal\Message
{
    /**
     * the application state value's business domain(ex: accounting)
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     */
    private $domain = '';
    /**
     * State type (ex: user)
     *
     * Generated from protobuf field <code>string type = 2 [(.validator.field) = {</code>
     */
    private $type = '';
    /**
     * State key (unique within type)
     *
     * Generated from protobuf field <code>string key = 3 [(.validator.field) = {</code>
     */
    private $key = '';
    /**
     * State values (k/v pairs)
     *
     * Generated from protobuf field <code>.google.protobuf.Struct values = 4 [(.validator.field) = {</code>
     */
    private $values = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *           the application state value's business domain(ex: accounting)
     *     @type string $type
     *           State type (ex: user)
     *     @type string $key
     *           State key (unique within type)
     *     @type \Google\Protobuf\Struct $values
     *           State values (k/v pairs)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * the application state value's business domain(ex: accounting)
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * the application state value's business domain(ex: accounting)
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * State type (ex: user)
     *
     * Generated from protobuf field <code>string type = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * State type (ex: user)
     *
     * Generated from protobuf field <code>string type = 2 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * State key (unique within type)
     *
     * Generated from protobuf field <code>string key = 3 [(.validator.field) = {</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * State key (unique within type)
     *
     * Generated from protobuf field <code>string key = 3 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * State values (k/v pairs)
     *
     * Generated from protobuf field <code>.google.protobuf.Struct values = 4 [(.validator.field) = {</code>
     * @return \Google\Protobuf\Struct
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * State values (k/v pairs)
     *
     * Generated from protobuf field <code>.google.protobuf.Struct values = 4 [(.validator.field) = {</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->values = $var;

        return $this;
    }

}
