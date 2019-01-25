<?php

require "conn/db_connection.php";
require "security/security.php";

//echo $dbname;

var_dump($_POST); //exit;

$email = $_POST["email"];
$password = $_POST["password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$contact_no = $_POST["contact_no"];
$address = $_POST["address"];
$user_id = $_SESSION["user_id"];



$sql = "UPDATE user SET email='" . $email ."', password='" . $password . "', first_name='" . $first_name . "', last_name='" . $last_name . "', contact_no='" . $contact_no . "', address='" . $address . "'  WHERE user_id=" . $user_id;

//$sql = "INSERT INTO booking (user_id, booking_date, start_time, end_time, booking_status_id)
//VALUES ('" . $user_id . "','" . $booking_date .  "','" . $start_time . "','" . $end_time . "', 1)";

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