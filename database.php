<?php

$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$databasename = "uploadimage";

$bd = mysql_connect($hostname, $dbuser, $dbpassword) or die("Wrong username or password.");
mysql_select_db($databasename, $bd) or die("Can't connect to the database");

?>