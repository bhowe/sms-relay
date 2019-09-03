<?php

echo 'test';

include("config.php");
 //rest
function execPrint($command) {
  $result = array();
  exec($command, $result);
  foreach ($result as $line) {
      print($line . "\n");
  }
}
//dsfdv
// Print the exec output inside of a pre element
print("<pre>" . execPrint($git_pull_command) . "</pre>");
