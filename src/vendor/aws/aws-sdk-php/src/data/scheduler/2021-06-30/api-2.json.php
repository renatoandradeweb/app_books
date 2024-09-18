<?php

// This file was auto-generated from sdk-root/src/data/scheduler/2021-06-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-06-30', 'endpointPrefix' => 'scheduler', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon EventBridge Scheduler', 'serviceId' => 'Scheduler', 'signatureVersion' => 'v4', 'signingName' => 'scheduler', 'uid' => 'scheduler-2021-06-30', ], 'operations' => [ 'CreateSchedule' => [ 'name' => 'CreateSchedule', 'http' => [ 'method' => 'POST', 'requestUri' => '/schedules/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateScheduleInput', ], 'output' => [ 'shape' => 'CreateScheduleOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'CreateScheduleGroup' => [ 'name' => 'CreateScheduleGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/schedule-groups/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateScheduleGroupInput', ], 'output' => [ 'shape' => 'CreateScheduleGroupOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'DeleteSchedule' => [ 'name' => 'DeleteSchedule', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/schedules/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteScheduleInput', ], 'output' => [ 'shape' => 'DeleteScheduleOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'DeleteScheduleGroup' => [ 'name' => 'DeleteScheduleGroup', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/schedule-groups/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteScheduleGroupInput', ], 'output' => [ 'shape' => 'DeleteScheduleGroupOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'GetSchedule' => [ 'name' => 'GetSchedule', 'http' => [ 'method' => 'GET', 'requestUri' => '/schedules/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetScheduleInput', ], 'output' => [ 'shape' => 'GetScheduleOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetScheduleGroup' => [ 'name' => 'GetScheduleGroup', 'http' => [ 'method' => 'GET', 'requestUri' => '/schedule-groups/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetScheduleGroupInput', ], 'output' => [ 'shape' => 'GetScheduleGroupOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListScheduleGroups' => [ 'name' => 'ListScheduleGroups', 'http' => [ 'method' => 'GET', 'requestUri' => '/schedule-groups', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListScheduleGroupsInput', ], 'output' => [ 'shape' => 'ListScheduleGroupsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListSchedules' => [ 'name' => 'ListSchedules', 'http' => [ 'method' => 'GET', 'requestUri' => '/schedules', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSchedulesInput', ], 'output' => [ 'shape' => 'ListSchedulesOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'UpdateSchedule' => [ 'name' => 'UpdateSchedule', 'http' => [ 'method' => 'PUT', 'requestUri' => '/schedules/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateScheduleInput', ], 'output' => [ 'shape' => 'UpdateScheduleOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'ActionAfterCompletion' => [ 'type' => 'string', 'enum' => [ 'NONE', 'DELETE', ], ], 'AssignPublicIp' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'AwsVpcConfiguration' => [ 'type' => 'structure', 'required' => [ 'Subnets', ], 'members' => [ 'AssignPublicIp' => [ 'shape' => 'AssignPublicIp', ], 'SecurityGroups' => [ 'shape' => 'SecurityGroups', ], 'Subnets' => [ 'shape' => 'Subnets', ], ], ], 'CapacityProvider' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'CapacityProviderStrategy' => [ 'type' => 'list', 'member' => [ 'shape' => 'CapacityProviderStrategyItem', ], 'max' => 6, 'min' => 0, ], 'CapacityProviderStrategyItem' => [ 'type' => 'structure', 'required' => [ 'capacityProvider', ], 'members' => [ 'base' => [ 'shape' => 'CapacityProviderStrategyItemBase', ], 'capacityProvider' => [ 'shape' => 'CapacityProvider', ], 'weight' => [ 'shape' => 'CapacityProviderStrategyItemWeight', ], ], ], 'CapacityProviderStrategyItemBase' => [ 'type' => 'integer', 'max' => 100000, 'min' => 0, ], 'CapacityProviderStrategyItemWeight' => [ 'type' => 'integer', 'max' => 1000, 'min' => 0, ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-_]+$', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateScheduleGroupInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Name' => [ 'shape' => 'ScheduleGroupName', 'location' => 'uri', 'locationName' => 'Name', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateScheduleGroupOutput' => [ 'type' => 'structure', 'required' => [ 'ScheduleGroupArn', ], 'members' => [ 'ScheduleGroupArn' => [ 'shape' => 'ScheduleGroupArn', ], ], ], 'CreateScheduleInput' => [ 'type' => 'structure', 'required' => [ 'FlexibleTimeWindow', 'Name', 'ScheduleExpression', 'Target', ], 'members' => [ 'ActionAfterCompletion' => [ 'shape' => 'ActionAfterCompletion', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Description' => [ 'shape' => 'Description', ], 'EndDate' => [ 'shape' => 'EndDate', ], 'FlexibleTimeWindow' => [ 'shape' => 'FlexibleTimeWindow', ], 'GroupName' => [ 'shape' => 'ScheduleGroupName', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'ScheduleExpressionTimezone' => [ 'shape' => 'ScheduleExpressionTimezone', ], 'StartDate' => [ 'shape' => 'StartDate', ], 'State' => [ 'shape' => 'ScheduleState', ], 'Target' => [ 'shape' => 'Target', ], ], ], 'CreateScheduleOutput' => [ 'type' => 'structure', 'required' => [ 'ScheduleArn', ], 'members' => [ 'ScheduleArn' => [ 'shape' => 'ScheduleArn', ], ], ], 'CreationDate' => [ 'type' => 'timestamp', ], 'DeadLetterConfig' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'DeadLetterConfigArnString', ], ], ], 'DeadLetterConfigArnString' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:sqs:[a-z0-9\\-]+:\\d{12}:[a-zA-Z0-9\\-_]+$', ], 'DeleteScheduleGroupInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'Name' => [ 'shape' => 'ScheduleGroupName', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'DeleteScheduleGroupOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteScheduleInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'GroupName' => [ 'shape' => 'ScheduleGroupName', 'location' => 'querystring', 'locationName' => 'groupName', ], 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'DeleteScheduleOutput' => [ 'type' => 'structure', 'members' => [], ], 'Description' => [ 'type' => 'string', 'max' => 512, 'min' => 0, ], 'DetailType' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'EcsParameters' => [ 'type' => 'structure', 'required' => [ 'TaskDefinitionArn', ], 'members' => [ 'CapacityProviderStrategy' => [ 'shape' => 'CapacityProviderStrategy', ], 'EnableECSManagedTags' => [ 'shape' => 'EnableECSManagedTags', ], 'EnableExecuteCommand' => [ 'shape' => 'EnableExecuteCommand', ], 'Group' => [ 'shape' => 'Group', ], 'LaunchType' => [ 'shape' => 'LaunchType', ], 'NetworkConfiguration' => [ 'shape' => 'NetworkConfiguration', ], 'PlacementConstraints' => [ 'shape' => 'PlacementConstraints', ], 'PlacementStrategy' => [ 'shape' => 'PlacementStrategies', ], 'PlatformVersion' => [ 'shape' => 'PlatformVersion', ], 'PropagateTags' => [ 'shape' => 'PropagateTags', ], 'ReferenceId' => [ 'shape' => 'ReferenceId', ], 'Tags' => [ 'shape' => 'Tags', ], 'TaskCount' => [ 'shape' => 'TaskCount', ], 'TaskDefinitionArn' => [ 'shape' => 'TaskDefinitionArn', ], ], ], 'EnableECSManagedTags' => [ 'type' => 'boolean', 'box' => true, ], 'EnableExecuteCommand' => [ 'type' => 'boolean', 'box' => true, ], 'EndDate' => [ 'type' => 'timestamp', ], 'EventBridgeParameters' => [ 'type' => 'structure', 'required' => [ 'DetailType', 'Source', ], 'members' => [ 'DetailType' => [ 'shape' => 'DetailType', ], 'Source' => [ 'shape' => 'Source', ], ], ], 'FlexibleTimeWindow' => [ 'type' => 'structure', 'required' => [ 'Mode', ], 'members' => [ 'MaximumWindowInMinutes' => [ 'shape' => 'MaximumWindowInMinutes', ], 'Mode' => [ 'shape' => 'FlexibleTimeWindowMode', ], ], ], 'FlexibleTimeWindowMode' => [ 'type' => 'string', 'enum' => [ 'OFF', 'FLEXIBLE', ], ], 'GetScheduleGroupInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'ScheduleGroupName', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'GetScheduleGroupOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ScheduleGroupArn', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'LastModificationDate' => [ 'shape' => 'LastModificationDate', ], 'Name' => [ 'shape' => 'ScheduleGroupName', ], 'State' => [ 'shape' => 'ScheduleGroupState', ], ], ], 'GetScheduleInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'GroupName' => [ 'shape' => 'ScheduleGroupName', 'location' => 'querystring', 'locationName' => 'groupName', ], 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'GetScheduleOutput' => [ 'type' => 'structure', 'members' => [ 'ActionAfterCompletion' => [ 'shape' => 'ActionAfterCompletion', ], 'Arn' => [ 'shape' => 'ScheduleArn', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'Description' => [ 'shape' => 'Description', ], 'EndDate' => [ 'shape' => 'EndDate', ], 'FlexibleTimeWindow' => [ 'shape' => 'FlexibleTimeWindow', ], 'GroupName' => [ 'shape' => 'ScheduleGroupName', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'LastModificationDate' => [ 'shape' => 'LastModificationDate', ], 'Name' => [ 'shape' => 'Name', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'ScheduleExpressionTimezone' => [ 'shape' => 'ScheduleExpressionTimezone', ], 'StartDate' => [ 'shape' => 'StartDate', ], 'State' => [ 'shape' => 'ScheduleState', ], 'Target' => [ 'shape' => 'Target', ], ], ], 'Group' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'KinesisParameters' => [ 'type' => 'structure', 'required' => [ 'PartitionKey', ], 'members' => [ 'PartitionKey' => [ 'shape' => 'TargetPartitionKey', ], ], ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:kms:[a-z0-9\\-]+:\\d{12}:(key|alias)\\/[0-9a-zA-Z-_]*$', ], 'LastModificationDate' => [ 'type' => 'timestamp', ], 'LaunchType' => [ 'type' => 'string', 'enum' => [ 'EC2', 'FARGATE', 'EXTERNAL', ], ], 'ListScheduleGroupsInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NamePrefix' => [ 'shape' => 'ScheduleGroupNamePrefix', 'location' => 'querystring', 'locationName' => 'NamePrefix', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'ListScheduleGroupsOutput' => [ 'type' => 'structure', 'required' => [ 'ScheduleGroups', ], 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'ScheduleGroups' => [ 'shape' => 'ScheduleGroupList', ], ], ], 'ListSchedulesInput' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'ScheduleGroupName', 'location' => 'querystring', 'locationName' => 'ScheduleGroup', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NamePrefix' => [ 'shape' => 'NamePrefix', 'location' => 'querystring', 'locationName' => 'NamePrefix', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'State' => [ 'shape' => 'ScheduleState', 'location' => 'querystring', 'locationName' => 'State', ], ], ], 'ListSchedulesOutput' => [ 'type' => 'structure', 'required' => [ 'Schedules', ], 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'Schedules' => [ 'shape' => 'ScheduleList', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagResourceArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaximumEventAgeInSeconds' => [ 'type' => 'integer', 'box' => true, 'max' => 86400, 'min' => 60, ], 'MaximumRetryAttempts' => [ 'type' => 'integer', 'box' => true, 'max' => 185, 'min' => 0, ], 'MaximumWindowInMinutes' => [ 'type' => 'integer', 'box' => true, 'max' => 1440, 'min' => 1, ], 'MessageGroupId' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'Name' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[0-9a-zA-Z-_.]+$', ], 'NamePrefix' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[0-9a-zA-Z-_.]+$', ], 'NetworkConfiguration' => [ 'type' => 'structure', 'members' => [ 'awsvpcConfiguration' => [ 'shape' => 'AwsVpcConfiguration', ], ], ], 'NextToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'PlacementConstraint' => [ 'type' => 'structure', 'members' => [ 'expression' => [ 'shape' => 'PlacementConstraintExpression', ], 'type' => [ 'shape' => 'PlacementConstraintType', ], ], ], 'PlacementConstraintExpression' => [ 'type' => 'string', 'max' => 2000, 'min' => 0, ], 'PlacementConstraintType' => [ 'type' => 'string', 'enum' => [ 'distinctInstance', 'memberOf', ], ], 'PlacementConstraints' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlacementConstraint', ], 'max' => 10, 'min' => 0, ], 'PlacementStrategies' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlacementStrategy', ], 'max' => 5, 'min' => 0, ], 'PlacementStrategy' => [ 'type' => 'structure', 'members' => [ 'field' => [ 'shape' => 'PlacementStrategyField', ], 'type' => [ 'shape' => 'PlacementStrategyType', ], ], ], 'PlacementStrategyField' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'PlacementStrategyType' => [ 'type' => 'string', 'enum' => [ 'random', 'spread', 'binpack', ], ], 'PlatformVersion' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'PropagateTags' => [ 'type' => 'string', 'enum' => [ 'TASK_DEFINITION', ], ], 'ReferenceId' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RetryPolicy' => [ 'type' => 'structure', 'members' => [ 'MaximumEventAgeInSeconds' => [ 'shape' => 'MaximumEventAgeInSeconds', ], 'MaximumRetryAttempts' => [ 'shape' => 'MaximumRetryAttempts', ], ], ], 'RoleArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:iam::\\d{12}:role\\/[\\w+=,.@\\/-]+$', ], 'SageMakerPipelineParameter' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'SageMakerPipelineParameterName', ], 'Value' => [ 'shape' => 'SageMakerPipelineParameterValue', ], ], ], 'SageMakerPipelineParameterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SageMakerPipelineParameter', ], 'max' => 200, 'min' => 0, ], 'SageMakerPipelineParameterName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[A-Za-z0-9\\-_]*$', ], 'SageMakerPipelineParameterValue' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'SageMakerPipelineParameters' => [ 'type' => 'structure', 'members' => [ 'PipelineParameterList' => [ 'shape' => 'SageMakerPipelineParameterList', ], ], ], 'ScheduleArn' => [ 'type' => 'string', 'max' => 1224, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:scheduler:[a-z0-9\\-]+:\\d{12}:schedule\\/[0-9a-zA-Z-_.]+\\/[0-9a-zA-Z-_.]+$', ], 'ScheduleExpression' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ScheduleExpressionTimezone' => [ 'type' => 'string', 'max' => 50, 'min' => 1, ], 'ScheduleGroupArn' => [ 'type' => 'string', 'max' => 1224, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:scheduler:[a-z0-9\\-]+:\\d{12}:schedule-group\\/[0-9a-zA-Z-_.]+$', ], 'ScheduleGroupList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScheduleGroupSummary', ], ], 'ScheduleGroupName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[0-9a-zA-Z-_.]+$', ], 'ScheduleGroupNamePrefix' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[0-9a-zA-Z-_.]+$', ], 'ScheduleGroupState' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETING', ], ], 'ScheduleGroupSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ScheduleGroupArn', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'LastModificationDate' => [ 'shape' => 'LastModificationDate', ], 'Name' => [ 'shape' => 'ScheduleGroupName', ], 'State' => [ 'shape' => 'ScheduleGroupState', ], ], ], 'ScheduleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScheduleSummary', ], ], 'ScheduleState' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'ScheduleSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ScheduleArn', ], 'CreationDate' => [ 'shape' => 'CreationDate', ], 'GroupName' => [ 'shape' => 'ScheduleGroupName', ], 'LastModificationDate' => [ 'shape' => 'LastModificationDate', ], 'Name' => [ 'shape' => 'Name', ], 'State' => [ 'shape' => 'ScheduleState', ], 'Target' => [ 'shape' => 'TargetSummary', ], ], ], 'SecurityGroup' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ], 'SecurityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroup', ], 'max' => 5, 'min' => 1, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'Source' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^(?=[/\\.\\-_A-Za-z0-9]+)((?!aws\\.).*)|(\\$(\\.[\\w_-]+(\\[(\\d+|\\*)\\])*)*)$', ], 'SqsParameters' => [ 'type' => 'structure', 'members' => [ 'MessageGroupId' => [ 'shape' => 'MessageGroupId', ], ], ], 'StartDate' => [ 'type' => 'timestamp', ], 'String' => [ 'type' => 'string', ], 'Subnet' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ], 'Subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subnet', ], 'max' => 16, 'min' => 1, ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagResourceArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:aws(-[a-z]+)?:scheduler:[a-z0-9\\-]+:\\d{12}:schedule-group\\/[0-9a-zA-Z-_.]+$', ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagResourceArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagMap', ], 'max' => 50, 'min' => 0, ], 'Target' => [ 'type' => 'structure', 'required' => [ 'Arn', 'RoleArn', ], 'members' => [ 'Arn' => [ 'shape' => 'TargetArn', ], 'DeadLetterConfig' => [ 'shape' => 'DeadLetterConfig', ], 'EcsParameters' => [ 'shape' => 'EcsParameters', ], 'EventBridgeParameters' => [ 'shape' => 'EventBridgeParameters', ], 'Input' => [ 'shape' => 'TargetInput', ], 'KinesisParameters' => [ 'shape' => 'KinesisParameters', ], 'RetryPolicy' => [ 'shape' => 'RetryPolicy', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'SageMakerPipelineParameters' => [ 'shape' => 'SageMakerPipelineParameters', ], 'SqsParameters' => [ 'shape' => 'SqsParameters', ], ], ], 'TargetArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'TargetInput' => [ 'type' => 'string', 'min' => 1, ], 'TargetPartitionKey' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'TargetSummary' => [ 'type' => 'structure', 'required' => [ 'Arn', ], 'members' => [ 'Arn' => [ 'shape' => 'TargetArn', ], ], ], 'TaskCount' => [ 'type' => 'integer', 'box' => true, 'max' => 10, 'min' => 1, ], 'TaskDefinitionArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagResourceArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'TagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateScheduleInput' => [ 'type' => 'structure', 'required' => [ 'FlexibleTimeWindow', 'Name', 'ScheduleExpression', 'Target', ], 'members' => [ 'ActionAfterCompletion' => [ 'shape' => 'ActionAfterCompletion', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Description' => [ 'shape' => 'Description', ], 'EndDate' => [ 'shape' => 'EndDate', ], 'FlexibleTimeWindow' => [ 'shape' => 'FlexibleTimeWindow', ], 'GroupName' => [ 'shape' => 'ScheduleGroupName', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'ScheduleExpressionTimezone' => [ 'shape' => 'ScheduleExpressionTimezone', ], 'StartDate' => [ 'shape' => 'StartDate', ], 'State' => [ 'shape' => 'ScheduleState', ], 'Target' => [ 'shape' => 'Target', ], ], ], 'UpdateScheduleOutput' => [ 'type' => 'structure', 'required' => [ 'ScheduleArn', ], 'members' => [ 'ScheduleArn' => [ 'shape' => 'ScheduleArn', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
