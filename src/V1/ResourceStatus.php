<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of a deployment resource.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.ResourceStatus</code>
 */
class ResourceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Namespace of the resource.
     *
     * Generated from protobuf field <code>string resource_namespace = 2;</code>
     */
    protected $resource_namespace = '';
    /**
     * Group to which the resource belongs to.
     *
     * Generated from protobuf field <code>string group = 3;</code>
     */
    protected $group = '';
    /**
     * Version of the resource.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    protected $version = '';
    /**
     * Kind of the resource.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     */
    protected $kind = '';
    /**
     * Output only. Resource type.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.ResourceType resource_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_type = 0;
    /**
     * Output only. Status of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. Detailed status of NFDeploy.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.NFDeployStatus nf_deploy_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $nf_deploy_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the resource.
     *     @type string $resource_namespace
     *           Namespace of the resource.
     *     @type string $group
     *           Group to which the resource belongs to.
     *     @type string $version
     *           Version of the resource.
     *     @type string $kind
     *           Kind of the resource.
     *     @type int $resource_type
     *           Output only. Resource type.
     *     @type int $status
     *           Output only. Status of the resource.
     *     @type \Google\Cloud\TelcoAutomation\V1\NFDeployStatus $nf_deploy_status
     *           Output only. Detailed status of NFDeploy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the resource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Namespace of the resource.
     *
     * Generated from protobuf field <code>string resource_namespace = 2;</code>
     * @return string
     */
    public function getResourceNamespace()
    {
        return $this->resource_namespace;
    }

    /**
     * Namespace of the resource.
     *
     * Generated from protobuf field <code>string resource_namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_namespace = $var;

        return $this;
    }

    /**
     * Group to which the resource belongs to.
     *
     * Generated from protobuf field <code>string group = 3;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Group to which the resource belongs to.
     *
     * Generated from protobuf field <code>string group = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Version of the resource.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the resource.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Kind of the resource.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Kind of the resource.
     *
     * Generated from protobuf field <code>string kind = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Output only. Resource type.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.ResourceType resource_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Output only. Resource type.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.ResourceType resource_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\ResourceType::class);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Output only. Status of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.Status status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Detailed status of NFDeploy.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.NFDeployStatus nf_deploy_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\TelcoAutomation\V1\NFDeployStatus|null
     */
    public function getNfDeployStatus()
    {
        return $this->nf_deploy_status;
    }

    public function hasNfDeployStatus()
    {
        return isset($this->nf_deploy_status);
    }

    public function clearNfDeployStatus()
    {
        unset($this->nf_deploy_status);
    }

    /**
     * Output only. Detailed status of NFDeploy.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.NFDeployStatus nf_deploy_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\TelcoAutomation\V1\NFDeployStatus $var
     * @return $this
     */
    public function setNfDeployStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TelcoAutomation\V1\NFDeployStatus::class);
        $this->nf_deploy_status = $var;

        return $this;
    }

}

