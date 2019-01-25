<?php

require "../conn/db_connection.php";
require "security/security.php";

$sql = "SELECT * FROM user";
//echo $sql; exit;
$result = $conn->query($sql);


?>


<?php

require "../conn/db_connection.php";
//require "security/security.php";

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
<legend>New Booking Request</legend>
<form id="booking_form" action="new_booking_action.php" method="post">
<table border="0">
<tr>
	<td>User : </td>
	<td>
	<select name="user_id">
	<?php
	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
	?>
	<option value="<?php echo $row["user_id"]; ?>"><?php echo $row["last_name"] . ", " . $row["first_name"]; ?></option>
	<?php
}}
	?>
	
	<select>
	
	
	
	</td>
</tr>

<tr>
	<td>Booking Date : </td>
	<td><input type="date" name="date" id="date" maxlength="50" /></td>
</tr>
<tr>
	<td>Start Time : </td>
	<td><input type="time" name="start_time" id="start_time" maxlength="50" /></td>
</tr>
<tr>
	<td>End Time : </td>
	<td><input type="time" name="end_time" id="end_time" maxlength="50" /></td>
</tr>
<tr>
	<td>Guest Count : </td>
	<td><input type="text" name="guest_count" id="guest_count" maxlength="50"/></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="Submit" value="Submit" />
	<input type="Reset" name="Reset" value="Reset" /></td>
</tr>
</table>
</form>
</fieldset>

</body>
</html>