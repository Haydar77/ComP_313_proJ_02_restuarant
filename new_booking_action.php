<?php

require "conn/db_connection.php";
require "security/security.php";


//echo $dbname;

var_dump($_POST);

$booking_date = $_POST["date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$guest_count = $_POST["guest_count"];
$user_id = $_SESSION["user_id"];


$sql = "INSERT INTO booking (user_id, booking_date, start_time, end_time, guest_count, booking_status_id)
VALUES ('" . $user_id . "','" . $booking_date .  "','" . $start_time . "','" . $end_time . "','" . $guest_count . "', 1)";

//echo $sql;
//exit;

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";

	header("Location: user_home.php?msg=1");
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>