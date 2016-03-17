# Swagger\Client\MerchantsApi

All URIs are relative to *https://boom-1-api.dev.gizmocreative.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMember**](MerchantsApi.md#createMember) | **POST** /members/create | Creates a new Merchant
[**getMember**](MerchantsApi.md#getMember) | **GET** /members/get/{member_id} | Returns a Merchant
[**getMemberLocationUsers**](MerchantsApi.md#getMemberLocationUsers) | **GET** /members/location/users/{member_id} | Returns a collection of MerchantUsers
[**getMemberLocations**](MerchantsApi.md#getMemberLocations) | **GET** /members/location/get/{member_id} | Returns a collection of MerchantLocations
[**getMemberMetaIndustries**](MerchantsApi.md#getMemberMetaIndustries) | **GET** /members/meta/industries | Returns collection of industries
[**getMemberMetaStatuses**](MerchantsApi.md#getMemberMetaStatuses) | **GET** /members/meta/statuses | Returns collection of statuses
[**getMemberUsers**](MerchantsApi.md#getMemberUsers) | **GET** /members/user/get/{member_id} | Returnsa a collection of MerchantUsers


# **createMember**
> \Swagger\Client\Model\MemberCreateResponse createMember($body)

Creates a new Merchant

Creates a *Merchant* and optionally *MerchantLocation* and *MerchantUser*

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

$api_instance = new Swagger\Client\MerchantsApi();
$body = new \Swagger\Client\Model\MemberCreateRequest(); // \Swagger\Client\Model\MemberCreateRequest | The *Merchant* to create

try { 
    $result = $api_instance->createMember($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createMember: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MemberCreateRequest**](\Swagger\Client\Model\MemberCreateRequest.md)| The *Merchant* to create | 

### Return type

[**\Swagger\Client\Model\MemberCreateResponse**](MemberCreateResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMember**
> \Swagger\Client\Model\MemberResponse getMember($member_id)

Returns a Merchant

Returns a *Merchant*

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

$api_instance = new Swagger\Client\MerchantsApi();
$member_id = "member_id_example"; // string | The primary key of the *Merchant*

try { 
    $result = $api_instance->getMember($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMember: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The primary key of the *Merchant* | 

### Return type

[**\Swagger\Client\Model\MemberResponse**](MemberResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMemberLocationUsers**
> \Swagger\Client\Model\MemberUserResponse getMemberLocationUsers($member_id)

Returns a collection of MerchantUsers

Returns a collection of *MerchantUsers* belonging to a *MerchantLocation*

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

$api_instance = new Swagger\Client\MerchantsApi();
$member_id = "member_id_example"; // string | The primary key of the *Merchant*

try { 
    $result = $api_instance->getMemberLocationUsers($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMemberLocationUsers: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The primary key of the *Merchant* | 

### Return type

[**\Swagger\Client\Model\MemberUserResponse**](MemberUserResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMemberLocations**
> \Swagger\Client\Model\MemberLocationResponse getMemberLocations($member_id, $members_locations_id)

Returns a collection of MerchantLocations

Returns a collection of *MerchantLocation* records belonging to a *Merchant*

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

$api_instance = new Swagger\Client\MerchantsApi();
$member_id = "member_id_example"; // string | The primary key of the *Merchant*
$members_locations_id = "members_locations_id_example"; // string | An optional members_locations_id to filter the results with

try { 
    $result = $api_instance->getMemberLocations($member_id, $members_locations_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMemberLocations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The primary key of the *Merchant* | 
 **members_locations_id** | **string**| An optional members_locations_id to filter the results with | [optional] 

### Return type

[**\Swagger\Client\Model\MemberLocationResponse**](MemberLocationResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMemberMetaIndustries**
> \Swagger\Client\Model\EnumerationItemResponse getMemberMetaIndustries()

Returns collection of industries

Returns the industries available for a *Merchant*

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

$api_instance = new Swagger\Client\MerchantsApi();

try { 
    $result = $api_instance->getMemberMetaIndustries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMemberMetaIndustries: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EnumerationItemResponse**](EnumerationItemResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMemberMetaStatuses**
> \Swagger\Client\Model\EnumerationItemResponse getMemberMetaStatuses()

Returns collection of statuses

Returns the statuses available for a *Merchant* or *MerchantUsers*

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

$api_instance = new Swagger\Client\MerchantsApi();

try { 
    $result = $api_instance->getMemberMetaStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMemberMetaStatuses: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EnumerationItemResponse**](EnumerationItemResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMemberUsers**
> \Swagger\Client\Model\MemberUserResponse getMemberUsers($member_id, $user_id)

Returnsa a collection of MerchantUsers

Returns a collection of *MerchantUser* records belonging to a *Merchant*

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

$api_instance = new Swagger\Client\MerchantsApi();
$member_id = "member_id_example"; // string | The id of the *Merchant*
$user_id = "user_id_example"; // string | Optional user_id to filter the results with

try { 
    $result = $api_instance->getMemberUsers($member_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMemberUsers: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **string**| The id of the *Merchant* | 
 **user_id** | **string**| Optional user_id to filter the results with | [optional] 

### Return type

[**\Swagger\Client\Model\MemberUserResponse**](MemberUserResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

