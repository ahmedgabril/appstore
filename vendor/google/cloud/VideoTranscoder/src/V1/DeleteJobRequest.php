<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/services.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `TranscoderService.DeleteJob`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.DeleteJobRequest</code>
 */
class DeleteJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the job to delete.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If set to true, and the job is not found, the request will succeed but no
     * action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 2;</code>
     */
    private $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the job to delete.
     *           Format: `projects/{project}/locations/{location}/jobs/{job}`
     *     @type bool $allow_missing
     *           If set to true, and the job is not found, the request will succeed but no
     *           action will be taken on the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the job to delete.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the job to delete.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If set to true, and the job is not found, the request will succeed but no
     * action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 2;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the job is not found, the request will succeed but no
     * action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

