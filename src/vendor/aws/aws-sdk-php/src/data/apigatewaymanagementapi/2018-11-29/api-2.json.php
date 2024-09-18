<?php

// This file was auto-generated from sdk-root/src/data/apigatewaymanagementapi/2018-11-29/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2018-11-29', 'endpointPrefix' => 'execute-api', 'signingName' => 'execute-api', 'serviceFullName' => 'AmazonApiGatewayManagementApi', 'serviceId' => 'ApiGatewayManagementApi', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'apigatewaymanagementapi-2018-11-29', 'signatureVersion' => 'v4', ], 'operations' => [ 'DeleteConnection' => [ 'name' => 'DeleteConnection', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/@connections/{connectionId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteConnectionRequest', ], 'errors' => [ [ 'shape' => 'GoneException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'GetConnection' => [ 'name' => 'GetConnection', 'http' => [ 'method' => 'GET', 'requestUri' => '/@connections/{connectionId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetConnectionRequest', ], 'output' => [ 'shape' => 'GetConnectionResponse', ], 'errors' => [ [ 'shape' => 'GoneException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'PostToConnection' => [ 'name' => 'PostToConnection', 'http' => [ 'method' => 'POST', 'requestUri' => '/@connections/{connectionId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PostToConnectionRequest', ], 'errors' => [ [ 'shape' => 'GoneException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'PayloadTooLargeException', ], [ 'shape' => 'ForbiddenException', ], ], ], ], 'shapes' => [ 'Data' => [ 'type' => 'blob', 'max' => 131072, ], 'DeleteConnectionRequest' => [ 'type' => 'structure', 'members' => [ 'ConnectionId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'connectionId', ], ], 'required' => [ 'ConnectionId', ], ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'error' => [ 'httpStatusCode' => 403, ], ], 'GetConnectionRequest' => [ 'type' => 'structure', 'members' => [ 'ConnectionId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'connectionId', ], ], 'required' => [ 'ConnectionId', ], ], 'GetConnectionResponse' => [ 'type' => 'structure', 'members' => [ 'ConnectedAt' => [ 'shape' => '__timestampIso8601', 'locationName' => 'connectedAt', ], 'Identity' => [ 'shape' => 'Identity', 'locationName' => 'identity', ], 'LastActiveAt' => [ 'shape' => '__timestampIso8601', 'locationName' => 'lastActiveAt', ], ], ], 'GoneException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'error' => [ 'httpStatusCode' => 410, ], ], 'Identity' => [ 'type' => 'structure', 'members' => [ 'SourceIp' => [ 'shape' => '__string', 'locationName' => 'sourceIp', ], 'UserAgent' => [ 'shape' => '__string', 'locationName' => 'userAgent', ], ], 'required' => [ 'SourceIp', 'UserAgent', ], ], 'PayloadTooLargeException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 413, ], ], 'PostToConnectionRequest' => [ 'type' => 'structure', 'members' => [ 'Data' => [ 'shape' => 'Data', ], 'ConnectionId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'connectionId', ], ], 'required' => [ 'ConnectionId', 'Data', ], 'payload' => 'Data', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'error' => [ 'httpStatusCode' => 429, ], ], '__string' => [ 'type' => 'string', ], '__timestampIso8601' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], ],];
