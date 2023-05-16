<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition for determining whether a Pub/Sub should be triggered.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfilePubSubCondition</code>
 */
class DataProfilePubSubCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions expressions = 1;</code>
     */
    private $expressions = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubExpressions $expressions
     *           An expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions expressions = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubExpressions|null
     */
    public function getExpressions()
    {
        return $this->expressions;
    }

    public function hasExpressions()
    {
        return isset($this->expressions);
    }

    public function clearExpressions()
    {
        unset($this->expressions);
    }

    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions expressions = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubExpressions $var
     * @return $this
     */
    public function setExpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubExpressions::class);
        $this->expressions = $var;

        return $this;
    }

}

