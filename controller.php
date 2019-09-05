<?php
/**
  * Twillo starter pack
  *
  * Twillo rest has some issues being used on the lamp stack. In the POST values they pass they use "To" and "From" which are mysql reservere words. 
  * This start pack takes care that, and saving the post variables to mysql tables properly escapped.
  * @author  Blake Howe <blake@blakehowe.com>
  * @since 1.0
  *
  */

require_once('config.php');
require_once('functions.php');

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

$client = new Client($sid, $token);

$service = $client->proxy->v1->services
                             ->create($_POST['SmsMessageSid']);


$phone_number = $client->proxy->v1->services($service)
                                  ->phoneNumbers
                                  ->create(array(
                                               "sid" => $sid
                                           )
                                  );


 $session = $client->proxy->v1->services($service)
                                  ->sessions
                                  ->create(array($_POST['SmsMessageSid'] => "Chat Session"));                               


print($phone_number->sid);

/*
# Add our first participant
$participantA = $session.participants.create(
  identifier: $_POST['From'],
  friendly_name: "Alice"
);

# Add our second participant
$participantB = $session.participants.create(
  identifier: "+16015001794",
  friendly_name: "Bob"
);


# Retrieve the Twilio proxy numbers assigned to the two participants
puts(participantA.proxy_identifier);
puts(participantB.proxy_identifier);

echo 'send mail';*/



die;


$workit = $_POST;
//determines what post type is coming from the twillo rest api
if (post_type_sms($workit)){    
    save_sms_log($workit);
    //forard the text
    if (true){ //if its not a message from here kick it over there

      try {
        $messageid =   $client->messages->create(
            $forwarded_to,
           /* array(
                'from' => $twillo_number,
                'body' => "dsfsdfds"
            )*/

            $_POST
        );

       //echo $messageid;
    }
    catch (Exception $e) {
        $TwilioError = "Error: " . $e->getMessage();
        echo $TwilioError;
    }

    }
    else{ //if its a message from me figure out who it needs to go to.


    }
    

}else{
  
    save_phone_log($workit);
}


