<?php 
@$vehicle_number = $_GET["vehicle_number"];
$conn = mysqli_connect("localhost","root","V2004@qwer#","Parking System") or die("connection failed");
$vehicle_number = mysqli_real_escape_string($conn, $vehicle_number);
$sql = "DELETE FROM  vehicle_info where Vehicle_Number = '${vehicle_number}'";
$result = mysqli_query($conn,$sql) or die("Error in deleting");
header("location:http://localhost/Parking-lot-Management-System/index.php");
mysqli_close($conn);
?>