<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    $query = "SELECT room_id, name, guests, price_per_night FROM room_type WHERE room_id=".$_GET['room-type'];
    $result = $connection->query($query);
    $selectedRoomType = $result->fetch_assoc();
    $result->free();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | The Roosevelt Hotel</title>
    <link rel="icon" type="image/ico" href="images/ui/logo.svg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/booking.css">
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
        </div>
    </header>

    <main class='main-container'>
        <div class='content-section'>
            <div class='date-choose'>
                <form method='POST'>
                    <div>
                        <label for='start-date'>Start date</label><input type='text' id='start-date' name='start-date' value='dd/mm/yyyy' readonly>
                    </div>
                    <div>
                        <label for='end-date'>End date</label><input type='text' id='end-date' name='end-date' value='dd/mm/yyyy' readonly>
                    </div>
                    <div>
                        <label for='guests'>Guests</label>
                        <button type='button' class='subtract-btn'>-</button>
                        <?php
                            echo "<span class='guests-value' data-min='1' data-max='".$selectedRoomType['guests']."' data-step='1'>1</span>";
                        ?>
                        
                        <button type='button' class='add-btn'>+</button>
                        
                    </div>
                    <button type='submit'>Continue</button>
                </form>
            </div>
            
            <div class='calendar-container not-displayed'>
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
            <div class='content-section'>
                <input type='text' name='first-name' placeholder='First name'>
                <input type='text' name='last-name' placeholder='Last name'>
                <input type='tel' name='phone' placeholder='Phone number'>
                <input type='email' name='email' placeholder='Email address'>
                <button type='submit'>Book</button>
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