<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/task.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class Task
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\Condition::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/cloud/run/v2/task.protogoogle.cloud.run.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/cloud/run/v2/condition.proto!google/cloud/run/v2/k8s.min.proto)google/cloud/run/v2/vendor_settings.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"?
GetTaskRequest-
name (	B�A�A
run.googleapis.com/Task"�
ListTasksRequest/
parent (	B�A�Arun.googleapis.com/Task
	page_size (

page_token (	
show_deleted ("V
ListTasksResponse(
tasks (2.google.cloud.run.v2.Task
next_page_token (	"�
Task
name (	B�A
uid (	B�A

generation (B�A5
labels (2%.google.cloud.run.v2.Task.LabelsEntry?
annotations (2*.google.cloud.run.v2.Task.AnnotationsEntry4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A8
completion_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time	 (2.google.protobuf.TimestampB�A4
expire_time
 (2.google.protobuf.TimestampB�A+
job (	B�A�A
run.googleapis.com/Job7
	execution
run.googleapis.com/Execution2

containers (2.google.cloud.run.v2.Container,
volumes (2.google.cloud.run.v2.Volume
max_retries (*
timeout (2.google.protobuf.Duration
service_account (	H
execution_environment (2).google.cloud.run.v2.ExecutionEnvironment
reconciling (B�A7

conditions (2.google.cloud.run.v2.ConditionB�A 
observed_generation (B�A
index (B�A
retried (B�AH
last_attempt_result (2&.google.cloud.run.v2.TaskAttemptResultB�AA
encryption_key (	B)�A�A#
!cloudkms.googleapis.com/CryptoKey7

vpc_access (2.google.cloud.run.v2.VpcAccessB�A
log_uri  (	B�A
etagc (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:w�At
run.googleapis.com/TaskVprojects/{project}/locations/{location}/jobs/{job}/executions/{execution}/tasks/{task}R"T
TaskAttemptResult\'
status (2.google.rpc.StatusB�A
	exit_code (B�A2�
Tasks�
GetTask#.google.cloud.run.v2.GetTaskRequest.google.cloud.run.v2.Task"L���?=/v2/{name=projects/*/locations/*/jobs/*/executions/*/tasks/*}�Aname�
	ListTasks%.google.cloud.run.v2.ListTasksRequest&.google.cloud.run.v2.ListTasksResponse"N���?=/v2/{parent=projects/*/locations/*/jobs/*/executions/*}/tasks�AparentF�Arun.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBQ
com.google.cloud.run.v2B	TaskProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}
