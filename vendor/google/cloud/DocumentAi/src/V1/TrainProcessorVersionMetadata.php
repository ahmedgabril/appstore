<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata that represents a processor version being created.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.TrainProcessorVersionMetadata</code>
 */
class TrainProcessorVersionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     */
    private $common_metadata = null;
    /**
     * The training dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation training_dataset_validation = 2;</code>
     */
    private $training_dataset_validation = null;
    /**
     * The test dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation test_dataset_validation = 3;</code>
     */
    private $test_dataset_validation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\CommonOperationMetadata $common_metadata
     *           The basic metadata of the long running operation.
     *     @type \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation $training_dataset_validation
     *           The training dataset validation information.
     *     @type \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation $test_dataset_validation
     *           The test dataset validation information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\CommonOperationMetadata|null
     */
    public function getCommonMetadata()
    {
        return $this->common_metadata;
    }

    public function hasCommonMetadata()
    {
        return isset($this->common_metadata);
    }

    public function clearCommonMetadata()
    {
        unset($this->common_metadata);
    }

    /**
     * The basic metadata of the long running operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.CommonOperationMetadata common_metadata = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\CommonOperationMetadata $var
     * @return $this
     */
    public function setCommonMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\CommonOperationMetadata::class);
        $this->common_metadata = $var;

        return $this;
    }

    /**
     * The training dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation training_dataset_validation = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation|null
     */
    public function getTrainingDatasetValidation()
    {
        return $this->training_dataset_validation;
    }

    public function hasTrainingDatasetValidation()
    {
        return isset($this->training_dataset_validation);
    }

    public function clearTrainingDatasetValidation()
    {
        unset($this->training_dataset_validation);
    }

    /**
     * The training dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation training_dataset_validation = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation $var
     * @return $this
     */
    public function setTrainingDatasetValidation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation::class);
        $this->training_dataset_validation = $var;

        return $this;
    }

    /**
     * The test dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation test_dataset_validation = 3;</code>
     * @return \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation|null
     */
    public function getTestDatasetValidation()
    {
        return $this->test_dataset_validation;
    }

    public function hasTestDatasetValidation()
    {
        return isset($this->test_dataset_validation);
    }

    public function clearTestDatasetValidation()
    {
        unset($this->test_dataset_validation);
    }

    /**
     * The test dataset validation information.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation test_dataset_validation = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation $var
     * @return $this
     */
    public function setTestDatasetValidation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata\DatasetValidation::class);
        $this->test_dataset_validation = $var;

        return $this;
    }

}
