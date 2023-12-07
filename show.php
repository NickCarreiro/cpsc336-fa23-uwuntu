<?php
include 'connect.php';

// Query to fetch records from the database
$query = "SELECT * FROM stock"; // Replace 'stock' with your actual table name
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($connection));
}

// Start the HTML
echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Database Records</title></head><body>";
echo "<h1>Database Records</h1>";

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Creating a table to display the records
    echo "<table border='1'><tr><th>ID</th><th>Item Name</th><th>Quantity</th></tr>";

    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["item_name"]) . "</td><td>" . htmlspecialchars($row["quantity"]) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results found.";
}

// End the HTML
echo "</body></html>";

// Close the connection
mysqli_close($connection);
header( "refresh:20; url=index.html" );
exit();
?>
