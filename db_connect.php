<?php
$host = 'localhost';
$db = 'light_sensor_system';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user , $pass, $db);

if ($conn->conncet_error) {
    die("Connection falied: " . $conn->conncect_error);
}
?>