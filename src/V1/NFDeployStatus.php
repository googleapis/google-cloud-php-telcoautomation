<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deployment status of NFDeploy.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.NFDeployStatus</code>
 */
class NFDeployStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Total number of NFs targeted by this deployment
     *
     * Generated from protobuf field <code>int32 targeted_nfs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $targeted_nfs = 0;
    /**
     * Output only. Total number of NFs targeted by this deployment with a Ready
     * Condition set.
     *
     * Generated from protobuf field <code>int32 ready_nfs = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ready_nfs = 0;
    /**
     * Output only. Per-Site Status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.NFDeploySiteStatus sites = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sites;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $targeted_nfs
     *           Output only. Total number of NFs targeted by this deployment
     *     @type int $ready_nfs
     *           Output only. Total number of NFs targeted by this deployment with a Ready
     *           Condition set.
     *     @type array<\Google\Cloud\TelcoAutomation\V1\NFDeploySiteStatus>|\Google\Protobuf\Internal\RepeatedField $sites
     *           Output only. Per-Site Status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Total number of NFs targeted by this deployment
     *
     * Generated from protobuf field <code>int32 targeted_nfs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTargetedNfs()
    {
        return $this->targeted_nfs;
    }

    /**
     * Output only. Total number of NFs targeted by this deployment
     *
     * Generated from protobuf field <code>int32 targeted_nfs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTargetedNfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->targeted_nfs = $var;

        return $this;
    }

    /**
     * Output only. Total number of NFs targeted by this deployment with a Ready
     * Condition set.
     *
     * Generated from protobuf field <code>int32 ready_nfs = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getReadyNfs()
    {
        return $this->ready_nfs;
    }

    /**
     * Output only. Total number of NFs targeted by this deployment with a Ready
     * Condition set.
     *
     * Generated from protobuf field <code>int32 ready_nfs = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setReadyNfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->ready_nfs = $var;

        return $this;
    }

    /**
     * Output only. Per-Site Status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.NFDeploySiteStatus sites = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Output only. Per-Site Status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1.NFDeploySiteStatus sites = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\TelcoAutomation\V1\NFDeploySiteStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\TelcoAutomation\V1\NFDeploySiteStatus::class);
        $this->sites = $arr;

        return $this;
    }

}

