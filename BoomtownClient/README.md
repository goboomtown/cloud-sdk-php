# Boomtown Cloud API Client

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

You can install the bindings via [Composer](http://getcomposer.org/). Add this to your `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/swagger/swagger-client.git"
    }
  ],
  "require": {
    "swagger/swagger-client": "*@dev"
  }
}
```

Then install via `composer install`

### Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the `autoload.php` file.
```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests 

To run the unit tests:
```
composer install
./vendor/bin/phpunit lib/Tests
```

## Documentation for API Endpoints

All URIs are relative to *https://api.goboomtown.com/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*IssuesApi* | [**cancelIssue**](docs/IssuesApi.md#cancelissue) | **POST** /issues/cancel/{issue_id} | Set a Issue to a cancelled status
*IssuesApi* | [**createIssue**](docs/IssuesApi.md#createissue) | **POST** /issues/create | Creates a new Issue
*IssuesApi* | [**createIssueLog**](docs/IssuesApi.md#createissuelog) | **POST** /issues/log/create/{issue_id} | Add a log to a Issue
*IssuesApi* | [**getIssue**](docs/IssuesApi.md#getissue) | **GET** /issues/get/{issue_id} | Returns a Issue
*IssuesApi* | [**getIssueLogs**](docs/IssuesApi.md#getissuelogs) | **GET** /issues/log/history/{issue_id} | Returns a collection of IssueLogs
*IssuesApi* | [**getIssueMetaCategories**](docs/IssuesApi.md#getissuemetacategories) | **GET** /issues/meta/categories | Returns collection of categories
*IssuesApi* | [**getIssueMetaResolutions**](docs/IssuesApi.md#getissuemetaresolutions) | **GET** /issues/meta/resolutions | Returns collection of resolutions
*IssuesApi* | [**getIssueMetaStatuses**](docs/IssuesApi.md#getissuemetastatuses) | **GET** /issues/meta/statuses | Returns collection of statuses
*IssuesApi* | [**getIssueMetaTypes**](docs/IssuesApi.md#getissuemetatypes) | **GET** /issues/meta/types | Returns collection of types
*IssuesApi* | [**getIssueStatusHistory**](docs/IssuesApi.md#getissuestatushistory) | **GET** /issues/status/history/{issue_id} | Returns a collection of IssueStatuses
*IssuesApi* | [**getIssues**](docs/IssuesApi.md#getissues) | **GET** /issues/get | Returns a collection of Issues
*IssuesApi* | [**resolveIssue**](docs/IssuesApi.md#resolveissue) | **POST** /issues/resolve/{issue_id} | Set a Issue to a resolved status
*MerchantsApi* | [**createMember**](docs/MerchantsApi.md#createmember) | **POST** /members/create | Creates a new Merchant
*MerchantsApi* | [**getMember**](docs/MerchantsApi.md#getmember) | **GET** /members/get/{member_id} | Returns a Merchant
*MerchantsApi* | [**getMemberLocationUsers**](docs/MerchantsApi.md#getmemberlocationusers) | **GET** /members/location/users/{member_id} | Returns a collection of MerchantUsers
*MerchantsApi* | [**getMemberLocations**](docs/MerchantsApi.md#getmemberlocations) | **GET** /members/location/get/{member_id} | Returns a collection of MerchantLocations
*MerchantsApi* | [**getMemberMetaIndustries**](docs/MerchantsApi.md#getmembermetaindustries) | **GET** /members/meta/industries | Returns collection of industries
*MerchantsApi* | [**getMemberMetaStatuses**](docs/MerchantsApi.md#getmembermetastatuses) | **GET** /members/meta/statuses | Returns collection of statuses
*MerchantsApi* | [**getMemberUsers**](docs/MerchantsApi.md#getmemberusers) | **GET** /members/user/get/{member_id} | Returnsa a collection of MerchantUsers
*ProvidersApi* | [**getProvider**](docs/ProvidersApi.md#getprovider) | **GET** /providers/get | Returns your Provider
*ProvidersApi* | [**getProviderMembers**](docs/ProvidersApi.md#getprovidermembers) | **GET** /providers/members | Returns Merchants
*ProvidersApi* | [**getProviderTeam**](docs/ProvidersApi.md#getproviderteam) | **GET** /providers/teams/{provider_team_id} | Returns a ProviderTeam
*ProvidersApi* | [**getProviderTeams**](docs/ProvidersApi.md#getproviderteams) | **GET** /providers/teams | Returns your ProviderTeams


## Documentation For Models

 - [BaseResponse](docs/BaseResponse.md)
 - [EnumerationItem](docs/EnumerationItem.md)
 - [EnumerationItemResponse](docs/EnumerationItemResponse.md)
 - [Error](docs/Error.md)
 - [Issue](docs/Issue.md)
 - [IssueLog](docs/IssueLog.md)
 - [IssueLogsResponse](docs/IssueLogsResponse.md)
 - [IssueResponse](docs/IssueResponse.md)
 - [IssueStatus](docs/IssueStatus.md)
 - [IssueStatusesResponse](docs/IssueStatusesResponse.md)
 - [Member](docs/Member.md)
 - [MemberCreateRequest](docs/MemberCreateRequest.md)
 - [MemberCreateResponse](docs/MemberCreateResponse.md)
 - [MemberLocation](docs/MemberLocation.md)
 - [MemberLocationResponse](docs/MemberLocationResponse.md)
 - [MemberResponse](docs/MemberResponse.md)
 - [MemberTuple](docs/MemberTuple.md)
 - [MemberUser](docs/MemberUser.md)
 - [MemberUserResponse](docs/MemberUserResponse.md)
 - [Provider](docs/Provider.md)
 - [ProviderResponse](docs/ProviderResponse.md)
 - [ProviderTeam](docs/ProviderTeam.md)
 - [ProviderTeamResponse](docs/ProviderTeamResponse.md)


## Documentation For Authorization


## X-Boomtown-Date

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Date
- **Location**: HTTP header

## X-Boomtown-Token

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Token
- **Location**: HTTP header

## X-Boomtown-Signature

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Signature
- **Location**: HTTP header


## Author

developers@goboomtown.com


