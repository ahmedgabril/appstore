<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list saved queries.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.ListSavedQueriesRequest</code>
 */
class ListSavedQueriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent project/folder/organization whose savedQueries are to
     * be listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The expression to filter resources.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`. When `AND` and `OR` are both used in the
     * expression, parentheses must be appropriately used to group the
     * combinations. The expression may also contain regular expressions.
     * See https://google.aip.dev/160 for more information on the grammar.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The maximum number of saved queries to return per page. The
     * service may return fewer than this value. If unspecified, at most 50 will
     * be returned. The maximum value is 1000; values above 1000 will be coerced
     * to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListSavedQueries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSavedQueries` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent project/folder/organization whose savedQueries are to
     *           be listed. It can only be using project/folder/organization number (such as
     *           "folders/12345")", or a project ID (such as "projects/my-project-id").
     *     @type string $filter
     *           Optional. The expression to filter resources.
     *           The expression is a list of zero or more restrictions combined via logical
     *           operators `AND` and `OR`. When `AND` and `OR` are both used in the
     *           expression, parentheses must be appropriately used to group the
     *           combinations. The expression may also contain regular expressions.
     *           See https://google.aip.dev/160 for more information on the grammar.
     *     @type int $page_size
     *           Optional. The maximum number of saved queries to return per page. The
     *           service may return fewer than this value. If unspecified, at most 50 will
     *           be returned. The maximum value is 1000; values above 1000 will be coerced
     *           to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListSavedQueries` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListSavedQueries` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent project/folder/organization whose savedQueries are to
     * be listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent project/folder/organization whose savedQueries are to
     * be listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
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
     * Optional. The expression to filter resources.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`. When `AND` and `OR` are both used in the
     * expression, parentheses must be appropriately used to group the
     * combinations. The expression may also contain regular expressions.
     * See https://google.aip.dev/160 for more information on the grammar.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The expression to filter resources.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`. When `AND` and `OR` are both used in the
     * expression, parentheses must be appropriately used to group the
     * combinations. The expression may also contain regular expressions.
     * See https://google.aip.dev/160 for more information on the grammar.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of saved queries to return per page. The
     * service may return fewer than this value. If unspecified, at most 50 will
     * be returned. The maximum value is 1000; values above 1000 will be coerced
     * to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of saved queries to return per page. The
     * service may return fewer than this value. If unspecified, at most 50 will
     * be returned. The maximum value is 1000; values above 1000 will be coerced
     * to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous `ListSavedQueries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSavedQueries` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListSavedQueries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSavedQueries` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

