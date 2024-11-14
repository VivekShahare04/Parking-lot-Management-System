<?php 
@$vehicle_number = $_GET["Vehicle_Number"];
$conn = mysqli_connect("localhost","root","V2004@qwer#","parking_update_info") or die("connection failed");
$vehicle_number = mysqli_real_escape_string($conn, $vehicle_number);
$sql = "DELETE FROM  vehicle_update_info where Vehicle_Number = '${vehicle_number}'";
$result = mysqli_query($conn,$sql) or die("Error in deleting");
header("location:http://localhost/Parking-lot-Management-System/record.php");
mysqli_close($conn);
?>