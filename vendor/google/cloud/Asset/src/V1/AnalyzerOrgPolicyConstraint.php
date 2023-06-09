<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The organization policy constraint definition.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzerOrgPolicyConstraint</code>
 */
class AnalyzerOrgPolicyConstraint extends \Google\Protobuf\Internal\Message
{
    protected $constraint_definition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\Constraint $google_defined_constraint
     *           The definition of the canned constraint defined by Google.
     *     @type \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\CustomConstraint $custom_constraint
     *           The definition of the custom constraint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The definition of the canned constraint defined by Google.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.Constraint google_defined_constraint = 1;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\Constraint|null
     */
    public function getGoogleDefinedConstraint()
    {
        return $this->readOneof(1);
    }

    public function hasGoogleDefinedConstraint()
    {
        return $this->hasOneof(1);
    }

    /**
     * The definition of the canned constraint defined by Google.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.Constraint google_defined_constraint = 1;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\Constraint $var
     * @return $this
     */
    public function setGoogleDefinedConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\Constraint::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The definition of the custom constraint.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.CustomConstraint custom_constraint = 2;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\CustomConstraint|null
     */
    public function getCustomConstraint()
    {
        return $this->readOneof(2);
    }

    public function hasCustomConstraint()
    {
        return $this->hasOneof(2);
    }

    /**
     * The definition of the custom constraint.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint.CustomConstraint custom_constraint = 2;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\CustomConstraint $var
     * @return $this
     */
    public function setCustomConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint\CustomConstraint::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConstraintDefinition()
    {
        return $this->whichOneof("constraint_definition");
    }

}

