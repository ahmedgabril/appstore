<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/v1/explanations.proto

namespace GPBMetadata\Google\Cloud\Policytroubleshooter\V1;

class Explanations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/policytroubleshooter/v1/explanations.proto$google.cloud.policytroubleshooter.v1google/iam/v1/policy.protogoogle/type/expr.proto"_
AccessTuple
	principal (	B�A
full_resource_name (	B�A

permission (	B�A"�
ExplainedPolicyA
access (21.google.cloud.policytroubleshooter.v1.AccessState
full_resource_name (	%
policy (2.google.iam.v1.PolicyV
binding_explanations (28.google.cloud.policytroubleshooter.v1.BindingExplanationK
	relevance (28.google.cloud.policytroubleshooter.v1.HeuristicRelevance"�	
BindingExplanationF
access (21.google.cloud.policytroubleshooter.v1.AccessStateB�A
role (	`
role_permission (2G.google.cloud.policytroubleshooter.v1.BindingExplanation.RolePermission[
role_permission_relevance (28.google.cloud.policytroubleshooter.v1.HeuristicRelevance^
memberships (2I.google.cloud.policytroubleshooter.v1.BindingExplanation.MembershipsEntryK
	relevance (28.google.cloud.policytroubleshooter.v1.HeuristicRelevance$
	condition (2.google.type.Expr�
AnnotatedMembershipW

membership (2C.google.cloud.policytroubleshooter.v1.BindingExplanation.MembershipK
	relevance (28.google.cloud.policytroubleshooter.v1.HeuristicRelevance�
MembershipsEntry
key (	[
value (2L.google.cloud.policytroubleshooter.v1.BindingExplanation.AnnotatedMembership:8"�
RolePermission
ROLE_PERMISSION_UNSPECIFIED 
ROLE_PERMISSION_INCLUDED 
ROLE_PERMISSION_NOT_INCLUDED\'
#ROLE_PERMISSION_UNKNOWN_INFO_DENIED"�

Membership
MEMBERSHIP_UNSPECIFIED 
MEMBERSHIP_INCLUDED
MEMBERSHIP_NOT_INCLUDED"
MEMBERSHIP_UNKNOWN_INFO_DENIED"
MEMBERSHIP_UNKNOWN_UNSUPPORTED*{
AccessState
ACCESS_STATE_UNSPECIFIED 
GRANTED
NOT_GRANTED
UNKNOWN_CONDITIONAL
UNKNOWN_INFO_DENIED*O
HeuristicRelevance#
HEURISTIC_RELEVANCE_UNSPECIFIED 

NORMAL
HIGHB�Z\\cloud.google.com/go/policytroubleshooter/apiv1/policytroubleshooterpb;policytroubleshooterpb�$Google.Cloud.PolicyTroubleshooter.V1�$Google\\Cloud\\PolicyTroubleshooter\\V1�\'Google::Cloud::PolicyTroubleshooter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

