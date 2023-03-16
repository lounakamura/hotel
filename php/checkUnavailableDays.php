<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    $i = $_POST['i'];
    $currMonth = $_POST['currMonth'];
    $currYear = $_POST['currYear'];
    $roomType = $_POST['roomType'];
    
    $query = "SELECT COUNT(*) as unavailable FROM reservation JOIN room USING (room_number) WHERE '$currYear-$currMonth-$i' BETWEEN start_date and end_date AND room_type='$roomType'";
    $result = $connection->query($query);
    $availability = $result->fetch_assoc();
    if($availability['unavailable']=='10'){
        echo 'unavailable';
    } else {
        echo 'available';
    }
        
?>