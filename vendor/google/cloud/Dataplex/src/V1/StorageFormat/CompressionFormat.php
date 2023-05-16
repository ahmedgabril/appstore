<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\StorageFormat;

use UnexpectedValueException;

/**
 * The specific compressed file format of the data.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.StorageFormat.CompressionFormat</code>
 */
class CompressionFormat
{
    /**
     * CompressionFormat unspecified. Implies uncompressed data.
     *
     * Generated from protobuf enum <code>COMPRESSION_FORMAT_UNSPECIFIED = 0;</code>
     */
    const COMPRESSION_FORMAT_UNSPECIFIED = 0;
    /**
     * GZip compressed set of files.
     *
     * Generated from protobuf enum <code>GZIP = 2;</code>
     */
    const GZIP = 2;
    /**
     * BZip2 compressed set of files.
     *
     * Generated from protobuf enum <code>BZIP2 = 3;</code>
     */
    const BZIP2 = 3;

    private static $valueToName = [
        self::COMPRESSION_FORMAT_UNSPECIFIED => 'COMPRESSION_FORMAT_UNSPECIFIED',
        self::GZIP => 'GZIP',
        self::BZIP2 => 'BZIP2',
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


