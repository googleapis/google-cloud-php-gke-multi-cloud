<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Anthos cluster running on Azure.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureCluster</code>
 */
class AzureCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this resource.
     * Cluster names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. A human readable description of this cluster.
     * Cannot be longer than 255 UTF-8 encoded bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Required. The Azure region where the cluster runs.
     * Each Google Cloud region supports a subset of nearby Azure regions.
     * You can call
     * [GetAzureServerConfig][google.cloud.gkemulticloud.v1.AzureClusters.GetAzureServerConfig]
     * to list all supported Azure regions within a given Google Cloud region.
     *
     * Generated from protobuf field <code>string azure_region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $azure_region = '';
    /**
     * Required. The ARM ID of the resource group where the cluster resources are
     * deployed. For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`
     *
     * Generated from protobuf field <code>string resource_group_id = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_group_id = '';
    /**
     * Required. Name of the
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] that contains
     * authentication configuration for how the Anthos Multi-Cloud API connects to
     * Azure APIs.
     * The `AzureClient` resource must reside on the same GCP project and region
     * as the `AzureCluster`.
     * `AzureClient` names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string azure_client = 16 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $azure_client = '';
    /**
     * Required. Cluster-wide networking configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterNetworking networking = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $networking = null;
    /**
     * Required. Configuration related to the cluster control plane.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureControlPlane control_plane = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $control_plane = null;
    /**
     * Required. Configuration related to the cluster RBAC settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureAuthorization authorization = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $authorization = null;
    /**
     * Output only. The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The endpoint of the cluster's API server.
     *
     * Generated from protobuf field <code>string endpoint = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $endpoint = '';
    /**
     * Output only. A globally unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. If set, there are currently changes in flight to the cluster.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reconciling = false;
    /**
     * Output only. The time at which this cluster was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which this cluster was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 13;</code>
     */
    private $etag = '';
    /**
     * Optional. Annotations on the cluster.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Output only. Workload Identity settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.WorkloadIdentityConfig workload_identity_config = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $workload_identity_config = null;
    /**
     * Output only. PEM encoded x509 certificate of the cluster root of trust.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cluster_ca_certificate = '';
    /**
     * Required. Fleet configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.Fleet fleet = 20 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fleet = null;
    /**
     * Output only. Managed Azure resources for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterResources managed_resources = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $managed_resources = null;
    /**
     * Optional. Logging configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.LoggingConfig logging_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $logging_config = null;
    /**
     * Output only. A set of errors found in the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClusterError errors = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors;
    /**
     * Optional. Monitoring configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MonitoringConfig monitoring_config = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $monitoring_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of this resource.
     *           Cluster names are formatted as
     *           `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on GCP resource names.
     *     @type string $description
     *           Optional. A human readable description of this cluster.
     *           Cannot be longer than 255 UTF-8 encoded bytes.
     *     @type string $azure_region
     *           Required. The Azure region where the cluster runs.
     *           Each Google Cloud region supports a subset of nearby Azure regions.
     *           You can call
     *           [GetAzureServerConfig][google.cloud.gkemulticloud.v1.AzureClusters.GetAzureServerConfig]
     *           to list all supported Azure regions within a given Google Cloud region.
     *     @type string $resource_group_id
     *           Required. The ARM ID of the resource group where the cluster resources are
     *           deployed. For example:
     *           `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`
     *     @type string $azure_client
     *           Required. Name of the
     *           [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] that contains
     *           authentication configuration for how the Anthos Multi-Cloud API connects to
     *           Azure APIs.
     *           The `AzureClient` resource must reside on the same GCP project and region
     *           as the `AzureCluster`.
     *           `AzureClient` names are formatted as
     *           `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureClusterNetworking $networking
     *           Required. Cluster-wide networking configuration.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureControlPlane $control_plane
     *           Required. Configuration related to the cluster control plane.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureAuthorization $authorization
     *           Required. Configuration related to the cluster RBAC settings.
     *     @type int $state
     *           Output only. The current state of the cluster.
     *     @type string $endpoint
     *           Output only. The endpoint of the cluster's API server.
     *     @type string $uid
     *           Output only. A globally unique identifier for the cluster.
     *     @type bool $reconciling
     *           Output only. If set, there are currently changes in flight to the cluster.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this cluster was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this cluster was last updated.
     *     @type string $etag
     *           Allows clients to perform consistent read-modify-writes
     *           through optimistic concurrency control.
     *           Can be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Annotations on the cluster.
     *           This field has the same restrictions as Kubernetes annotations.
     *           The total size of all keys and values combined is limited to 256k.
     *           Keys can have 2 segments: prefix (optional) and name (required),
     *           separated by a slash (/).
     *           Prefix must be a DNS subdomain.
     *           Name must be 63 characters or less, begin and end with alphanumerics,
     *           with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *     @type \Google\Cloud\GkeMultiCloud\V1\WorkloadIdentityConfig $workload_identity_config
     *           Output only. Workload Identity settings.
     *     @type string $cluster_ca_certificate
     *           Output only. PEM encoded x509 certificate of the cluster root of trust.
     *     @type \Google\Cloud\GkeMultiCloud\V1\Fleet $fleet
     *           Required. Fleet configuration.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureClusterResources $managed_resources
     *           Output only. Managed Azure resources for this cluster.
     *     @type \Google\Cloud\GkeMultiCloud\V1\LoggingConfig $logging_config
     *           Optional. Logging configuration for this cluster.
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AzureClusterError>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Output only. A set of errors found in the cluster.
     *     @type \Google\Cloud\GkeMultiCloud\V1\MonitoringConfig $monitoring_config
     *           Optional. Monitoring configuration for this cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this resource.
     * Cluster names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this resource.
     * Cluster names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
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
     * Optional. A human readable description of this cluster.
     * Cannot be longer than 255 UTF-8 encoded bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A human readable description of this cluster.
     * Cannot be longer than 255 UTF-8 encoded bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The Azure region where the cluster runs.
     * Each Google Cloud region supports a subset of nearby Azure regions.
     * You can call
     * [GetAzureServerConfig][google.cloud.gkemulticloud.v1.AzureClusters.GetAzureServerConfig]
     * to list all supported Azure regions within a given Google Cloud region.
     *
     * Generated from protobuf field <code>string azure_region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAzureRegion()
    {
        return $this->azure_region;
    }

    /**
     * Required. The Azure region where the cluster runs.
     * Each Google Cloud region supports a subset of nearby Azure regions.
     * You can call
     * [GetAzureServerConfig][google.cloud.gkemulticloud.v1.AzureClusters.GetAzureServerConfig]
     * to list all supported Azure regions within a given Google Cloud region.
     *
     * Generated from protobuf field <code>string azure_region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAzureRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_region = $var;

        return $this;
    }

    /**
     * Required. The ARM ID of the resource group where the cluster resources are
     * deployed. For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`
     *
     * Generated from protobuf field <code>string resource_group_id = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourceGroupId()
    {
        return $this->resource_group_id;
    }

    /**
     * Required. The ARM ID of the resource group where the cluster resources are
     * deployed. For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-name>`
     *
     * Generated from protobuf field <code>string resource_group_id = 17 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Name of the
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] that contains
     * authentication configuration for how the Anthos Multi-Cloud API connects to
     * Azure APIs.
     * The `AzureClient` resource must reside on the same GCP project and region
     * as the `AzureCluster`.
     * `AzureClient` names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string azure_client = 16 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAzureClient()
    {
        return $this->azure_client;
    }

    /**
     * Required. Name of the
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] that contains
     * authentication configuration for how the Anthos Multi-Cloud API connects to
     * Azure APIs.
     * The `AzureClient` resource must reside on the same GCP project and region
     * as the `AzureCluster`.
     * `AzureClient` names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string azure_client = 16 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAzureClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_client = $var;

        return $this;
    }

    /**
     * Required. Cluster-wide networking configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterNetworking networking = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureClusterNetworking|null
     */
    public function getNetworking()
    {
        return $this->networking;
    }

    public function hasNetworking()
    {
        return isset($this->networking);
    }

    public function clearNetworking()
    {
        unset($this->networking);
    }

    /**
     * Required. Cluster-wide networking configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterNetworking networking = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureClusterNetworking $var
     * @return $this
     */
    public function setNetworking($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureClusterNetworking::class);
        $this->networking = $var;

        return $this;
    }

    /**
     * Required. Configuration related to the cluster control plane.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureControlPlane control_plane = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureControlPlane|null
     */
    public function getControlPlane()
    {
        return $this->control_plane;
    }

    public function hasControlPlane()
    {
        return isset($this->control_plane);
    }

    public function clearControlPlane()
    {
        unset($this->control_plane);
    }

    /**
     * Required. Configuration related to the cluster control plane.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureControlPlane control_plane = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureControlPlane $var
     * @return $this
     */
    public function setControlPlane($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureControlPlane::class);
        $this->control_plane = $var;

        return $this;
    }

    /**
     * Required. Configuration related to the cluster RBAC settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureAuthorization authorization = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureAuthorization|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    public function hasAuthorization()
    {
        return isset($this->authorization);
    }

    public function clearAuthorization()
    {
        unset($this->authorization);
    }

    /**
     * Required. Configuration related to the cluster RBAC settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureAuthorization authorization = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureAuthorization $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureAuthorization::class);
        $this->authorization = $var;

        return $this;
    }

    /**
     * Output only. The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\AzureCluster\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The endpoint of the cluster's API server.
     *
     * Generated from protobuf field <code>string endpoint = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Output only. The endpoint of the cluster's API server.
     *
     * Generated from protobuf field <code>string endpoint = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Output only. A globally unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A globally unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. If set, there are currently changes in flight to the cluster.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. If set, there are currently changes in flight to the cluster.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The time at which this cluster was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this cluster was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this cluster was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this cluster was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 13;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Annotations on the cluster.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Annotations on the cluster.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. Workload Identity settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.WorkloadIdentityConfig workload_identity_config = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\WorkloadIdentityConfig|null
     */
    public function getWorkloadIdentityConfig()
    {
        return $this->workload_identity_config;
    }

    public function hasWorkloadIdentityConfig()
    {
        return isset($this->workload_identity_config);
    }

    public function clearWorkloadIdentityConfig()
    {
        unset($this->workload_identity_config);
    }

    /**
     * Output only. Workload Identity settings.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.WorkloadIdentityConfig workload_identity_config = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\WorkloadIdentityConfig $var
     * @return $this
     */
    public function setWorkloadIdentityConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\WorkloadIdentityConfig::class);
        $this->workload_identity_config = $var;

        return $this;
    }

    /**
     * Output only. PEM encoded x509 certificate of the cluster root of trust.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getClusterCaCertificate()
    {
        return $this->cluster_ca_certificate;
    }

    /**
     * Output only. PEM encoded x509 certificate of the cluster root of trust.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_ca_certificate = $var;

        return $this;
    }

    /**
     * Required. Fleet configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.Fleet fleet = 20 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\Fleet|null
     */
    public function getFleet()
    {
        return $this->fleet;
    }

    public function hasFleet()
    {
        return isset($this->fleet);
    }

    public function clearFleet()
    {
        unset($this->fleet);
    }

    /**
     * Required. Fleet configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.Fleet fleet = 20 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\Fleet $var
     * @return $this
     */
    public function setFleet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\Fleet::class);
        $this->fleet = $var;

        return $this;
    }

    /**
     * Output only. Managed Azure resources for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterResources managed_resources = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureClusterResources|null
     */
    public function getManagedResources()
    {
        return $this->managed_resources;
    }

    public function hasManagedResources()
    {
        return isset($this->managed_resources);
    }

    public function clearManagedResources()
    {
        unset($this->managed_resources);
    }

    /**
     * Output only. Managed Azure resources for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureClusterResources managed_resources = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureClusterResources $var
     * @return $this
     */
    public function setManagedResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureClusterResources::class);
        $this->managed_resources = $var;

        return $this;
    }

    /**
     * Optional. Logging configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.LoggingConfig logging_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\LoggingConfig|null
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    public function hasLoggingConfig()
    {
        return isset($this->logging_config);
    }

    public function clearLoggingConfig()
    {
        unset($this->logging_config);
    }

    /**
     * Optional. Logging configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.LoggingConfig logging_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

    /**
     * Output only. A set of errors found in the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClusterError errors = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. A set of errors found in the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureClusterError errors = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AzureClusterError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AzureClusterError::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Optional. Monitoring configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MonitoringConfig monitoring_config = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\MonitoringConfig|null
     */
    public function getMonitoringConfig()
    {
        return $this->monitoring_config;
    }

    public function hasMonitoringConfig()
    {
        return isset($this->monitoring_config);
    }

    public function clearMonitoringConfig()
    {
        unset($this->monitoring_config);
    }

    /**
     * Optional. Monitoring configuration for this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MonitoringConfig monitoring_config = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\MonitoringConfig $var
     * @return $this
     */
    public function setMonitoringConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\MonitoringConfig::class);
        $this->monitoring_config = $var;

        return $this;
    }

}

