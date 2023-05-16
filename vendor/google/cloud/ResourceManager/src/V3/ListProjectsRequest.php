<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the
 * [ListProjects][google.cloud.resourcemanager.v3.Projects.ListProjects]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListProjectsRequest</code>
 */
class ListProjectsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource whose projects are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. Indicate that projects in the `DELETE_REQUESTED` state should
     * also be returned. Normally only `ACTIVE` projects are returned.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $show_deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource whose projects are being listed.
     *           Only children of this parent resource are listed; descendants are not
     *           listed.
     *           If the parent is a folder, use the value `folders/{folder_id}`. If the
     *           parent is an organization, use the value `organizations/{org_id}`.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to
     *           [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     *           indicates from where listing should continue.
     *     @type int $page_size
     *           Optional. The maximum number of projects to return in the response.
     *           The server can return fewer projects than requested.
     *           If unspecified, server picks an appropriate default.
     *     @type bool $show_deleted
     *           Optional. Indicate that projects in the `DELETE_REQUESTED` state should
     *           also be returned. Normally only `ACTIVE` projects are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource whose projects are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource whose projects are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Indicate that projects in the `DELETE_REQUESTED` state should
     * also be returned. Normally only `ACTIVE` projects are returned.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->show_deleted;
    }

    /**
     * Optional. Indicate that projects in the `DELETE_REQUESTED` state should
     * also be returned. Normally only `ACTIVE` projects are returned.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->show_deleted = $var;

        return $this;
    }

}
