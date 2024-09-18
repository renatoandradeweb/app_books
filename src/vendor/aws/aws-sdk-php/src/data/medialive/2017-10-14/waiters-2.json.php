<?php

// This file was auto-generated from sdk-root/src/data/medialive/2017-10-14/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ChannelCreated' => [ 'description' => 'Wait until a channel has been created', 'operation' => 'DescribeChannel', 'delay' => 3, 'maxAttempts' => 5, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'IDLE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATE_FAILED', ], ], ], 'ChannelRunning' => [ 'description' => 'Wait until a channel is running', 'operation' => 'DescribeChannel', 'delay' => 5, 'maxAttempts' => 120, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'RUNNING', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'STARTING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'ChannelStopped' => [ 'description' => 'Wait until a channel has is stopped', 'operation' => 'DescribeChannel', 'delay' => 5, 'maxAttempts' => 60, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'IDLE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'STOPPING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'ChannelDeleted' => [ 'description' => 'Wait until a channel has been deleted', 'operation' => 'DescribeChannel', 'delay' => 5, 'maxAttempts' => 84, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'InputAttached' => [ 'description' => 'Wait until an input has been attached', 'operation' => 'DescribeInput', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ATTACHED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DETACHED', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'InputDetached' => [ 'description' => 'Wait until an input has been detached', 'operation' => 'DescribeInput', 'delay' => 5, 'maxAttempts' => 84, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DETACHED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATING', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ATTACHED', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'InputDeleted' => [ 'description' => 'Wait until an input has been deleted', 'operation' => 'DescribeInput', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'MultiplexCreated' => [ 'description' => 'Wait until a multiplex has been created', 'operation' => 'DescribeMultiplex', 'delay' => 3, 'maxAttempts' => 5, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'IDLE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATE_FAILED', ], ], ], 'MultiplexRunning' => [ 'description' => 'Wait until a multiplex is running', 'operation' => 'DescribeMultiplex', 'delay' => 5, 'maxAttempts' => 120, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'RUNNING', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'STARTING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'MultiplexStopped' => [ 'description' => 'Wait until a multiplex has is stopped', 'operation' => 'DescribeMultiplex', 'delay' => 5, 'maxAttempts' => 28, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'IDLE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'STOPPING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'MultiplexDeleted' => [ 'description' => 'Wait until a multiplex has been deleted', 'operation' => 'DescribeMultiplex', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'SignalMapCreated' => [ 'description' => 'Wait until a signal map has been created', 'delay' => 5, 'maxAttempts' => 60, 'operation' => 'GetSignalMap', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'success', 'expected' => 'CREATE_COMPLETE', ], [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'retry', 'expected' => 'CREATE_IN_PROGRESS', ], [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], ], ], 'SignalMapMonitorDeleted' => [ 'description' => 'Wait until a signal map\'s monitor has been deleted', 'delay' => 5, 'maxAttempts' => 120, 'operation' => 'GetSignalMap', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'success', 'expected' => 'DELETE_COMPLETE', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'retry', 'expected' => 'DELETE_IN_PROGRESS', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'SignalMapMonitorDeployed' => [ 'description' => 'Wait until a signal map\'s monitor has been deployed', 'delay' => 5, 'maxAttempts' => 120, 'operation' => 'GetSignalMap', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'success', 'expected' => 'DRY_RUN_DEPLOYMENT_COMPLETE', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'success', 'expected' => 'DEPLOYMENT_COMPLETE', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'retry', 'expected' => 'DRY_RUN_DEPLOYMENT_IN_PROGRESS', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'retry', 'expected' => 'DEPLOYMENT_IN_PROGRESS', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'failure', 'expected' => 'DRY_RUN_DEPLOYMENT_FAILED', ], [ 'matcher' => 'path', 'argument' => 'MonitorDeployment.Status', 'state' => 'failure', 'expected' => 'DEPLOYMENT_FAILED', ], ], ], 'SignalMapUpdated' => [ 'description' => 'Wait until a signal map has been updated', 'delay' => 5, 'maxAttempts' => 60, 'operation' => 'GetSignalMap', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'success', 'expected' => 'UPDATE_COMPLETE', ], [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'retry', 'expected' => 'UPDATE_IN_PROGRESS', ], [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'failure', 'expected' => 'UPDATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'Status', 'state' => 'failure', 'expected' => 'UPDATE_REVERTED', ], ], ], 'ClusterCreated' => [ 'description' => 'Wait until a cluster has been created', 'operation' => 'DescribeCluster', 'delay' => 3, 'maxAttempts' => 5, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ACTIVE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'CREATE_FAILED', ], ], ], 'ClusterDeleted' => [ 'description' => 'Wait until a cluster has been deleted', 'operation' => 'DescribeCluster', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'NodeRegistered' => [ 'description' => 'Wait until a node has been registered', 'operation' => 'DescribeNode', 'delay' => 3, 'maxAttempts' => 5, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ACTIVE', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'REGISTERING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 404, ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'REGISTRATION_FAILED', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'NodeDeregistered' => [ 'description' => 'Wait until a node has been deregistered', 'operation' => 'DescribeNode', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DEREGISTERED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DEREGISTERING', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DRAINING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'ChannelPlacementGroupAssigned' => [ 'description' => 'Wait until the channel placement group has been assigned', 'operation' => 'DescribeChannelPlacementGroup', 'delay' => 3, 'maxAttempts' => 5, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ASSIGNED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'ASSIGNING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'ChannelPlacementGroupUnassigned' => [ 'description' => 'Wait until the channel placement group has been unassigned', 'operation' => 'DescribeChannelPlacementGroup', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'UNASSIGNED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'UNASSIGNING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], 'ChannelPlacementGroupDeleted' => [ 'description' => 'Wait until the channel placement group has been deleted', 'operation' => 'DescribeChannelPlacementGroup', 'delay' => 5, 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETED', ], [ 'state' => 'retry', 'matcher' => 'path', 'argument' => 'State', 'expected' => 'DELETING', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 500, ], ], ], ],];
