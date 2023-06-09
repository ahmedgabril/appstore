<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/processing.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataScan scheduling and trigger settings.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Trigger</code>
 */
class Trigger extends \Google\Protobuf\Internal\Message
{
    protected $mode;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Trigger\OnDemand $on_demand
     *           The scan runs one-time shortly after DataScan Creation.
     *     @type \Google\Cloud\Dataplex\V1\Trigger\Schedule $schedule
     *           The scan is scheduled to run periodically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Processing::initOnce();
        parent::__construct($data);
    }

    /**
     * The scan runs one-time shortly after DataScan Creation.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Trigger.OnDemand on_demand = 100;</code>
     * @return \Google\Cloud\Dataplex\V1\Trigger\OnDemand|null
     */
    public function getOnDemand()
    {
        return $this->readOneof(100);
    }

    public function hasOnDemand()
    {
        return $this->hasOneof(100);
    }

    /**
     * The scan runs one-time shortly after DataScan Creation.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Trigger.OnDemand on_demand = 100;</code>
     * @param \Google\Cloud\Dataplex\V1\Trigger\OnDemand $var
     * @return $this
     */
    public function setOnDemand($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Trigger\OnDemand::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * The scan is scheduled to run periodically.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Trigger.Schedule schedule = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\Trigger\Schedule|null
     */
    public function getSchedule()
    {
        return $this->readOneof(101);
    }

    public function hasSchedule()
    {
        return $this->hasOneof(101);
    }

    /**
     * The scan is scheduled to run periodically.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Trigger.Schedule schedule = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\Trigger\Schedule $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Trigger\Schedule::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}

