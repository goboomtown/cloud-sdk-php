# Swagger\Client\IssuesApi

All URIs are relative to *https://boom-1-api.dev.gizmocreative.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelIssue**](IssuesApi.md#cancelIssue) | **POST** /issues/cancel/{issue_id} | Set a Issue to a cancelled status
[**createIssue**](IssuesApi.md#createIssue) | **POST** /issues/create | Creates a new Issue
[**createIssueLog**](IssuesApi.md#createIssueLog) | **POST** /issues/log/create/{issue_id} | Add a log to a Issue
[**getIssue**](IssuesApi.md#getIssue) | **GET** /issues/get/{issue_id} | Returns a Issue
[**getIssueLogs**](IssuesApi.md#getIssueLogs) | **GET** /issues/log/history/{issue_id} | Returns a collection of IssueLogs
[**getIssueMetaCategories**](IssuesApi.md#getIssueMetaCategories) | **GET** /issues/meta/categories | Returns collection of categories
[**getIssueMetaResolutions**](IssuesApi.md#getIssueMetaResolutions) | **GET** /issues/meta/resolutions | Returns collection of resolutions
[**getIssueMetaStatuses**](IssuesApi.md#getIssueMetaStatuses) | **GET** /issues/meta/statuses | Returns collection of statuses
[**getIssueMetaTypes**](IssuesApi.md#getIssueMetaTypes) | **GET** /issues/meta/types | Returns collection of types
[**getIssueStatusHistory**](IssuesApi.md#getIssueStatusHistory) | **GET** /issues/status/history/{issue_id} | Returns a collection of IssueStatuses
[**getIssues**](IssuesApi.md#getIssues) | **GET** /issues/get | Returns a collection of Issues
[**resolveIssue**](IssuesApi.md#resolveIssue) | **POST** /issues/resolve/{issue_id} | Set a Issue to a resolved status


# **cancelIssue**
> cancelIssue($issue_id)

Set a Issue to a cancelled status

Closes a *Issue* with a cancelled status

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the *Issue* to cancel.

try { 
    $api_instance->cancelIssue($issue_id);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->cancelIssue: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the *Issue* to cancel. | 

### Return type

void (empty response body)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createIssue**
> \Swagger\Client\Model\IssueResponse createIssue($issues)

Creates a new Issue

Creates a new *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();
$issues = new \Swagger\Client\Model\Issue(); // \Swagger\Client\Model\Issue | Issue to create

try { 
    $result = $api_instance->createIssue($issues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->createIssue: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issues** | [**\Swagger\Client\Model\Issue**](\Swagger\Client\Model\Issue.md)| Issue to create | [optional] 

### Return type

[**\Swagger\Client\Model\IssueResponse**](IssueResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createIssueLog**
> \Swagger\Client\Model\IssueLogsResponse createIssueLog($issue_id, $notes)

Add a log to a Issue

Logs notes to an *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the related *Issue*
$notes = "notes_example"; // string | Notes to log against the *Issue*

try { 
    $result = $api_instance->createIssueLog($issue_id, $notes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->createIssueLog: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the related *Issue* | 
 **notes** | **string**| Notes to log against the *Issue* | 

### Return type

[**\Swagger\Client\Model\IssueLogsResponse**](IssueLogsResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getIssue**
> \Swagger\Client\Model\IssueResponse getIssue($issue_id)

Returns a Issue

Returns a *Issue* record

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the *Issue*

try { 
    $result = $api_instance->getIssue($issue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssue: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the *Issue* | 

### Return type

[**\Swagger\Client\Model\IssueResponse**](IssueResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getIssueLogs**
> \Swagger\Client\Model\IssueLogsResponse getIssueLogs($issue_id)

Returns a collection of IssueLogs

Returns a collection of *IssueLog* records

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the *Issue*

try { 
    $result = $api_instance->getIssueLogs($issue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueLogs: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the *Issue* | 

### Return type

[**\Swagger\Client\Model\IssueLogsResponse**](IssueLogsResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getIssueMetaCategories**
> \Swagger\Client\Model\EnumerationItemResponse getIssueMetaCategories()

Returns collection of categories

Returns the categories available for an *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();

try { 
    $result = $api_instance->getIssueMetaCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueMetaCategories: ', $e->getMessage(), "\n";
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

# **getIssueMetaResolutions**
> \Swagger\Client\Model\EnumerationItemResponse getIssueMetaResolutions()

Returns collection of resolutions

Returns the resolutions available for an *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();

try { 
    $result = $api_instance->getIssueMetaResolutions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueMetaResolutions: ', $e->getMessage(), "\n";
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

# **getIssueMetaStatuses**
> \Swagger\Client\Model\EnumerationItemResponse getIssueMetaStatuses()

Returns collection of statuses

Returns the statuses available for an *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();

try { 
    $result = $api_instance->getIssueMetaStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueMetaStatuses: ', $e->getMessage(), "\n";
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

# **getIssueMetaTypes**
> \Swagger\Client\Model\EnumerationItemResponse getIssueMetaTypes()

Returns collection of types

Returns the types available for an *Issue*

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

$api_instance = new Swagger\Client\IssuesApi();

try { 
    $result = $api_instance->getIssueMetaTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueMetaTypes: ', $e->getMessage(), "\n";
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

# **getIssueStatusHistory**
> \Swagger\Client\Model\IssueStatusesResponse getIssueStatusHistory($issue_id)

Returns a collection of IssueStatuses

Returns a collection of *IssueStatuse* records

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the *Issue*

try { 
    $result = $api_instance->getIssueStatusHistory($issue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueStatusHistory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the *Issue* | 

### Return type

[**\Swagger\Client\Model\IssueStatusesResponse**](IssueStatusesResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getIssues**
> \Swagger\Client\Model\IssueResponse getIssues($limit, $start, $members_id, $members_users_id, $members_locations_id)

Returns a collection of Issues

Returns a collection of *Issue* records

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

$api_instance = new Swagger\Client\IssuesApi();
$limit = 56; // int | Pagination result limit (defaults to 10)
$start = 56; // int | Pagination starting result number (defaults to 0)
$members_id = "members_id_example"; // string | Optionally limit result to this {members_id}
$members_users_id = "members_users_id_example"; // string | Optionally limit result to this {members_users_id}
$members_locations_id = "members_locations_id_example"; // string | Optionally limit result to this {members_locations_id}

try { 
    $result = $api_instance->getIssues($limit, $start, $members_id, $members_users_id, $members_locations_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssues: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | [**int**](.md)| Pagination result limit (defaults to 10) | [optional] 
 **start** | [**int**](.md)| Pagination starting result number (defaults to 0) | [optional] 
 **members_id** | **string**| Optionally limit result to this {members_id} | [optional] 
 **members_users_id** | **string**| Optionally limit result to this {members_users_id} | [optional] 
 **members_locations_id** | **string**| Optionally limit result to this {members_locations_id} | [optional] 

### Return type

[**\Swagger\Client\Model\IssueResponse**](IssueResponse.md)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **resolveIssue**
> resolveIssue($issue_id)

Set a Issue to a resolved status

Closes a *Issue* with a resolved status

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

$api_instance = new Swagger\Client\IssuesApi();
$issue_id = "issue_id_example"; // string | The primary key of the *Issue* to resolve.

try { 
    $api_instance->resolveIssue($issue_id);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->resolveIssue: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| The primary key of the *Issue* to resolve. | 

### Return type

void (empty response body)

### Authorization

[X-Boomtown-Date](../README.md#X-Boomtown-Date), [X-Boomtown-Signature](../README.md#X-Boomtown-Signature), [X-Boomtown-Token](../README.md#X-Boomtown-Token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

