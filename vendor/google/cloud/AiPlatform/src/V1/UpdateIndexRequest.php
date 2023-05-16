<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [IndexService.UpdateIndex][google.cloud.aiplatform.v1.IndexService.UpdateIndex].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateIndexRequest</code>
 */
class UpdateIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Index which updates the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $index = null;
    /**
     * The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Index $index
     *           Required. The Index which updates the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource.
     *           For the `FieldMask` definition, see
     *           [google.protobuf.FieldMask][google.protobuf.FieldMask].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Index which updates the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Index|null
     */
    public function getIndex()
    {
        return $this->index;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Required. The Index which updates the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Index $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Index::class);
        $this->index = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

