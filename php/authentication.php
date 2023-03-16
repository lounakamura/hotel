<?php
    session_start();

    require_once "config.php";

    $connection = new mysqli ($servername, $username, $password, $database);

    if ( !isset($_POST['username'], $_POST['password']) ) {
        header('Location: ../login.php');
    }

    if ($stmt = $connection->prepare('SELECT account_id, password, is_admin FROM accounts WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($account_id, $password, $is_admin);
            $stmt->fetch();
            if ($_POST['password'] === $password) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $account_id;
                $_SESSION['is_admin'] = $is_admin;
                header('Location: ../index.php');
            } else {
                header('Location: ../login.php');
            }
        } else {
            header('Location: ../login.php');
        }
    
        $stmt->close();
    }
?>