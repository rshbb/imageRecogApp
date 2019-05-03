<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/utils/test_proto.proto

namespace Clarifai\Internal\Utils;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.utils.TestProto</code>
 */
class _TestProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>string message = 2 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_moretags) = "protos are cool"];</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>double value = 3 [(.clarifai.api.utils.cl_default_float) = 1];</code>
     */
    private $value = 0.0;
    /**
     * Generated from protobuf field <code>bytes image_bytes = 4;</code>
     */
    private $image_bytes = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Utils\TestProto::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 2 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_moretags) = "protos are cool"];</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_moretags) = "protos are cool"];</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double value = 3 [(.clarifai.api.utils.cl_default_float) = 1];</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>double value = 3 [(.clarifai.api.utils.cl_default_float) = 1];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes image_bytes = 4;</code>
     * @return string
     */
    public function getImageBytes()
    {
        return $this->image_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes image_bytes = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setImageBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->image_bytes = $var;

        return $this;
    }

}
