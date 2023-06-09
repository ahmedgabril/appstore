<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1\DataScanEvent;

use UnexpectedValueException;

/**
 * The trigger type for the data scan.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.DataScanEvent.Trigger</code>
 */
class Trigger
{
    /**
     * An unspecified trigger type.
     *
     * Generated from protobuf enum <code>TRIGGER_UNSPECIFIED = 0;</code>
     */
    const TRIGGER_UNSPECIFIED = 0;
    /**
     * Data scan triggers on demand.
     *
     * Generated from protobuf enum <code>ON_DEMAND = 1;</code>
     */
    const ON_DEMAND = 1;
    /**
     * Data scan triggers as per schedule.
     *
     * Generated from protobuf enum <code>SCHEDULE = 2;</code>
     */
    const SCHEDULE = 2;

    private static $valueToName = [
        self::TRIGGER_UNSPECIFIED => 'TRIGGER_UNSPECIFIED',
        self::ON_DEMAND => 'ON_DEMAND',
        self::SCHEDULE => 'SCHEDULE',
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


