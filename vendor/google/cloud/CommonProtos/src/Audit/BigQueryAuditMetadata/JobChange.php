<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job state change event.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.JobChange</code>
 */
class JobChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Job state before the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState before = 1;</code>
     */
    protected $before = 0;
    /**
     * Job state after the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState after = 2;</code>
     */
    protected $after = 0;
    /**
     * Job metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Job job = 3;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $before
     *           Job state before the job state change.
     *     @type int $after
     *           Job state after the job state change.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\Job $job
     *           Job metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Job state before the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState before = 1;</code>
     * @return int
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Job state before the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState before = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobState::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Job state after the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState after = 2;</code>
     * @return int
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Job state after the job state change.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobState after = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobState::class);
        $this->after = $var;

        return $this;
    }

    /**
     * Job metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Job job = 3;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Job metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Job job = 3;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\Job::class);
        $this->job = $var;

        return $this;
    }

}


