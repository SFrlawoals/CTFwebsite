<?php

session_start();
 
$server = "localhost";
$user = "root";
$passwd = "mysql";
$db = "sf";
 
$con = new mysqli($server, $user, $passwd, $db);
//$con = mysqli_connect($server, $user, $passwd, $db);
 
?>