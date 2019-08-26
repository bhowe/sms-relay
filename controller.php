<?php

require_once('config.php');


//require __DIR__ . '/vendor/autoload.php';
//use Twilio\Rest\Client;
//use Twilio\Exceptions\TwilioException;

//$client = new Client($sid, $token);

/*$client->messages->create(
    // Where to send a text message (your cell phone?)
    '6015001794',
    array(
        'from' => $from,
        'body' => $_POST['body']
    )
);
*/

$req_dump = print_r($_REQUEST, true);

log_message($req_dump);

function  log_message($message)
{
//Something to write to txt log
$log  = $message . "\n\10\n\10";
//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
}