<?php

include("config.php");

function execPrint($command) {
  $result = array();
  exec($command, $result);
  foreach ($result as $line) {
      print($line . "\n");
  }
}

// Print the exec output inside of a pre element
print("<pre>" . execPrint($git_pull_command) . "</pre>");

log($_POST);
//super
function log_to_file($thearray){

    file_put_contents("webook.log", print_r($_POST, true),FILE_APPEND);
  
  }