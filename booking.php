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
    <title>Booking | The Roosevelt Hotel</title>
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
            </div>
        </div>
    </header>

    <main class='main-container' style='margin-top: 100vh'>
    Pasek z mozliwoscia zmiany zeby sie odswiezalo jak sie zmieni
            Calendar here
            number of adults and children

        <div class='content-section'>
            <div class='search-panel'>
                <input type='text' value='01/03/2023 - 05/03/2023'>
                <input type='text' value='2 Adults - 1 Child'>
                <button>Search</button>
            </div>
        </div>

    Sekcja do wybrania rodzaju pokoju
        or pokaz wybrany pokoj
        Ceny razem z pokojami
        <div class='content-section'>
            <div class='available-rooms'>
                <div class='available-room'>
                    room info
                    price
                    <button>Select room</button>
                </div>
            </div>
        </div>

    Sekcja do wpisywania danych
        Imie
        Nazwisko
        numer telefonu
        adres e mail

    Potwierdzenie rezerwacji i zaplata
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