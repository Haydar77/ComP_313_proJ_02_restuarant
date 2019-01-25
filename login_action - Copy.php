<?php
session_start();
require "conn/db_connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * from user WHERE email='" . $email ."' AND password='" . $password . "'";
//echo $sql; exit;
$result = $conn->query($sql);

var_dump($result);
//exit;


if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	//var_dump($row);

	$_SESSION["user_id"] = $row["user_id"];
	$_SESSION["email"] = $row["email"];
	//echo "User ID is: " . $_SESSION["user_id"];
	//echo "Email is: " . $_SESSION["email"];

	// new code
	$verification_code = rand ( 100000 , 999999);
	$sql = "INSERT INTO verification (user_id, verification_code, status)
	VALUES ('" . $row["user_id"] . "','" . $verification_code .  "', 0)";
	//echo $sql; exit;
	$result = $conn->query($sql);

	// email code

	$url = 'https://api.elasticemail.com/v2/email/send';

	try{
			$post = array('from' => 'admin@restaurant.com',
			'fromName' => 'Restaurant',
			'apikey' => '7f3a8492-914f-48fa-89ef-d0337545fcd9',
			'subject' => 'One Time Verification Code',
				//'to' => 'kalam.ul.mazid@gmail.com;xyz@gmail.com',
			'to' => $_SESSION["email"] ,
			'bodyHtml' => '<h1>One Time Verification Code</h1><br>This is your verification code<br>' . $verification_code,
			'bodyText' => 'This is your verification code<br>' . $verification_code,
			'isTransactional' => false);
			
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $post,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_SSL_VERIFYPEER => false
			));
			
			$result=curl_exec ($ch);
			curl_close ($ch);
			
			echo $result;	
	}
	catch(Exception $ex){
		echo $ex->getMessage();
	}

	// end of email code







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