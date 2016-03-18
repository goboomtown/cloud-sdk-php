<?php
require_once('BoomtownClient/autoload.php');

use Swagger\Client\ApiClient;
use Swagger\Client\Api\ProvidersApi;
use Swagger\Client\Api\MerchantsApi;
use Swagger\Client\Api\IssuesApi;
use Swagger\Client\ApiException;

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
    # If you just want to get right at the data call the getResults method.
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


#### Working with Merchant Issues
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



#### Creating a new Merchant and creating a new Issue for them
use Swagger\Client\Model\Issue;
use Swagger\Client\Model\Member;
use Swagger\Client\Model\MemberUser;
use Swagger\Client\Model\MemberLocation;
use Swagger\Client\Model\MemberCreateRequest;
$merchantApi = new MerchantsApi($apiClient);
$providerApi = new ProvidersApi($apiClient);
$issuesApi   = new IssuesApi($apiClient);
try {

    # First Lets create a new Merchant,
    # we will simultaneously create a user and a location
    $memberCreate = new MemberCreateRequest();

    # Instantiate the models
    $memberCreate
        ->setMembers(new Member())
        ->setMembersUsers(new MemberUser())
        ->setMembersLocations(new MemberLocation());

    # Create the member
    $memberCreate->getMembers()
        ->setName("A Merchant")
        ->setCity("San Francisco")
        ->setState("CA")
        ->setZipcode("94101")
        ->setEmail("info@aMerchant.com")
        ->setPhone("555 555 5555")
        ->setStreet1("123 Sky Lane");

    # Create the User
    $memberCreate->getMembersUsers()
        ->setFirstName("Bob")
        ->setLastName("Mango")
        ->setSmsNumber("999 999 9999")
        ->setEmail("bmango@aMerchant.com");

    # Create the Location
    $memberCreate->getMembersLocations()
        ->setSiteName("A Merchant Mango")
        ->setCity("San Francisco")
        ->setState("CA")
        ->setZipcode("94101")
        ->setStreet1("1 Mango Lofts")
        ->setStreet2("#1337");

    # Ok, lets save everything
    $memberData = $merchantApi->createMember($memberCreate)->getResults();

    # Use the new Merchant data to create a Issue
    $issue = new Issue();
    $issue->setMembersId($memberData->getMember()->getId())
        ->setMembersLocationsId($memberData->getMemberLocation()->getId())
        ->setMembersUsersId($memberData->getMemberUser()->getId())
        ->setDetails("We would like to get WiFi installed here.")
        ->setType("Support");

    $issue = $issuesApi->createIssue($issue);

} catch (ApiException $e) {
    print_r($e->getResponseObject());
}