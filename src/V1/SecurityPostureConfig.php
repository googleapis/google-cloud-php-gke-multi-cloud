<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SecurityPostureConfig defines the flags needed to enable/disable features for
 * the Security Posture API.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.SecurityPostureConfig</code>
 */
class SecurityPostureConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Sets which mode to use for vulnerability scanning.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SecurityPostureConfig.VulnerabilityMode vulnerability_mode = 1;</code>
     */
    protected $vulnerability_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $vulnerability_mode
     *           Sets which mode to use for vulnerability scanning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Sets which mode to use for vulnerability scanning.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SecurityPostureConfig.VulnerabilityMode vulnerability_mode = 1;</code>
     * @return int
     */
    public function getVulnerabilityMode()
    {
        return $this->vulnerability_mode;
    }

    /**
     * Sets which mode to use for vulnerability scanning.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SecurityPostureConfig.VulnerabilityMode vulnerability_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVulnerabilityMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\SecurityPostureConfig\VulnerabilityMode::class);
        $this->vulnerability_mode = $var;

        return $this;
    }

}
