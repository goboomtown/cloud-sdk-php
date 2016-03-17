# Boomtown Cloud SDK for PHP (v1)

This repository contains the open source PHP SDK that allows you to access the Boomtown Cloud API from your PHP app.


## Installation

The Boomtown Cloud  PHP SDK can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require goboomtown/cloud-sdk-php
```

## Usage

> **Note:** This version of the Boomtown Cloud SDK for PHP requires PHP 5.4 or greater.

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

} catch (\Swagger\Client\ApiException $e) {
    print_r($e->getResponseObject());
}
```

#### Working with issues
```php
// Instantiate the IssuesApi
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

} catch (\Swagger\Client\ApiException $e) {
    print_r($e->getResponseObject());
}


```

Cloud API documentation available at: [http://developers.goboomtown.com/](http://developers.goboomtown.com/)


## License

Please see the [license file](https://github.com/goboomtown/cloud-sdk-php/blob/master/LICENSE) for more information.