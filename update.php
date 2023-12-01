<?php
include 'connect.php';

// Check if the URL parameters are set
if (isset($_GET['ID'], $_GET['ItemName'], $_GET['Quantity'])) {
    // Sanitize the inputs
    $ID = mysqli_real_escape_string($connection, $_GET['ID']);
    $ItemName = mysqli_real_escape_string($connection, $_GET['ItemName']);
    $Quantity = mysqli_real_escape_string($connection, $_GET['Quantity']);

    // Prepare the SQL statement
    $stmt = mysqli_prepare($connection, "UPDATE stock SET item_name = ?, quantity = ? WHERE id = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    // Bind the parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, 'sis', $ItemName, $Quantity, $ID);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . htmlspecialchars(mysqli_stmt_error($stmt));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "All fields (ID, ItemName, Quantity) are required.";
}

// Close the connection
mysqli_close($connection);
?>
