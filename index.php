<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <header>
        <div class='header-bg'>
            <div class='header-logo-container'>
                <img src='images/ui/logo.svg'>
                <h1>The Roosevelt Hotel</h1>
                <!-- ok so i want some parallax snapping -->
            </div>
            <div class='hamburger-icon'>
                <div class='hamburger-shape'></div>
                <div class='hamburger-shape'></div>
                <div class='hamburger-shape'></div>
            </div>
        </div>
    </header>
    <main>
        <div class='main-first'></div>
        <div class='decorative-border-container'>
            <div class='decorative-border'></div>
        </div>
    </main>
</body>
</html>

<?php
    $connection->close();
?>