<?php
function execPrint($command) {
  $result = array();
  exec($command, $result);
  foreach ($result as $line) {
      print($line . "\n");
  }
}

// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull") . "</pre>");

log($_POST);

function log_to_file($thearray){

    file_put_contents("webook.log", print_r($_POST, true),FILE_APPEND);
  
  }