<?php
session_start();

$name = $_POST["username"];
$pass = $_POST["password"];

// Establish database connection
$conn = mysqli_connect("localhost", "root", "V2004@qwer#", "login_info") or die("Connection failed!");

// SQL query to select admin credentials
$sql = "SELECT * FROM admin_info WHERE username = '{$name}' AND password = '{$pass}'";
$result = mysqli_query($conn, $sql) or die("Query failed!");

// Check if the query returned exactly one row
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION["username"] = $name;
    header("Location: http://localhost/Parking-lot-Management-System/index.php");
    // Good practice to use exit() after header redirects
} else {
    header("Location: http://localhost/Parking-lot-Management-System/login.php");
     // Good practice to use exit() after header redirects
}
?>
