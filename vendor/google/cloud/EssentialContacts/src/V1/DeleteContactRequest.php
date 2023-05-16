<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/service.proto

namespace Google\Cloud\EssentialContacts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the DeleteContact method.
 *
 * Generated from protobuf message <code>google.cloud.essentialcontacts.v1.DeleteContactRequest</code>
 */
class DeleteContactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the contact to delete.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the contact to delete.
     *           Format: organizations/{organization_id}/contacts/{contact_id},
     *           folders/{folder_id}/contacts/{contact_id} or
     *           projects/{project_id}/contacts/{contact_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Essentialcontacts\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the contact to delete.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the contact to delete.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

