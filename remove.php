<?php
include 'connect.php';
if (isset($_GET['remove'])) {
  echo 'remove was selected';
}
$sql = "DELETE FROM <database>  WHERE <col1> = $ID";
mysqli_query($connection, $sql); //References back to code in connect.php
<?>
