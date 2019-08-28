<?php 

//require_once('mock_test_objects.php');


function save_phone_log(){

  global $twillo_Mock_phone_array;

    $predefinedChecksum = "84e602bbec8124f298e353171fb7f5b2"; // this is the hash value of all the array keys
    $keys = array_keys($twillo_Mock_phone_array);
    $values = array_values($twillo_Mock_phone_array);
    $sql = "INSERT INTO `hiddensms`.`sms_log` (" . join(',', $keys) . ") VALUES ('" . join("',", $values) . "');";

    echo $sql;

    //$checksum = md5(join(',',$keys));
   // if ($checksum<>$predefinedChecksum) exit;
  //  else $res = mysql_query($qry, $conn);
    
    

    
}

function save_sms_log(){
 

}
