<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.CreateFeaturestore][google.cloud.aiplatform.v1.FeaturestoreService.CreateFeaturestore].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateFeaturestoreRequest</code>
 */
class CreateFeaturestoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create Featurestores.
     * Format:
     * `projects/{project}/locations/{location}'`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Featurestore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $featurestore = null;
    /**
     * Required. The ID to use for this Featurestore, which will become the final
     * component of the Featurestore's resource name.
     * This value may be up to 60 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within the project and location.
     *
     * Generated from protobuf field <code>string featurestore_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $featurestore_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create Featurestores.
     *           Format:
     *           `projects/{project}/locations/{location}'`
     *     @type \Google\Cloud\AIPlatform\V1\Featurestore $featurestore
     *           Required. The Featurestore to create.
     *     @type string $featurestore_id
     *           Required. The ID to use for this Featurestore, which will become the final
     *           component of the Featurestore's resource name.
     *           This value may be up to 60 characters, and valid characters are
     *           `[a-z0-9_]`. The first character cannot be a number.
     *           The value must be unique within the project and location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create Featurestores.
     * Format:
     * `projects/{project}/locations/{location}'`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create Featurestores.
     * Format:
     * `projects/{project}/locations/{location}'`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Featurestore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Featurestore|null
     */
    public function getFeaturestore()
    {
        return $this->featurestore;
    }

    public function hasFeaturestore()
    {
        return isset($this->featurestore);
    }

    public function clearFeaturestore()
    {
        unset($this->featurestore);
    }

    /**
     * Required. The Featurestore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Featurestore $var
     * @return $this
     */
    public function setFeaturestore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Featurestore::class);
        $this->featurestore = $var;

        return $this;
    }

    /**
     * Required. The ID to use for this Featurestore, which will become the final
     * component of the Featurestore's resource name.
     * This value may be up to 60 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within the project and location.
     *
     * Generated from protobuf field <code>string featurestore_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFeaturestoreId()
    {
        return $this->featurestore_id;
    }

    /**
     * Required. The ID to use for this Featurestore, which will become the final
     * component of the Featurestore's resource name.
     * This value may be up to 60 characters, and valid characters are
     * `[a-z0-9_]`. The first character cannot be a number.
     * The value must be unique within the project and location.
     *
     * Generated from protobuf field <code>string featurestore_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFeaturestoreId($var)
    {
        GPBUtil::checkString($var, True);
        $this->featurestore_id = $var;

        return $this;
    }

}
