<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A point in a conversation that marks the start or the end of an annotation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.AnnotationBoundary</code>
 */
class AnnotationBoundary extends \Google\Protobuf\Internal\Message
{
    /**
     * The index in the sequence of transcribed pieces of the conversation where
     * the boundary is located. This index starts at zero.
     *
     * Generated from protobuf field <code>int32 transcript_index = 1;</code>
     */
    private $transcript_index = 0;
    protected $detailed_boundary;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $word_index
     *           The word index of this boundary with respect to the first word in the
     *           transcript piece. This index starts at zero.
     *     @type int $transcript_index
     *           The index in the sequence of transcribed pieces of the conversation where
     *           the boundary is located. This index starts at zero.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The word index of this boundary with respect to the first word in the
     * transcript piece. This index starts at zero.
     *
     * Generated from protobuf field <code>int32 word_index = 3;</code>
     * @return int
     */
    public function getWordIndex()
    {
        return $this->readOneof(3);
    }

    public function hasWordIndex()
    {
        return $this->hasOneof(3);
    }

    /**
     * The word index of this boundary with respect to the first word in the
     * transcript piece. This index starts at zero.
     *
     * Generated from protobuf field <code>int32 word_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWordIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The index in the sequence of transcribed pieces of the conversation where
     * the boundary is located. This index starts at zero.
     *
     * Generated from protobuf field <code>int32 transcript_index = 1;</code>
     * @return int
     */
    public function getTranscriptIndex()
    {
        return $this->transcript_index;
    }

    /**
     * The index in the sequence of transcribed pieces of the conversation where
     * the boundary is located. This index starts at zero.
     *
     * Generated from protobuf field <code>int32 transcript_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTranscriptIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->transcript_index = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDetailedBoundary()
    {
        return $this->whichOneof("detailed_boundary");
    }

}

