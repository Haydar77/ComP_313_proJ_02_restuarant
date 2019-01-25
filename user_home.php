<?php

require "conn/db_connection.php";
require "security/security.php";

//echo "User ID is: " . $_SESSION["user_id"];
//echo "Email is: " . $_SESSION["email"];

$sql = "SELECT t1.booking_id, t1.user_id, t1.booking_date, t1.start_time, t1.end_time, t1.guest_count, t2.booking_status_name FROM booking AS t1 INNER JOIN booking_status AS t2 ON t1.booking_status_id  =  t2.booking_status_id  WHERE t1.user_id='" . $_SESSION["user_id"] . "'";
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
  <title>Online Restaurant Booking</title>
 </head>
 <body>
<h1>Online Restaurant Booking</h1>

<?php
require "menu.php";
?>

<fieldset>
<legend>Existing Booking Information</legend>
<?php
if ($result->num_rows > 0) {

?>
<table border="1">
<tr>
	<td>Booking Date</td>
	<td>Start Time</td>
	<td>End Time</td>
	<td>Guest Count</td>
	<td>Booking Status</td>
	<td>Action</td>
</tr>
<?php

	while ($row = $result->fetch_assoc()) {

?>

<tr>
	<td><?php echo $row["booking_date"]; ?></td>
	<td><?php echo $row["start_time"]; ?></td>
	<td><?php echo $row["end_time"]; ?></td>
	<td><?php echo $row["guest_count"]; ?></td>
	<td><?php echo $row["booking_status_name"]; ?></td>
	<td>
	<a href="edit_booking.php?booking_id=<?php echo $row["booking_id"];?>">Edit</a> | <a href="delete_booking.php?booking_id=<?php echo $row["booking_id"];?>">Delete</a>
	</td>
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
<br><a href="new_booking.php">New Booking Request</a>
</fieldset>

</body>
</html>