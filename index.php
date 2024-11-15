<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                    <h1>Parking Management</h1>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="record.php">All Records</a></li>
                        <li><a href="admin.php">Make parking Admin</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-">
                    <h2 class="register">Registration Form</h2>
                    <form action="save.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Vehicle Owner Name:</span>
                        </div>
                        <input type="text" name="owner_name" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Vehicle Name:</span>
                        </div>
                        <input type="text" name="vehicle_name" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Vehicle Number:</span>
                        </div>
                        <input type="text" name="vehicle_number" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Entry Date:</span>
                        </div>
                        <input type="date" name="entry_date" class="form-control">
                    </div>
                
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Token Number:</span>
                        </div>
                        <input type="number" name="token" class="form-control">
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="register1">All Vehicle Entry Records</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Search</span>
                        </div>
                        <input type="text" class="form-control" onkeyup="search()" id="text" placeholder="Enter vehicle details">
                    </div>
                    <table class="table table-striped">
                        <?php
                            $conn = mysqli_connect("localhost","root","V2004@qwer#","Parking System") or die("failed to connect");
                            $sql = "SELECT * FROM vehicle_info";
                            $result = mysqli_query($conn,$sql) or die("failed to execute query");
                            if(mysqli_num_rows($result)>0){
                        ?>
                        <thead>
                            <tr>
                            <th scope="col">Vehicle Owner Name</th> 
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Vehicle Number</th>
                            <th scope="col">Entry Date</th>
                            <th scope="col">Token Number</th>
                            <th scope="col">Update Record</th>
                            <th scope="col">Delete Record</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['Vehicle Owner Name'];?></td>
                                <td><?php echo $row['Vehicle Name'];?></td>
                                <td><?php echo $row['Vehicle_Number'];?></td>
                                <td><?php echo $row['Entry Date'];?></td>
                                <td><?php echo $row['Token_Number'];?></td>
                                <td><a href="update.php?Vehicle_Number=<?php echo $row["Vehicle_Number"]?>">Exit Date</a></td>
                                <td><a href="delete-inline.php?Vehicle_Number=<?php echo $row["Vehicle_Number"]?>">Delete</a></td>
                            </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    }else{
                        echo "No records found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script>
const search = () => {
    var input_value = document.getElementById("text").value.toUpperCase();
    var table = document.getElementById("table");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) { 
        var td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            var text_value = td.textContent ;
            if (text_value.toUpperCase().indexOf(input_value) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
</body>
</html>