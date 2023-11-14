<?php

if (isset($_GET['key1'])) {
  echo 'key1 is set';
}
$sql = "DELETE FROM <database>  WHERE <col1> = '<ProductID>'";
mysqli_query($connection, $sql); //References back to code in connect.php
<?>