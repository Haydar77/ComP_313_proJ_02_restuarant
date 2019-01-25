<?php
session_start();
require "../conn/db_connection.php";

$admin_email = $_POST["admin_email"];
$admin_password = $_POST["admin_password"];

$sql = "SELECT * from admin_user WHERE admin_email='" . $admin_email ."' AND admin_password='" . $admin_password . "'";
echo $sql;
//exit;
$result = $conn->query($sql);

var_dump($result);
//exit;


if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
var_dump($row);

$_SESSION["admin_user_id"] = $row["admin_user_id"];
//$_SESSION["email"] = $row["email"];


echo "User ID is: " . $_SESSION["user_id"];
//echo "Email is: " . $_SESSION["email"];

header("Location: admin_home.php");
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