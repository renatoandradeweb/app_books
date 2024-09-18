<?php

namespace Aws\Backup;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Backup** service.
 * @method \Aws\Result cancelLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelLegalHoldAsync(array $args = [])
 * @method \Aws\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \Aws\Result createBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupSelectionAsync(array $args = [])
 * @method \Aws\Result createBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupVaultAsync(array $args = [])
 * @method \Aws\Result createFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFrameworkAsync(array $args = [])
 * @method \Aws\Result createLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLegalHoldAsync(array $args = [])
 * @method \Aws\Result createLogicallyAirGappedBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogicallyAirGappedBackupVaultAsync(array $args = [])
 * @method \Aws\Result createReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReportPlanAsync(array $args = [])
 * @method \Aws\Result createRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestoreTestingPlanAsync(array $args = [])
 * @method \Aws\Result createRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestoreTestingSelectionAsync(array $args = [])
 * @method \Aws\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \Aws\Result deleteBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupSelectionAsync(array $args = [])
 * @method \Aws\Result deleteBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAsync(array $args = [])
 * @method \Aws\Result deleteBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result deleteBackupVaultLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultLockConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result deleteFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFrameworkAsync(array $args = [])
 * @method \Aws\Result deleteRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecoveryPointAsync(array $args = [])
 * @method \Aws\Result deleteReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportPlanAsync(array $args = [])
 * @method \Aws\Result deleteRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestoreTestingPlanAsync(array $args = [])
 * @method \Aws\Result deleteRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestoreTestingSelectionAsync(array $args = [])
 * @method \Aws\Result describeBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupJobAsync(array $args = [])
 * @method \Aws\Result describeBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupVaultAsync(array $args = [])
 * @method \Aws\Result describeCopyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCopyJobAsync(array $args = [])
 * @method \Aws\Result describeFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFrameworkAsync(array $args = [])
 * @method \Aws\Result describeGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGlobalSettingsAsync(array $args = [])
 * @method \Aws\Result describeProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectedResourceAsync(array $args = [])
 * @method \Aws\Result describeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoveryPointAsync(array $args = [])
 * @method \Aws\Result describeRegionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionSettingsAsync(array $args = [])
 * @method \Aws\Result describeReportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportJobAsync(array $args = [])
 * @method \Aws\Result describeReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportPlanAsync(array $args = [])
 * @method \Aws\Result describeRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRestoreJobAsync(array $args = [])
 * @method \Aws\Result disassociateRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRecoveryPointAsync(array $args = [])
 * @method \Aws\Result disassociateRecoveryPointFromParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRecoveryPointFromParentAsync(array $args = [])
 * @method \Aws\Result exportBackupPlanTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBackupPlanTemplateAsync(array $args = [])
 * @method \Aws\Result getBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanAsync(array $args = [])
 * @method \Aws\Result getBackupPlanFromJSON(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromJSONAsync(array $args = [])
 * @method \Aws\Result getBackupPlanFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromTemplateAsync(array $args = [])
 * @method \Aws\Result getBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupSelectionAsync(array $args = [])
 * @method \Aws\Result getBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result getBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result getLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLegalHoldAsync(array $args = [])
 * @method \Aws\Result getRecoveryPointRestoreMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecoveryPointRestoreMetadataAsync(array $args = [])
 * @method \Aws\Result getRestoreJobMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreJobMetadataAsync(array $args = [])
 * @method \Aws\Result getRestoreTestingInferredMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingInferredMetadataAsync(array $args = [])
 * @method \Aws\Result getRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingPlanAsync(array $args = [])
 * @method \Aws\Result getRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingSelectionAsync(array $args = [])
 * @method \Aws\Result getSupportedResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSupportedResourceTypesAsync(array $args = [])
 * @method \Aws\Result listBackupJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobSummariesAsync(array $args = [])
 * @method \Aws\Result listBackupJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobsAsync(array $args = [])
 * @method \Aws\Result listBackupPlanTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanTemplatesAsync(array $args = [])
 * @method \Aws\Result listBackupPlanVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanVersionsAsync(array $args = [])
 * @method \Aws\Result listBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlansAsync(array $args = [])
 * @method \Aws\Result listBackupSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupSelectionsAsync(array $args = [])
 * @method \Aws\Result listBackupVaults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupVaultsAsync(array $args = [])
 * @method \Aws\Result listCopyJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCopyJobSummariesAsync(array $args = [])
 * @method \Aws\Result listCopyJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCopyJobsAsync(array $args = [])
 * @method \Aws\Result listFrameworks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFrameworksAsync(array $args = [])
 * @method \Aws\Result listLegalHolds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLegalHoldsAsync(array $args = [])
 * @method \Aws\Result listProtectedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesAsync(array $args = [])
 * @method \Aws\Result listProtectedResourcesByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesByBackupVaultAsync(array $args = [])
 * @method \Aws\Result listRecoveryPointsByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByBackupVaultAsync(array $args = [])
 * @method \Aws\Result listRecoveryPointsByLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByLegalHoldAsync(array $args = [])
 * @method \Aws\Result listRecoveryPointsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByResourceAsync(array $args = [])
 * @method \Aws\Result listReportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportJobsAsync(array $args = [])
 * @method \Aws\Result listReportPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportPlansAsync(array $args = [])
 * @method \Aws\Result listRestoreJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobSummariesAsync(array $args = [])
 * @method \Aws\Result listRestoreJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsAsync(array $args = [])
 * @method \Aws\Result listRestoreJobsByProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsByProtectedResourceAsync(array $args = [])
 * @method \Aws\Result listRestoreTestingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreTestingPlansAsync(array $args = [])
 * @method \Aws\Result listRestoreTestingSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreTestingSelectionsAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result putBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result putBackupVaultLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultLockConfigurationAsync(array $args = [])
 * @method \Aws\Result putBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result putRestoreValidationResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRestoreValidationResultAsync(array $args = [])
 * @method \Aws\Result startBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBackupJobAsync(array $args = [])
 * @method \Aws\Result startCopyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCopyJobAsync(array $args = [])
 * @method \Aws\Result startReportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReportJobAsync(array $args = [])
 * @method \Aws\Result startRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRestoreJobAsync(array $args = [])
 * @method \Aws\Result stopBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBackupJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackupPlanAsync(array $args = [])
 * @method \Aws\Result updateFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFrameworkAsync(array $args = [])
 * @method \Aws\Result updateGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGlobalSettingsAsync(array $args = [])
 * @method \Aws\Result updateRecoveryPointLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecoveryPointLifecycleAsync(array $args = [])
 * @method \Aws\Result updateRegionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegionSettingsAsync(array $args = [])
 * @method \Aws\Result updateReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReportPlanAsync(array $args = [])
 * @method \Aws\Result updateRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestoreTestingPlanAsync(array $args = [])
 * @method \Aws\Result updateRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestoreTestingSelectionAsync(array $args = [])
 */
class BackupClient extends AwsClient
{
}
