<?php

    //$vehicle_num = $_GET['Vehicle_Number'];
@$token_number = $_GET['Token_Number'];
$conn = mysqli_connect("localhost","root","V2004@qwer#","Parking System") or die("connection failed");
$sql = "SELECT * FROM vehicle_info WHERE Token_Number = '{$token_number}'";
$result = mysqli_query($conn, $sql) or die("Connection failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">`
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header">
                    <h1>Update your parking data</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-">
                    <h2 class="register">Registration Form</h2>
                    <form action="updatesave.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="owner">Vehicle Owner Name:</span>
                        </div>
                        <input type="text" name="owner_name" value="<?php echo $row['Vehicle Owner Name'];?>" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Vehicle Name:</span>
                        </div>
                        <input type="text" name="vehicle_name" value="<?php echo $row['Vehicle Name'];?>"class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Vehicle Number:</span>
                        </div>
                        <input type="text" name="vehicle_number" value="<?php echo $row['Vehicle_Number'];?>" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Entry Date:</span>
                        </div>
                        <input type="text" name="entry_date" value="<?php echo $row['Entry_Date'];?>" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Exit Date:</span>
                        </div>
                        <input type="date" name="exit_date"  class="form-control">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Token Number:</span>
                        </div>
                        <input type="number" name="token" value="<?php echo $row['Token_Number'];?>"class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary mt-3">
                    </form>
                </div>

                <div class="col-md-6">
                    <img src="images/premium_photo-1673886205989-24c637783c60.avif" class="car" style="width: 700px; height:380px;margin-top:50px;" alt="car picture">
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>

<?php
    }
    } else{
        echo "No vehicle found with this number.";
    }
?>
