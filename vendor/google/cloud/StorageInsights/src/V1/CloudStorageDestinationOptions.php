<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options to store reports in storage systems.
 * Next ID: 3
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.CloudStorageDestinationOptions</code>
 */
class CloudStorageDestinationOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Destination bucket.
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     */
    protected $bucket = '';
    /**
     * Destination path is the path in the bucket where the report should be
     * generated.
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     */
    protected $destination_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Destination bucket.
     *     @type string $destination_path
     *           Destination path is the path in the bucket where the report should be
     *           generated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Destination bucket.
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Destination bucket.
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Destination path is the path in the bucket where the report should be
     * generated.
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @return string
     */
    public function getDestinationPath()
    {
        return $this->destination_path;
    }

    /**
     * Destination path is the path in the bucket where the report should be
     * generated.
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_path = $var;

        return $this;
    }

}

