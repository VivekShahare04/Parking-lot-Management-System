<?php
$owner_name = $_POST['owner_name'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_number = $_POST['vehicle_number'];
$entry_date = $_POST['entry_date'];
$exit_date = $_POST['exit_date'];
$token_number = $_POST['token'];

$conn = mysqli_connect("localhost","root","V2004@qwer#","parking_update_info") or die("failed to connect");
$sql = "INSERT INTO vehicle_update_info(`Vehicle Owner Name`,`Vehicle Name`,`Vehicle_Number`,`Entry_Date`,`Exit Date`,`Token_Number`) VALUES('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$exit_date}','{$token_number})";
$result = mysqli_query($conn,$sql) or die("failed to execute query");
header("location:http://localhost/Parking-lot-Management-System/index.php");
$mysqli_close($conn);

?>