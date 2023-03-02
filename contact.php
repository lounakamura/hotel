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
    <title>Contact | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <header>
        <div class='header-bg'>
            <div class='header-logo-container'>
                <img src='images/ui/logo.svg'>
                <h1>The Roosevelt Hotel</h1>
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
            <a class='hamburger-menu-option' href='dining.php'>Dining</a>
            <a class='hamburger-menu-option' href='gallery.php'>Gallery</a>
            <a class='hamburger-menu-option' href='contact.php'>Contact</a>
        </div>
    </nav>

    <main class='main-container'>
        <div class='main-section'>
            <div class='main-content'>
                <h2>Contact</h2>
                <h3>Contact information and our location</h3>
            </div>
        </div>
        <div class='main-section'>
            <div class='content-section'>
                <div class='contact-info'>
                    <div class='contact-header'>
                        <h4>Contact us</h4>
                    </div>
                    <div class='phone'>
                        <h5>Telephone</h5>
                        <span>+1 800 819 5053</span>
                    </div>
                    <div class='email'>
                        <h5>E-mail</h5>
                        <span>theroosevelt@hotel.com</span>
                    </div>
                </div>
            </div>
            <div class='content-section'>
                <div class='map'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.1097666762676!2d100.50791181482998!3d13.711801190373334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298bf9d51fd81%3A0xc5eea6af49e69569!2sFour%20Seasons%20Hotel%20Bangkok%20at%20Chao%20Phraya%20River!5e0!3m2!1spl!2spl!4v1675717860831!5m2!1spl!2spl" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class='address'>
                    <h5>Address</h5>
                    <span>The Roosevelt Hotel</span>
                    <span>300/1 Charoen Krung Rd</span>
                    <span>Bangkok 10120</span>
                    <span>Thailand</span>
                </div>
            </div>

            <div class='main-section'>
                <div class='content-section'>
                    <h4>Formularz kontaktowy</h4> <!-- TODO -->
                    Full name
                    e-mail
                    message
                    submit
                </div>            
            </div>

            <div class='main-section'>
                <div class='content-section'>
                    <h4>FAQ</h4> <!-- TODO -->
                </div>            
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