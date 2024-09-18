<?php

// This file was auto-generated from sdk-root/src/data/pcs/2023-02-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-02-10', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'pcs', 'jsonVersion' => '1.0', 'protocol' => 'json', 'protocols' => [ 'json', ], 'serviceFullName' => 'AWS Parallel Computing Service', 'serviceId' => 'PCS', 'signatureVersion' => 'v4', 'signingName' => 'pcs', 'targetPrefix' => 'AWSParallelComputingService', 'uid' => 'pcs-2023-02-10', ], 'operations' => [ 'CreateCluster' => [ 'name' => 'CreateCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateClusterRequest', ], 'output' => [ 'shape' => 'CreateClusterResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'CreateComputeNodeGroup' => [ 'name' => 'CreateComputeNodeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateComputeNodeGroupRequest', ], 'output' => [ 'shape' => 'CreateComputeNodeGroupResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'CreateQueue' => [ 'name' => 'CreateQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateQueueRequest', ], 'output' => [ 'shape' => 'CreateQueueResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteCluster' => [ 'name' => 'DeleteCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteClusterRequest', ], 'output' => [ 'shape' => 'DeleteClusterResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteComputeNodeGroup' => [ 'name' => 'DeleteComputeNodeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteComputeNodeGroupRequest', ], 'output' => [ 'shape' => 'DeleteComputeNodeGroupResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteQueue' => [ 'name' => 'DeleteQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteQueueRequest', ], 'output' => [ 'shape' => 'DeleteQueueResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'GetCluster' => [ 'name' => 'GetCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetClusterRequest', ], 'output' => [ 'shape' => 'GetClusterResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetComputeNodeGroup' => [ 'name' => 'GetComputeNodeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetComputeNodeGroupRequest', ], 'output' => [ 'shape' => 'GetComputeNodeGroupResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetQueue' => [ 'name' => 'GetQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetQueueRequest', ], 'output' => [ 'shape' => 'GetQueueResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListClusters' => [ 'name' => 'ListClusters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListClustersRequest', ], 'output' => [ 'shape' => 'ListClustersResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListComputeNodeGroups' => [ 'name' => 'ListComputeNodeGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListComputeNodeGroupsRequest', ], 'output' => [ 'shape' => 'ListComputeNodeGroupsResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListQueues' => [ 'name' => 'ListQueues', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListQueuesRequest', ], 'output' => [ 'shape' => 'ListQueuesResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'RegisterComputeNodeGroupInstance' => [ 'name' => 'RegisterComputeNodeGroupInstance', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RegisterComputeNodeGroupInstanceRequest', ], 'output' => [ 'shape' => 'RegisterComputeNodeGroupInstanceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UpdateComputeNodeGroup' => [ 'name' => 'UpdateComputeNodeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateComputeNodeGroupRequest', ], 'output' => [ 'shape' => 'UpdateComputeNodeGroupResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UpdateQueue' => [ 'name' => 'UpdateQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateQueueRequest', ], 'output' => [ 'shape' => 'UpdateQueueResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'AmiId' => [ 'type' => 'string', 'pattern' => 'ami-[a-z0-9]+', ], 'Arn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => 'arn:aws*:pcs:.*:[0-9]{12}:.*/[a-z0-9_\\-]+', ], 'BootstrapId' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '[\\S]+', ], 'Cluster' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'status', 'createdAt', 'modifiedAt', 'scheduler', 'size', 'networking', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'ClusterStatus', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'scheduler' => [ 'shape' => 'Scheduler', ], 'size' => [ 'shape' => 'Size', ], 'slurmConfiguration' => [ 'shape' => 'ClusterSlurmConfiguration', ], 'networking' => [ 'shape' => 'Networking', ], 'endpoints' => [ 'shape' => 'Endpoints', ], 'errorInfo' => [ 'shape' => 'ErrorInfoList', ], ], ], 'ClusterIdentifier' => [ 'type' => 'string', 'pattern' => '(pcs_[a-zA-Z0-9]+|[A-Za-z][A-Za-z0-9-]{1,40})', ], 'ClusterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterSummary', ], ], 'ClusterName' => [ 'type' => 'string', 'max' => 40, 'min' => 1, 'pattern' => '(?!pcs_)^(?![A-Za-z0-9]{10}$)[A-Za-z][A-Za-z0-9-]+', ], 'ClusterSlurmConfiguration' => [ 'type' => 'structure', 'members' => [ 'scaleDownIdleTimeInSeconds' => [ 'shape' => 'ClusterSlurmConfigurationScaleDownIdleTimeInSecondsInteger', ], 'slurmCustomSettings' => [ 'shape' => 'SlurmCustomSettings', ], 'authKey' => [ 'shape' => 'SlurmAuthKey', ], ], ], 'ClusterSlurmConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'scaleDownIdleTimeInSeconds' => [ 'shape' => 'ClusterSlurmConfigurationRequestScaleDownIdleTimeInSecondsInteger', ], 'slurmCustomSettings' => [ 'shape' => 'SlurmCustomSettings', ], ], ], 'ClusterSlurmConfigurationRequestScaleDownIdleTimeInSecondsInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 1, ], 'ClusterSlurmConfigurationScaleDownIdleTimeInSecondsInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 1, ], 'ClusterStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATE_FAILED', 'DELETE_FAILED', 'UPDATE_FAILED', ], ], 'ClusterSummary' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'createdAt', 'modifiedAt', 'status', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'status' => [ 'shape' => 'ClusterStatus', ], ], ], 'ComputeNodeGroup' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'clusterId', 'createdAt', 'modifiedAt', 'status', 'subnetIds', 'customLaunchTemplate', 'iamInstanceProfileArn', 'scalingConfiguration', 'instanceConfigs', ], 'members' => [ 'name' => [ 'shape' => 'ComputeNodeGroupName', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'clusterId' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'status' => [ 'shape' => 'ComputeNodeGroupStatus', ], 'amiId' => [ 'shape' => 'AmiId', ], 'subnetIds' => [ 'shape' => 'SubnetIdList', ], 'purchaseOption' => [ 'shape' => 'PurchaseOption', ], 'customLaunchTemplate' => [ 'shape' => 'CustomLaunchTemplate', ], 'iamInstanceProfileArn' => [ 'shape' => 'InstanceProfileArn', ], 'scalingConfiguration' => [ 'shape' => 'ScalingConfiguration', ], 'instanceConfigs' => [ 'shape' => 'InstanceList', ], 'spotOptions' => [ 'shape' => 'SpotOptions', ], 'slurmConfiguration' => [ 'shape' => 'ComputeNodeGroupSlurmConfiguration', ], 'errorInfo' => [ 'shape' => 'ErrorInfoList', ], ], ], 'ComputeNodeGroupConfiguration' => [ 'type' => 'structure', 'members' => [ 'computeNodeGroupId' => [ 'shape' => 'String', ], ], ], 'ComputeNodeGroupConfigurationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComputeNodeGroupConfiguration', ], ], 'ComputeNodeGroupIdentifier' => [ 'type' => 'string', 'pattern' => '(pcs_[a-zA-Z0-9]+|[A-Za-z][A-Za-z0-9-]{1,25})', ], 'ComputeNodeGroupList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComputeNodeGroupSummary', ], ], 'ComputeNodeGroupName' => [ 'type' => 'string', 'max' => 25, 'min' => 1, 'pattern' => '(?!pcs_)^(?![A-Za-z0-9]{10}$)[A-Za-z][A-Za-z0-9-]+', ], 'ComputeNodeGroupSlurmConfiguration' => [ 'type' => 'structure', 'members' => [ 'slurmCustomSettings' => [ 'shape' => 'SlurmCustomSettings', ], ], ], 'ComputeNodeGroupSlurmConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'slurmCustomSettings' => [ 'shape' => 'SlurmCustomSettings', ], ], ], 'ComputeNodeGroupStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATE_FAILED', 'DELETE_FAILED', 'UPDATE_FAILED', 'DELETED', ], ], 'ComputeNodeGroupSummary' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'clusterId', 'createdAt', 'modifiedAt', 'status', ], 'members' => [ 'name' => [ 'shape' => 'ComputeNodeGroupName', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'clusterId' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'status' => [ 'shape' => 'ComputeNodeGroupStatus', ], ], ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CreateClusterRequest' => [ 'type' => 'structure', 'required' => [ 'clusterName', 'scheduler', 'size', 'networking', ], 'members' => [ 'clusterName' => [ 'shape' => 'ClusterName', ], 'scheduler' => [ 'shape' => 'SchedulerRequest', ], 'size' => [ 'shape' => 'Size', ], 'networking' => [ 'shape' => 'NetworkingRequest', ], 'slurmConfiguration' => [ 'shape' => 'ClusterSlurmConfigurationRequest', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'RequestTagMap', ], ], ], 'CreateClusterResponse' => [ 'type' => 'structure', 'members' => [ 'cluster' => [ 'shape' => 'Cluster', ], ], ], 'CreateComputeNodeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'computeNodeGroupName', 'subnetIds', 'customLaunchTemplate', 'iamInstanceProfileArn', 'scalingConfiguration', 'instanceConfigs', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'computeNodeGroupName' => [ 'shape' => 'ComputeNodeGroupName', ], 'amiId' => [ 'shape' => 'AmiId', ], 'subnetIds' => [ 'shape' => 'StringList', ], 'purchaseOption' => [ 'shape' => 'PurchaseOption', ], 'customLaunchTemplate' => [ 'shape' => 'CustomLaunchTemplate', ], 'iamInstanceProfileArn' => [ 'shape' => 'InstanceProfileArn', ], 'scalingConfiguration' => [ 'shape' => 'ScalingConfigurationRequest', ], 'instanceConfigs' => [ 'shape' => 'InstanceList', ], 'spotOptions' => [ 'shape' => 'SpotOptions', ], 'slurmConfiguration' => [ 'shape' => 'ComputeNodeGroupSlurmConfigurationRequest', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'RequestTagMap', ], ], ], 'CreateComputeNodeGroupResponse' => [ 'type' => 'structure', 'members' => [ 'computeNodeGroup' => [ 'shape' => 'ComputeNodeGroup', ], ], ], 'CreateQueueRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'queueName', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'queueName' => [ 'shape' => 'QueueName', ], 'computeNodeGroupConfigurations' => [ 'shape' => 'ComputeNodeGroupConfigurationList', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'RequestTagMap', ], ], ], 'CreateQueueResponse' => [ 'type' => 'structure', 'members' => [ 'queue' => [ 'shape' => 'Queue', ], ], ], 'CustomLaunchTemplate' => [ 'type' => 'structure', 'required' => [ 'id', 'version', ], 'members' => [ 'id' => [ 'shape' => 'String', ], 'version' => [ 'shape' => 'String', ], ], ], 'DeleteClusterRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], ], ], 'DeleteClusterResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteComputeNodeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'computeNodeGroupIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'computeNodeGroupIdentifier' => [ 'shape' => 'ComputeNodeGroupIdentifier', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], ], ], 'DeleteComputeNodeGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteQueueRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'queueIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'queueIdentifier' => [ 'shape' => 'QueueIdentifier', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], ], ], 'DeleteQueueResponse' => [ 'type' => 'structure', 'members' => [], ], 'Endpoint' => [ 'type' => 'structure', 'required' => [ 'type', 'privateIpAddress', 'port', ], 'members' => [ 'type' => [ 'shape' => 'EndpointType', ], 'privateIpAddress' => [ 'shape' => 'String', ], 'publicIpAddress' => [ 'shape' => 'String', ], 'port' => [ 'shape' => 'String', ], ], ], 'EndpointType' => [ 'type' => 'string', 'enum' => [ 'SLURMCTLD', 'SLURMDBD', ], ], 'Endpoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'Endpoint', ], ], 'ErrorInfo' => [ 'type' => 'structure', 'members' => [ 'code' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], ], 'ErrorInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorInfo', ], ], 'GetClusterRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], ], ], 'GetClusterResponse' => [ 'type' => 'structure', 'members' => [ 'cluster' => [ 'shape' => 'Cluster', ], ], ], 'GetComputeNodeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'computeNodeGroupIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'computeNodeGroupIdentifier' => [ 'shape' => 'ComputeNodeGroupIdentifier', ], ], ], 'GetComputeNodeGroupResponse' => [ 'type' => 'structure', 'members' => [ 'computeNodeGroup' => [ 'shape' => 'ComputeNodeGroup', ], ], ], 'GetQueueRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'queueIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'queueIdentifier' => [ 'shape' => 'QueueIdentifier', ], ], ], 'GetQueueResponse' => [ 'type' => 'structure', 'members' => [ 'queue' => [ 'shape' => 'Queue', ], ], ], 'InstanceConfig' => [ 'type' => 'structure', 'members' => [ 'instanceType' => [ 'shape' => 'String', ], ], ], 'InstanceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceConfig', ], ], 'InstanceProfileArn' => [ 'type' => 'string', 'pattern' => 'arn:aws([a-zA-Z-]{0,10})?:iam::[0-9]{12}:instance-profile/.{1,128}', ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'ListClustersRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListClustersResponse' => [ 'type' => 'structure', 'required' => [ 'clusters', ], 'members' => [ 'clusters' => [ 'shape' => 'ClusterList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListComputeNodeGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListComputeNodeGroupsResponse' => [ 'type' => 'structure', 'required' => [ 'computeNodeGroups', ], 'members' => [ 'computeNodeGroups' => [ 'shape' => 'ComputeNodeGroupList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListQueuesRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListQueuesResponse' => [ 'type' => 'structure', 'required' => [ 'queues', ], 'members' => [ 'queues' => [ 'shape' => 'QueueList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'ResponseTagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'Networking' => [ 'type' => 'structure', 'members' => [ 'subnetIds' => [ 'shape' => 'SubnetIdList', ], 'securityGroupIds' => [ 'shape' => 'SecurityGroupIdList', ], ], ], 'NetworkingRequest' => [ 'type' => 'structure', 'members' => [ 'subnetIds' => [ 'shape' => 'SubnetIdList', ], 'securityGroupIds' => [ 'shape' => 'SecurityGroupIdList', ], ], ], 'PurchaseOption' => [ 'type' => 'string', 'enum' => [ 'ONDEMAND', 'SPOT', ], ], 'Queue' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'clusterId', 'createdAt', 'modifiedAt', 'status', 'computeNodeGroupConfigurations', ], 'members' => [ 'name' => [ 'shape' => 'QueueName', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'clusterId' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'status' => [ 'shape' => 'QueueStatus', ], 'computeNodeGroupConfigurations' => [ 'shape' => 'ComputeNodeGroupConfigurationList', ], 'errorInfo' => [ 'shape' => 'ErrorInfoList', ], ], ], 'QueueIdentifier' => [ 'type' => 'string', 'pattern' => '(pcs_[a-zA-Z0-9]+|[A-Za-z][A-Za-z0-9-]{1,25})', ], 'QueueList' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueueSummary', ], ], 'QueueName' => [ 'type' => 'string', 'max' => 25, 'min' => 1, 'pattern' => '(?!pcs_)^(?![A-Za-z0-9]{10}$)[A-Za-z][A-Za-z0-9-]+', ], 'QueueStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATE_FAILED', 'DELETE_FAILED', 'UPDATE_FAILED', ], ], 'QueueSummary' => [ 'type' => 'structure', 'required' => [ 'name', 'id', 'arn', 'clusterId', 'createdAt', 'modifiedAt', 'status', ], 'members' => [ 'name' => [ 'shape' => 'QueueName', ], 'id' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'clusterId' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'modifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'status' => [ 'shape' => 'QueueStatus', ], ], ], 'RegisterComputeNodeGroupInstanceRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'bootstrapId', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'bootstrapId' => [ 'shape' => 'BootstrapId', ], ], ], 'RegisterComputeNodeGroupInstanceResponse' => [ 'type' => 'structure', 'required' => [ 'nodeID', 'sharedSecret', 'endpoints', ], 'members' => [ 'nodeID' => [ 'shape' => 'String', ], 'sharedSecret' => [ 'shape' => 'SharedSecret', ], 'endpoints' => [ 'shape' => 'Endpoints', ], ], ], 'RequestTagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 200, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResponseTagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'SBClientToken' => [ 'type' => 'string', 'max' => 100, 'min' => 8, ], 'ScalingConfiguration' => [ 'type' => 'structure', 'required' => [ 'minInstanceCount', 'maxInstanceCount', ], 'members' => [ 'minInstanceCount' => [ 'shape' => 'ScalingConfigurationMinInstanceCountInteger', ], 'maxInstanceCount' => [ 'shape' => 'ScalingConfigurationMaxInstanceCountInteger', ], ], ], 'ScalingConfigurationMaxInstanceCountInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'ScalingConfigurationMinInstanceCountInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'ScalingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'minInstanceCount', 'maxInstanceCount', ], 'members' => [ 'minInstanceCount' => [ 'shape' => 'ScalingConfigurationRequestMinInstanceCountInteger', ], 'maxInstanceCount' => [ 'shape' => 'ScalingConfigurationRequestMaxInstanceCountInteger', ], ], ], 'ScalingConfigurationRequestMaxInstanceCountInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'ScalingConfigurationRequestMinInstanceCountInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'Scheduler' => [ 'type' => 'structure', 'required' => [ 'type', 'version', ], 'members' => [ 'type' => [ 'shape' => 'SchedulerType', ], 'version' => [ 'shape' => 'String', ], ], ], 'SchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'type', 'version', ], 'members' => [ 'type' => [ 'shape' => 'SchedulerType', ], 'version' => [ 'shape' => 'String', ], ], ], 'SchedulerType' => [ 'type' => 'string', 'enum' => [ 'SLURM', ], ], 'SecurityGroupId' => [ 'type' => 'string', 'pattern' => 'sg-\\w{8,17}', ], 'SecurityGroupIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupId', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', 'serviceCode', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'serviceCode' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], 'quotaCode' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'SharedSecret' => [ 'type' => 'string', 'sensitive' => true, ], 'Size' => [ 'type' => 'string', 'enum' => [ 'SMALL', 'MEDIUM', 'LARGE', ], ], 'SlurmAuthKey' => [ 'type' => 'structure', 'required' => [ 'secretArn', 'secretVersion', ], 'members' => [ 'secretArn' => [ 'shape' => 'String', ], 'secretVersion' => [ 'shape' => 'String', ], ], ], 'SlurmCustomSetting' => [ 'type' => 'structure', 'required' => [ 'parameterName', 'parameterValue', ], 'members' => [ 'parameterName' => [ 'shape' => 'String', ], 'parameterValue' => [ 'shape' => 'String', ], ], ], 'SlurmCustomSettings' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlurmCustomSetting', ], ], 'SpotAllocationStrategy' => [ 'type' => 'string', 'enum' => [ 'lowest-price', 'capacity-optimized', 'price-capacity-optimized', ], ], 'SpotOptions' => [ 'type' => 'structure', 'members' => [ 'allocationStrategy' => [ 'shape' => 'SpotAllocationStrategy', ], ], ], 'String' => [ 'type' => 'string', ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SubnetId' => [ 'type' => 'string', 'pattern' => 'subnet-\\w{8,17}', ], 'SubnetIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetId', ], 'min' => 1, ], 'SyntheticTimestamp_date_time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], 'tags' => [ 'shape' => 'RequestTagMap', ], ], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', ], ], 'exception' => true, 'retryable' => [ 'throttling' => false, ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], 'tagKeys' => [ 'shape' => 'TagKeys', ], ], ], 'UpdateComputeNodeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'computeNodeGroupIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'computeNodeGroupIdentifier' => [ 'shape' => 'ComputeNodeGroupIdentifier', ], 'amiId' => [ 'shape' => 'AmiId', ], 'subnetIds' => [ 'shape' => 'StringList', ], 'customLaunchTemplate' => [ 'shape' => 'CustomLaunchTemplate', ], 'purchaseOption' => [ 'shape' => 'PurchaseOption', ], 'spotOptions' => [ 'shape' => 'SpotOptions', ], 'scalingConfiguration' => [ 'shape' => 'ScalingConfigurationRequest', ], 'iamInstanceProfileArn' => [ 'shape' => 'InstanceProfileArn', ], 'slurmConfiguration' => [ 'shape' => 'UpdateComputeNodeGroupSlurmConfigurationRequest', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], ], ], 'UpdateComputeNodeGroupResponse' => [ 'type' => 'structure', 'members' => [ 'computeNodeGroup' => [ 'shape' => 'ComputeNodeGroup', ], ], ], 'UpdateComputeNodeGroupSlurmConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'slurmCustomSettings' => [ 'shape' => 'SlurmCustomSettings', ], ], ], 'UpdateQueueRequest' => [ 'type' => 'structure', 'required' => [ 'clusterIdentifier', 'queueIdentifier', ], 'members' => [ 'clusterIdentifier' => [ 'shape' => 'ClusterIdentifier', ], 'queueIdentifier' => [ 'shape' => 'QueueIdentifier', ], 'computeNodeGroupConfigurations' => [ 'shape' => 'ComputeNodeGroupConfigurationList', ], 'clientToken' => [ 'shape' => 'SBClientToken', 'idempotencyToken' => true, ], ], ], 'UpdateQueueResponse' => [ 'type' => 'structure', 'members' => [ 'queue' => [ 'shape' => 'Queue', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', 'reason', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'name', 'message', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'unknownOperation', 'cannotParse', 'fieldValidationFailed', 'other', ], ], ],];
