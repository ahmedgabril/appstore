<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Patch rollout configuration specifications. Contains details on the
 * concurrency control when applying patch(es) to all targeted VMs.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.PatchRollout</code>
 */
class PatchRollout extends \Google\Protobuf\Internal\Message
{
    /**
     * Mode of the patch rollout.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout.Mode mode = 1;</code>
     */
    private $mode = 0;
    /**
     * The maximum number (or percentage) of VMs per zone to disrupt at any given
     * moment. The number of VMs calculated from multiplying the percentage by the
     * total number of VMs in a zone is rounded up.
     * During patching, a VM is considered disrupted from the time the agent is
     * notified to begin until patching has completed. This disruption time
     * includes the time to complete reboot and any post-patch steps.
     * A VM contributes to the disruption budget if its patching operation fails
     * either when applying the patches, running pre or post patch steps, or if it
     * fails to respond with a success notification before timing out. VMs that
     * are not running or do not have an active agent do not count toward this
     * disruption budget.
     * For zone-by-zone rollouts, if the disruption budget in a zone is exceeded,
     * the patch job stops, because continuing to the next zone requires
     * completion of the patch process in the previous zone.
     * For example, if the disruption budget has a fixed value of `10`, and 8 VMs
     * fail to patch in the current zone, the patch job continues to patch 2 VMs
     * at a time until the zone is completed. When that zone is completed
     * successfully, patching begins with 10 VMs at a time in the next zone. If 10
     * VMs in the next zone fail to patch, the patch job stops.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.FixedOrPercent disruption_budget = 2;</code>
     */
    private $disruption_budget = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mode
     *           Mode of the patch rollout.
     *     @type \Google\Cloud\OsConfig\V1\FixedOrPercent $disruption_budget
     *           The maximum number (or percentage) of VMs per zone to disrupt at any given
     *           moment. The number of VMs calculated from multiplying the percentage by the
     *           total number of VMs in a zone is rounded up.
     *           During patching, a VM is considered disrupted from the time the agent is
     *           notified to begin until patching has completed. This disruption time
     *           includes the time to complete reboot and any post-patch steps.
     *           A VM contributes to the disruption budget if its patching operation fails
     *           either when applying the patches, running pre or post patch steps, or if it
     *           fails to respond with a success notification before timing out. VMs that
     *           are not running or do not have an active agent do not count toward this
     *           disruption budget.
     *           For zone-by-zone rollouts, if the disruption budget in a zone is exceeded,
     *           the patch job stops, because continuing to the next zone requires
     *           completion of the patch process in the previous zone.
     *           For example, if the disruption budget has a fixed value of `10`, and 8 VMs
     *           fail to patch in the current zone, the patch job continues to patch 2 VMs
     *           at a time until the zone is completed. When that zone is completed
     *           successfully, patching begins with 10 VMs at a time in the next zone. If 10
     *           VMs in the next zone fail to patch, the patch job stops.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Mode of the patch rollout.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout.Mode mode = 1;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Mode of the patch rollout.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchRollout.Mode mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\PatchRollout\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * The maximum number (or percentage) of VMs per zone to disrupt at any given
     * moment. The number of VMs calculated from multiplying the percentage by the
     * total number of VMs in a zone is rounded up.
     * During patching, a VM is considered disrupted from the time the agent is
     * notified to begin until patching has completed. This disruption time
     * includes the time to complete reboot and any post-patch steps.
     * A VM contributes to the disruption budget if its patching operation fails
     * either when applying the patches, running pre or post patch steps, or if it
     * fails to respond with a success notification before timing out. VMs that
     * are not running or do not have an active agent do not count toward this
     * disruption budget.
     * For zone-by-zone rollouts, if the disruption budget in a zone is exceeded,
     * the patch job stops, because continuing to the next zone requires
     * completion of the patch process in the previous zone.
     * For example, if the disruption budget has a fixed value of `10`, and 8 VMs
     * fail to patch in the current zone, the patch job continues to patch 2 VMs
     * at a time until the zone is completed. When that zone is completed
     * successfully, patching begins with 10 VMs at a time in the next zone. If 10
     * VMs in the next zone fail to patch, the patch job stops.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.FixedOrPercent disruption_budget = 2;</code>
     * @return \Google\Cloud\OsConfig\V1\FixedOrPercent|null
     */
    public function getDisruptionBudget()
    {
        return $this->disruption_budget;
    }

    public function hasDisruptionBudget()
    {
        return isset($this->disruption_budget);
    }

    public function clearDisruptionBudget()
    {
        unset($this->disruption_budget);
    }

    /**
     * The maximum number (or percentage) of VMs per zone to disrupt at any given
     * moment. The number of VMs calculated from multiplying the percentage by the
     * total number of VMs in a zone is rounded up.
     * During patching, a VM is considered disrupted from the time the agent is
     * notified to begin until patching has completed. This disruption time
     * includes the time to complete reboot and any post-patch steps.
     * A VM contributes to the disruption budget if its patching operation fails
     * either when applying the patches, running pre or post patch steps, or if it
     * fails to respond with a success notification before timing out. VMs that
     * are not running or do not have an active agent do not count toward this
     * disruption budget.
     * For zone-by-zone rollouts, if the disruption budget in a zone is exceeded,
     * the patch job stops, because continuing to the next zone requires
     * completion of the patch process in the previous zone.
     * For example, if the disruption budget has a fixed value of `10`, and 8 VMs
     * fail to patch in the current zone, the patch job continues to patch 2 VMs
     * at a time until the zone is completed. When that zone is completed
     * successfully, patching begins with 10 VMs at a time in the next zone. If 10
     * VMs in the next zone fail to patch, the patch job stops.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.FixedOrPercent disruption_budget = 2;</code>
     * @param \Google\Cloud\OsConfig\V1\FixedOrPercent $var
     * @return $this
     */
    public function setDisruptionBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\FixedOrPercent::class);
        $this->disruption_budget = $var;

        return $this;
    }

}

