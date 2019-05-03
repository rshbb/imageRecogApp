<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/input.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Input</code>
 */
class _Input extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     */
    private $data = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.FeedbackInfo feedback_info = 3;</code>
     */
    private $feedback_info = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     */
    private $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
     */
    private $modified_at = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 6;</code>
     */
    private $status = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Input::initOnce();
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
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     * @return \Clarifai\Internal\_Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     * @param \Clarifai\Internal\_Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_Data::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.FeedbackInfo feedback_info = 3;</code>
     * @return \Clarifai\Internal\_FeedbackInfo
     */
    public function getFeedbackInfo()
    {
        return $this->feedback_info;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.FeedbackInfo feedback_info = 3;</code>
     * @param \Clarifai\Internal\_FeedbackInfo $var
     * @return $this
     */
    public function setFeedbackInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_FeedbackInfo::class);
        $this->feedback_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 6;</code>
     * @return \Clarifai\Internal\Status\_Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 6;</code>
     * @param \Clarifai\Internal\Status\_Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\Status\_Status::class);
        $this->status = $var;

        return $this;
    }

}
