<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    $query = "INSERT INTO message (message_id, full_name, email, message) VALUES ('', '".$_POST['full-name']."', '".$_POST['email']."', '".$_POST['message']."')";
    $result = $connection->query($query);

    header('Location: ../contact.php');
?>