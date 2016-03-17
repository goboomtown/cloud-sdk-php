<?php
require_once('BoomtownClient/autoload.php');

use Swagger\Client\ApiClient;
use Swagger\Client\Configuration;
use Swagger\Client\Api\ProvidersApi;
use Swagger\Client\Api\MerchantsApi;
use Swagger\Client\Api\IssuesApi;
use Swagger\Client\Model\Issue;

# Create a configuration object and add your Provider public/private keys
# https://boom-1-api.dev.gizmocreative.com/api/v2
# Public Key: E88BD2D2B44F749ED372
# Private Key: 98de93cbcf35d578adcce3e9c9f68562b3327006

# Apply the configuration to the API client
$apiClient = new ApiClient($config);
$apiClient->setApiToken("E88BD2D2B44F749ED372")->setApiSecret("https://boom-1-api.dev.gizmocreative.com/api/v2");

# Instantiate the ProvidersApi client
try {
    $providerApi = new ProvidersApi($apiClient);

    # Request your Provider model
    # Results are always an array of 0 or more models
    $provider = $providerApi->getProvider()->getResults()[0];

    # Request your default team
    $defaultTeam = $providerApi->getProviderTeam($provider->getDefaultPartnersTeamsId())->getResults()[0];

    # Get the raw response for the provider teams request
    $teams = $providerApi->getProviderTeams();

    # Print the raw ProviderTeamResponse
    print_r($teams); echo "\n\n";

    # Print only the array of ProviderTeam models
    print_r($teams->getResults()); echo "\n\n";


    $members_collection = $providerApi->getProviderMembers();

} catch (\Swagger\Client\ApiException $e) {
    print_r($e->getResponseObject());
}


//$teams = $providerApi->getProviderTeams();
//print_r($teams);
//echo "\n\n";
//
//// Get all of the members associated with the provider
//$member_collection = $providerApi->getProviderMembers();
//print_r($member_collection);
//echo "\n\n";

$merchantsApi = new MerchantsApi($apiClient);
try {
    // Get a single member using their ID
    $member_id = "WA3QMJ";
    $member = $merchantsApi->getMember($member_id)->getResults();
    print_r($member);
    echo "\n\n";
} catch (\Swagger\Client\ApiException $e) {
    print_r($e->getResponseObject());
}

$issuesApi = new IssuesApi($apiClient);
$issuesApi->getIssues();
//try {
//    $issuesApi = new IssuesApi($apiClient);
//    $issue = new Issue();
//    $issue->setDetails("This is a test");
//    $issue = $issuesApi->createIssue($issue);
//    print_r($issue);
//    echo "\n\n";
//} catch (\Swagger\Client\ApiException $e) {
//    print_r($e->getResponseObject());
//}


//echo "\n\n";
//
//// Get a single issue using it's ID
//$issue_id = "WA3QMJ-FYH-2PAJHV";
//$issue = $issuesApi->getIssue($issue_id);
//print_r($issue->getResults());
//echo "\n\n";