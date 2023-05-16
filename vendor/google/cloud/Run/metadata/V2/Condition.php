<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/condition.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class Condition
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/run/v2/condition.protogoogle.cloud.run.v2"�
	Condition
type (	3
state (2$.google.cloud.run.v2.Condition.State
message (	8
last_transition_time (2.google.protobuf.Timestamp9
severity (2\'.google.cloud.run.v2.Condition.Severity=
reason (2+.google.cloud.run.v2.Condition.CommonReasonH H
revision_reason	 (2-.google.cloud.run.v2.Condition.RevisionReasonH J
execution_reason (2..google.cloud.run.v2.Condition.ExecutionReasonH "
State
STATE_UNSPECIFIED 
CONDITION_PENDING
CONDITION_RECONCILING
CONDITION_FAILED
CONDITION_SUCCEEDED"F
Severity
SEVERITY_UNSPECIFIED 	
ERROR
WARNING
INFO"�
CommonReason
COMMON_REASON_UNDEFINED 
UNKNOWN
REVISION_FAILED
PROGRESS_DEADLINE_EXCEEDED
CONTAINER_MISSING
CONTAINER_PERMISSION_DENIED 
CONTAINER_IMAGE_UNAUTHORIZED.
*CONTAINER_IMAGE_AUTHORIZATION_CHECK_FAILED	$
 ENCRYPTION_KEY_PERMISSION_DENIED

ENCRYPTION_KEY_CHECK_FAILED
SECRETS_ACCESS_CHECK_FAILED
WAITING_FOR_OPERATION
IMMEDIATE_RETRY
POSTPONED_RETRY
INTERNAL"�
RevisionReason
REVISION_REASON_UNDEFINED 
PENDING
RESERVE
RETIRED
RETIRING

RECREATING 
HEALTH_CHECK_CONTAINER_ERROR$
 CUSTOMIZED_PATH_RESPONSE_PENDING!
MIN_INSTANCES_NOT_PROVISIONED!
ACTIVE_REVISION_LIMIT_REACHED	
NO_DEPLOYMENT

HEALTH_CHECK_SKIPPED
MIN_INSTANCES_WARMING"~
ExecutionReason
EXECUTION_REASON_UNDEFINED $
 JOB_STATUS_SERVICE_POLLING_ERROR
NON_ZERO_EXIT_CODE
	CANCELLEDB	
reasonsBV
com.google.cloud.run.v2BConditionProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

