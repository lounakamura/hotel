<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel";

    // Fetching query results to array
    function fetchAllToArray(array &$array, $result) {
        $i = 0;
        while ( $row = $result->fetch_assoc() ) {
            $array[$i] = $row;
            $i++;
        }
    }
?>