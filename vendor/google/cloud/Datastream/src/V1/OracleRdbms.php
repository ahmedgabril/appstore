<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle database structure.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleRdbms</code>
 */
class OracleRdbms extends \Google\Protobuf\Internal\Message
{
    /**
     * Oracle schemas/databases in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleSchema oracle_schemas = 1;</code>
     */
    private $oracle_schemas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Datastream\V1\OracleSchema>|\Google\Protobuf\Internal\RepeatedField $oracle_schemas
     *           Oracle schemas/databases in the database server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Oracle schemas/databases in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleSchema oracle_schemas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOracleSchemas()
    {
        return $this->oracle_schemas;
    }

    /**
     * Oracle schemas/databases in the database server.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.OracleSchema oracle_schemas = 1;</code>
     * @param array<\Google\Cloud\Datastream\V1\OracleSchema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOracleSchemas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\OracleSchema::class);
        $this->oracle_schemas = $arr;

        return $this;
    }

}

