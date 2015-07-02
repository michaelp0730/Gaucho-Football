<?php
// ALERT!!!
// IMPORTANT!!!
// DO NOT UPLOAD THIS FILE TO YOUR SERVER WITH THESE CONFIG VALUES!!!
// YOU'LL FUCK EVERYTHING UP!
// USE THE CORRECT VALUES FROM YOUR HOSTING ACCOUNT!!!
session_start();

$dbhost = "localhost";
$dbname = "my_db_name";
$dbuser = "my_db_user";
$dbpass = "my_db_password";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());