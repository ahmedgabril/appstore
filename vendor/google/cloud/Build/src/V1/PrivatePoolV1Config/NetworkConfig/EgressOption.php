<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\PrivatePoolV1Config\NetworkConfig;

use UnexpectedValueException;

/**
 * Defines the egress option for the pool.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.PrivatePoolV1Config.NetworkConfig.EgressOption</code>
 */
class EgressOption
{
    /**
     * If set, defaults to PUBLIC_EGRESS.
     *
     * Generated from protobuf enum <code>EGRESS_OPTION_UNSPECIFIED = 0;</code>
     */
    const EGRESS_OPTION_UNSPECIFIED = 0;
    /**
     * If set, workers are created without any public address, which prevents
     * network egress to public IPs unless a network proxy is configured.
     *
     * Generated from protobuf enum <code>NO_PUBLIC_EGRESS = 1;</code>
     */
    const NO_PUBLIC_EGRESS = 1;
    /**
     * If set, workers are created with a public address which allows for
     * public internet egress.
     *
     * Generated from protobuf enum <code>PUBLIC_EGRESS = 2;</code>
     */
    const PUBLIC_EGRESS = 2;

    private static $valueToName = [
        self::EGRESS_OPTION_UNSPECIFIED => 'EGRESS_OPTION_UNSPECIFIED',
        self::NO_PUBLIC_EGRESS => 'NO_PUBLIC_EGRESS',
        self::PUBLIC_EGRESS => 'PUBLIC_EGRESS',
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


