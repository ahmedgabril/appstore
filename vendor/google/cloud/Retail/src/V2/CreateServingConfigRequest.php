<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateServingConfig method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CreateServingConfigRequest</code>
 */
class CreateServingConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of parent. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ServingConfig to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ServingConfig serving_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $serving_config = null;
    /**
     * Required. The ID to use for the ServingConfig, which will become the final
     * component of the ServingConfig's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string serving_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $serving_config_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Full resource name of parent. Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *     @type \Google\Cloud\Retail\V2\ServingConfig $serving_config
     *           Required. The ServingConfig to create.
     *     @type string $serving_config_id
     *           Required. The ID to use for the ServingConfig, which will become the final
     *           component of the ServingConfig's resource name.
     *           This value should be 4-63 characters, and valid characters
     *           are /[a-z][0-9]-_/.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ServingConfigService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of parent. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Full resource name of parent. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
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
     * Required. The ServingConfig to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ServingConfig serving_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\ServingConfig|null
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    public function hasServingConfig()
    {
        return isset($this->serving_config);
    }

    public function clearServingConfig()
    {
        unset($this->serving_config);
    }

    /**
     * Required. The ServingConfig to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ServingConfig serving_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\ServingConfig $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ServingConfig::class);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the ServingConfig, which will become the final
     * component of the ServingConfig's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string serving_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServingConfigId()
    {
        return $this->serving_config_id;
    }

    /**
     * Required. The ID to use for the ServingConfig, which will become the final
     * component of the ServingConfig's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-_/.
     *
     * Generated from protobuf field <code>string serving_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config_id = $var;

        return $this;
    }

}
