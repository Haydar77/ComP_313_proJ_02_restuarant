<?php
session_start();
require "conn/db_connection.php";

$input_verification_code = $_POST["verification_code"];
$user_id = $_SESSION["user_id"];

$sql = "SELECT * from verification WHERE user_id='" . $user_id ."' AND status = 0";
//echo $sql;
//exit;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
	$original_verificaton_code = $row["verification_code"];
	//echo $original_verificaton_code . " - " . $input_verification_code; exit;
	if($input_verification_code == $original_verificaton_code)
	{
	  
	  $sql = "UPDATE verification SET status= 1 WHERE user_id = '". $user_id. "' AND verification_code= '" . $original_verificaton_code . "'";
	  $result = $conn->query($sql);
	  
	  header("Location: user_home.php");
	  exit;
	}
	else
	{
	  header("Location: verify_user.php?err_msg=1");
	  exit;
	}


}

var_dump($result);
//exit;


if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
var_dump($row);

$_SESSION["user_id"] = $row["user_id"];
//$_SESSION["email"] = $row["email"];


echo "User ID is: " . $_SESSION["user_id"];
//echo "Email is: " . $_SESSION["email"];

// new code
$verification_code = rand ( 100000 , 999999);
$sql = "INSERT INTO verification (user_id, verification_code, status)
VALUES ('" . $row["user_id"] . "','" . $verification_code .  "', 0)";
//echo $sql; exit;
$result = $conn->query($sql);
header("Location: verify_user.php");

// end of new code

//header("Location: user_home.php");
exit;

	
	//while ($row = $result->fetch_assoc()) {
	//var_dump($row);
	
	//}
	
	
	//$row = mysql_fetch_row($result);
	//var_dump($row);
	//exit;

	
	//$_SESSION["user_id"] = 
}


?>