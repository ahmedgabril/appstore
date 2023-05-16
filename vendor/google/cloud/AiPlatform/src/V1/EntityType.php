<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/entity_type.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entity type is a type of object in a system that needs to be modeled and
 * have stored information about. For example, driver is an entity type, and
 * driver0 is an instance of an entity type driver.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.EntityType</code>
 */
class EntityType extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the EntityType.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * The last part entity_type is assigned by the client. The entity_type can be
     * up to 64 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z and underscore(_), and ASCII digits 0-9 starting with a letter. The
     * value will be unique given a featurestore.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Optional. Description of the EntityType.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. Timestamp when this EntityType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this EntityType was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. The labels with user-defined metadata to organize your
     * EntityTypes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one EntityType (System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Used to perform a consistent read-modify-write updates. If not
     * set, a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. The default monitoring configuration for all Features with value
     * type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL,
     * STRING, DOUBLE or INT64 under this EntityType.
     * If this is populated with
     * [FeaturestoreMonitoringConfig.monitoring_interval] specified, snapshot
     * analysis monitoring is enabled. Otherwise, snapshot analysis monitoring is
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig monitoring_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $monitoring_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. Name of the EntityType.
     *           Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *           The last part entity_type is assigned by the client. The entity_type can be
     *           up to 64 characters long and can consist only of ASCII Latin letters A-Z
     *           and a-z and underscore(_), and ASCII digits 0-9 starting with a letter. The
     *           value will be unique given a featurestore.
     *     @type string $description
     *           Optional. Description of the EntityType.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this EntityType was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this EntityType was most recently updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your
     *           EntityTypes.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           No more than 64 user labels can be associated with one EntityType (System
     *           labels are excluded)."
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable.
     *     @type string $etag
     *           Optional. Used to perform a consistent read-modify-write updates. If not
     *           set, a blind "overwrite" update happens.
     *     @type \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig $monitoring_config
     *           Optional. The default monitoring configuration for all Features with value
     *           type
     *           ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL,
     *           STRING, DOUBLE or INT64 under this EntityType.
     *           If this is populated with
     *           [FeaturestoreMonitoringConfig.monitoring_interval] specified, snapshot
     *           analysis monitoring is enabled. Otherwise, snapshot analysis monitoring is
     *           disabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the EntityType.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * The last part entity_type is assigned by the client. The entity_type can be
     * up to 64 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z and underscore(_), and ASCII digits 0-9 starting with a letter. The
     * value will be unique given a featurestore.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Name of the EntityType.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * The last part entity_type is assigned by the client. The entity_type can be
     * up to 64 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z and underscore(_), and ASCII digits 0-9 starting with a letter. The
     * value will be unique given a featurestore.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Optional. Description of the EntityType.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the EntityType.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this EntityType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this EntityType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this EntityType was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this EntityType was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * EntityTypes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one EntityType (System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * EntityTypes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one EntityType (System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Used to perform a consistent read-modify-write updates. If not
     * set, a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Used to perform a consistent read-modify-write updates. If not
     * set, a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. The default monitoring configuration for all Features with value
     * type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL,
     * STRING, DOUBLE or INT64 under this EntityType.
     * If this is populated with
     * [FeaturestoreMonitoringConfig.monitoring_interval] specified, snapshot
     * analysis monitoring is enabled. Otherwise, snapshot analysis monitoring is
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig monitoring_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig|null
     */
    public function getMonitoringConfig()
    {
        return $this->monitoring_config;
    }

    public function hasMonitoringConfig()
    {
        return isset($this->monitoring_config);
    }

    public function clearMonitoringConfig()
    {
        unset($this->monitoring_config);
    }

    /**
     * Optional. The default monitoring configuration for all Features with value
     * type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL,
     * STRING, DOUBLE or INT64 under this EntityType.
     * If this is populated with
     * [FeaturestoreMonitoringConfig.monitoring_interval] specified, snapshot
     * analysis monitoring is enabled. Otherwise, snapshot analysis monitoring is
     * disabled.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig monitoring_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig $var
     * @return $this
     */
    public function setMonitoringConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig::class);
        $this->monitoring_config = $var;

        return $this;
    }

}
