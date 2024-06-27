<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a proxy config stored in Azure Key Vault.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureProxyConfig</code>
 */
class AzureProxyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The ARM ID the of the resource group containing proxy keyvault.
     * Resource group ids are formatted as
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`.
     *
     * Generated from protobuf field <code>string resource_group_id = 1;</code>
     */
    protected $resource_group_id = '';
    /**
     * The URL the of the proxy setting secret with its version.
     * The secret must be a JSON encoded proxy configuration
     * as described in
     * https://cloud.google.com/anthos/clusters/docs/multi-cloud/azure/how-to/use-a-proxy#create_a_proxy_configuration_file
     * Secret ids are formatted as
     * `https://<key-vault-name>.vault.azure.net/secrets/<secret-name>/<secret-version>`.
     *
     * Generated from protobuf field <code>string secret_id = 2;</code>
     */
    protected $secret_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_group_id
     *           The ARM ID the of the resource group containing proxy keyvault.
     *           Resource group ids are formatted as
     *           `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`.
     *     @type string $secret_id
     *           The URL the of the proxy setting secret with its version.
     *           The secret must be a JSON encoded proxy configuration
     *           as described in
     *           https://cloud.google.com/anthos/clusters/docs/multi-cloud/azure/how-to/use-a-proxy#create_a_proxy_configuration_file
     *           Secret ids are formatted as
     *           `https://<key-vault-name>.vault.azure.net/secrets/<secret-name>/<secret-version>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The ARM ID the of the resource group containing proxy keyvault.
     * Resource group ids are formatted as
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`.
     *
     * Generated from protobuf field <code>string resource_group_id = 1;</code>
     * @return string
     */
    public function getResourceGroupId()
    {
        return $this->resource_group_id;
    }

    /**
     * The ARM ID the of the resource group containing proxy keyvault.
     * Resource group ids are formatted as
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`.
     *
     * Generated from protobuf field <code>string resource_group_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_group_id = $var;

        return $this;
    }

    /**
     * The URL the of the proxy setting secret with its version.
     * The secret must be a JSON encoded proxy configuration
     * as described in
     * https://cloud.google.com/anthos/clusters/docs/multi-cloud/azure/how-to/use-a-proxy#create_a_proxy_configuration_file
     * Secret ids are formatted as
     * `https://<key-vault-name>.vault.azure.net/secrets/<secret-name>/<secret-version>`.
     *
     * Generated from protobuf field <code>string secret_id = 2;</code>
     * @return string
     */
    public function getSecretId()
    {
        return $this->secret_id;
    }

    /**
     * The URL the of the proxy setting secret with its version.
     * The secret must be a JSON encoded proxy configuration
     * as described in
     * https://cloud.google.com/anthos/clusters/docs/multi-cloud/azure/how-to/use-a-proxy#create_a_proxy_configuration_file
     * Secret ids are formatted as
     * `https://<key-vault-name>.vault.azure.net/secrets/<secret-name>/<secret-version>`.
     *
     * Generated from protobuf field <code>string secret_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretId($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_id = $var;

        return $this;
    }

}

