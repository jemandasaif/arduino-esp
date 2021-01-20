<?php
$MyUsername = "jemanda";  // mysql username
$MyPassword = "Jemanda1024$";  // mysql password
$MyHostname = "212.227.164.243";      // Your Host
$Database = "jemanda";    // Name of your database
$dbh = mysqli_connect($MyHostname , $MyUsername, $MyPassword, $Database);
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}
?>