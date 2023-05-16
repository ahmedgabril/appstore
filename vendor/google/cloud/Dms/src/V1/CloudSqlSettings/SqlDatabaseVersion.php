<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\CloudSqlSettings;

use UnexpectedValueException;

/**
 * The database engine type and version.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.CloudSqlSettings.SqlDatabaseVersion</code>
 */
class SqlDatabaseVersion
{
    /**
     * Unspecified version.
     *
     * Generated from protobuf enum <code>SQL_DATABASE_VERSION_UNSPECIFIED = 0;</code>
     */
    const SQL_DATABASE_VERSION_UNSPECIFIED = 0;
    /**
     * MySQL 5.6.
     *
     * Generated from protobuf enum <code>MYSQL_5_6 = 1;</code>
     */
    const MYSQL_5_6 = 1;
    /**
     * MySQL 5.7.
     *
     * Generated from protobuf enum <code>MYSQL_5_7 = 2;</code>
     */
    const MYSQL_5_7 = 2;
    /**
     * PostgreSQL 9.6.
     *
     * Generated from protobuf enum <code>POSTGRES_9_6 = 3;</code>
     */
    const POSTGRES_9_6 = 3;
    /**
     * PostgreSQL 11.
     *
     * Generated from protobuf enum <code>POSTGRES_11 = 4;</code>
     */
    const POSTGRES_11 = 4;
    /**
     * PostgreSQL 10.
     *
     * Generated from protobuf enum <code>POSTGRES_10 = 5;</code>
     */
    const POSTGRES_10 = 5;
    /**
     * MySQL 8.0.
     *
     * Generated from protobuf enum <code>MYSQL_8_0 = 6;</code>
     */
    const MYSQL_8_0 = 6;
    /**
     * PostgreSQL 12.
     *
     * Generated from protobuf enum <code>POSTGRES_12 = 7;</code>
     */
    const POSTGRES_12 = 7;
    /**
     * PostgreSQL 13.
     *
     * Generated from protobuf enum <code>POSTGRES_13 = 8;</code>
     */
    const POSTGRES_13 = 8;

    private static $valueToName = [
        self::SQL_DATABASE_VERSION_UNSPECIFIED => 'SQL_DATABASE_VERSION_UNSPECIFIED',
        self::MYSQL_5_6 => 'MYSQL_5_6',
        self::MYSQL_5_7 => 'MYSQL_5_7',
        self::POSTGRES_9_6 => 'POSTGRES_9_6',
        self::POSTGRES_11 => 'POSTGRES_11',
        self::POSTGRES_10 => 'POSTGRES_10',
        self::MYSQL_8_0 => 'MYSQL_8_0',
        self::POSTGRES_12 => 'POSTGRES_12',
        self::POSTGRES_13 => 'POSTGRES_13',
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

