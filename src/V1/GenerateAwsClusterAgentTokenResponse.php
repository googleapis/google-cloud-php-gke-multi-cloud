<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GenerateAwsClusterAgentTokenResponse</code>
 */
class GenerateAwsClusterAgentTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string access_token = 1;</code>
     */
    protected $access_token = '';
    /**
     * Generated from protobuf field <code>int32 expires_in = 2;</code>
     */
    protected $expires_in = 0;
    /**
     * Generated from protobuf field <code>string token_type = 3;</code>
     */
    protected $token_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $access_token
     *     @type int $expires_in
     *     @type string $token_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string access_token = 1;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Generated from protobuf field <code>string access_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 expires_in = 2;</code>
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * Generated from protobuf field <code>int32 expires_in = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExpiresIn($var)
    {
        GPBUtil::checkInt32($var);
        $this->expires_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_type = 3;</code>
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * Generated from protobuf field <code>string token_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenType($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_type = $var;

        return $this;
    }

}

