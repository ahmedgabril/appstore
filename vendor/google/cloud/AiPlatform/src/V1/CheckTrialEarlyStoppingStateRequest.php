<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VizierService.CheckTrialEarlyStoppingState][google.cloud.aiplatform.v1.VizierService.CheckTrialEarlyStoppingState].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CheckTrialEarlyStoppingStateRequest</code>
 */
class CheckTrialEarlyStoppingStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Trial's name.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $trial_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trial_name
     *           Required. The Trial's name.
     *           Format:
     *           `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Trial's name.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTrialName()
    {
        return $this->trial_name;
    }

    /**
     * Required. The Trial's name.
     * Format:
     * `projects/{project}/locations/{location}/studies/{study}/trials/{trial}`
     *
     * Generated from protobuf field <code>string trial_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTrialName($var)
    {
        GPBUtil::checkString($var, True);
        $this->trial_name = $var;

        return $this;
    }

}

