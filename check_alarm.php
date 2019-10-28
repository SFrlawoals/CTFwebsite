<?php
$path = "/var/www/html/SFproject";
// echo $_SERVER['DOCUMENT_ROOT']."<BR>";
session_start();
echo $_SESSION['userid']."<br>";
#include("./db_connect.php");
include($path."/database/db_connect.php");
?>