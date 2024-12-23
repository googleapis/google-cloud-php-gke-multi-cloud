<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AttachedClusters.UpdateAttachedCluster` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.UpdateAttachedClusterRequest</code>
 */
class UpdateAttachedClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedCluster attached_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attached_cluster = null;
    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster]:
     *  *   `annotations`.
     *  *   `authorization.admin_groups`.
     *  *   `authorization.admin_users`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `description`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `platform_version`.
     *  *   `proxy_config.kubernetes_secret.name`.
     *  *   `proxy_config.kubernetes_secret.namespace`.
     *  *   `security_posture_config.vulnerability_mode`
     *  *   `monitoring_config.cloud_monitoring_config.enabled`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\GkeMultiCloud\V1\AttachedCluster $attachedCluster Required. The
     *                                                                        [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *                                                                        to update.
     * @param \Google\Protobuf\FieldMask                     $updateMask      Required. Mask of fields to update. At least one path must be supplied in
     *                                                                        this field. The elements of the repeated paths field can only include these
     *                                                                        fields from
     *                                                                        [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster]:
     *
     *                                                                        *   `annotations`.
     *                                                                        *   `authorization.admin_groups`.
     *                                                                        *   `authorization.admin_users`.
     *                                                                        *   `binary_authorization.evaluation_mode`.
     *                                                                        *   `description`.
     *                                                                        *   `logging_config.component_config.enable_components`.
     *                                                                        *   `monitoring_config.managed_prometheus_config.enabled`.
     *                                                                        *   `platform_version`.
     *                                                                        *   `proxy_config.kubernetes_secret.name`.
     *                                                                        *   `proxy_config.kubernetes_secret.namespace`.
     *                                                                        *   `security_posture_config.vulnerability_mode`
     *                                                                        *   `monitoring_config.cloud_monitoring_config.enabled`
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\UpdateAttachedClusterRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\GkeMultiCloud\V1\AttachedCluster $attachedCluster, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAttachedCluster($attachedCluster)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\AttachedCluster $attached_cluster
     *           Required. The
     *           [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *           to update.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually update the cluster.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. The elements of the repeated paths field can only include these
     *           fields from
     *           [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster]:
     *            *   `annotations`.
     *            *   `authorization.admin_groups`.
     *            *   `authorization.admin_users`.
     *            *   `binary_authorization.evaluation_mode`.
     *            *   `description`.
     *            *   `logging_config.component_config.enable_components`.
     *            *   `monitoring_config.managed_prometheus_config.enabled`.
     *            *   `platform_version`.
     *            *   `proxy_config.kubernetes_secret.name`.
     *            *   `proxy_config.kubernetes_secret.namespace`.
     *            *   `security_posture_config.vulnerability_mode`
     *            *   `monitoring_config.cloud_monitoring_config.enabled`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedCluster attached_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AttachedCluster|null
     */
    public function getAttachedCluster()
    {
        return $this->attached_cluster;
    }

    public function hasAttachedCluster()
    {
        return isset($this->attached_cluster);
    }

    public function clearAttachedCluster()
    {
        unset($this->attached_cluster);
    }

    /**
     * Required. The
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedCluster attached_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AttachedCluster $var
     * @return $this
     */
    public function setAttachedCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AttachedCluster::class);
        $this->attached_cluster = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster]:
     *  *   `annotations`.
     *  *   `authorization.admin_groups`.
     *  *   `authorization.admin_users`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `description`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `platform_version`.
     *  *   `proxy_config.kubernetes_secret.name`.
     *  *   `proxy_config.kubernetes_secret.namespace`.
     *  *   `security_posture_config.vulnerability_mode`
     *  *   `monitoring_config.cloud_monitoring_config.enabled`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster]:
     *  *   `annotations`.
     *  *   `authorization.admin_groups`.
     *  *   `authorization.admin_users`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `description`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `platform_version`.
     *  *   `proxy_config.kubernetes_secret.name`.
     *  *   `proxy_config.kubernetes_secret.namespace`.
     *  *   `security_posture_config.vulnerability_mode`
     *  *   `monitoring_config.cloud_monitoring_config.enabled`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

