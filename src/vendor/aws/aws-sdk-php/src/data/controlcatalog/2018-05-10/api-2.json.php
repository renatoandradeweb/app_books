<?php

// This file was auto-generated from sdk-root/src/data/controlcatalog/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'controlcatalog', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'AWS Control Catalog', 'serviceId' => 'ControlCatalog', 'signatureVersion' => 'v4', 'signingName' => 'controlcatalog', 'uid' => 'controlcatalog-2018-05-10', ], 'operations' => [ 'GetControl' => [ 'name' => 'GetControl', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-control', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetControlRequest', ], 'output' => [ 'shape' => 'GetControlResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListCommonControls' => [ 'name' => 'ListCommonControls', 'http' => [ 'method' => 'POST', 'requestUri' => '/common-controls', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListCommonControlsRequest', ], 'output' => [ 'shape' => 'ListCommonControlsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListControls' => [ 'name' => 'ListControls', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-controls', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListControlsRequest', ], 'output' => [ 'shape' => 'ListControlsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListDomains' => [ 'name' => 'ListDomains', 'http' => [ 'method' => 'POST', 'requestUri' => '/domains', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDomainsRequest', ], 'output' => [ 'shape' => 'ListDomainsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListObjectives' => [ 'name' => 'ListObjectives', 'http' => [ 'method' => 'POST', 'requestUri' => '/objectives', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListObjectivesRequest', ], 'output' => [ 'shape' => 'ListObjectivesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AssociatedDomainSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'DomainArn', ], 'Name' => [ 'shape' => 'String', ], ], ], 'AssociatedObjectiveSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ObjectiveArn', ], 'Name' => [ 'shape' => 'String', ], ], ], 'CommonControlArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 41, 'pattern' => 'arn:(aws(?:[-a-z]*)?):controlcatalog:::common-control/[0-9a-z]+', ], 'CommonControlFilter' => [ 'type' => 'structure', 'members' => [ 'Objectives' => [ 'shape' => 'ObjectiveResourceFilterList', ], ], ], 'CommonControlSummary' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Name', 'Description', 'Domain', 'Objective', 'CreateTime', 'LastUpdateTime', ], 'members' => [ 'Arn' => [ 'shape' => 'CommonControlArn', ], 'Name' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'Domain' => [ 'shape' => 'AssociatedDomainSummary', ], 'Objective' => [ 'shape' => 'AssociatedObjectiveSummary', ], 'CreateTime' => [ 'shape' => 'Timestamp', ], 'LastUpdateTime' => [ 'shape' => 'Timestamp', ], ], ], 'CommonControlSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CommonControlSummary', ], ], 'ControlArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 34, 'pattern' => 'arn:(aws(?:[-a-z]*)?):(controlcatalog|controltower):[a-zA-Z0-9-]*::control/[0-9a-zA-Z_\\-]+', ], 'ControlBehavior' => [ 'type' => 'string', 'enum' => [ 'PREVENTIVE', 'PROACTIVE', 'DETECTIVE', ], ], 'ControlScope' => [ 'type' => 'string', 'enum' => [ 'GLOBAL', 'REGIONAL', ], ], 'ControlSummary' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Name', 'Description', ], 'members' => [ 'Arn' => [ 'shape' => 'ControlArn', ], 'Name' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], ], ], 'Controls' => [ 'type' => 'list', 'member' => [ 'shape' => 'ControlSummary', ], ], 'DeployableRegions' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionCode', ], ], 'DomainArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 33, 'pattern' => 'arn:(aws(?:[-a-z]*)?):controlcatalog:::domain/[0-9a-z]+', ], 'DomainResourceFilter' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'DomainArn', ], ], ], 'DomainResourceFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainResourceFilter', ], ], 'DomainSummary' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Name', 'Description', 'CreateTime', 'LastUpdateTime', ], 'members' => [ 'Arn' => [ 'shape' => 'DomainArn', ], 'Name' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'CreateTime' => [ 'shape' => 'Timestamp', ], 'LastUpdateTime' => [ 'shape' => 'Timestamp', ], ], ], 'DomainSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSummary', ], ], 'GetControlRequest' => [ 'type' => 'structure', 'required' => [ 'ControlArn', ], 'members' => [ 'ControlArn' => [ 'shape' => 'ControlArn', ], ], ], 'GetControlResponse' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Name', 'Description', 'Behavior', 'RegionConfiguration', ], 'members' => [ 'Arn' => [ 'shape' => 'ControlArn', ], 'Name' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'Behavior' => [ 'shape' => 'ControlBehavior', ], 'RegionConfiguration' => [ 'shape' => 'RegionConfiguration', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'ListCommonControlsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxListCommonControlsResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'CommonControlFilter' => [ 'shape' => 'CommonControlFilter', ], ], ], 'ListCommonControlsResponse' => [ 'type' => 'structure', 'required' => [ 'CommonControls', ], 'members' => [ 'CommonControls' => [ 'shape' => 'CommonControlSummaryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListControlsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'MaxListControlsResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListControlsResponse' => [ 'type' => 'structure', 'required' => [ 'Controls', ], 'members' => [ 'Controls' => [ 'shape' => 'Controls', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListDomainsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxListDomainsResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListDomainsResponse' => [ 'type' => 'structure', 'required' => [ 'Domains', ], 'members' => [ 'Domains' => [ 'shape' => 'DomainSummaryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListObjectivesRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxListObjectivesResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'ObjectiveFilter' => [ 'shape' => 'ObjectiveFilter', ], ], ], 'ListObjectivesResponse' => [ 'type' => 'structure', 'required' => [ 'Objectives', ], 'members' => [ 'Objectives' => [ 'shape' => 'ObjectiveSummaryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'MaxListCommonControlsResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxListControlsResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxListDomainsResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxListObjectivesResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ObjectiveArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 36, 'pattern' => 'arn:(aws(?:[-a-z]*)?):controlcatalog:::objective/[0-9a-z]+', ], 'ObjectiveFilter' => [ 'type' => 'structure', 'members' => [ 'Domains' => [ 'shape' => 'DomainResourceFilterList', ], ], ], 'ObjectiveResourceFilter' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ObjectiveArn', ], ], ], 'ObjectiveResourceFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ObjectiveResourceFilter', ], ], 'ObjectiveSummary' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Name', 'Description', 'Domain', 'CreateTime', 'LastUpdateTime', ], 'members' => [ 'Arn' => [ 'shape' => 'ObjectiveArn', ], 'Name' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'Domain' => [ 'shape' => 'AssociatedDomainSummary', ], 'CreateTime' => [ 'shape' => 'Timestamp', ], 'LastUpdateTime' => [ 'shape' => 'Timestamp', ], ], ], 'ObjectiveSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ObjectiveSummary', ], ], 'PaginationToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'RegionCode' => [ 'type' => 'string', 'pattern' => '[a-zA-Z0-9-]{1,128}', ], 'RegionConfiguration' => [ 'type' => 'structure', 'required' => [ 'Scope', ], 'members' => [ 'Scope' => [ 'shape' => 'ControlScope', ], 'DeployableRegions' => [ 'shape' => 'DeployableRegions', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
