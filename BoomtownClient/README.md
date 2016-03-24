# Boomtown Cloud API Client

## Requirements

PHP 5.4.0 and later

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
The Cloud API uses a keyed-HMAC (Hash Message Authentication Code) for authentication. To authenticate a request, your public (your token) & private (your secret) key are used to calculate the HMAC from a *"canonicalized resource"* based on specific elements of your request URL. Informally, we call this process "signing the request," and we call the output of the HMAC algorithm the signature.

#### **Note:**
- HMAC is based on SHA256 hashing.
- Each request will be valid for 10 seconds from when the request is signed.


#### The Canonicalized Resource Parts:
The "canonicalized resource" is comprised of the **PATH**, **QUERY** and a  **TIMESTAMP** in ISO-8601 form and will be constructed as follows in the order listed.

1. **PATH**: The URL without the hostname and **QUERY** - "/api/v2/issues"
2. **QUERY**: Anything after the **PATH**  - "?id=SOME_ID#FOO"
3. **TIMESTAMP** Date & Time in ISO8601 format - "2016-03-01T23:22:57+00:00"

#### Concatenating the **Canonicalized Resource** Parts:
- Resource Template = **PATH** + **QUERY** + : + **TIMESTAMP**
- Resource (With Query) = "/api/v2/issues?id=SOME_ID#FOO:2016-03-01T23:22:57+00:00"
- Resource (Without Query) = "/api/v2/issues:2016-03-01T23:22:57+00:00"



## X-Boomtown-Date

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Date
- **Location**: HTTP header
- **Description**: Will contain the current date+time in ISO8601 format

## X-Boomtown-Token

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Token
- **Location**: HTTP header
- **Description**:  Will contain your token/public key

## X-Boomtown-Signature

- **Type**: API key 
- **API key parameter name**: X-Boomtown-Signature
- **Location**: HTTP header
- **Description**: Will contain the signature generated from the **Canonicalized Resource**

## Author

developers@goboomtown.com


