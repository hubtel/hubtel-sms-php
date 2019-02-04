<?php

use Hubtel\Sms\ApiHost;
use Hubtel\Sms\BasicAuth;
use Hubtel\Sms\AccountApi;
use Hubtel\Sms\HttpResponse;
use Hubtel\Sms\MessagingApi;
use Hubtel\Sms\MessageResponse;

// import SDK classes 
require './vendor/autoload.php';

$auth = new BasicAuth("client_id", "client_secret");

// instance of ApiHost
$apiHost = new ApiHost($auth);

// instance of AccountApi
$accountApi = new AccountApi($apiHost);

// set web console logging to false
$disableConsoleLogging = false;

// Let us try to send some message
$messagingApi = new MessagingApi($apiHost, $disableConsoleLogging);
try {
    // Send a quick message
    $messageResponse = $messagingApi->sendQuickMessage("CodersForTheWeb", "+233XXXXXXXXX", "We love APIs :)");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}
