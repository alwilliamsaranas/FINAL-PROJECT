<?php
include 'db_connect';

$sql = "SELECT start_time, end_time FROM light_schedule LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo jason_encode(["start_time" => "00:00:00" , "end_time" => "00:00:00"]);
}
?>