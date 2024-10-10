<?php 
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    
    $sql = "UPDATE light_scchedule SET start_time= '$start_time' , end_time='$end_time' WHERE id=1";
    
    if ($conn->query($sql) == TRUE) {
        echo "Schedule updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>