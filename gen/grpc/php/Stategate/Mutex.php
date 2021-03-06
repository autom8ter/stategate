<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Stategate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mutex is a distributed mutex for preventing data-races amongst peer services
 *
 * Generated from protobuf message <code>stategate.Mutex</code>
 */
class Mutex extends \Google\Protobuf\Internal\Message
{
    /**
     * the mutex's business domain(ex: accounting)
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     */
    private $domain = '';
    /**
     * mutex key (unique within domain)
     *
     * Generated from protobuf field <code>string key = 2 [(.validator.field) = {</code>
     */
    private $key = '';
    /**
     * exp is the time at which the mutex value will expire
     * if exp is 0, the mutex will never expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exp = 4;</code>
     */
    private $exp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *           the mutex's business domain(ex: accounting)
     *     @type string $key
     *           mutex key (unique within domain)
     *     @type \Google\Protobuf\Timestamp $exp
     *           exp is the time at which the mutex value will expire
     *           if exp is 0, the mutex will never expire
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * the mutex's business domain(ex: accounting)
     *
     * Generated from protobuf field <code>string domain = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * the mutex's business domain(ex: accounting)
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
     * mutex key (unique within domain)
     *
     * Generated from protobuf field <code>string key = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * mutex key (unique within domain)
     *
     * Generated from protobuf field <code>string key = 2 [(.validator.field) = {</code>
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
     * exp is the time at which the mutex value will expire
     * if exp is 0, the mutex will never expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exp = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * exp is the time at which the mutex value will expire
     * if exp is 0, the mutex will never expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exp = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->exp = $var;

        return $this;
    }

}

