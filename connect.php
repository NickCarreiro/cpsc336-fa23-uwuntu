<?php
//$servername  = “uwuntu-db.cka8ngtdpp3k.us-east-1.rds.amazonaws.com”; Provided from RDS instance
//$username     = “username”;
//$password     = “password”;
//$dbname       = “inventory”; //I have worms in my tackle box

$servername = "127.0.0.1";
$username = "root";
$password = "student";
$dbname = "inventory";

//create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

