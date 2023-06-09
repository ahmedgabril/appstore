<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [IndexService.UpsertDatapoints][google.cloud.aiplatform.v1.IndexService.UpsertDatapoints]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpsertDatapointsRequest</code>
 */
class UpsertDatapointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Index resource to be updated.
     * Format:
     * `projects/{project}/locations/{location}/indexes/{index}`
     *
     * Generated from protobuf field <code>string index = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $index = '';
    /**
     * A list of datapoints to be created/updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint datapoints = 2;</code>
     */
    private $datapoints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index
     *           Required. The name of the Index resource to be updated.
     *           Format:
     *           `projects/{project}/locations/{location}/indexes/{index}`
     *     @type array<\Google\Cloud\AIPlatform\V1\IndexDatapoint>|\Google\Protobuf\Internal\RepeatedField $datapoints
     *           A list of datapoints to be created/updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Index resource to be updated.
     * Format:
     * `projects/{project}/locations/{location}/indexes/{index}`
     *
     * Generated from protobuf field <code>string index = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Required. The name of the Index resource to be updated.
     * Format:
     * `projects/{project}/locations/{location}/indexes/{index}`
     *
     * Generated from protobuf field <code>string index = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;

        return $this;
    }

    /**
     * A list of datapoints to be created/updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint datapoints = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatapoints()
    {
        return $this->datapoints;
    }

    /**
     * A list of datapoints to be created/updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint datapoints = 2;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\IndexDatapoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatapoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\IndexDatapoint::class);
        $this->datapoints = $arr;

        return $this;
    }

}

