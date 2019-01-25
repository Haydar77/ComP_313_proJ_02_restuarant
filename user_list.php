<?php

require "../conn/db_connection.php";
require "security/security.php";

//echo "User ID is: " . $_SESSION["user_id"];
//echo "Email is: " . $_SESSION["email"];

//$sql = "SELECT t1.booking_id, t1.user_id, t1.booking_date, t1.start_time, t1.end_time, t1.guest_count, t2.booking_status_name FROM booking AS t1 INNER JOIN booking_status AS t2 ON t1.booking_status_id  =  t2.booking_status_id";//  WHERE t1.user_id='" . $_SESSION["user_id"] . "'";
$sql = "SELECT * FROM user";

//echo $sql; exit;
$result = $conn->query($sql);


//var_dump($result); //exit;


?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Online Restaurant Admin</title>
 </head>
 <body>
<h1>Online Restaurant Admin</h1>

<?php
require "menu.php";
?>

<fieldset>
<legend>Existing Customer List</legend>
<?php
if ($result->num_rows > 0) {

?>
<table border="1">
<tr>
	<td><b>User Name</b></td>
	<td><b>Email</b></td>
	<td><b>Contact</b></td>
	<td><b>Address</b></td>
	<td><b>Prime Customer</b></td>
</tr>
<?php

	while ($row = $result->fetch_assoc()) {

?>

<tr>
	<td><a href="update_profile.php?user_id=<?php echo $row["user_id"]; ?>"><?php echo $row["last_name"] . ", " . $row["first_name"] ; ?></a></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["contact_no"]; ?></td>
	<td><?php echo $row["address"]; ?></td>
	<td><?php if($row["prime_customer"]==1){echo "Yes";}else{echo "No";} ?></td>
</tr>
<?php
}
?>

</table>
<?php
}else
{ echo "No booking information found<br>";
}
?>
</fieldset>

</body>
</html>