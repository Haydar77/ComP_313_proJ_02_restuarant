<?php

require "conn/db_connection.php";

echo $dbname;

var_dump($_POST);

$email = $_POST["email"];
$password = $_POST["password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$contact_no = $_POST["contact_no"];
$address = $_POST["address"];


$sql = "INSERT INTO user (email, password, first_name, last_name, contact_no, address, prime_customer)
VALUES ('" . $email . "','" . $password .  "','" . $first_name . "','" . $last_name . "','". $contact_no . "','" . $address . "', 0)";

//echo $sql;
//exit;

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";

	header("Location: index.php?msg=1");
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>