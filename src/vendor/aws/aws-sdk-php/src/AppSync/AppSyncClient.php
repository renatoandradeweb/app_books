<?php

namespace Aws\AppSync;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS AppSync** service.
 * @method \Aws\Result associateApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateApiAsync(array $args = [])
 * @method \Aws\Result associateMergedGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMergedGraphqlApiAsync(array $args = [])
 * @method \Aws\Result associateSourceGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSourceGraphqlApiAsync(array $args = [])
 * @method \Aws\Result createApiCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiCacheAsync(array $args = [])
 * @method \Aws\Result createApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \Aws\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \Aws\Result createDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \Aws\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \Aws\Result createGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGraphqlApiAsync(array $args = [])
 * @method \Aws\Result createResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverAsync(array $args = [])
 * @method \Aws\Result createType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTypeAsync(array $args = [])
 * @method \Aws\Result deleteApiCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiCacheAsync(array $args = [])
 * @method \Aws\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \Aws\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Aws\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \Aws\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \Aws\Result deleteGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGraphqlApiAsync(array $args = [])
 * @method \Aws\Result deleteResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverAsync(array $args = [])
 * @method \Aws\Result deleteType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTypeAsync(array $args = [])
 * @method \Aws\Result disassociateApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateApiAsync(array $args = [])
 * @method \Aws\Result disassociateMergedGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMergedGraphqlApiAsync(array $args = [])
 * @method \Aws\Result disassociateSourceGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSourceGraphqlApiAsync(array $args = [])
 * @method \Aws\Result evaluateCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateCodeAsync(array $args = [])
 * @method \Aws\Result evaluateMappingTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateMappingTemplateAsync(array $args = [])
 * @method \Aws\Result flushApiCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushApiCacheAsync(array $args = [])
 * @method \Aws\Result getApiAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiAssociationAsync(array $args = [])
 * @method \Aws\Result getApiCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiCacheAsync(array $args = [])
 * @method \Aws\Result getDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataSourceAsync(array $args = [])
 * @method \Aws\Result getDataSourceIntrospection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataSourceIntrospectionAsync(array $args = [])
 * @method \Aws\Result getDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \Aws\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \Aws\Result getGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGraphqlApiAsync(array $args = [])
 * @method \Aws\Result getGraphqlApiEnvironmentVariables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGraphqlApiEnvironmentVariablesAsync(array $args = [])
 * @method \Aws\Result getIntrospectionSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntrospectionSchemaAsync(array $args = [])
 * @method \Aws\Result getResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverAsync(array $args = [])
 * @method \Aws\Result getSchemaCreationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaCreationStatusAsync(array $args = [])
 * @method \Aws\Result getSourceApiAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSourceApiAssociationAsync(array $args = [])
 * @method \Aws\Result getType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTypeAsync(array $args = [])
 * @method \Aws\Result listApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApiKeysAsync(array $args = [])
 * @method \Aws\Result listDataSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \Aws\Result listDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \Aws\Result listFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \Aws\Result listGraphqlApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGraphqlApisAsync(array $args = [])
 * @method \Aws\Result listResolvers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolversAsync(array $args = [])
 * @method \Aws\Result listResolversByFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolversByFunctionAsync(array $args = [])
 * @method \Aws\Result listSourceApiAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceApiAssociationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypesAsync(array $args = [])
 * @method \Aws\Result listTypesByAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypesByAssociationAsync(array $args = [])
 * @method \Aws\Result putGraphqlApiEnvironmentVariables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGraphqlApiEnvironmentVariablesAsync(array $args = [])
 * @method \Aws\Result startDataSourceIntrospection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataSourceIntrospectionAsync(array $args = [])
 * @method \Aws\Result startSchemaCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSchemaCreationAsync(array $args = [])
 * @method \Aws\Result startSchemaMerge(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSchemaMergeAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateApiCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiCacheAsync(array $args = [])
 * @method \Aws\Result updateApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \Aws\Result updateDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \Aws\Result updateDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \Aws\Result updateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionAsync(array $args = [])
 * @method \Aws\Result updateGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGraphqlApiAsync(array $args = [])
 * @method \Aws\Result updateResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverAsync(array $args = [])
 * @method \Aws\Result updateSourceApiAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSourceApiAssociationAsync(array $args = [])
 * @method \Aws\Result updateType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTypeAsync(array $args = [])
 */
class AppSyncClient extends AwsClient
{
}
