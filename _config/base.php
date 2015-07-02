<?php
session_start();

$dbhost = "localhost";
$dbname = "GauchoFootball2015";
$dbuser = "root";
$dbpass = "root";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());