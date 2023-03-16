<?php
    session_start();

    require_once "php/config.php";

    $connection = new mysqli ($servername, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <header>
        <div class='header-bg'>
            <div class='header-logo-container'>
                <img src='images/ui/logo.svg'>
                <h1>The Roosevelt Hotel</h1>
                <img src='images/ui/logo2.svg'>
            </div>
            <div class='hamburger-icon'>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <nav>
        <div class='hamburger-menu-bg hidden'>
            <a class='hamburger-menu-option' href='index.php'>Home</a>
            <a class='hamburger-menu-option' href='accomodation.php'>Accomodation</a>
            <a class='hamburger-menu-option' href='gallery.php'>Gallery</a>
            <a class='hamburger-menu-option' href='contact.php'>Contact</a>
            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['is_admin'] == true){
                    echo "<a class='hamburger-menu-option' href='admin.php' style='color: red;'>Admin panel</a>
                    <a class='hamburger-menu-option' href='logout.php' style='color: red;'>Log out</a>
                    ";
                }
            ?>
        </div>
    </nav>

    <main class='main-container'>
        <div class='main-section'>
            <div class='content-section'></div>
        </div>
        <div class='main-section'>
            <div class='content-section'>
                <h2>Escape from the ordinary</h2>
                <p>
                    For guests seeking a glamorous escape from the everyday, The Roosevelt Hotel is a world apart. 
                    <br><br>
                    A lovingly renovated historic icon on ten tranquil acres of land, offering a richly blend of grand hotel experiences and amenities, distinctive social events, and a legendary style of service that makes everyone feel like a privileged insider.
                </p>
            </div>
        </div>
        <div class='main-section'>
            <div class='content-section'>

            </div>
        </div>
        
        <footer>
            <span>© 2023 The Roosevelt Hotel</span>
        </footer>
    </main>


    <script src='js/hamburgerMenu.js'></script>
    <script src='js/misc.js'></script>
</body>
</html>

<?php
    $connection->close();
?>