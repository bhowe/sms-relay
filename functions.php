<?php 

function save_phone_log($thearray){
    global $db;
    $thearray = backtick_mysql_reserved_in_array($thearray);
    $thearray = escape_the_array($thearray);
    $keys = array_keys($thearray);
    $values = array_values($thearray);
    $sql = "INSERT INTO phone_log (" . join(",", $keys) . ") VALUES ('" . join("','", $values ) . "');";
    if(mysqli_query($db, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
  }
      
}

function save_sms_log($thearray){
  global $db;
  $thearray = backtick_mysql_reserved_in_array($thearray);
  $thearray = escape_the_array($thearray);
  $keys = array_keys($thearray);
  $values = array_values($thearray);
  $sql = "INSERT INTO sms_log (" . join(",", $keys) . ") VALUES ('" . join("','", $values ) . "');";
  if(mysqli_query($db, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

 
}

//replace mysql reserved words in an array

function backtick_mysql_reserved_in_array(& $thearray){

  // Associative Array
  foreach ($thearray as $key => $value){

    if (strtolower($key) == 'to'){
      $thearray =  change_key($thearray,"To", '`' . "To". '`');
    }

    if (strtolower($key) == "from"){
      $thearray =  change_key($thearray,"From", '`' . "From" . '`');
    }

  }

  return $thearray;

}


function change_key( $array, $old_key, $new_key ) {

  if( ! array_key_exists( $old_key, $array ) )
      return $array;

  $keys = array_keys( $array );
  $keys[ array_search( $old_key, $keys ) ] = $new_key;

  return array_combine( $keys, $array );
}

function post_type_sms($thearray){

  return array_key_exists("SmsSid",$thearray);

}

function escape_the_array($thearray){
   
  global $db;

  foreach ($thearray as $key => $value){
    $thearray[$key] = mysqli_escape_string($db,$value);      
  }
  return $thearray;
}