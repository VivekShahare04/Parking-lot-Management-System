<?php
session_start();
session_destroy();
header("Location:  http://localhost/Parking-lot-Management-System/login.php");
 // Good practice to ensure the script stops after a header redirect
?>
