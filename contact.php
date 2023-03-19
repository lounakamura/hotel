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
            <div class='content-section s1'>
                <div class='contact-info'>
                    <div class='phone'>
                        <h2>Phone number</h2>
                        <span>+1 800 819 5053<span>
                    </div>
                    <div class='email'>
                        <h2>E-mail</h2>
                        <span>theroosevelt@hotel.com</span>
                    </div>
                </div>
            </div>

            <div class='content-section s2'>
                <h2>Contact us</h2>
                <form method='POST' action='php/sendMessage.php'>
                    <div>
                        <label for='full-name'>Full name</label>
                        <input type='text' name='full-name' id='full-name' required>
                    </div>
                    <div>
                        <label for='email'>Email</label>
                        <input type='email' name='email' id='email' required>
                    </div>
                    <div>
                        <label for='message'>Message</label>
                        <textarea name='message' id='message' required></textarea>
                    </div>
                    <button type='submit'>Send</button>
                </form>
            </div>

            <div class='content-section s3'>
                <h2>FAQ</h2>
                <div class='container-questions'>
                    <div class='container-question'>
                        <div class='question'>
                            <h3>Question1</h3>
                            <div class='arrow-flip'>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class='answer'>
                            <p>
                                Answer
                            </p>
                        </div>
                    </div>
                    <div class='container-question'>
                        <div class='question'>
                            <h3>Question2</h3>
                            <div class='arrow-flip'>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class='answer'>
                            <p>
                                Answer
                            </p>
                        </div>
                    </div>
                    <div class='container-question'>
                        <div class='question'>
                            <h3>Question3</h3>
                            <div class='arrow-flip'>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class='answer'>
                            <p>
                                Answer
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='content-section s4'>
                <div class='address'>
                    <h2>Address</h2>
                </div>
                <div class='map'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.3346185506603!2d-73.97942548459378!3d40.75466447932737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fe06a22399%3A0x206b4253a07248e8!2sThe%20Roosevelt%20Hotel!5e0!3m2!1spl!2spl!4v1679156568088!5m2!1spl!2spl" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
                    
        <footer>
            <span>© 2023 The Roosevelt Hotel</span>
        </footer>
    </main>

    <script src='js/hamburgerMenu.js'></script>
    <script src='js/accordions.js'></script>
    <script src='js/misc.js'></script>
</body>
</html>

<?php
    $connection->close();
?>