<?php

// This file was auto-generated from sdk-root/src/data/synthetics/2017-10-11/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-11', 'endpointPrefix' => 'synthetics', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceAbbreviation' => 'Synthetics', 'serviceFullName' => 'Synthetics', 'serviceId' => 'synthetics', 'signatureVersion' => 'v4', 'signingName' => 'synthetics', 'uid' => 'synthetics-2017-10-11', 'auth' => [ 'aws.auth#sigv4', ], ], 'operations' => [ 'AssociateResource' => [ 'name' => 'AssociateResource', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/group/{groupIdentifier}/associate', ], 'input' => [ 'shape' => 'AssociateResourceRequest', ], 'output' => [ 'shape' => 'AssociateResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateCanary' => [ 'name' => 'CreateCanary', 'http' => [ 'method' => 'POST', 'requestUri' => '/canary', ], 'input' => [ 'shape' => 'CreateCanaryRequest', ], 'output' => [ 'shape' => 'CreateCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestEntityTooLargeException', ], ], ], 'CreateGroup' => [ 'name' => 'CreateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/group', ], 'input' => [ 'shape' => 'CreateGroupRequest', ], 'output' => [ 'shape' => 'CreateGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'DeleteCanary' => [ 'name' => 'DeleteCanary', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/canary/{name}', ], 'input' => [ 'shape' => 'DeleteCanaryRequest', ], 'output' => [ 'shape' => 'DeleteCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'DeleteGroup' => [ 'name' => 'DeleteGroup', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/group/{groupIdentifier}', ], 'input' => [ 'shape' => 'DeleteGroupRequest', ], 'output' => [ 'shape' => 'DeleteGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'DescribeCanaries' => [ 'name' => 'DescribeCanaries', 'http' => [ 'method' => 'POST', 'requestUri' => '/canaries', ], 'input' => [ 'shape' => 'DescribeCanariesRequest', ], 'output' => [ 'shape' => 'DescribeCanariesResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeCanariesLastRun' => [ 'name' => 'DescribeCanariesLastRun', 'http' => [ 'method' => 'POST', 'requestUri' => '/canaries/last-run', ], 'input' => [ 'shape' => 'DescribeCanariesLastRunRequest', ], 'output' => [ 'shape' => 'DescribeCanariesLastRunResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeRuntimeVersions' => [ 'name' => 'DescribeRuntimeVersions', 'http' => [ 'method' => 'POST', 'requestUri' => '/runtime-versions', ], 'input' => [ 'shape' => 'DescribeRuntimeVersionsRequest', ], 'output' => [ 'shape' => 'DescribeRuntimeVersionsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'DisassociateResource' => [ 'name' => 'DisassociateResource', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/group/{groupIdentifier}/disassociate', ], 'input' => [ 'shape' => 'DisassociateResourceRequest', ], 'output' => [ 'shape' => 'DisassociateResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'GetCanary' => [ 'name' => 'GetCanary', 'http' => [ 'method' => 'GET', 'requestUri' => '/canary/{name}', ], 'input' => [ 'shape' => 'GetCanaryRequest', ], 'output' => [ 'shape' => 'GetCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetCanaryRuns' => [ 'name' => 'GetCanaryRuns', 'http' => [ 'method' => 'POST', 'requestUri' => '/canary/{name}/runs', ], 'input' => [ 'shape' => 'GetCanaryRunsRequest', ], 'output' => [ 'shape' => 'GetCanaryRunsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetGroup' => [ 'name' => 'GetGroup', 'http' => [ 'method' => 'GET', 'requestUri' => '/group/{groupIdentifier}', ], 'input' => [ 'shape' => 'GetGroupRequest', ], 'output' => [ 'shape' => 'GetGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'ListAssociatedGroups' => [ 'name' => 'ListAssociatedGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/resource/{resourceArn}/groups', ], 'input' => [ 'shape' => 'ListAssociatedGroupsRequest', ], 'output' => [ 'shape' => 'ListAssociatedGroupsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListGroupResources' => [ 'name' => 'ListGroupResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/group/{groupIdentifier}/resources', ], 'input' => [ 'shape' => 'ListGroupResourcesRequest', ], 'output' => [ 'shape' => 'ListGroupResourcesResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'ListGroups' => [ 'name' => 'ListGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/groups', ], 'input' => [ 'shape' => 'ListGroupsRequest', ], 'output' => [ 'shape' => 'ListGroupsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'StartCanary' => [ 'name' => 'StartCanary', 'http' => [ 'method' => 'POST', 'requestUri' => '/canary/{name}/start', ], 'input' => [ 'shape' => 'StartCanaryRequest', ], 'output' => [ 'shape' => 'StartCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'StopCanary' => [ 'name' => 'StopCanary', 'http' => [ 'method' => 'POST', 'requestUri' => '/canary/{name}/stop', ], 'input' => [ 'shape' => 'StopCanaryRequest', ], 'output' => [ 'shape' => 'StopCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UpdateCanary' => [ 'name' => 'UpdateCanary', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/canary/{name}', ], 'input' => [ 'shape' => 'UpdateCanaryRequest', ], 'output' => [ 'shape' => 'UpdateCanaryResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'RequestEntityTooLargeException', ], ], ], ], 'shapes' => [ 'ArtifactConfigInput' => [ 'type' => 'structure', 'members' => [ 'S3Encryption' => [ 'shape' => 'S3EncryptionConfig', ], ], ], 'ArtifactConfigOutput' => [ 'type' => 'structure', 'members' => [ 'S3Encryption' => [ 'shape' => 'S3EncryptionConfig', ], ], ], 'AssociateResourceRequest' => [ 'type' => 'structure', 'required' => [ 'GroupIdentifier', 'ResourceArn', ], 'members' => [ 'GroupIdentifier' => [ 'shape' => 'GroupIdentifier', 'location' => 'uri', 'locationName' => 'groupIdentifier', ], 'ResourceArn' => [ 'shape' => 'CanaryArn', ], ], ], 'AssociateResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'BaseScreenshot' => [ 'type' => 'structure', 'required' => [ 'ScreenshotName', ], 'members' => [ 'ScreenshotName' => [ 'shape' => 'String', ], 'IgnoreCoordinates' => [ 'shape' => 'BaseScreenshotIgnoreCoordinates', ], ], ], 'BaseScreenshotConfigIgnoreCoordinate' => [ 'type' => 'string', 'pattern' => '^(-?\\d{1,5}\\.?\\d{0,2},){3}(-?\\d{1,5}\\.?\\d{0,2}){1}$', ], 'BaseScreenshotIgnoreCoordinates' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseScreenshotConfigIgnoreCoordinate', ], 'max' => 20, 'min' => 0, ], 'BaseScreenshots' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseScreenshot', ], ], 'Blob' => [ 'type' => 'blob', 'max' => 10000000, 'min' => 1, ], 'Canaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Canary', ], ], 'CanariesLastRun' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanaryLastRun', ], ], 'Canary' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'UUID', ], 'Name' => [ 'shape' => 'CanaryName', ], 'Code' => [ 'shape' => 'CanaryCodeOutput', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'Schedule' => [ 'shape' => 'CanaryScheduleOutput', ], 'RunConfig' => [ 'shape' => 'CanaryRunConfigOutput', ], 'SuccessRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'FailureRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'Status' => [ 'shape' => 'CanaryStatus', ], 'Timeline' => [ 'shape' => 'CanaryTimeline', ], 'ArtifactS3Location' => [ 'shape' => 'String', ], 'EngineArn' => [ 'shape' => 'FunctionArn', ], 'RuntimeVersion' => [ 'shape' => 'String', ], 'VpcConfig' => [ 'shape' => 'VpcConfigOutput', ], 'VisualReference' => [ 'shape' => 'VisualReferenceOutput', ], 'Tags' => [ 'shape' => 'TagMap', ], 'ArtifactConfig' => [ 'shape' => 'ArtifactConfigOutput', ], ], ], 'CanaryArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:synthetics:[a-z]{2}((-gov)|(-iso(b?)))?-[a-z]+-\\d{1}:\\d{12}:canary:[0-9a-z_\\-]{1,255}', ], 'CanaryCodeInput' => [ 'type' => 'structure', 'required' => [ 'Handler', ], 'members' => [ 'S3Bucket' => [ 'shape' => 'String', ], 'S3Key' => [ 'shape' => 'String', ], 'S3Version' => [ 'shape' => 'String', ], 'ZipFile' => [ 'shape' => 'Blob', ], 'Handler' => [ 'shape' => 'CodeHandler', ], ], ], 'CanaryCodeOutput' => [ 'type' => 'structure', 'members' => [ 'SourceLocationArn' => [ 'shape' => 'String', ], 'Handler' => [ 'shape' => 'String', ], ], ], 'CanaryLastRun' => [ 'type' => 'structure', 'members' => [ 'CanaryName' => [ 'shape' => 'CanaryName', ], 'LastRun' => [ 'shape' => 'CanaryRun', ], ], ], 'CanaryName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[0-9a-z_\\-]+$', ], 'CanaryRun' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'UUID', ], 'Name' => [ 'shape' => 'CanaryName', ], 'Status' => [ 'shape' => 'CanaryRunStatus', ], 'Timeline' => [ 'shape' => 'CanaryRunTimeline', ], 'ArtifactS3Location' => [ 'shape' => 'String', ], ], ], 'CanaryRunConfigInput' => [ 'type' => 'structure', 'members' => [ 'TimeoutInSeconds' => [ 'shape' => 'MaxFifteenMinutesInSeconds', ], 'MemoryInMB' => [ 'shape' => 'MaxSize3008', ], 'ActiveTracing' => [ 'shape' => 'NullableBoolean', ], 'EnvironmentVariables' => [ 'shape' => 'EnvironmentVariablesMap', ], ], ], 'CanaryRunConfigOutput' => [ 'type' => 'structure', 'members' => [ 'TimeoutInSeconds' => [ 'shape' => 'MaxFifteenMinutesInSeconds', ], 'MemoryInMB' => [ 'shape' => 'MaxSize3008', ], 'ActiveTracing' => [ 'shape' => 'NullableBoolean', ], ], ], 'CanaryRunState' => [ 'type' => 'string', 'enum' => [ 'RUNNING', 'PASSED', 'FAILED', ], ], 'CanaryRunStateReasonCode' => [ 'type' => 'string', 'enum' => [ 'CANARY_FAILURE', 'EXECUTION_FAILURE', ], ], 'CanaryRunStatus' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => 'CanaryRunState', ], 'StateReason' => [ 'shape' => 'String', ], 'StateReasonCode' => [ 'shape' => 'CanaryRunStateReasonCode', ], ], ], 'CanaryRunTimeline' => [ 'type' => 'structure', 'members' => [ 'Started' => [ 'shape' => 'Timestamp', ], 'Completed' => [ 'shape' => 'Timestamp', ], ], ], 'CanaryRuns' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanaryRun', ], ], 'CanaryScheduleInput' => [ 'type' => 'structure', 'required' => [ 'Expression', ], 'members' => [ 'Expression' => [ 'shape' => 'String', ], 'DurationInSeconds' => [ 'shape' => 'MaxOneYearInSeconds', ], ], ], 'CanaryScheduleOutput' => [ 'type' => 'structure', 'members' => [ 'Expression' => [ 'shape' => 'String', ], 'DurationInSeconds' => [ 'shape' => 'MaxOneYearInSeconds', ], ], ], 'CanaryState' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'READY', 'STARTING', 'RUNNING', 'UPDATING', 'STOPPING', 'STOPPED', 'ERROR', 'DELETING', ], ], 'CanaryStateReasonCode' => [ 'type' => 'string', 'enum' => [ 'INVALID_PERMISSIONS', 'CREATE_PENDING', 'CREATE_IN_PROGRESS', 'CREATE_FAILED', 'UPDATE_PENDING', 'UPDATE_IN_PROGRESS', 'UPDATE_COMPLETE', 'ROLLBACK_COMPLETE', 'ROLLBACK_FAILED', 'DELETE_IN_PROGRESS', 'DELETE_FAILED', 'SYNC_DELETE_IN_PROGRESS', ], ], 'CanaryStatus' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => 'CanaryState', ], 'StateReason' => [ 'shape' => 'String', ], 'StateReasonCode' => [ 'shape' => 'CanaryStateReasonCode', ], ], ], 'CanaryTimeline' => [ 'type' => 'structure', 'members' => [ 'Created' => [ 'shape' => 'Timestamp', ], 'LastModified' => [ 'shape' => 'Timestamp', ], 'LastStarted' => [ 'shape' => 'Timestamp', ], 'LastStopped' => [ 'shape' => 'Timestamp', ], ], ], 'CodeHandler' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([0-9a-zA-Z_-]+\\/)*[0-9A-Za-z_\\\\-]+\\.[A-Za-z_][A-Za-z0-9_]*$', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'CreateCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'Code', 'ArtifactS3Location', 'ExecutionRoleArn', 'Schedule', 'RuntimeVersion', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', ], 'Code' => [ 'shape' => 'CanaryCodeInput', ], 'ArtifactS3Location' => [ 'shape' => 'String', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'Schedule' => [ 'shape' => 'CanaryScheduleInput', ], 'RunConfig' => [ 'shape' => 'CanaryRunConfigInput', ], 'SuccessRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'FailureRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'RuntimeVersion' => [ 'shape' => 'String', ], 'VpcConfig' => [ 'shape' => 'VpcConfigInput', ], 'ResourcesToReplicateTags' => [ 'shape' => 'ResourceList', ], 'Tags' => [ 'shape' => 'TagMap', ], 'ArtifactConfig' => [ 'shape' => 'ArtifactConfigInput', ], ], ], 'CreateCanaryResponse' => [ 'type' => 'structure', 'members' => [ 'Canary' => [ 'shape' => 'Canary', ], ], ], 'CreateGroupRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'GroupName', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateGroupResponse' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'Group', ], ], ], 'DeleteCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], 'DeleteLambda' => [ 'shape' => 'boolean', 'location' => 'querystring', 'locationName' => 'deleteLambda', ], ], ], 'DeleteCanaryResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteGroupRequest' => [ 'type' => 'structure', 'required' => [ 'GroupIdentifier', ], 'members' => [ 'GroupIdentifier' => [ 'shape' => 'GroupIdentifier', 'location' => 'uri', 'locationName' => 'groupIdentifier', ], ], ], 'DeleteGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeCanariesLastRunNameFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanaryName', ], 'max' => 5, 'min' => 1, ], 'DescribeCanariesLastRunRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxSize100', ], 'Names' => [ 'shape' => 'DescribeCanariesLastRunNameFilter', ], ], ], 'DescribeCanariesLastRunResponse' => [ 'type' => 'structure', 'members' => [ 'CanariesLastRun' => [ 'shape' => 'CanariesLastRun', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DescribeCanariesNameFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'CanaryName', ], 'max' => 5, 'min' => 1, ], 'DescribeCanariesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxCanaryResults', ], 'Names' => [ 'shape' => 'DescribeCanariesNameFilter', ], ], ], 'DescribeCanariesResponse' => [ 'type' => 'structure', 'members' => [ 'Canaries' => [ 'shape' => 'Canaries', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DescribeRuntimeVersionsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxSize100', ], ], ], 'DescribeRuntimeVersionsResponse' => [ 'type' => 'structure', 'members' => [ 'RuntimeVersions' => [ 'shape' => 'RuntimeVersionList', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DisassociateResourceRequest' => [ 'type' => 'structure', 'required' => [ 'GroupIdentifier', 'ResourceArn', ], 'members' => [ 'GroupIdentifier' => [ 'shape' => 'GroupIdentifier', 'location' => 'uri', 'locationName' => 'groupIdentifier', ], 'ResourceArn' => [ 'shape' => 'CanaryArn', ], ], ], 'DisassociateResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'EncryptionMode' => [ 'type' => 'string', 'enum' => [ 'SSE_S3', 'SSE_KMS', ], ], 'EnvironmentVariableName' => [ 'type' => 'string', 'pattern' => '[a-zA-Z]([a-zA-Z0-9_])+', ], 'EnvironmentVariableValue' => [ 'type' => 'string', ], 'EnvironmentVariablesMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'EnvironmentVariableName', ], 'value' => [ 'shape' => 'EnvironmentVariableValue', ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'FunctionArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:lambda:[a-z]{2}((-gov)|(-iso(b?)))?-[a-z]+-\\d{1}:\\d{12}:function:[a-zA-Z0-9-_]+(:(\\$LATEST|[a-zA-Z0-9-_]+))?', ], 'GetCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], ], ], 'GetCanaryResponse' => [ 'type' => 'structure', 'members' => [ 'Canary' => [ 'shape' => 'Canary', ], ], ], 'GetCanaryRunsRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxSize100', ], ], ], 'GetCanaryRunsResponse' => [ 'type' => 'structure', 'members' => [ 'CanaryRuns' => [ 'shape' => 'CanaryRuns', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'GetGroupRequest' => [ 'type' => 'structure', 'required' => [ 'GroupIdentifier', ], 'members' => [ 'GroupIdentifier' => [ 'shape' => 'GroupIdentifier', 'location' => 'uri', 'locationName' => 'groupIdentifier', ], ], ], 'GetGroupResponse' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'Group', ], ], ], 'Group' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'GroupName', ], 'Arn' => [ 'shape' => 'GroupArn', ], 'Tags' => [ 'shape' => 'TagMap', ], 'CreatedTime' => [ 'shape' => 'Timestamp', ], 'LastModifiedTime' => [ 'shape' => 'Timestamp', ], ], ], 'GroupArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:synthetics:[a-z]{2}((-gov)|(-iso(b?)))?-[a-z]+-\\d{1}:\\d{12}:group:[0-9a-z]+', ], 'GroupIdentifier' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'GroupName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'GroupSummary' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'GroupName', ], 'Arn' => [ 'shape' => 'GroupArn', ], ], ], 'GroupSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupSummary', ], ], 'InternalFailureException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:kms:[a-z]{2}((-gov)|(-iso(b?)))?-[a-z]+-\\d{1}:\\d{12}:key/[\\w\\-\\/]+', ], 'ListAssociatedGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MaxGroupResults', ], 'ResourceArn' => [ 'shape' => 'CanaryArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListAssociatedGroupsResponse' => [ 'type' => 'structure', 'members' => [ 'Groups' => [ 'shape' => 'GroupSummaryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListGroupResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'GroupIdentifier', ], 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MaxGroupResults', ], 'GroupIdentifier' => [ 'shape' => 'GroupIdentifier', 'location' => 'uri', 'locationName' => 'groupIdentifier', ], ], ], 'ListGroupResourcesResponse' => [ 'type' => 'structure', 'members' => [ 'Resources' => [ 'shape' => 'StringList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListGroupsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MaxGroupResults', ], ], ], 'ListGroupsResponse' => [ 'type' => 'structure', 'members' => [ 'Groups' => [ 'shape' => 'GroupSummaryList', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxCanaryResults' => [ 'type' => 'integer', 'max' => 20, 'min' => 1, ], 'MaxFifteenMinutesInSeconds' => [ 'type' => 'integer', 'max' => 840, 'min' => 3, ], 'MaxGroupResults' => [ 'type' => 'integer', 'max' => 20, 'min' => 1, ], 'MaxOneYearInSeconds' => [ 'type' => 'long', 'max' => 31622400, 'min' => 0, ], 'MaxSize100' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'MaxSize1024' => [ 'type' => 'integer', 'max' => 1024, 'min' => 1, ], 'MaxSize3008' => [ 'type' => 'integer', 'max' => 3008, 'min' => 960, ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'NullableBoolean' => [ 'type' => 'boolean', ], 'PaginationToken' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => '^.+$', ], 'RequestEntityTooLargeException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 413, ], 'exception' => true, ], 'ResourceArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:synthetics:[a-z]{2}((-gov)|(-iso(b?)))?-[a-z]+-\\d{1}:\\d{12}:(canary|group):[0-9a-z_\\-]+', ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceToTag', ], 'max' => 1, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResourceToTag' => [ 'type' => 'string', 'enum' => [ 'lambda-function', ], ], 'RoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:(aws[a-zA-Z-]*)?:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+', ], 'RuntimeVersion' => [ 'type' => 'structure', 'members' => [ 'VersionName' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'ReleaseDate' => [ 'shape' => 'Timestamp', ], 'DeprecationDate' => [ 'shape' => 'Timestamp', ], ], ], 'RuntimeVersionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuntimeVersion', ], ], 'S3EncryptionConfig' => [ 'type' => 'structure', 'members' => [ 'EncryptionMode' => [ 'shape' => 'EncryptionMode', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], ], ], 'SecurityGroupId' => [ 'type' => 'string', ], 'SecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupId', ], 'max' => 5, 'min' => 0, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'StartCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], ], ], 'StartCanaryResponse' => [ 'type' => 'structure', 'members' => [], ], 'StopCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], ], ], 'StopCanaryResponse' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SubnetId' => [ 'type' => 'string', ], 'SubnetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetId', ], 'max' => 16, 'min' => 0, ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Token' => [ 'type' => 'string', 'max' => 252, 'min' => 4, ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UUID' => [ 'type' => 'string', 'pattern' => '^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateCanaryRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'CanaryName', 'location' => 'uri', 'locationName' => 'name', ], 'Code' => [ 'shape' => 'CanaryCodeInput', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'RuntimeVersion' => [ 'shape' => 'String', ], 'Schedule' => [ 'shape' => 'CanaryScheduleInput', ], 'RunConfig' => [ 'shape' => 'CanaryRunConfigInput', ], 'SuccessRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'FailureRetentionPeriodInDays' => [ 'shape' => 'MaxSize1024', ], 'VpcConfig' => [ 'shape' => 'VpcConfigInput', ], 'VisualReference' => [ 'shape' => 'VisualReferenceInput', ], 'ArtifactS3Location' => [ 'shape' => 'String', ], 'ArtifactConfig' => [ 'shape' => 'ArtifactConfigInput', ], ], ], 'UpdateCanaryResponse' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VisualReferenceInput' => [ 'type' => 'structure', 'required' => [ 'BaseCanaryRunId', ], 'members' => [ 'BaseScreenshots' => [ 'shape' => 'BaseScreenshots', ], 'BaseCanaryRunId' => [ 'shape' => 'String', ], ], ], 'VisualReferenceOutput' => [ 'type' => 'structure', 'members' => [ 'BaseScreenshots' => [ 'shape' => 'BaseScreenshots', ], 'BaseCanaryRunId' => [ 'shape' => 'String', ], ], ], 'VpcConfigInput' => [ 'type' => 'structure', 'members' => [ 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], ], ], 'VpcConfigOutput' => [ 'type' => 'structure', 'members' => [ 'VpcId' => [ 'shape' => 'VpcId', ], 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], ], ], 'VpcId' => [ 'type' => 'string', ], 'boolean' => [ 'type' => 'boolean', ], ],];
