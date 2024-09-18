<?php

// This file was auto-generated from sdk-root/src/data/sso/2019-06-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-06-10', 'endpointPrefix' => 'portal.sso', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'SSO', 'serviceFullName' => 'AWS Single Sign-On', 'serviceId' => 'SSO', 'signatureVersion' => 'v4', 'signingName' => 'awsssoportal', 'uid' => 'sso-2019-06-10', ], 'operations' => [ 'GetRoleCredentials' => [ 'name' => 'GetRoleCredentials', 'http' => [ 'method' => 'GET', 'requestUri' => '/federation/credentials', ], 'input' => [ 'shape' => 'GetRoleCredentialsRequest', ], 'output' => [ 'shape' => 'GetRoleCredentialsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'authtype' => 'none', ], 'ListAccountRoles' => [ 'name' => 'ListAccountRoles', 'http' => [ 'method' => 'GET', 'requestUri' => '/assignment/roles', ], 'input' => [ 'shape' => 'ListAccountRolesRequest', ], 'output' => [ 'shape' => 'ListAccountRolesResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'authtype' => 'none', ], 'ListAccounts' => [ 'name' => 'ListAccounts', 'http' => [ 'method' => 'GET', 'requestUri' => '/assignment/accounts', ], 'input' => [ 'shape' => 'ListAccountsRequest', ], 'output' => [ 'shape' => 'ListAccountsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'authtype' => 'none', ], 'Logout' => [ 'name' => 'Logout', 'http' => [ 'method' => 'POST', 'requestUri' => '/logout', ], 'input' => [ 'shape' => 'LogoutRequest', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'authtype' => 'none', ], ], 'shapes' => [ 'AccessKeyType' => [ 'type' => 'string', ], 'AccessTokenType' => [ 'type' => 'string', 'sensitive' => true, ], 'AccountIdType' => [ 'type' => 'string', ], 'AccountInfo' => [ 'type' => 'structure', 'members' => [ 'accountId' => [ 'shape' => 'AccountIdType', ], 'accountName' => [ 'shape' => 'AccountNameType', ], 'emailAddress' => [ 'shape' => 'EmailAddressType', ], ], ], 'AccountListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountInfo', ], ], 'AccountNameType' => [ 'type' => 'string', ], 'EmailAddressType' => [ 'type' => 'string', 'max' => 254, 'min' => 1, ], 'ErrorDescription' => [ 'type' => 'string', ], 'ExpirationTimestampType' => [ 'type' => 'long', ], 'GetRoleCredentialsRequest' => [ 'type' => 'structure', 'required' => [ 'roleName', 'accountId', 'accessToken', ], 'members' => [ 'roleName' => [ 'shape' => 'RoleNameType', 'location' => 'querystring', 'locationName' => 'role_name', ], 'accountId' => [ 'shape' => 'AccountIdType', 'location' => 'querystring', 'locationName' => 'account_id', ], 'accessToken' => [ 'shape' => 'AccessTokenType', 'location' => 'header', 'locationName' => 'x-amz-sso_bearer_token', ], ], ], 'GetRoleCredentialsResponse' => [ 'type' => 'structure', 'members' => [ 'roleCredentials' => [ 'shape' => 'RoleCredentials', ], ], ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorDescription', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListAccountRolesRequest' => [ 'type' => 'structure', 'required' => [ 'accessToken', 'accountId', ], 'members' => [ 'nextToken' => [ 'shape' => 'NextTokenType', 'location' => 'querystring', 'locationName' => 'next_token', ], 'maxResults' => [ 'shape' => 'MaxResultType', 'location' => 'querystring', 'locationName' => 'max_result', ], 'accessToken' => [ 'shape' => 'AccessTokenType', 'location' => 'header', 'locationName' => 'x-amz-sso_bearer_token', ], 'accountId' => [ 'shape' => 'AccountIdType', 'location' => 'querystring', 'locationName' => 'account_id', ], ], ], 'ListAccountRolesResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextTokenType', ], 'roleList' => [ 'shape' => 'RoleListType', ], ], ], 'ListAccountsRequest' => [ 'type' => 'structure', 'required' => [ 'accessToken', ], 'members' => [ 'nextToken' => [ 'shape' => 'NextTokenType', 'location' => 'querystring', 'locationName' => 'next_token', ], 'maxResults' => [ 'shape' => 'MaxResultType', 'location' => 'querystring', 'locationName' => 'max_result', ], 'accessToken' => [ 'shape' => 'AccessTokenType', 'location' => 'header', 'locationName' => 'x-amz-sso_bearer_token', ], ], ], 'ListAccountsResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextTokenType', ], 'accountList' => [ 'shape' => 'AccountListType', ], ], ], 'LogoutRequest' => [ 'type' => 'structure', 'required' => [ 'accessToken', ], 'members' => [ 'accessToken' => [ 'shape' => 'AccessTokenType', 'location' => 'header', 'locationName' => 'x-amz-sso_bearer_token', ], ], ], 'MaxResultType' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'NextTokenType' => [ 'type' => 'string', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorDescription', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'RoleCredentials' => [ 'type' => 'structure', 'members' => [ 'accessKeyId' => [ 'shape' => 'AccessKeyType', ], 'secretAccessKey' => [ 'shape' => 'SecretAccessKeyType', ], 'sessionToken' => [ 'shape' => 'SessionTokenType', ], 'expiration' => [ 'shape' => 'ExpirationTimestampType', ], ], ], 'RoleInfo' => [ 'type' => 'structure', 'members' => [ 'roleName' => [ 'shape' => 'RoleNameType', ], 'accountId' => [ 'shape' => 'AccountIdType', ], ], ], 'RoleListType' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleInfo', ], ], 'RoleNameType' => [ 'type' => 'string', ], 'SecretAccessKeyType' => [ 'type' => 'string', 'sensitive' => true, ], 'SessionTokenType' => [ 'type' => 'string', 'sensitive' => true, ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorDescription', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UnauthorizedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorDescription', ], ], 'error' => [ 'httpStatusCode' => 401, ], 'exception' => true, ], ],];
