<?php

require "conn/db_connection.php";
require "security/security.php";

//echo $dbname;

var_dump($_POST); //exit;

$booking_date = $_POST["date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$booking_id = $_POST["booking_id"];
$guest_count = $_POST["guest_count"];
$user_id = $_SESSION["user_id"];



$sql = "UPDATE booking SET booking_date='" . $booking_date ."', start_time='" . $start_time . "', end_time='" . $end_time . "', guest_count='" . $guest_count . "', booking_status_id=1 WHERE booking_id=" . $booking_id . " AND user_id=" . $user_id;

//$sql = "INSERT INTO booking (user_id, booking_date, start_time, end_time, booking_status_id)
//VALUES ('" . $user_id . "','" . $booking_date .  "','" . $start_time . "','" . $end_time . "', 1)";

echo $sql;
//exit;

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";

	header("Location: user_home.php?msg=1");
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>