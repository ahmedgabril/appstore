<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/app_connector_instance_config.proto

namespace Google\Cloud\BeyondCorp\AppConnectors\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NotificationConfig defines the mechanisms to notify instance agent.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnectors.v1.NotificationConfig</code>
 */
class NotificationConfig extends \Google\Protobuf\Internal\Message
{
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BeyondCorp\AppConnectors\V1\NotificationConfig\CloudPubSubNotificationConfig $pubsub_notification
     *           Cloud Pub/Sub Configuration to receive notifications.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1\AppConnectorInstanceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Pub/Sub Configuration to receive notifications.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.NotificationConfig.CloudPubSubNotificationConfig pubsub_notification = 1;</code>
     * @return \Google\Cloud\BeyondCorp\AppConnectors\V1\NotificationConfig\CloudPubSubNotificationConfig|null
     */
    public function getPubsubNotification()
    {
        return $this->readOneof(1);
    }

    public function hasPubsubNotification()
    {
        return $this->hasOneof(1);
    }

    /**
     * Cloud Pub/Sub Configuration to receive notifications.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.NotificationConfig.CloudPubSubNotificationConfig pubsub_notification = 1;</code>
     * @param \Google\Cloud\BeyondCorp\AppConnectors\V1\NotificationConfig\CloudPubSubNotificationConfig $var
     * @return $this
     */
    public function setPubsubNotification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppConnectors\V1\NotificationConfig\CloudPubSubNotificationConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}
