<?php
    session_start();

    require_once "php/config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    if(!isset($_GET['room-type'])){
        header('Location: accomodation.php');
    }

    $query = "SELECT * FROM room_type WHERE room_id=".$_GET['room-type'];
    $result = $connection->query($query);
    $selectedRoom = $result->fetch_assoc();
    $result->free();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check rates | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/rates.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        let $_GET = <?php echo json_encode($_GET); ?>;
    </script>
</head>
<body>
    <header>
        <div class='header-bg'>
            <div class='header-logo-container'>
                <img src='images/ui/logo.svg'>
                <h1>The Roosevelt Hotel</h1>
                <img src='images/ui/logo2.svg'>
            </div>
        </div>
    </header>

    <main class='main-container'>
        <div class='main-section'>
            <div class='go-back' onclick='location.href="accomodation.php"'>
                <div class='arrow-back'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span>Return to offers</span>
            </div>
            <div class='content-section'>
                <div class='selected-room-info'>
                    <?php
                        $img = "images/accomodation/".$selectedRoom['room_id']."/1.jpg";
                        echo "<div class='room-photo'>
                            <img src='".$img."'>
                        </div>

                        <div class='description'>
                            <h5>".$selectedRoom['name']."</h5>
                            <div class='details'>
                                <span><img src='images/ui/people-svgrepo-com.svg'></img><span>".$selectedRoom['guests']."</span></span>
                                <span><img src='images/ui/bed-svgrepo-com.svg'></img><span>".$selectedRoom['beds']."</span></span>
                                <span><img src='images/ui/shower-svgrepo-com.svg'></img><span>".$selectedRoom['bathrooms']."</span></span>
                                <span><img src='images/ui/city-svgrepo-com.svg'></img><span>".$selectedRoom['size']." m2</span></span>
                            </div>
                            <span class='price'><span>".$selectedRoom['price_per_night']." $</span><span>per night</span></span>
                        </div>";
                    ?>
                </div>

                <div class='calendar-container'>
                    <div class='month-navigation'>
                        <div class='arrow-left inactive'>
                            <span></span>
                            <span></span>
                        </div>
                        <h4 class='month-year'></h4>
                        <div class='arrow-right'>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class='calendar'>
                        <ul class='weekdays'>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                            <li>Sun</li>
                        </ul>
                        <ul class='days'></ul>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <span>© 2023 The Roosevelt Hotel</span>
        </footer>
    </main>

    <script src='js/calendarGenerator.js'></script>
    <script src='js/booking.js'></script>
    <script src='js/misc.js'></script>
</body>
</html>

<?php
    $connection->close();
?>