# Boomtown Cloud SDK for PHP (v1)

## Overview
This repository contains the open source PHP SDK that allows you to access the Cloud API from your PHP app.
Authentication uses a pre-shared key and secret, which is generated in our Admin Portal.

## Getting Started
To get started clone this repository and add it to your PHP project

## API Key Generation
To generate an API access token and private-key:
 - Log onto the Admin Portal (https://admin.goboomtown.com)
 - Click Providers in the left menu
 - Find your provider in the list
 - Double click your provider
 - Click API Settings, near the button of the configuration panel
 - Select Sandbox or Live, depending on the state of development
 - Click Re-Generate
 - Copy the access token and private-key, as provided in the pop-up dialog

## Usage

> **Note:** This version of the Boomtown Cloud SDK for PHP requires PHP 5.3 or greater.

#### Getting started, accessing basic data.

```php
# Initialize the ApiClient
$apiClient = new ApiClient();

# Set your API credentials
$apiClient
    ->setApiToken("YOUR_BOOMTOWN_TOKEN")
    ->setApiSecret("YOUR_BOOMTOWN_SECRET");

# Instantiate the ProvidersApi
# **Note:** we need to provide the API ApiClient we configured above.
$providerApi = new ProvidersApi($apiClient);
try {
    # Request your Provider profile
    # Note: Results are always an array of 0 or more models
    # If you just want to get ritght at the data call the getResults method.
    $provider = $providerApi->getProvider()->getResults()[0];

    # Request your default team
    $defaultTeam = $providerApi->getProviderTeam(
        $provider->getDefaultPartnersTeamsId())->getResults()[0];

    # Get the raw response for the provider teams request
    $teamCollection = $providerApi->getProviderTeams();

    # Print only the array of ProviderTeam models
    print_r($teams->getResults()); echo "\n\n";
    
    # Get all of the your Merchants 
    $memberCollection = $providerApi->getProviderMembers();
    print_r($memberCollection->getResults()); echo "\n\n";

} catch (ApiException $e) {
    print_r($e->getResponseObject());
}
```

#### Working with Merchant Issues
```php
# Instantiate the IssuesApi
# **Note:** we can reuse the ApiClient object created previously/above.
$issuesApi = new IssuesApi($apiClient);
try {
    $limit = 10;
    $start = 0;
    # Get a collection of all of the Issues you are managing
    $globalIssueCollection = $issuesApi
        ->getIssues($limit, $start)
        ->getResults();
    
    # Get a collection of Issues for a Merchant
    $merchantIssueCollection = $issuesApi
        ->getIssues($limit, $start, $merchantId)
        ->getResults();
    
    # Get a collection of all of the Issues for a Merchants User
    $userIssueCollection = $issuesApi
        ->getIssues($limit, $start, null, $merchantUserId)
        ->getResults();
    
    # Get a collection of all of the Issues for a Merchants Location
    # Result pagination defaults to a limit of 10 and starts from 0
    $locationIssueCollection = $issuesApi
        ->getIssues(null, null, null, null, $merchantLocationId)
        ->getResults();
    
    # Lets grab the first issue and do a few things with it
    $issue = $globalIssueCollection[0];
    
    # Lets log a note against this Issue
    $issuesApi->createIssueLog($issue->getId(), "Hi, this is a note");
    
    # Lets advance the Issues status to "Resolved"
    $issuesApi->resolveIssue($issue->getId());
    
    # Finally lets cancel the Issue
    $issuesApi->cancelIssue($issue->getId());

} catch (ApiException $e) {
    print_r($e->getResponseObject());
}
```

#### Creating a new Merchant and creating a new Issue for them
```php
$merchantApi = new MerchantsApi($apiClient);
$issuesApi   = new IssuesApi($apiClient);
try {

    # First Lets create a new Merchant, 
    # we will simultaneously create a user and a location
    $merchantCreate = new MemberCreateRequest();

    # Instantiate the models
    $memberCreate
        ->setMembers(new Member())
        ->setMembersUsers(new MemberUser())
        ->setMembersLocations(new MemberLocation());

    $merchantCreate->getMembers()
        ->setName("A Merchant")
        ->setCity("San Francisco")
        ->setState("CA")
        ->setZipcode("94101")
        ->setEmail("info@amerchant.com")
        ->setPhone("555 555 5555")
        ->setStreet1("123 Skylane");

    $merchantCreate->getMembersUsers()
        ->setFirstName("Bob")
        ->setLastName("Mango")
        ->setSmsNumber("999 999 9999")
        ->setEmail("bmango@amerchant.com");

    $merchantCreate->getMembersLocations()
        ->setSiteName("A Merchant Mango")
        ->setCity("an Francisco")
        ->setState("CA")
        ->setZipcode("94101")
        ->setStreet1("Soma Lofts")
        ->setStreet2("#1337");

    # Ok, lets save it
    $merchantData = $merchantApi->createMember($merchantCreate)->getResults();

    # Use the new Merchant data to create a Issue
    $issue = new Issue();
    $issue->setMembersId($merchantData->getMember()->getId())
        ->setMembersLocationsId($merchantData->getMemberLocation()->getId())
        ->setMembersUsersId($merchantData->getMemberUser()->getId())
        ->setDetails("We would like to get WiFi installed here.")
        ->setType("Support");

    $issue = $issuesApi->createIssue($issue);

} catch (ApiException $e) {
    print_r($e->getResponseObject());
}
```

Cloud API documentation available at: [http://developers.goboomtown.com/](http://developers.goboomtown.com/)


## License

Please see the [license file](https://github.com/goboomtown/cloud-sdk-php/blob/master/LICENSE) for more information.