<?php
include 'connect.php';

// Check if the URL parameter 'ID' is set
if (isset($_GET['ID'])) {
    // Retrieve and sanitize the input
   $ID = $_GET['ID'];
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($connection, "DELETE FROM stock WHERE id = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    // Bind the parameter to the prepared statement as a string
    mysqli_stmt_bind_param($stmt, 's', $ID);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Record removed successfully.";
        } else {
            echo "No record found with ID '" . htmlspecialchars($ID) . "'.";
        }
    } else {
        echo "Error removing record: " . htmlspecialchars(mysqli_stmt_error($stmt));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "ID required.";
}

// Close the connection
mysqli_close($connection);
?>
