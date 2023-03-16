<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    // Store guest info
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Store reservation info
    $roomType = $_POST['room-type'];
    $startDate = date_format(date_create_from_format('d/m/Y', $_POST['start-date']), 'Y-m-d');
    $endDate = date_format(date_create_from_format('d/m/Y', $_POST['end-date']), 'Y-m-d');
    $numberOfGuests = $_POST['no-of-guests'];

    // Calculate total reservation price
    $query = "SELECT price_per_night FROM room_type WHERE room_id=$roomType";
    $result = $connection->query($query);
    $pricePerNight = $result->fetch_assoc();
    $result->free();
    $tempStartDate = new DateTime($startDate);
    $tempEndDate = new DateTime($endDate);
    $nights = $tempEndDate->diff($tempStartDate)->format("%a");
    if ($nights == 0) {
        $nights = 1;
    }

    $totalPrice = intval($pricePerNight['price_per_night'])*intval($nights);

    $startDate = "'$startDate'";
    $endDate = "'$endDate'";

    // Find available room from chosen room type
    $query = "SELECT room_number FROM room WHERE room_type='$roomType' && room_number NOT IN (SELECT room_number FROM `reservation` WHERE (start_date BETWEEN $startDate AND $endDate) || (end_date BETWEEN $startDate AND $endDate) || (start_date < $startDate AND end_date > $endDate) || (start_date > $startDate AND end_date < $endDate) AND room_number IN (SELECT room_number FROM room WHERE room_type='$roomType')) LIMIT 1";
    $result = $connection->query($query);

    if (mysqli_num_rows($result)>0) {
        $roomNumber = $result->fetch_assoc();
        $result->free();
        // Check if guest exists
        $query = "SELECT guest_id FROM guest WHERE first_name='$firstName' && last_name='$lastName' && phone='$phone' && email='$email'";
        $result = $connection->query($query);
        if (mysqli_num_rows($result)>0) {
            // Guest exists, save guest id
            $guest_id = $result->fetch_assoc();
            $result->free();
        } else {
            $result->free();
            // Add a guest
            $query = "INSERT INTO guest (guest_id, first_name,last_name, phone, email) VALUES ('', '$firstName', '$lastName', '$phone', '$email')";
            $result = $connection->query($query);
            // Save guest id
            $query = "SELECT guest_id FROM guest WHERE first_name='$firstName' && last_name='$lastName' && phone='$phone' && email='$email'";
            $result = $connection->query($query);
            $guest_id = $result->fetch_assoc();
            $result->free();
        }

        // Make a reservation
        $query = "INSERT INTO reservation (reservation_id, guest_id, start_date, end_date, no_of_guests, room_number, total_price, created) VALUES ('', ".$guest_id['guest_id'].", $startDate, $endDate, $numberOfGuests, ".$roomNumber['room_number'].", $totalPrice, current_timestamp())";
        $result = $connection->query($query);
    }

    header('Location: ../admin.php');
?>