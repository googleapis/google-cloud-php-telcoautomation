<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Blueprint contains a collection of kubernetes resources in the form of
 * YAML files. The file contents of a blueprint are collectively known as
 * package.
 * Public blueprint is a TNA provided blueprint that in present in TNA's public
 * catalog. A user can copy the public blueprint to their private catalog for
 * further modifications.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.PublicBlueprint</code>
 */
class PublicBlueprint extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the public blueprint.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The display name of the public blueprint.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * The description of the public blueprint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * DeploymentLevel of a blueprint signifies where the blueprint will be
     * applied. e.g. [HYDRATION, SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT]
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 4;</code>
     */
    protected $deployment_level = 0;
    /**
     * Source provider is the author of a public blueprint. e.g. Google, vendors
     *
     * Generated from protobuf field <code>string source_provider = 5;</code>
     */
    protected $source_provider = '';
    /**
     * Output only. Indicates if the deployment created from this blueprint can be
     * rolled back.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rollback_support = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the public blueprint.
     *     @type string $display_name
     *           The display name of the public blueprint.
     *     @type string $description
     *           The description of the public blueprint.
     *     @type int $deployment_level
     *           DeploymentLevel of a blueprint signifies where the blueprint will be
     *           applied. e.g. [HYDRATION, SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT]
     *     @type string $source_provider
     *           Source provider is the author of a public blueprint. e.g. Google, vendors
     *     @type bool $rollback_support
     *           Output only. Indicates if the deployment created from this blueprint can be
     *           rolled back.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the public blueprint.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the public blueprint.
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
     * The display name of the public blueprint.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the public blueprint.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the public blueprint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the public blueprint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * DeploymentLevel of a blueprint signifies where the blueprint will be
     * applied. e.g. [HYDRATION, SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT]
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 4;</code>
     * @return int
     */
    public function getDeploymentLevel()
    {
        return $this->deployment_level;
    }

    /**
     * DeploymentLevel of a blueprint signifies where the blueprint will be
     * applied. e.g. [HYDRATION, SINGLE_DEPLOYMENT, MULTI_DEPLOYMENT]
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentLevel deployment_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDeploymentLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\DeploymentLevel::class);
        $this->deployment_level = $var;

        return $this;
    }

    /**
     * Source provider is the author of a public blueprint. e.g. Google, vendors
     *
     * Generated from protobuf field <code>string source_provider = 5;</code>
     * @return string
     */
    public function getSourceProvider()
    {
        return $this->source_provider;
    }

    /**
     * Source provider is the author of a public blueprint. e.g. Google, vendors
     *
     * Generated from protobuf field <code>string source_provider = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_provider = $var;

        return $this;
    }

    /**
     * Output only. Indicates if the deployment created from this blueprint can be
     * rolled back.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRollbackSupport()
    {
        return $this->rollback_support;
    }

    /**
     * Output only. Indicates if the deployment created from this blueprint can be
     * rolled back.
     *
     * Generated from protobuf field <code>bool rollback_support = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRollbackSupport($var)
    {
        GPBUtil::checkBool($var);
        $this->rollback_support = $var;

        return $this;
    }

}

