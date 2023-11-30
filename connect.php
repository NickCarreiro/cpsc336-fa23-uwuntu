<?php
//$servername  = “uwuntu.cka8ngtdpp3k.us-east-1.rds.amazonaws.com”; Provided from RDS instance
//$username     = “username”;
//$password     = “password”;
//$dbname       = “uwuntu”; //Should be CPSC336FinProj

$servername = "127.0.0.1";
$username = "root";
$password = "student";
$dbname = "inventory";

//create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
?> 
