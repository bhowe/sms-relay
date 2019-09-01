<?php

require_once('config.php');
require_once('functions.php');


require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

$client = new Client($sid, $token);
$workit = $_POST;
if (post_type_sms($workit)){    
    save_sms_log($workit);
}else{
  
    save_phone_log($workit);
}


//use case fred sends a text to number the from is 601-000-0000
//Forwards to 601-500-1794
//if from mumber is $forwarded_to relay to the "$To"
//()
//$client->messages->create(
    // Where to send a text message (your cell phone?)
 //   '6015001794',
 //   array(
//        'from' => $from,
 //       'body' => $_POST 'body' 
 ////   )
//);

//var_dump($twilllo_Mock_sms_array);

