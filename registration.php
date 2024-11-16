<?php
$username = $_POST['username'];
$pass = $_POST['password'];
$co_pass = $_POST['co-password'];

if ($pass == $co_pass) {
    $conn = mysqli_connect("localhost", "root", "V2004@qwer#", "login_info") or die("Connection failed!");
    
    $SQL = "SELECT * FROM admin_info WHERE username = '{$username}' AND password = '{$pass}'";
    $result = mysqli_query($conn, $SQL) or die("Query failed!");
    $num = mysqli_num_rows($result);
    
    if ($num == 1) {
        echo "You have already existed in the database";
    } else {
        $sql = "INSERT INTO admin_info (username, password) VALUES ('{$username}', '{$pass}')";
        $result = mysqli_query($conn, $sql) or die("Insert query failed!");
        mysqli_close($conn);
        header("Location: http://localhost/Parking-lot-Management-System/index.php");
    }
} else {
    echo "Passwords do not match!";
}
?>
