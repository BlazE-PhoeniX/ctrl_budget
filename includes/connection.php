<?php

//host, username, password, and database name
$host= "z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username= "wbe4wvj4jqznev8b";
$password= "xrgh65v0ro991637";
$dbname= "xqnwdg697eygsysv";

//make an connection with the data base
$con = mysqli_connect( $host, $username, $password, $dbname)
or die(mysqli_error($con));

//start the session
session_start();

?>
