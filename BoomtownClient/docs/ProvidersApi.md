# Swagger\Client\ProvidersApi

All URIs are relative to *https://boom-1-api.dev.gizmocreative.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProvider**](ProvidersApi.md#getProvider) | **GET** /providers/get | Returns your Provider
[**getProviderMembers**](ProvidersApi.md#getProviderMembers) | **GET** /providers/members | Returns Merchants
[**getProviderTeam**](ProvidersApi.md#getProviderTeam) | **GET** /providers/teams/{provider_team_id} | Returns a ProviderTeam
[**getProviderTeams**](ProvidersApi.md#getProviderTeams) | **GET** /providers/teams | Returns your ProviderTeams


# **getProvider**
> \Swagger\Client\Model\ProviderResponse getProvider()

Returns your Provider

Returns your *Provider* record

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Boomtown-Date
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Date', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Date', 'BEARER');
// Configure API key authorization: X-Boomtown-Signature
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Signature', 'BEARER');
// Configure API key authorization: X-Boomtown-Token
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Token', 'BEARER');

$api_instance = new Swagger\Client\ProvidersApi();

try { 
    $result = $api_instance->getProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProvider: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProviderResponse**](ProviderResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getProviderMembers**
> \Swagger\Client\Model\MemberResponse getProviderMembers()

Returns Merchants

Returns collection of related *Merchant* records

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Boomtown-Date
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Date', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Date', 'BEARER');
// Configure API key authorization: X-Boomtown-Signature
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Signature', 'BEARER');
// Configure API key authorization: X-Boomtown-Token
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Token', 'BEARER');

$api_instance = new Swagger\Client\ProvidersApi();

try { 
    $result = $api_instance->getProviderMembers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProviderMembers: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MemberResponse**](MemberResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getProviderTeam**
> \Swagger\Client\Model\ProviderTeamResponse getProviderTeam($provider_team_id)

Returns a ProviderTeam

Returns a *ProviderTeam* record

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Boomtown-Date
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Date', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Date', 'BEARER');
// Configure API key authorization: X-Boomtown-Signature
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Signature', 'BEARER');
// Configure API key authorization: X-Boomtown-Token
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Token', 'BEARER');

$api_instance = new Swagger\Client\ProvidersApi();
$provider_team_id = "provider_team_id_example"; // string | The primary key of the ProviderTeam

try { 
    $result = $api_instance->getProviderTeam($provider_team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProviderTeam: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_team_id** | **string**| The primary key of the ProviderTeam | 

### Return type

[**\Swagger\Client\Model\ProviderTeamResponse**](ProviderTeamResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getProviderTeams**
> \Swagger\Client\Model\ProviderTeamResponse getProviderTeams()

Returns your ProviderTeams

Returns a collection of *ProviderTeam* records

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Boomtown-Date
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Date', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Date', 'BEARER');
// Configure API key authorization: X-Boomtown-Signature
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Signature', 'BEARER');
// Configure API key authorization: X-Boomtown-Token
Swagger\Client::getDefaultConfiguration->setApiKey('X-Boomtown-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client::getDefaultConfiguration->setApiKeyPrefix('X-Boomtown-Token', 'BEARER');

$api_instance = new Swagger\Client\ProvidersApi();

try { 
    $result = $api_instance->getProviderTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProviderTeams: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProviderTeamResponse**](ProviderTeamResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

