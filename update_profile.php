<?php

require "conn/db_connection.php";
require "security/security.php";

$sql = "SELECT * FROM user  WHERE user_id='" . $_SESSION["user_id"] . "'";
//echo $sql; exit;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
}

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
<legend>Update Profile</legend>
<form id="registration_form" action="update_profile_action.php" method="post">
<table border="0">
<tr>
	<td>Email address : </td>
	<td><input type="text" name="email" id="email" maxlength="50" value="<?php echo $row["email"];?>" /></td>
</tr>
<tr>
	<td>Password : </td>
	<td><input type="password" name="password" id="password" maxlength="50" value="<?php echo $row["password"];?>" /></td>
</tr>
<tr>
	<td>First name : </td>
	<td><input type="text" name="first_name" id="first_name" maxlength="50" value="<?php echo $row["first_name"];?>" /></td>
</tr>
<tr>
	<td>Last name : </td>
	<td><input type="text" name="last_name" id="last_name" maxlength="50" value="<?php echo $row["last_name"];?>" /></td>
</tr>
<tr>
	<td>Contact# : </td>
	<td><input type="text" name="contact_no" id="contact_no" maxlength="50" value="<?php echo $row["contact_no"];?>" /></td>
</tr>
<tr>
	<td valign="top">Address : </td>
	<td><textarea name="address" id="address" rows="4" cols="30"><?php echo $row["address"];?></textarea></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="Update" value="Update" />
	<input type="Reset" name="Reset" value="Reset" />
	</td>
</tr>
</table>
</form>
</fieldset>

</body>
</html>