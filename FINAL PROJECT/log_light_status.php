<?php
include 'db_connect.php';

if (isset($get['status'])) {
    $status = $_GET['status'];

    $sql = "INSERT INTO light_log (status) VALUES ('$status)";

    if ($conn->query($sql) == TRUE) {
        echo "Light status logged!";
    }  else {
         echo "Error: " . $conn->error;
    }
} else {
    echo "No status recieved.";
}
?>