<?php
include 'connect.php';
if (isset($_GET['add'])) {
  echo 'key1 is set';
}
$sql = "INSERT INTO stock (id, item_name, quantity) VALUES ($ID, $ItemName, $Quantity)";
mysqli_query($connection, $sql); //References back to code in connect.php
?> 
