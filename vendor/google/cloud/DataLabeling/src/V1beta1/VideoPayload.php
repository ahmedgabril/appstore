<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_payloads.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container of information of a video.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.VideoPayload</code>
 */
class VideoPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Video format.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     */
    private $mime_type = '';
    /**
     * Video uri from the user bucket.
     *
     * Generated from protobuf field <code>string video_uri = 2;</code>
     */
    private $video_uri = '';
    /**
     * The list of video thumbnails.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoThumbnail video_thumbnails = 3;</code>
     */
    private $video_thumbnails;
    /**
     * FPS of the video.
     *
     * Generated from protobuf field <code>float frame_rate = 4;</code>
     */
    private $frame_rate = 0.0;
    /**
     * Signed uri of the video file in the service bucket.
     *
     * Generated from protobuf field <code>string signed_uri = 5;</code>
     */
    private $signed_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mime_type
     *           Video format.
     *     @type string $video_uri
     *           Video uri from the user bucket.
     *     @type array<\Google\Cloud\DataLabeling\V1beta1\VideoThumbnail>|\Google\Protobuf\Internal\RepeatedField $video_thumbnails
     *           The list of video thumbnails.
     *     @type float $frame_rate
     *           FPS of the video.
     *     @type string $signed_uri
     *           Signed uri of the video file in the service bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataPayloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Video format.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Video format.
     *
     * Generated from protobuf field <code>string mime_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Video uri from the user bucket.
     *
     * Generated from protobuf field <code>string video_uri = 2;</code>
     * @return string
     */
    public function getVideoUri()
    {
        return $this->video_uri;
    }

    /**
     * Video uri from the user bucket.
     *
     * Generated from protobuf field <code>string video_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->video_uri = $var;

        return $this;
    }

    /**
     * The list of video thumbnails.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoThumbnail video_thumbnails = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVideoThumbnails()
    {
        return $this->video_thumbnails;
    }

    /**
     * The list of video thumbnails.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoThumbnail video_thumbnails = 3;</code>
     * @param array<\Google\Cloud\DataLabeling\V1beta1\VideoThumbnail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVideoThumbnails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\VideoThumbnail::class);
        $this->video_thumbnails = $arr;

        return $this;
    }

    /**
     * FPS of the video.
     *
     * Generated from protobuf field <code>float frame_rate = 4;</code>
     * @return float
     */
    public function getFrameRate()
    {
        return $this->frame_rate;
    }

    /**
     * FPS of the video.
     *
     * Generated from protobuf field <code>float frame_rate = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setFrameRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->frame_rate = $var;

        return $this;
    }

    /**
     * Signed uri of the video file in the service bucket.
     *
     * Generated from protobuf field <code>string signed_uri = 5;</code>
     * @return string
     */
    public function getSignedUri()
    {
        return $this->signed_uri;
    }

    /**
     * Signed uri of the video file in the service bucket.
     *
     * Generated from protobuf field <code>string signed_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->signed_uri = $var;

        return $this;
    }

}
