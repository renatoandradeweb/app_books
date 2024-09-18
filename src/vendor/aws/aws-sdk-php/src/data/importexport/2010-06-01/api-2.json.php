<?php

// This file was auto-generated from sdk-root/src/data/importexport/2010-06-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'uid' => 'importexport-2010-06-01', 'apiVersion' => '2010-06-01', 'endpointPrefix' => 'importexport', 'globalEndpoint' => 'importexport.amazonaws.com', 'serviceFullName' => 'AWS Import/Export', 'serviceId' => 'ImportExport', 'signatureVersion' => 'v2', 'xmlNamespace' => 'http://importexport.amazonaws.com/doc/2010-06-01/', 'protocol' => 'query', ], 'operations' => [ 'CancelJob' => [ 'name' => 'CancelJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=CancelJob', ], 'input' => [ 'shape' => 'CancelJobInput', ], 'output' => [ 'shape' => 'CancelJobOutput', 'resultWrapper' => 'CancelJobResult', ], 'errors' => [ [ 'shape' => 'InvalidJobIdException', 'exception' => true, ], [ 'shape' => 'ExpiredJobIdException', 'exception' => true, ], [ 'shape' => 'CanceledJobIdException', 'exception' => true, ], [ 'shape' => 'UnableToCancelJobIdException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], ], ], 'CreateJob' => [ 'name' => 'CreateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=CreateJob', ], 'input' => [ 'shape' => 'CreateJobInput', ], 'output' => [ 'shape' => 'CreateJobOutput', 'resultWrapper' => 'CreateJobResult', ], 'errors' => [ [ 'shape' => 'MissingParameterException', 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidAddressException', 'exception' => true, ], [ 'shape' => 'InvalidManifestFieldException', 'exception' => true, ], [ 'shape' => 'MissingManifestFieldException', 'exception' => true, ], [ 'shape' => 'NoSuchBucketException', 'exception' => true, ], [ 'shape' => 'MissingCustomsException', 'exception' => true, ], [ 'shape' => 'InvalidCustomsException', 'exception' => true, ], [ 'shape' => 'InvalidFileSystemException', 'exception' => true, ], [ 'shape' => 'MultipleRegionsException', 'exception' => true, ], [ 'shape' => 'BucketPermissionException', 'exception' => true, ], [ 'shape' => 'MalformedManifestException', 'exception' => true, ], [ 'shape' => 'CreateJobQuotaExceededException', 'exception' => true, ], [ 'shape' => 'InvalidJobIdException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], ], ], 'GetShippingLabel' => [ 'name' => 'GetShippingLabel', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=GetShippingLabel', ], 'input' => [ 'shape' => 'GetShippingLabelInput', ], 'output' => [ 'shape' => 'GetShippingLabelOutput', 'resultWrapper' => 'GetShippingLabelResult', ], 'errors' => [ [ 'shape' => 'InvalidJobIdException', 'exception' => true, ], [ 'shape' => 'ExpiredJobIdException', 'exception' => true, ], [ 'shape' => 'CanceledJobIdException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidAddressException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'exception' => true, ], ], ], 'GetStatus' => [ 'name' => 'GetStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=GetStatus', ], 'input' => [ 'shape' => 'GetStatusInput', ], 'output' => [ 'shape' => 'GetStatusOutput', 'resultWrapper' => 'GetStatusResult', ], 'errors' => [ [ 'shape' => 'InvalidJobIdException', 'exception' => true, ], [ 'shape' => 'ExpiredJobIdException', 'exception' => true, ], [ 'shape' => 'CanceledJobIdException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], ], ], 'ListJobs' => [ 'name' => 'ListJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=ListJobs', ], 'input' => [ 'shape' => 'ListJobsInput', ], 'output' => [ 'shape' => 'ListJobsOutput', 'resultWrapper' => 'ListJobsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], ], ], 'UpdateJob' => [ 'name' => 'UpdateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/?Operation=UpdateJob', ], 'input' => [ 'shape' => 'UpdateJobInput', ], 'output' => [ 'shape' => 'UpdateJobOutput', 'resultWrapper' => 'UpdateJobResult', ], 'errors' => [ [ 'shape' => 'MissingParameterException', 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'exception' => true, ], [ 'shape' => 'InvalidAccessKeyIdException', 'exception' => true, ], [ 'shape' => 'InvalidAddressException', 'exception' => true, ], [ 'shape' => 'InvalidManifestFieldException', 'exception' => true, ], [ 'shape' => 'InvalidJobIdException', 'exception' => true, ], [ 'shape' => 'MissingManifestFieldException', 'exception' => true, ], [ 'shape' => 'NoSuchBucketException', 'exception' => true, ], [ 'shape' => 'ExpiredJobIdException', 'exception' => true, ], [ 'shape' => 'CanceledJobIdException', 'exception' => true, ], [ 'shape' => 'MissingCustomsException', 'exception' => true, ], [ 'shape' => 'InvalidCustomsException', 'exception' => true, ], [ 'shape' => 'InvalidFileSystemException', 'exception' => true, ], [ 'shape' => 'MultipleRegionsException', 'exception' => true, ], [ 'shape' => 'BucketPermissionException', 'exception' => true, ], [ 'shape' => 'MalformedManifestException', 'exception' => true, ], [ 'shape' => 'UnableToUpdateJobIdException', 'exception' => true, ], [ 'shape' => 'InvalidVersionException', 'exception' => true, ], ], ], ], 'shapes' => [ 'APIVersion' => [ 'type' => 'string', ], 'Artifact' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'Description', ], 'URL' => [ 'shape' => 'URL', ], ], ], 'ArtifactList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Artifact', ], ], 'BucketPermissionException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CancelJobInput' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'CancelJobOutput' => [ 'type' => 'structure', 'members' => [ 'Success' => [ 'shape' => 'Success', ], ], ], 'CanceledJobIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Carrier' => [ 'type' => 'string', ], 'CreateJobInput' => [ 'type' => 'structure', 'required' => [ 'JobType', 'Manifest', 'ValidateOnly', ], 'members' => [ 'JobType' => [ 'shape' => 'JobType', ], 'Manifest' => [ 'shape' => 'Manifest', ], 'ManifestAddendum' => [ 'shape' => 'ManifestAddendum', ], 'ValidateOnly' => [ 'shape' => 'ValidateOnly', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'CreateJobOutput' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobType' => [ 'shape' => 'JobType', ], 'Signature' => [ 'shape' => 'Signature', ], 'SignatureFileContents' => [ 'shape' => 'SignatureFileContents', ], 'WarningMessage' => [ 'shape' => 'WarningMessage', ], 'ArtifactList' => [ 'shape' => 'ArtifactList', ], ], ], 'CreateJobQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CreationDate' => [ 'type' => 'timestamp', ], 'CurrentManifest' => [ 'type' => 'string', ], 'Description' => [ 'type' => 'string', ], 'ErrorCount' => [ 'type' => 'integer', ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExpiredJobIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'GenericString' => [ 'type' => 'string', ], 'GetShippingLabelInput' => [ 'type' => 'structure', 'required' => [ 'jobIds', ], 'members' => [ 'jobIds' => [ 'shape' => 'JobIdList', ], 'name' => [ 'shape' => 'name', ], 'company' => [ 'shape' => 'company', ], 'phoneNumber' => [ 'shape' => 'phoneNumber', ], 'country' => [ 'shape' => 'country', ], 'stateOrProvince' => [ 'shape' => 'stateOrProvince', ], 'city' => [ 'shape' => 'city', ], 'postalCode' => [ 'shape' => 'postalCode', ], 'street1' => [ 'shape' => 'street1', ], 'street2' => [ 'shape' => 'street2', ], 'street3' => [ 'shape' => 'street3', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'GetShippingLabelOutput' => [ 'type' => 'structure', 'members' => [ 'ShippingLabelURL' => [ 'shape' => 'GenericString', ], 'Warning' => [ 'shape' => 'GenericString', ], ], ], 'GetStatusInput' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'GetStatusOutput' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobType' => [ 'shape' => 'JobType', ], 'LocationCode' => [ 'shape' => 'LocationCode', ], 'LocationMessage' => [ 'shape' => 'LocationMessage', ], 'ProgressCode' => [ 'shape' => 'ProgressCode', ], 'ProgressMessage' => [ 'shape' => 'ProgressMessage', ], 'Carrier' => [ 'shape' => 'Carrier', ], 'TrackingNumber' => [ 'shape' => 'TrackingNumber', ], 'LogBucket' => [ 'shape' => 'LogBucket', ], 'LogKey' => [ 'shape' => 'LogKey', ], 'ErrorCount' => [ 'shape' => 'ErrorCount', ], 'Signature' => [ 'shape' => 'Signature', ], 'SignatureFileContents' => [ 'shape' => 'Signature', ], 'CurrentManifest' => [ 'shape' => 'CurrentManifest', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'ArtifactList' => [ 'shape' => 'ArtifactList', ], ], ], 'InvalidAccessKeyIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidAddressException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidCustomsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidFileSystemException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidJobIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidManifestFieldException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidVersionException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'IsCanceled' => [ 'type' => 'boolean', ], 'IsTruncated' => [ 'type' => 'boolean', ], 'Job' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'IsCanceled' => [ 'shape' => 'IsCanceled', ], 'JobType' => [ 'shape' => 'JobType', ], ], ], 'JobId' => [ 'type' => 'string', ], 'JobIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GenericString', ], ], 'JobType' => [ 'type' => 'string', 'enum' => [ 'Import', 'Export', ], ], 'JobsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Job', ], ], 'ListJobsInput' => [ 'type' => 'structure', 'members' => [ 'MaxJobs' => [ 'shape' => 'MaxJobs', ], 'Marker' => [ 'shape' => 'Marker', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'ListJobsOutput' => [ 'type' => 'structure', 'members' => [ 'Jobs' => [ 'shape' => 'JobsList', ], 'IsTruncated' => [ 'shape' => 'IsTruncated', ], ], ], 'LocationCode' => [ 'type' => 'string', ], 'LocationMessage' => [ 'type' => 'string', ], 'LogBucket' => [ 'type' => 'string', ], 'LogKey' => [ 'type' => 'string', ], 'MalformedManifestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Manifest' => [ 'type' => 'string', ], 'ManifestAddendum' => [ 'type' => 'string', ], 'Marker' => [ 'type' => 'string', ], 'MaxJobs' => [ 'type' => 'integer', ], 'MissingCustomsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'MissingManifestFieldException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'MissingParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'MultipleRegionsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'NoSuchBucketException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ProgressCode' => [ 'type' => 'string', ], 'ProgressMessage' => [ 'type' => 'string', ], 'Signature' => [ 'type' => 'string', ], 'SignatureFileContents' => [ 'type' => 'string', ], 'Success' => [ 'type' => 'boolean', ], 'TrackingNumber' => [ 'type' => 'string', ], 'URL' => [ 'type' => 'string', ], 'UnableToCancelJobIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'UnableToUpdateJobIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'UpdateJobInput' => [ 'type' => 'structure', 'required' => [ 'JobId', 'Manifest', 'JobType', 'ValidateOnly', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'Manifest' => [ 'shape' => 'Manifest', ], 'JobType' => [ 'shape' => 'JobType', ], 'ValidateOnly' => [ 'shape' => 'ValidateOnly', ], 'APIVersion' => [ 'shape' => 'APIVersion', ], ], ], 'UpdateJobOutput' => [ 'type' => 'structure', 'members' => [ 'Success' => [ 'shape' => 'Success', ], 'WarningMessage' => [ 'shape' => 'WarningMessage', ], 'ArtifactList' => [ 'shape' => 'ArtifactList', ], ], ], 'ValidateOnly' => [ 'type' => 'boolean', ], 'WarningMessage' => [ 'type' => 'string', ], 'city' => [ 'type' => 'string', ], 'company' => [ 'type' => 'string', ], 'country' => [ 'type' => 'string', ], 'name' => [ 'type' => 'string', ], 'phoneNumber' => [ 'type' => 'string', ], 'postalCode' => [ 'type' => 'string', ], 'stateOrProvince' => [ 'type' => 'string', ], 'street1' => [ 'type' => 'string', ], 'street2' => [ 'type' => 'string', ], 'street3' => [ 'type' => 'string', ], ],];
