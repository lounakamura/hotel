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
    <title>Gallery | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/gallery.css">
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
        </div>
    </nav>

    <main class='main-container'>
        <div class='main-section'>
            <div class='content-section'></div>
        </div>
        <div class='main-section'>
            <div class='gallery-container'>
                <div class='image-gallery'>
                    <div class='column'>
                        <div class='image-item'><img src='images/gallery/1_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/2_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/3_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/4_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/5_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/6_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/7_min.webp'></div>
                    </div>
                    <div class='column'>
                        <div class='image-item'><img src='images/gallery/8_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/9_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/10_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/11_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/12_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/13_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/14_min.webp'></div>
                    </div>
                    <div class='column'>
                        <div class='image-item'><img src='images/gallery/15_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/16_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/17_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/18_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/19_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/20_min.webp'></div>
                        <div class='image-item'><img src='images/gallery/21_min.webp'></div>
                    </div>
                </div>
                <div class='displayed-image hidden'>
                    <div class='cross-icon'>
                        <div></div>
                        <div></div>
                    </div>
                    <div class='arrow-left'>
                        <span></span>
                        <span></span>
                    </div>
                    <img src=''>
                    <div class='arrow-right'>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <span>© 2023 The Roosevelt Hotel</span>
        </footer>
    </main>

    

    <script src='js/hamburgerMenu.js'></script>
    <script src='js/misc.js'></script>
    <script src='js/gallery.js'></script>
</body>
</html>

<?php
    $connection->close();
?>