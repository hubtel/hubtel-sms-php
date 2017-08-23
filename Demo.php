<?php

// Let us test the SDK


require './Hubtel/Api.php';

$auth = new BasicAuth("clientId", "clientSecret");
// instance of ApiHost
$apiHost = new ApiHost($auth);
// instance of AccountApi
$accountApi = new AccountApi($apiHost);
// Get the account profile
// Let us try to send some message
$messagingApi = new MessagingApi($apiHost);
try {
    // Send a quick message
    $messageResponse = $messagingApi->sendQuickMessage("DevUniverse", "+233207110652", "Welcome to planet Hubtel!");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}
