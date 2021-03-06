<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Stategate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StreamEventOpts are options for consumers looking to stream events.
 * Events are automatically emitted from mutations made from State mutations within the EntityService
 *
 * Generated from protobuf message <code>stategate.StreamEventOpts</code>
 */
class StreamEventOpts extends \Google\Protobuf\Internal\Message
{
    /**
     * the domain of the entity (ex: acme) that triggered the event
     * * indicates any domain
     * must not be empty or contain spaces
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     */
    private $domain = '';
    /**
     * the type of the entity (ex: user) that triggered the event
     * * indicates any type
     * must not be empty or contain spaces
     *
     * Generated from protobuf field <code>string type = 2 [(.validator.field) = {</code>
     */
    private $type = '';
    /**
     * consumer_group
     *
     * Generated from protobuf field <code>string consumer_group = 3;</code>
     */
    private $consumer_group = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *           the domain of the entity (ex: acme) that triggered the event
     *           * indicates any domain
     *           must not be empty or contain spaces
     *     @type string $type
     *           the type of the entity (ex: user) that triggered the event
     *           * indicates any type
     *           must not be empty or contain spaces
     *     @type string $consumer_group
     *           consumer_group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * the domain of the entity (ex: acme) that triggered the event
     * * indicates any domain
     * must not be empty or contain spaces
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * the domain of the entity (ex: acme) that triggered the event
     * * indicates any domain
     * must not be empty or contain spaces
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
     * the type of the entity (ex: user) that triggered the event
     * * indicates any type
     * must not be empty or contain spaces
     *
     * Generated from protobuf field <code>string type = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * the type of the entity (ex: user) that triggered the event
     * * indicates any type
     * must not be empty or contain spaces
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
     * consumer_group
     *
     * Generated from protobuf field <code>string consumer_group = 3;</code>
     * @return string
     */
    public function getConsumerGroup()
    {
        return $this->consumer_group;
    }

    /**
     * consumer_group
     *
     * Generated from protobuf field <code>string consumer_group = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_group = $var;

        return $this;
    }

}

