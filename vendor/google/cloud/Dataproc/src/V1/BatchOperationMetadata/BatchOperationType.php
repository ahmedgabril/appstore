<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/operations.proto

namespace Google\Cloud\Dataproc\V1\BatchOperationMetadata;

use UnexpectedValueException;

/**
 * Operation type for Batch resources
 *
 * Protobuf type <code>google.cloud.dataproc.v1.BatchOperationMetadata.BatchOperationType</code>
 */
class BatchOperationType
{
    /**
     * Batch operation type is unknown.
     *
     * Generated from protobuf enum <code>BATCH_OPERATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const BATCH_OPERATION_TYPE_UNSPECIFIED = 0;
    /**
     * Batch operation type.
     *
     * Generated from protobuf enum <code>BATCH = 1;</code>
     */
    const BATCH = 1;

    private static $valueToName = [
        self::BATCH_OPERATION_TYPE_UNSPECIFIED => 'BATCH_OPERATION_TYPE_UNSPECIFIED',
        self::BATCH => 'BATCH',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchOperationType::class, \Google\Cloud\Dataproc\V1\BatchOperationMetadata_BatchOperationType::class);

