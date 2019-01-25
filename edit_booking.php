<?php

require "conn/db_connection.php";
require "security/security.php";

//echo "User ID is: " . $_SESSION["user_id"];
//echo "Email is: " . $_SESSION["email"];

$sql = "SELECT t1.booking_id, t1.user_id, t1.booking_date, t1.start_time, t1.end_time, t1.guest_count FROM booking AS t1 WHERE t1.user_id='" . $_SESSION["user_id"] . "' AND t1.booking_id=". $_REQUEST["booking_id"];
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
<legend>Edit Booking Request</legend>
<?php
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
?>
<form id="booking_form" action="edit_booking_action.php" method="post">
<table border="0">
<tr>
	<td>Booking Date : </td>
	<td><input type="date" name="date" id="date" maxlength="50" value="<?php echo $row["booking_date"];?>" /></td>
</tr>
<tr>
	<td>Start Time : </td>
	<td><input type="time" name="start_time" id="start_time" maxlength="50" value="<?php echo $row["start_time"];?>" /></td>
</tr>
<tr>
	<td>End Time : </td>
	<td><input type="time" name="end_time" id="end_time" maxlength="50" value="<?php echo $row["end_time"];?>" /></td>
</tr>
<tr>
	<td>Guest Count : </td>
	<td><input type="text" name="guest_count" id="guest_count" maxlength="50" value="<?php echo $row["guest_count"];?>"/></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="Update" value="Update" />
	<input type="Reset" name="Reset" value="Reset" /></td>
</tr>
</table>
<input type="hidden" name="booking_id" id="booking_id" value="<?php echo $row["booking_id"];?>" />
</form>
<?php
}else
{ echo "No booking information found";
}
?>
</fieldset>

</body>
</html>