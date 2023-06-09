<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Report specification for exporting object metadata.
 * Next ID: 4
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.ObjectMetadataReportOptions</code>
 */
class ObjectMetadataReportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata fields to be included in the report.
     *
     * Generated from protobuf field <code>repeated string metadata_fields = 1;</code>
     */
    private $metadata_fields;
    protected $filter;
    protected $destination_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metadata_fields
     *           Metadata fields to be included in the report.
     *     @type \Google\Cloud\StorageInsights\V1\CloudStorageFilters $storage_filters
     *           Cloud Storage as the storage system.
     *     @type \Google\Cloud\StorageInsights\V1\CloudStorageDestinationOptions $storage_destination_options
     *           Cloud Storage as the storage system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata fields to be included in the report.
     *
     * Generated from protobuf field <code>repeated string metadata_fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadataFields()
    {
        return $this->metadata_fields;
    }

    /**
     * Metadata fields to be included in the report.
     *
     * Generated from protobuf field <code>repeated string metadata_fields = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadataFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata_fields = $arr;

        return $this;
    }

    /**
     * Cloud Storage as the storage system.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.CloudStorageFilters storage_filters = 2;</code>
     * @return \Google\Cloud\StorageInsights\V1\CloudStorageFilters|null
     */
    public function getStorageFilters()
    {
        return $this->readOneof(2);
    }

    public function hasStorageFilters()
    {
        return $this->hasOneof(2);
    }

    /**
     * Cloud Storage as the storage system.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.CloudStorageFilters storage_filters = 2;</code>
     * @param \Google\Cloud\StorageInsights\V1\CloudStorageFilters $var
     * @return $this
     */
    public function setStorageFilters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageInsights\V1\CloudStorageFilters::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Cloud Storage as the storage system.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.CloudStorageDestinationOptions storage_destination_options = 3;</code>
     * @return \Google\Cloud\StorageInsights\V1\CloudStorageDestinationOptions|null
     */
    public function getStorageDestinationOptions()
    {
        return $this->readOneof(3);
    }

    public function hasStorageDestinationOptions()
    {
        return $this->hasOneof(3);
    }

    /**
     * Cloud Storage as the storage system.
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.CloudStorageDestinationOptions storage_destination_options = 3;</code>
     * @param \Google\Cloud\StorageInsights\V1\CloudStorageDestinationOptions $var
     * @return $this
     */
    public function setStorageDestinationOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageInsights\V1\CloudStorageDestinationOptions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->whichOneof("filter");
    }

    /**
     * @return string
     */
    public function getDestinationOptions()
    {
        return $this->whichOneof("destination_options");
    }

}

