<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/rollout_notification_payload.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class RolloutNotificationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Deploy\V1\LogEnums::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/deploy/v1/rollout_notification_payload.protogoogle.cloud.deploy.v1"�
RolloutNotificationEvent
message (	
pipeline_uid (	
release_uid (	
rollout (	*
type (2.google.cloud.deploy.v1.Type
	target_id (	Bs
com.google.cloud.deploy.v1BRolloutNotificationPayloadProtoPZ2cloud.google.com/go/deploy/apiv1/deploypb;deploypbbproto3'
        , true);

        static::$is_initialized = true;
    }
}
