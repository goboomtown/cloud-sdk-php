<?php
require_once('BoomtownClient/autoload.php');

use Swagger\Client\ApiClient;
use Swagger\Client\Configuration;
use Swagger\Client\Api\ProvidersApi;
use Swagger\Client\Api\MerchantsApi;
use Swagger\Client\Api\IssuesApi;
use Swagger\Client\Model\Issue;

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
    $issue = $issuesApi->resolveIssue($issue->getId());

    # Finally lets cancel the Issue
    $issue = $issuesApi->cancelIssue($issue->getId());

} catch (\Swagger\Client\ApiException $e) {
    print_r($e->getResponseObject());
}