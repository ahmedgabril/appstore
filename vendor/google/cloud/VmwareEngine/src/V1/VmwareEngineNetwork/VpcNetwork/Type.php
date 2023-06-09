<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\VpcNetwork;

use UnexpectedValueException;

/**
 * Enum Type defines possible types of a VMware Engine network controlled
 * service.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork.Type</code>
 */
class Type
{
    /**
     * The default value. This value should never be used.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * VPC network that will be peered with a consumer VPC network or the
     * intranet VPC of another VMware Engine network. Access a private cloud
     * through Compute Engine VMs on a peered VPC network or an on-premises
     * resource connected to a peered consumer VPC network.
     *
     * Generated from protobuf enum <code>INTRANET = 1;</code>
     */
    const INTRANET = 1;
    /**
     * VPC network used for internet access to and from a private cloud.
     *
     * Generated from protobuf enum <code>INTERNET = 2;</code>
     */
    const INTERNET = 2;
    /**
     * VPC network used for access to Google Cloud services like
     * Cloud Storage.
     *
     * Generated from protobuf enum <code>GOOGLE_CLOUD = 3;</code>
     */
    const GOOGLE_CLOUD = 3;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::INTRANET => 'INTRANET',
        self::INTERNET => 'INTERNET',
        self::GOOGLE_CLOUD => 'GOOGLE_CLOUD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


