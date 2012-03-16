<?php
    require 'twilio-php/Services/Twilio.php';

    // your Twilio AccountSid:
    $accountSid = 'XXXXXXXXXXX';
    // your Twilio AuthToken:
    $authToken = 'XXXXXXXXXXX';
    // an SMS-capable Twilio phone number associated with your Twilio account:
    $fromNumber = '+1234567890';

    // retrieve the user's phone number from the Javascript POST request 
    $toNumber = $_POST['phone_number'];

    // instantiate a new REST API helper object, provided by twilio-php
    $client = new Services_Twilio($accountSid, $authToken);

    // compose the message that the recipient will receive on their handset
    $messageBody = 'Download the app: http://www.twilio.com';

    // attempt a REST API request to Twilio. For simplicity, there is no error handling.
    // failure will result in an HTTP 500 error code being returned to the Javascript client.
    $client->account->sms_messages->create($fromNumber, $toNumber, $messageBody);
?>