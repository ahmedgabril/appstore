<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Bigtable.MutateRow.
 *
 * Generated from protobuf message <code>google.bigtable.v2.MutateRowRequest</code>
 */
class MutateRowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the table to which the mutation should be
     * applied. Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $table_name = '';
    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 4;</code>
     */
    private $app_profile_id = '';
    /**
     * Required. The key of the row to which the mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $row_key = '';
    /**
     * Required. Changes to be atomically applied to the specified row. Entries
     * are applied in order, meaning that earlier mutations can be masked by later
     * ones. Must contain at least one entry and at most 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           Required. The unique name of the table to which the mutation should be
     *           applied. Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     *     @type string $app_profile_id
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type string $row_key
     *           Required. The key of the row to which the mutation should be applied.
     *     @type array<\Google\Cloud\Bigtable\V2\Mutation>|\Google\Protobuf\Internal\RepeatedField $mutations
     *           Required. Changes to be atomically applied to the specified row. Entries
     *           are applied in order, meaning that earlier mutations can be masked by later
     *           ones. Must contain at least one entry and at most 100000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the table to which the mutation should be
     * applied. Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Required. The unique name of the table to which the mutation should be
     * applied. Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 4;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

    /**
     * Required. The key of the row to which the mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * Required. The key of the row to which the mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;

        return $this;
    }

    /**
     * Required. Changes to be atomically applied to the specified row. Entries
     * are applied in order, meaning that earlier mutations can be masked by later
     * ones. Must contain at least one entry and at most 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * Required. Changes to be atomically applied to the specified row. Entries
     * are applied in order, meaning that earlier mutations can be masked by later
     * ones. Must contain at least one entry and at most 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Bigtable\V2\Mutation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

}

