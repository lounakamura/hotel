<?php
    session_start();

    require_once "php/config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    if (isset($_SESSION['loggedin'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <div class='login'>
        <form action="php/authentication.php" method="POST">
            <label for="username">
                <img src='images/ui/user-2-svgrepo-com.svg'></img>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <img src='images/ui/lock-circle-svgrepo-com.svg'></img>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Log in">
        </form>
    </div>
</body>
</html>