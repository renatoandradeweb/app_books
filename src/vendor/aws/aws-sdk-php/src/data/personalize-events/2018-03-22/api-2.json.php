<?php

// This file was auto-generated from sdk-root/src/data/personalize-events/2018-03-22/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-03-22', 'endpointPrefix' => 'personalize-events', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Personalize Events', 'serviceId' => 'Personalize Events', 'signatureVersion' => 'v4', 'signingName' => 'personalize', 'uid' => 'personalize-events-2018-03-22', ], 'operations' => [ 'PutActionInteractions' => [ 'name' => 'PutActionInteractions', 'http' => [ 'method' => 'POST', 'requestUri' => '/action-interactions', ], 'input' => [ 'shape' => 'PutActionInteractionsRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'PutActions' => [ 'name' => 'PutActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/actions', ], 'input' => [ 'shape' => 'PutActionsRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'PutEvents' => [ 'name' => 'PutEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/events', ], 'input' => [ 'shape' => 'PutEventsRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'PutItems' => [ 'name' => 'PutItems', 'http' => [ 'method' => 'POST', 'requestUri' => '/items', ], 'input' => [ 'shape' => 'PutItemsRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'PutUsers' => [ 'name' => 'PutUsers', 'http' => [ 'method' => 'POST', 'requestUri' => '/users', ], 'input' => [ 'shape' => 'PutUsersRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], ], ], ], 'shapes' => [ 'Action' => [ 'type' => 'structure', 'required' => [ 'actionId', ], 'members' => [ 'actionId' => [ 'shape' => 'StringType', ], 'properties' => [ 'shape' => 'ActionProperties', 'jsonvalue' => true, ], ], ], 'ActionId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'ActionImpression' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionId', ], 'max' => 25, 'min' => 1, ], 'ActionInteraction' => [ 'type' => 'structure', 'required' => [ 'actionId', 'sessionId', 'timestamp', 'eventType', ], 'members' => [ 'actionId' => [ 'shape' => 'ActionId', ], 'userId' => [ 'shape' => 'UserId', ], 'sessionId' => [ 'shape' => 'StringType', ], 'timestamp' => [ 'shape' => 'Date', ], 'eventType' => [ 'shape' => 'StringType', ], 'eventId' => [ 'shape' => 'StringType', ], 'recommendationId' => [ 'shape' => 'RecommendationId', ], 'impression' => [ 'shape' => 'ActionImpression', ], 'properties' => [ 'shape' => 'ActionInteractionProperties', 'jsonvalue' => true, ], ], ], 'ActionInteractionProperties' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'sensitive' => true, ], 'ActionInteractionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionInteraction', ], 'max' => 10, 'min' => 1, ], 'ActionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], 'max' => 10, 'min' => 1, ], 'ActionProperties' => [ 'type' => 'string', 'max' => 32000, 'min' => 1, 'sensitive' => true, ], 'Arn' => [ 'type' => 'string', 'max' => 256, 'pattern' => 'arn:([a-z\\d-]+):personalize:.*:.*:.+', ], 'Date' => [ 'type' => 'timestamp', ], 'ErrorMessage' => [ 'type' => 'string', ], 'Event' => [ 'type' => 'structure', 'required' => [ 'eventType', 'sentAt', ], 'members' => [ 'eventId' => [ 'shape' => 'StringType', ], 'eventType' => [ 'shape' => 'StringType', ], 'eventValue' => [ 'shape' => 'FloatType', ], 'itemId' => [ 'shape' => 'ItemId', ], 'properties' => [ 'shape' => 'EventPropertiesJSON', 'jsonvalue' => true, ], 'sentAt' => [ 'shape' => 'Date', ], 'recommendationId' => [ 'shape' => 'RecommendationId', ], 'impression' => [ 'shape' => 'Impression', ], 'metricAttribution' => [ 'shape' => 'MetricAttribution', ], ], 'sensitive' => true, ], 'EventAttributionSource' => [ 'type' => 'string', 'max' => 1024, 'pattern' => '^[\\x20-\\x7E]*[\\x21-\\x7E]+[\\x20-\\x7E]*$', ], 'EventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], 'max' => 10, 'min' => 1, ], 'EventPropertiesJSON' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'sensitive' => true, ], 'FloatType' => [ 'type' => 'float', ], 'Impression' => [ 'type' => 'list', 'member' => [ 'shape' => 'ItemId', ], 'max' => 25, 'min' => 1, ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Item' => [ 'type' => 'structure', 'required' => [ 'itemId', ], 'members' => [ 'itemId' => [ 'shape' => 'StringType', ], 'properties' => [ 'shape' => 'ItemProperties', 'jsonvalue' => true, ], ], ], 'ItemId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'ItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', ], 'max' => 10, 'min' => 1, ], 'ItemProperties' => [ 'type' => 'string', 'max' => 32000, 'min' => 1, 'sensitive' => true, ], 'MetricAttribution' => [ 'type' => 'structure', 'required' => [ 'eventAttributionSource', ], 'members' => [ 'eventAttributionSource' => [ 'shape' => 'EventAttributionSource', ], ], ], 'PutActionInteractionsRequest' => [ 'type' => 'structure', 'required' => [ 'trackingId', 'actionInteractions', ], 'members' => [ 'trackingId' => [ 'shape' => 'StringType', ], 'actionInteractions' => [ 'shape' => 'ActionInteractionsList', ], ], ], 'PutActionsRequest' => [ 'type' => 'structure', 'required' => [ 'datasetArn', 'actions', ], 'members' => [ 'datasetArn' => [ 'shape' => 'Arn', ], 'actions' => [ 'shape' => 'ActionList', ], ], ], 'PutEventsRequest' => [ 'type' => 'structure', 'required' => [ 'trackingId', 'sessionId', 'eventList', ], 'members' => [ 'trackingId' => [ 'shape' => 'StringType', ], 'userId' => [ 'shape' => 'UserId', ], 'sessionId' => [ 'shape' => 'StringType', ], 'eventList' => [ 'shape' => 'EventList', ], ], ], 'PutItemsRequest' => [ 'type' => 'structure', 'required' => [ 'datasetArn', 'items', ], 'members' => [ 'datasetArn' => [ 'shape' => 'Arn', ], 'items' => [ 'shape' => 'ItemList', ], ], ], 'PutUsersRequest' => [ 'type' => 'structure', 'required' => [ 'datasetArn', 'users', ], 'members' => [ 'datasetArn' => [ 'shape' => 'Arn', ], 'users' => [ 'shape' => 'UserList', ], ], ], 'RecommendationId' => [ 'type' => 'string', 'max' => 40, 'min' => 1, ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'StringType' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'User' => [ 'type' => 'structure', 'required' => [ 'userId', ], 'members' => [ 'userId' => [ 'shape' => 'StringType', ], 'properties' => [ 'shape' => 'UserProperties', 'jsonvalue' => true, ], ], ], 'UserId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'UserList' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], 'max' => 10, 'min' => 1, ], 'UserProperties' => [ 'type' => 'string', 'max' => 24000, 'min' => 1, 'sensitive' => true, ], ],];
