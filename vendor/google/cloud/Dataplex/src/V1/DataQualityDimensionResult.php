<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataQualityDimensionResult provides a more detailed, per-dimension level view
 * of the results.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityDimensionResult</code>
 */
class DataQualityDimensionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     */
    private $passed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $passed
     *           Whether the dimension passed or failed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     * @return bool
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPassed($var)
    {
        GPBUtil::checkBool($var);
        $this->passed = $var;

        return $this;
    }

}

