<?php
include 'connect.php';

// Check if the URL parameters are set
if (isset($_GET['ID'], $_GET['ItemName'], $_GET['Quantity'])) {
    // Sanitize inputs
    $ID = mysqli_real_escape_string($connection, $_GET['ID']);
    $ItemName = mysqli_real_escape_string($connection, $_GET['ItemName']);
    $Quantity = mysqli_real_escape_string($connection, $_GET['Quantity']);

    // Prepare SQL statement
    $stmt = mysqli_prepare($connection, "INSERT INTO stock (id, item_name, quantity) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, 'isi', $ID, $ItemName, $Quantity);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record: " . htmlspecialchars(mysqli_stmt_error($stmt));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Required data missing.";
}

// Close the connection
mysqli_close($connection);

header('Location: http://www.10.128.8.49');

exit();
?>
