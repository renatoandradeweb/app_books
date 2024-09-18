<?php

// This file was auto-generated from sdk-root/src/data/internetmonitor/2021-06-03/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-06-03', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'internetmonitor', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Amazon CloudWatch Internet Monitor', 'serviceId' => 'InternetMonitor', 'signatureVersion' => 'v4', 'signingName' => 'internetmonitor', 'uid' => 'internetmonitor-2021-06-03', ], 'operations' => [ 'CreateMonitor' => [ 'name' => 'CreateMonitor', 'http' => [ 'method' => 'POST', 'requestUri' => '/v20210603/Monitors', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateMonitorInput', ], 'output' => [ 'shape' => 'CreateMonitorOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], 'idempotent' => true, ], 'DeleteMonitor' => [ 'name' => 'DeleteMonitor', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v20210603/Monitors/{MonitorName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteMonitorInput', ], 'output' => [ 'shape' => 'DeleteMonitorOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], 'idempotent' => true, ], 'GetHealthEvent' => [ 'name' => 'GetHealthEvent', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors/{MonitorName}/HealthEvents/{EventId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetHealthEventInput', ], 'output' => [ 'shape' => 'GetHealthEventOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetInternetEvent' => [ 'name' => 'GetInternetEvent', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/InternetEvents/{EventId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetInternetEventInput', ], 'output' => [ 'shape' => 'GetInternetEventOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetMonitor' => [ 'name' => 'GetMonitor', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors/{MonitorName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetMonitorInput', ], 'output' => [ 'shape' => 'GetMonitorOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetQueryResults' => [ 'name' => 'GetQueryResults', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors/{MonitorName}/Queries/{QueryId}/Results', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetQueryResultsInput', ], 'output' => [ 'shape' => 'GetQueryResultsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetQueryStatus' => [ 'name' => 'GetQueryStatus', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors/{MonitorName}/Queries/{QueryId}/Status', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetQueryStatusInput', ], 'output' => [ 'shape' => 'GetQueryStatusOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListHealthEvents' => [ 'name' => 'ListHealthEvents', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors/{MonitorName}/HealthEvents', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListHealthEventsInput', ], 'output' => [ 'shape' => 'ListHealthEventsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListInternetEvents' => [ 'name' => 'ListInternetEvents', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/InternetEvents', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListInternetEventsInput', ], 'output' => [ 'shape' => 'ListInternetEventsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListMonitors' => [ 'name' => 'ListMonitors', 'http' => [ 'method' => 'GET', 'requestUri' => '/v20210603/Monitors', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListMonitorsInput', ], 'output' => [ 'shape' => 'ListMonitorsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'StartQuery' => [ 'name' => 'StartQuery', 'http' => [ 'method' => 'POST', 'requestUri' => '/v20210603/Monitors/{MonitorName}/Queries', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartQueryInput', ], 'output' => [ 'shape' => 'StartQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], ], 'StopQuery' => [ 'name' => 'StopQuery', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v20210603/Monitors/{MonitorName}/Queries/{QueryId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StopQueryInput', ], 'output' => [ 'shape' => 'StopQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'UpdateMonitor' => [ 'name' => 'UpdateMonitor', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/v20210603/Monitors/{MonitorName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateMonitorInput', ], 'output' => [ 'shape' => 'UpdateMonitorOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, ], 'Arn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:.*', ], 'AvailabilityMeasurement' => [ 'type' => 'structure', 'members' => [ 'ExperienceScore' => [ 'shape' => 'Double', ], 'PercentOfTotalTrafficImpacted' => [ 'shape' => 'Double', ], 'PercentOfClientLocationImpacted' => [ 'shape' => 'Double', ], ], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ClientLocation' => [ 'type' => 'structure', 'required' => [ 'ASName', 'ASNumber', 'Country', 'City', 'Latitude', 'Longitude', ], 'members' => [ 'ASName' => [ 'shape' => 'String', ], 'ASNumber' => [ 'shape' => 'Long', ], 'Country' => [ 'shape' => 'String', ], 'Subdivision' => [ 'shape' => 'String', ], 'Metro' => [ 'shape' => 'String', ], 'City' => [ 'shape' => 'String', ], 'Latitude' => [ 'shape' => 'Double', ], 'Longitude' => [ 'shape' => 'Double', ], ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateMonitorInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', ], 'Resources' => [ 'shape' => 'SetOfARNs', ], 'ClientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagMap', ], 'MaxCityNetworksToMonitor' => [ 'shape' => 'MaxCityNetworksToMonitor', ], 'InternetMeasurementsLogDelivery' => [ 'shape' => 'InternetMeasurementsLogDelivery', ], 'TrafficPercentageToMonitor' => [ 'shape' => 'TrafficPercentageToMonitor', ], 'HealthEventsConfig' => [ 'shape' => 'HealthEventsConfig', ], ], ], 'CreateMonitorOutput' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Status', ], 'members' => [ 'Arn' => [ 'shape' => 'MonitorArn', ], 'Status' => [ 'shape' => 'MonitorConfigState', ], ], ], 'DeleteMonitorInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], ], ], 'DeleteMonitorOutput' => [ 'type' => 'structure', 'members' => [], ], 'Double' => [ 'type' => 'double', 'box' => true, ], 'FilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'FilterParameter' => [ 'type' => 'structure', 'members' => [ 'Field' => [ 'shape' => 'String', ], 'Operator' => [ 'shape' => 'Operator', ], 'Values' => [ 'shape' => 'FilterList', ], ], ], 'FilterParameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterParameter', ], ], 'GetHealthEventInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'EventId', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'EventId' => [ 'shape' => 'HealthEventName', 'location' => 'uri', 'locationName' => 'EventId', ], 'LinkedAccountId' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'LinkedAccountId', ], ], ], 'GetHealthEventOutput' => [ 'type' => 'structure', 'required' => [ 'EventArn', 'EventId', 'StartedAt', 'LastUpdatedAt', 'ImpactedLocations', 'Status', 'ImpactType', ], 'members' => [ 'EventArn' => [ 'shape' => 'Arn', ], 'EventId' => [ 'shape' => 'HealthEventName', ], 'StartedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'EndedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'CreatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ImpactedLocations' => [ 'shape' => 'ImpactedLocationsList', ], 'Status' => [ 'shape' => 'HealthEventStatus', ], 'PercentOfTotalTrafficImpacted' => [ 'shape' => 'Double', ], 'ImpactType' => [ 'shape' => 'HealthEventImpactType', ], 'HealthScoreThreshold' => [ 'shape' => 'Percentage', ], ], ], 'GetInternetEventInput' => [ 'type' => 'structure', 'required' => [ 'EventId', ], 'members' => [ 'EventId' => [ 'shape' => 'InternetEventId', 'location' => 'uri', 'locationName' => 'EventId', ], ], ], 'GetInternetEventOutput' => [ 'type' => 'structure', 'required' => [ 'EventId', 'EventArn', 'StartedAt', 'ClientLocation', 'EventType', 'EventStatus', ], 'members' => [ 'EventId' => [ 'shape' => 'InternetEventId', ], 'EventArn' => [ 'shape' => 'Arn', ], 'StartedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'EndedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ClientLocation' => [ 'shape' => 'ClientLocation', ], 'EventType' => [ 'shape' => 'InternetEventType', ], 'EventStatus' => [ 'shape' => 'InternetEventStatus', ], ], ], 'GetMonitorInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'LinkedAccountId' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'LinkedAccountId', ], ], ], 'GetMonitorOutput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'MonitorArn', 'Resources', 'Status', 'CreatedAt', 'ModifiedAt', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', ], 'MonitorArn' => [ 'shape' => 'MonitorArn', ], 'Resources' => [ 'shape' => 'SetOfARNs', ], 'Status' => [ 'shape' => 'MonitorConfigState', ], 'CreatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ModifiedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ProcessingStatus' => [ 'shape' => 'MonitorProcessingStatusCode', ], 'ProcessingStatusInfo' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagMap', ], 'MaxCityNetworksToMonitor' => [ 'shape' => 'MaxCityNetworksToMonitor', ], 'InternetMeasurementsLogDelivery' => [ 'shape' => 'InternetMeasurementsLogDelivery', ], 'TrafficPercentageToMonitor' => [ 'shape' => 'TrafficPercentageToMonitor', ], 'HealthEventsConfig' => [ 'shape' => 'HealthEventsConfig', ], ], ], 'GetQueryResultsInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'QueryId', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'QueryId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'QueryId', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'QueryMaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], ], ], 'GetQueryResultsOutput' => [ 'type' => 'structure', 'required' => [ 'Fields', 'Data', ], 'members' => [ 'Fields' => [ 'shape' => 'QueryFields', ], 'Data' => [ 'shape' => 'QueryData', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetQueryStatusInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'QueryId', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'QueryId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'QueryId', ], ], ], 'GetQueryStatusOutput' => [ 'type' => 'structure', 'required' => [ 'Status', ], 'members' => [ 'Status' => [ 'shape' => 'QueryStatus', ], ], ], 'HealthEvent' => [ 'type' => 'structure', 'required' => [ 'EventArn', 'EventId', 'StartedAt', 'LastUpdatedAt', 'ImpactedLocations', 'Status', 'ImpactType', ], 'members' => [ 'EventArn' => [ 'shape' => 'Arn', ], 'EventId' => [ 'shape' => 'HealthEventName', ], 'StartedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'EndedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'CreatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ImpactedLocations' => [ 'shape' => 'ImpactedLocationsList', ], 'Status' => [ 'shape' => 'HealthEventStatus', ], 'PercentOfTotalTrafficImpacted' => [ 'shape' => 'Double', ], 'ImpactType' => [ 'shape' => 'HealthEventImpactType', ], 'HealthScoreThreshold' => [ 'shape' => 'Percentage', ], ], ], 'HealthEventImpactType' => [ 'type' => 'string', 'enum' => [ 'AVAILABILITY', 'PERFORMANCE', 'LOCAL_AVAILABILITY', 'LOCAL_PERFORMANCE', ], ], 'HealthEventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'HealthEvent', ], ], 'HealthEventName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[a-zA-Z0-9/_.-]+', ], 'HealthEventStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'RESOLVED', ], ], 'HealthEventsConfig' => [ 'type' => 'structure', 'members' => [ 'AvailabilityScoreThreshold' => [ 'shape' => 'Percentage', ], 'PerformanceScoreThreshold' => [ 'shape' => 'Percentage', ], 'AvailabilityLocalHealthEventsConfig' => [ 'shape' => 'LocalHealthEventsConfig', ], 'PerformanceLocalHealthEventsConfig' => [ 'shape' => 'LocalHealthEventsConfig', ], ], ], 'ImpactedLocation' => [ 'type' => 'structure', 'required' => [ 'ASName', 'ASNumber', 'Country', 'Status', ], 'members' => [ 'ASName' => [ 'shape' => 'String', ], 'ASNumber' => [ 'shape' => 'Long', ], 'Country' => [ 'shape' => 'String', ], 'Subdivision' => [ 'shape' => 'String', ], 'Metro' => [ 'shape' => 'String', ], 'City' => [ 'shape' => 'String', ], 'Latitude' => [ 'shape' => 'Double', ], 'Longitude' => [ 'shape' => 'Double', ], 'CountryCode' => [ 'shape' => 'String', ], 'SubdivisionCode' => [ 'shape' => 'String', ], 'ServiceLocation' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'HealthEventStatus', ], 'CausedBy' => [ 'shape' => 'NetworkImpairment', ], 'InternetHealth' => [ 'shape' => 'InternetHealth', ], 'Ipv4Prefixes' => [ 'shape' => 'Ipv4PrefixList', ], ], ], 'ImpactedLocationsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImpactedLocation', ], ], 'InternalServerErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'InternetEventId' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[a-zA-Z0-9-]+', ], 'InternetEventMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'InternetEventStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'RESOLVED', ], ], 'InternetEventSummary' => [ 'type' => 'structure', 'required' => [ 'EventId', 'EventArn', 'StartedAt', 'ClientLocation', 'EventType', 'EventStatus', ], 'members' => [ 'EventId' => [ 'shape' => 'InternetEventId', ], 'EventArn' => [ 'shape' => 'Arn', ], 'StartedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'EndedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ClientLocation' => [ 'shape' => 'ClientLocation', ], 'EventType' => [ 'shape' => 'InternetEventType', ], 'EventStatus' => [ 'shape' => 'InternetEventStatus', ], ], ], 'InternetEventType' => [ 'type' => 'string', 'enum' => [ 'AVAILABILITY', 'PERFORMANCE', ], ], 'InternetEventsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InternetEventSummary', ], ], 'InternetHealth' => [ 'type' => 'structure', 'members' => [ 'Availability' => [ 'shape' => 'AvailabilityMeasurement', ], 'Performance' => [ 'shape' => 'PerformanceMeasurement', ], ], ], 'InternetMeasurementsLogDelivery' => [ 'type' => 'structure', 'members' => [ 'S3Config' => [ 'shape' => 'S3Config', ], ], ], 'Ipv4PrefixList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ListHealthEventsInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'StartTime' => [ 'shape' => 'SyntheticTimestamp_date_time', 'location' => 'querystring', 'locationName' => 'StartTime', ], 'EndTime' => [ 'shape' => 'SyntheticTimestamp_date_time', 'location' => 'querystring', 'locationName' => 'EndTime', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'EventStatus' => [ 'shape' => 'HealthEventStatus', 'location' => 'querystring', 'locationName' => 'EventStatus', ], 'LinkedAccountId' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'LinkedAccountId', ], ], ], 'ListHealthEventsOutput' => [ 'type' => 'structure', 'required' => [ 'HealthEvents', ], 'members' => [ 'HealthEvents' => [ 'shape' => 'HealthEventList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListInternetEventsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'InternetEventMaxResults', 'location' => 'querystring', 'locationName' => 'InternetEventMaxResults', ], 'StartTime' => [ 'shape' => 'SyntheticTimestamp_date_time', 'location' => 'querystring', 'locationName' => 'StartTime', ], 'EndTime' => [ 'shape' => 'SyntheticTimestamp_date_time', 'location' => 'querystring', 'locationName' => 'EndTime', ], 'EventStatus' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'EventStatus', ], 'EventType' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'EventType', ], ], ], 'ListInternetEventsOutput' => [ 'type' => 'structure', 'required' => [ 'InternetEvents', ], 'members' => [ 'InternetEvents' => [ 'shape' => 'InternetEventsList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListMonitorsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'MonitorStatus' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'MonitorStatus', ], 'IncludeLinkedAccounts' => [ 'shape' => 'Boolean', 'location' => 'querystring', 'locationName' => 'IncludeLinkedAccounts', ], ], ], 'ListMonitorsOutput' => [ 'type' => 'structure', 'required' => [ 'Monitors', ], 'members' => [ 'Monitors' => [ 'shape' => 'MonitorList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'MonitorArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'LocalHealthEventsConfig' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'LocalHealthEventsConfigStatus', ], 'HealthScoreThreshold' => [ 'shape' => 'Percentage', ], 'MinTrafficImpact' => [ 'shape' => 'Percentage', ], ], ], 'LocalHealthEventsConfigStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'LogDeliveryStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'MaxCityNetworksToMonitor' => [ 'type' => 'integer', 'box' => true, 'max' => 500000, 'min' => 1, ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 25, 'min' => 1, ], 'Monitor' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'MonitorArn', 'Status', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', ], 'MonitorArn' => [ 'shape' => 'MonitorArn', ], 'Status' => [ 'shape' => 'MonitorConfigState', ], 'ProcessingStatus' => [ 'shape' => 'MonitorProcessingStatusCode', ], ], ], 'MonitorArn' => [ 'type' => 'string', 'max' => 512, 'min' => 20, 'pattern' => 'arn:.*', ], 'MonitorConfigState' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'ACTIVE', 'INACTIVE', 'ERROR', ], ], 'MonitorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Monitor', ], ], 'MonitorProcessingStatusCode' => [ 'type' => 'string', 'enum' => [ 'OK', 'INACTIVE', 'COLLECTING_DATA', 'INSUFFICIENT_DATA', 'FAULT_SERVICE', 'FAULT_ACCESS_CLOUDWATCH', ], ], 'Network' => [ 'type' => 'structure', 'required' => [ 'ASName', 'ASNumber', ], 'members' => [ 'ASName' => [ 'shape' => 'String', ], 'ASNumber' => [ 'shape' => 'Long', ], ], ], 'NetworkImpairment' => [ 'type' => 'structure', 'required' => [ 'Networks', 'AsPath', 'NetworkEventType', ], 'members' => [ 'Networks' => [ 'shape' => 'NetworkList', ], 'AsPath' => [ 'shape' => 'NetworkList', ], 'NetworkEventType' => [ 'shape' => 'TriangulationEventType', ], ], ], 'NetworkList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Network', ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'Operator' => [ 'type' => 'string', 'enum' => [ 'EQUALS', 'NOT_EQUALS', ], ], 'Percentage' => [ 'type' => 'double', 'max' => 100, 'min' => 0, ], 'PerformanceMeasurement' => [ 'type' => 'structure', 'members' => [ 'ExperienceScore' => [ 'shape' => 'Double', ], 'PercentOfTotalTrafficImpacted' => [ 'shape' => 'Double', ], 'PercentOfClientLocationImpacted' => [ 'shape' => 'Double', ], 'RoundTripTime' => [ 'shape' => 'RoundTripTime', ], ], ], 'QueryData' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryRow', ], ], 'QueryField' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'String', ], ], ], 'QueryFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryField', ], ], 'QueryMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'QueryRow' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'QueryStatus' => [ 'type' => 'string', 'enum' => [ 'QUEUED', 'RUNNING', 'SUCCEEDED', 'FAILED', 'CANCELED', ], ], 'QueryType' => [ 'type' => 'string', 'enum' => [ 'MEASUREMENTS', 'TOP_LOCATIONS', 'TOP_LOCATION_DETAILS', 'OVERALL_TRAFFIC_SUGGESTIONS', 'OVERALL_TRAFFIC_SUGGESTIONS_DETAILS', ], ], 'ResourceName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RoundTripTime' => [ 'type' => 'structure', 'members' => [ 'P50' => [ 'shape' => 'Double', ], 'P90' => [ 'shape' => 'Double', ], 'P95' => [ 'shape' => 'Double', ], ], ], 'S3Config' => [ 'type' => 'structure', 'members' => [ 'BucketName' => [ 'shape' => 'S3ConfigBucketNameString', ], 'BucketPrefix' => [ 'shape' => 'String', ], 'LogDeliveryStatus' => [ 'shape' => 'LogDeliveryStatus', ], ], ], 'S3ConfigBucketNameString' => [ 'type' => 'string', 'min' => 3, ], 'SetOfARNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Arn', ], ], 'StartQueryInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'StartTime', 'EndTime', 'QueryType', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'StartTime' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'EndTime' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'QueryType' => [ 'shape' => 'QueryType', ], 'FilterParameters' => [ 'shape' => 'FilterParameters', ], 'LinkedAccountId' => [ 'shape' => 'AccountId', ], ], ], 'StartQueryOutput' => [ 'type' => 'structure', 'required' => [ 'QueryId', ], 'members' => [ 'QueryId' => [ 'shape' => 'String', ], ], ], 'StopQueryInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', 'QueryId', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'QueryId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'QueryId', ], ], ], 'StopQueryOutput' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', ], 'SyntheticTimestamp_date_time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 200, 'min' => 0, ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'MonitorArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'TrafficPercentageToMonitor' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'TriangulationEventType' => [ 'type' => 'string', 'enum' => [ 'AWS', 'Internet', ], ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'MonitorArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateMonitorInput' => [ 'type' => 'structure', 'required' => [ 'MonitorName', ], 'members' => [ 'MonitorName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'MonitorName', ], 'ResourcesToAdd' => [ 'shape' => 'SetOfARNs', ], 'ResourcesToRemove' => [ 'shape' => 'SetOfARNs', ], 'Status' => [ 'shape' => 'MonitorConfigState', ], 'ClientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'MaxCityNetworksToMonitor' => [ 'shape' => 'MaxCityNetworksToMonitor', ], 'InternetMeasurementsLogDelivery' => [ 'shape' => 'InternetMeasurementsLogDelivery', ], 'TrafficPercentageToMonitor' => [ 'shape' => 'TrafficPercentageToMonitor', ], 'HealthEventsConfig' => [ 'shape' => 'HealthEventsConfig', ], ], ], 'UpdateMonitorOutput' => [ 'type' => 'structure', 'required' => [ 'MonitorArn', 'Status', ], 'members' => [ 'MonitorArn' => [ 'shape' => 'MonitorArn', ], 'Status' => [ 'shape' => 'MonitorConfigState', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
