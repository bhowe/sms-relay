<?php

require_once('config.php');


require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

$client = new Client($sid, $token);


//use case fred sends a text to number the from is 601-000-0000
//Forwards to 601-500-1794
//if from mumber is $forwarded_to relay to the "$To"

$client->messages->create(
    // Where to send a text message (your cell phone?)
    '6015001794',
    array(
        'from' => $from,
        'body' => $_POST['body']
    )
);
