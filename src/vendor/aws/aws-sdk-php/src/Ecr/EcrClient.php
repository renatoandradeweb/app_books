<?php

namespace Aws\Ecr;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \Aws\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \Aws\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \Aws\Result batchGetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \Aws\Result batchGetRepositoryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoryScanningConfigurationAsync(array $args = [])
 * @method \Aws\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \Aws\Result createPullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPullThroughCacheRuleAsync(array $args = [])
 * @method \Aws\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \Aws\Result createRepositoryCreationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryCreationTemplateAsync(array $args = [])
 * @method \Aws\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result deletePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePullThroughCacheRuleAsync(array $args = [])
 * @method \Aws\Result deleteRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistryPolicyAsync(array $args = [])
 * @method \Aws\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteRepositoryCreationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryCreationTemplateAsync(array $args = [])
 * @method \Aws\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result describeImageReplicationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageReplicationStatusAsync(array $args = [])
 * @method \Aws\Result describeImageScanFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageScanFindingsAsync(array $args = [])
 * @method \Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws\Result describePullThroughCacheRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePullThroughCacheRulesAsync(array $args = [])
 * @method \Aws\Result describeRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistryAsync(array $args = [])
 * @method \Aws\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \Aws\Result describeRepositoryCreationTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoryCreationTemplatesAsync(array $args = [])
 * @method \Aws\Result getAccountSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingAsync(array $args = [])
 * @method \Aws\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \Aws\Result getDownloadUrlForLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \Aws\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result getLifecyclePolicyPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyPreviewAsync(array $args = [])
 * @method \Aws\Result getRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryPolicyAsync(array $args = [])
 * @method \Aws\Result getRegistryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryScanningConfigurationAsync(array $args = [])
 * @method \Aws\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \Aws\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putAccountSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountSettingAsync(array $args = [])
 * @method \Aws\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \Aws\Result putImageScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageScanningConfigurationAsync(array $args = [])
 * @method \Aws\Result putImageTagMutability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageTagMutabilityAsync(array $args = [])
 * @method \Aws\Result putLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result putRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistryPolicyAsync(array $args = [])
 * @method \Aws\Result putRegistryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistryScanningConfigurationAsync(array $args = [])
 * @method \Aws\Result putReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result startImageScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImageScanAsync(array $args = [])
 * @method \Aws\Result startLifecyclePolicyPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLifecyclePolicyPreviewAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updatePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePullThroughCacheRuleAsync(array $args = [])
 * @method \Aws\Result updateRepositoryCreationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryCreationTemplateAsync(array $args = [])
 * @method \Aws\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 * @method \Aws\Result validatePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePullThroughCacheRuleAsync(array $args = [])
 */
class EcrClient extends AwsClient
{
}
