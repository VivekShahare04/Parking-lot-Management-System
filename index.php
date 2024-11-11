<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                        <input type="text" name="entry_date" class="form-control">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Exit Date:</span>
                        </div>
                        <input type="text" name="exit_date" class="form-control">
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
                    <h2 class="register1">Parking History</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Search</span>
                        </div>
                        <input type="text" class="form-control" onkeyup="search()"id="text" placeholder="Enter vehicle details">
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Vehicle Owner Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Vehicle Number</th>
                            <th scope="col">Entry Date</th>
                            <th scope="col">Exit Date</th>
                            <th scope="col">Delete Record</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vivek Shahare</td>
                                <td>BMW</td>
                                <td>MH45TR3456</td>
                                <td>8/8/2024</td>
                                <td>4/8/2024</td>
                                <td><a href="delete-inline.php">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>