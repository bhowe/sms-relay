<?php

require_once('config.php');

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;


$client = new Client($sid, $token);


$client->messages->create(
    // Where to send a text message (your cell phone?)
    '6015001794',
    array(
        'from' => $from,
        'body' => 'I sent this message in under 10 minutes!'
    )
);