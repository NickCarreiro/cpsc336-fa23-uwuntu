<?php
if (isset($_GET['add'])) {
  echo 'key1 is set';
}
$sql = "INSERT INTO <database> (<col1>, <col2>, <col3>) VALUES (<col1 data pulled from html>, <col2 data pulled from html>,  <col3 data pulled from html>)";
mysqli_query($connection, $sql); //References back to code in connect.php
<?> 