<?php

$forwarded_to = "601-000-0000";
//number in twillo capable of sms
$twillo_number = "+601000-000";


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'dbusername');
define('DB_PASSWORD', 'dbpassword');
define('DB_NAME', 'dbname');



//twillo info
$sid = '';
$token = '';
$from = '+16010000000';
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
