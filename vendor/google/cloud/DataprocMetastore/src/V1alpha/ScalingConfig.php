<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the scaling configuration of a metastore service.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.ScalingConfig</code>
 */
class ScalingConfig extends \Google\Protobuf\Internal\Message
{
    protected $scaling_model;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $instance_size
     *           An enum of readable instance sizes, with each instance size mapping to a
     *           float value (e.g. InstanceSize.EXTRA_SMALL = scaling_factor(0.1))
     *     @type float $scaling_factor
     *           Scaling factor, increments of 0.1 for values less than 1.0, and
     *           increments of 1.0 for values greater than 1.0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * An enum of readable instance sizes, with each instance size mapping to a
     * float value (e.g. InstanceSize.EXTRA_SMALL = scaling_factor(0.1))
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.ScalingConfig.InstanceSize instance_size = 1;</code>
     * @return int
     */
    public function getInstanceSize()
    {
        return $this->readOneof(1);
    }

    public function hasInstanceSize()
    {
        return $this->hasOneof(1);
    }

    /**
     * An enum of readable instance sizes, with each instance size mapping to a
     * float value (e.g. InstanceSize.EXTRA_SMALL = scaling_factor(0.1))
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.ScalingConfig.InstanceSize instance_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInstanceSize($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Metastore\V1alpha\ScalingConfig\InstanceSize::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Scaling factor, increments of 0.1 for values less than 1.0, and
     * increments of 1.0 for values greater than 1.0.
     *
     * Generated from protobuf field <code>float scaling_factor = 2;</code>
     * @return float
     */
    public function getScalingFactor()
    {
        return $this->readOneof(2);
    }

    public function hasScalingFactor()
    {
        return $this->hasOneof(2);
    }

    /**
     * Scaling factor, increments of 0.1 for values less than 1.0, and
     * increments of 1.0 for values greater than 1.0.
     *
     * Generated from protobuf field <code>float scaling_factor = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScalingFactor($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getScalingModel()
    {
        return $this->whichOneof("scaling_model");
    }

}

