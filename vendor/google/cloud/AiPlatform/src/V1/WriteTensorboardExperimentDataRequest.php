<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TensorboardService.WriteTensorboardExperimentData][google.cloud.aiplatform.v1.TensorboardService.WriteTensorboardExperimentData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.WriteTensorboardExperimentDataRequest</code>
 */
class WriteTensorboardExperimentDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the TensorboardExperiment to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *
     * Generated from protobuf field <code>string tensorboard_experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $tensorboard_experiment = '';
    /**
     * Required. Requests containing per-run TensorboardTimeSeries data to write.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteTensorboardRunDataRequest write_run_data_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $write_run_data_requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tensorboard_experiment
     *           Required. The resource name of the TensorboardExperiment to write data to.
     *           Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *     @type array<\Google\Cloud\AIPlatform\V1\WriteTensorboardRunDataRequest>|\Google\Protobuf\Internal\RepeatedField $write_run_data_requests
     *           Required. Requests containing per-run TensorboardTimeSeries data to write.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the TensorboardExperiment to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *
     * Generated from protobuf field <code>string tensorboard_experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTensorboardExperiment()
    {
        return $this->tensorboard_experiment;
    }

    /**
     * Required. The resource name of the TensorboardExperiment to write data to.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}`
     *
     * Generated from protobuf field <code>string tensorboard_experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboardExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard_experiment = $var;

        return $this;
    }

    /**
     * Required. Requests containing per-run TensorboardTimeSeries data to write.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteTensorboardRunDataRequest write_run_data_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriteRunDataRequests()
    {
        return $this->write_run_data_requests;
    }

    /**
     * Required. Requests containing per-run TensorboardTimeSeries data to write.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteTensorboardRunDataRequest write_run_data_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\WriteTensorboardRunDataRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriteRunDataRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\WriteTensorboardRunDataRequest::class);
        $this->write_run_data_requests = $arr;

        return $this;
    }

}
