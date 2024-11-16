<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Parking</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Parking Lot Management System</h1>
    <div class="form">
        <div class="login-form">
            <h2>Login Admin Form</h2>
            <form action="validate.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" required> <br><br>
                
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required> <br><br>
                
                <input type="submit" class="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
