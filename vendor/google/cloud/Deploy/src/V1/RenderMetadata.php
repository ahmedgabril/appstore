<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RenderMetadata includes information associated with a `Release` render.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RenderMetadata</code>
 */
class RenderMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Metadata associated with rendering for Cloud Run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CloudRunRenderMetadata cloud_run = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cloud_run = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\CloudRunRenderMetadata $cloud_run
     *           Output only. Metadata associated with rendering for Cloud Run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Metadata associated with rendering for Cloud Run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CloudRunRenderMetadata cloud_run = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\CloudRunRenderMetadata|null
     */
    public function getCloudRun()
    {
        return $this->cloud_run;
    }

    public function hasCloudRun()
    {
        return isset($this->cloud_run);
    }

    public function clearCloudRun()
    {
        unset($this->cloud_run);
    }

    /**
     * Output only. Metadata associated with rendering for Cloud Run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.CloudRunRenderMetadata cloud_run = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\CloudRunRenderMetadata $var
     * @return $this
     */
    public function setCloudRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\CloudRunRenderMetadata::class);
        $this->cloud_run = $var;

        return $this;
    }

}

