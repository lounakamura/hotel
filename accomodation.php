<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    $rooms = [];

    $query = "SELECT * FROM room_type";
    $result = $connection->query($query);
    fetchAllToArray($rooms, $result);
    $result->free();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodation | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/accomodation.css">
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
            <?php 
                foreach ( $rooms as $room ) {
                    echo "
                        <div class='content-section'>
                            <form method='get' action='booking.php'>
                                <div class='gallery'>
                                    <div class='arrow-left'>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class='gallery-container'>";
                                        $dir = "images/accomodation/".$room['room_id']."/";
                                        $images = glob($dir."*.jpg");
                                        
                                        foreach($images as $image) {
                                            echo "
                                            <div class='gallery-photo'>
                                                <img src='".$image."'>
                                            </div>";
                                        }
                                echo "
                                    </div>
                                    <div class='arrow-right'>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class='gallery-header'>
                                    <h5>".$room['name']."</h5>
                                </div>
                                <div class='description'>
                                    <span><img src='images/ui/people-svgrepo-com.svg'></img><span>".$room['guests']."</span></span>
                                    <span><img src='images/ui/bed-svgrepo-com.svg'></img><span>".$room['beds']."</span></span>
                                    <span><img src='images/ui/shower-svgrepo-com.svg'></img><span>".$room['bathrooms']."</span></span>
                                    <span><img src='images/ui/city-svgrepo-com.svg'></img><span>".$room['size']." m2</span></span>
                                    <div class='book-now-container'>
                                        <input type='hidden' name='room-type' value='".$room['room_id']."'>
                                        <button class='book-now-button' type='submit'>Book now</button>
                                    </div>
                                </div>
                            </form>
                        </div>";
                }
            ?>
        </div>
        
        <footer>
            <span>?? 2023 The Roosevelt Hotel</span>
        </footer>
    </main>
    </main>

    <script src='js/hamburgerMenu.js'></script>
    <script src='js/misc.js'></script>
    <script src='js/accomodationGallery.js'></script>
</body>
</html>

<?php
    $connection->close();
?>