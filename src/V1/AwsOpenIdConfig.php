<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AwsOpenIdConfig is an OIDC discovery document for the cluster.
 * See the OpenID Connect Discovery 1.0 specification for details.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsOpenIdConfig</code>
 */
class AwsOpenIdConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * OIDC Issuer.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     */
    protected $issuer = '';
    /**
     * JSON Web Key uri.
     *
     * Generated from protobuf field <code>string jwks_uri = 2;</code>
     */
    protected $jwks_uri = '';
    /**
     * Supported response types.
     *
     * Generated from protobuf field <code>repeated string response_types_supported = 3;</code>
     */
    private $response_types_supported;
    /**
     * Supported subject types.
     *
     * Generated from protobuf field <code>repeated string subject_types_supported = 4;</code>
     */
    private $subject_types_supported;
    /**
     * supported ID Token signing Algorithms.
     *
     * Generated from protobuf field <code>repeated string id_token_signing_alg_values_supported = 5;</code>
     */
    private $id_token_signing_alg_values_supported;
    /**
     * Supported claims.
     *
     * Generated from protobuf field <code>repeated string claims_supported = 6;</code>
     */
    private $claims_supported;
    /**
     * Supported grant types.
     *
     * Generated from protobuf field <code>repeated string grant_types = 7;</code>
     */
    private $grant_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *           OIDC Issuer.
     *     @type string $jwks_uri
     *           JSON Web Key uri.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $response_types_supported
     *           Supported response types.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $subject_types_supported
     *           Supported subject types.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $id_token_signing_alg_values_supported
     *           supported ID Token signing Algorithms.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $claims_supported
     *           Supported claims.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $grant_types
     *           Supported grant types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * OIDC Issuer.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * OIDC Issuer.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * JSON Web Key uri.
     *
     * Generated from protobuf field <code>string jwks_uri = 2;</code>
     * @return string
     */
    public function getJwksUri()
    {
        return $this->jwks_uri;
    }

    /**
     * JSON Web Key uri.
     *
     * Generated from protobuf field <code>string jwks_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJwksUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwks_uri = $var;

        return $this;
    }

    /**
     * Supported response types.
     *
     * Generated from protobuf field <code>repeated string response_types_supported = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponseTypesSupported()
    {
        return $this->response_types_supported;
    }

    /**
     * Supported response types.
     *
     * Generated from protobuf field <code>repeated string response_types_supported = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponseTypesSupported($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->response_types_supported = $arr;

        return $this;
    }

    /**
     * Supported subject types.
     *
     * Generated from protobuf field <code>repeated string subject_types_supported = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubjectTypesSupported()
    {
        return $this->subject_types_supported;
    }

    /**
     * Supported subject types.
     *
     * Generated from protobuf field <code>repeated string subject_types_supported = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubjectTypesSupported($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subject_types_supported = $arr;

        return $this;
    }

    /**
     * supported ID Token signing Algorithms.
     *
     * Generated from protobuf field <code>repeated string id_token_signing_alg_values_supported = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdTokenSigningAlgValuesSupported()
    {
        return $this->id_token_signing_alg_values_supported;
    }

    /**
     * supported ID Token signing Algorithms.
     *
     * Generated from protobuf field <code>repeated string id_token_signing_alg_values_supported = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdTokenSigningAlgValuesSupported($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->id_token_signing_alg_values_supported = $arr;

        return $this;
    }

    /**
     * Supported claims.
     *
     * Generated from protobuf field <code>repeated string claims_supported = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClaimsSupported()
    {
        return $this->claims_supported;
    }

    /**
     * Supported claims.
     *
     * Generated from protobuf field <code>repeated string claims_supported = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClaimsSupported($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->claims_supported = $arr;

        return $this;
    }

    /**
     * Supported grant types.
     *
     * Generated from protobuf field <code>repeated string grant_types = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGrantTypes()
    {
        return $this->grant_types;
    }

    /**
     * Supported grant types.
     *
     * Generated from protobuf field <code>repeated string grant_types = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGrantTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->grant_types = $arr;

        return $this;
    }

}

