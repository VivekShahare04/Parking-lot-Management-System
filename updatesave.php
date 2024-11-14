<?php
// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "V2004@qwer#", "parking_update_info");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve and escape user inputs to prevent SQL injection
$owner_name = mysqli_real_escape_string($conn, $_POST['owner_name']);
$vehicle_name = mysqli_real_escape_string($conn, $_POST['vehicle_name']);
$vehicle_number = mysqli_real_escape_string($conn, $_POST['vehicle_number']);
$entry_date = mysqli_real_escape_string($conn, $_POST['entry_date']);
$exit_date = mysqli_real_escape_string($conn, $_POST['exit_date']);
$token_number = mysqli_real_escape_string($conn, $_POST['token']);

// Prepare the SQL query
$sql = "INSERT INTO vehicle_update_info (`Vehicle Owner Name`, `Vehicle Name`, `Vehicle_Number`, `Entry_Date`, `Exit Date`, `Token_Number`) 
        VALUES ('$owner_name', '$vehicle_name', '$vehicle_number', '$entry_date', '$exit_date', '$token_number')";

// Execute the query and check for errors
if (!mysqli_query($conn, $sql)) {
    die("Error executing query: " . mysqli_error($conn));
}

// Redirect after successful insertion
header("Location: http://localhost/Parking-lot-Management-System/index.php");

// Close the database connection
mysqli_close($conn);
?>
