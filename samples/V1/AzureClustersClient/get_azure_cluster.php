<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START gkemulticloud_v1_generated_AzureClusters_GetAzureCluster_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\GkeMultiCloud\V1\AzureCluster;
use Google\Cloud\GkeMultiCloud\V1\AzureClustersClient;

/**
 * Describes a specific [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource.
 *
 * @param string $formattedName The name of the [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource to describe.
 *
 *                              `AzureCluster` names are formatted as
 *                              `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
 *
 *                              See [Resource Names](https://cloud.google.com/apis/design/resource_names)
 *                              for more details on GCP resource names. Please see
 *                              {@see AzureClustersClient::azureClusterName()} for help formatting this field.
 */
function get_azure_cluster_sample(string $formattedName): void
{
    // Create a client.
    $azureClustersClient = new AzureClustersClient();

    // Call the API and handle any network failures.
    try {
        /** @var AzureCluster $response */
        $response = $azureClustersClient->getAzureCluster($formattedName);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = AzureClustersClient::azureClusterName(
        '[PROJECT]',
        '[LOCATION]',
        '[AZURE_CLUSTER]'
    );

    get_azure_cluster_sample($formattedName);
}
// [END gkemulticloud_v1_generated_AzureClusters_GetAzureCluster_sync]
