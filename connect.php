<?php>
$servername  = “<RDS endpoint>”; //Provided from RDS instance
$username     = “<RDS master username>”; //Should be "student"
$password     = “<RDS master password?”; //Should be student
$dbname       = “<RDS database name>”; //Should be CPSC336FinProj

//create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
<?> 