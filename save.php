<?php
$owner_name = $_POST['owner_name'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_number = $_POST['vehicle_number'];
$entry_date = $_POST['entry_date'];
$token_number = $_POST['token'];
// $update = $_POST['update'];

$conn = mysqli_connect("localhost","root","V2004@qwer#","Parking System") or die("failed to connect");
$sql = "INSERT INTO vehicle_info(`Vehicle Owner Name`,`Vehicle Name`,`Vehicle_Number`,`Entry Date`,`Token_Number`) values('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$token_number}')";

$result = mysqli_query($conn,$sql) or die("failed to execute query");
header("location:http://localhost/Parking-lot-Management-System/index.php");
$mysqli_close($conn);

?>