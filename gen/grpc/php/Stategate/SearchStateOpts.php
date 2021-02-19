<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Stategate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SearchStateOpts are options when querying the current values of application state value(s).
 * If historical values are needed, SearchEvents should be used
 *
 * Generated from protobuf message <code>stategate.SearchStateOpts</code>
 */
class SearchStateOpts extends \Google\Protobuf\Internal\Message
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
     * json string to filter records that have values match k/v pairs ex: { "message": "hello world" }
     *
     * Generated from protobuf field <code>string query_string = 3;</code>
     */
    private $query_string = '';
    /**
     * limit returned state
     *
     * Generated from protobuf field <code>int64 limit = 4 [(.validator.field) = {</code>
     */
    private $limit = 0;
    /**
     * offset returned events(pagination)
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     */
    private $offset = 0;

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
     *     @type string $query_string
     *           json string to filter records that have values match k/v pairs ex: { "message": "hello world" }
     *     @type int|string $limit
     *           limit returned state
     *     @type int|string $offset
     *           offset returned events(pagination)
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
     * json string to filter records that have values match k/v pairs ex: { "message": "hello world" }
     *
     * Generated from protobuf field <code>string query_string = 3;</code>
     * @return string
     */
    public function getQueryString()
    {
        return $this->query_string;
    }

    /**
     * json string to filter records that have values match k/v pairs ex: { "message": "hello world" }
     *
     * Generated from protobuf field <code>string query_string = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryString($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_string = $var;

        return $this;
    }

    /**
     * limit returned state
     *
     * Generated from protobuf field <code>int64 limit = 4 [(.validator.field) = {</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * limit returned state
     *
     * Generated from protobuf field <code>int64 limit = 4 [(.validator.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * offset returned events(pagination)
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * offset returned events(pagination)
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}
