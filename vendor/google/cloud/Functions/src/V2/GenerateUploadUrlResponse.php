<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of `GenerateSourceUploadUrl` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.GenerateUploadUrlResponse</code>
 */
class GenerateUploadUrlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The generated Google Cloud Storage signed URL that should be used for a
     * function source code upload. The uploaded file should be a zip archive
     * which contains a function.
     *
     * Generated from protobuf field <code>string upload_url = 1;</code>
     */
    private $upload_url = '';
    /**
     * The location of the source code in the upload bucket.
     * Once the archive is uploaded using the `upload_url` use this field to
     * set the `function.build_config.source.storage_source`
     * during CreateFunction and UpdateFunction.
     * Generation defaults to 0, as Cloud Storage provides a new generation only
     * upon uploading a new object or version of an object.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.StorageSource storage_source = 2;</code>
     */
    private $storage_source = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $upload_url
     *           The generated Google Cloud Storage signed URL that should be used for a
     *           function source code upload. The uploaded file should be a zip archive
     *           which contains a function.
     *     @type \Google\Cloud\Functions\V2\StorageSource $storage_source
     *           The location of the source code in the upload bucket.
     *           Once the archive is uploaded using the `upload_url` use this field to
     *           set the `function.build_config.source.storage_source`
     *           during CreateFunction and UpdateFunction.
     *           Generation defaults to 0, as Cloud Storage provides a new generation only
     *           upon uploading a new object or version of an object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * The generated Google Cloud Storage signed URL that should be used for a
     * function source code upload. The uploaded file should be a zip archive
     * which contains a function.
     *
     * Generated from protobuf field <code>string upload_url = 1;</code>
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * The generated Google Cloud Storage signed URL that should be used for a
     * function source code upload. The uploaded file should be a zip archive
     * which contains a function.
     *
     * Generated from protobuf field <code>string upload_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->upload_url = $var;

        return $this;
    }

    /**
     * The location of the source code in the upload bucket.
     * Once the archive is uploaded using the `upload_url` use this field to
     * set the `function.build_config.source.storage_source`
     * during CreateFunction and UpdateFunction.
     * Generation defaults to 0, as Cloud Storage provides a new generation only
     * upon uploading a new object or version of an object.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.StorageSource storage_source = 2;</code>
     * @return \Google\Cloud\Functions\V2\StorageSource|null
     */
    public function getStorageSource()
    {
        return $this->storage_source;
    }

    public function hasStorageSource()
    {
        return isset($this->storage_source);
    }

    public function clearStorageSource()
    {
        unset($this->storage_source);
    }

    /**
     * The location of the source code in the upload bucket.
     * Once the archive is uploaded using the `upload_url` use this field to
     * set the `function.build_config.source.storage_source`
     * during CreateFunction and UpdateFunction.
     * Generation defaults to 0, as Cloud Storage provides a new generation only
     * upon uploading a new object or version of an object.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.StorageSource storage_source = 2;</code>
     * @param \Google\Cloud\Functions\V2\StorageSource $var
     * @return $this
     */
    public function setStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\StorageSource::class);
        $this->storage_source = $var;

        return $this;
    }

}

