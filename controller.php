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

//var_dump($_POST);

if ($debug){
  log_to_file($_POST);
  die;
}



require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

$client = new Client($sid, $token);
$workit = $_POST;
//determines what post type is coming from the twillo rest api
if (post_type_sms($workit)){    
    save_sms_log($workit);
    //forard the text
    if ($_POST['From'] !== $forwarded_to){ //if its not a message from here kick it over there

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


