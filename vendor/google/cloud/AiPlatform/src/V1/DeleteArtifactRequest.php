<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.DeleteArtifact][google.cloud.aiplatform.v1.MetadataService.DeleteArtifact].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteArtifactRequest</code>
 */
class DeleteArtifactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Artifact to delete.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. The etag of the Artifact to delete.
     * If this is provided, it must match the server's etag. Otherwise, the
     * request will fail with a FAILED_PRECONDITION.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Artifact to delete.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *     @type string $etag
     *           Optional. The etag of the Artifact to delete.
     *           If this is provided, it must match the server's etag. Otherwise, the
     *           request will fail with a FAILED_PRECONDITION.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Artifact to delete.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Artifact to delete.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The etag of the Artifact to delete.
     * If this is provided, it must match the server's etag. Otherwise, the
     * request will fail with a FAILED_PRECONDITION.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The etag of the Artifact to delete.
     * If this is provided, it must match the server's etag. Otherwise, the
     * request will fail with a FAILED_PRECONDITION.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

