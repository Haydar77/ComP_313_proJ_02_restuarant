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


<fieldset>
<legend>New User Registration</legend>
<form id="registration_form" action="registration_action.php" method="post">
<table border="0">
<tr>
	<td>Email address : </td>
	<td><input type="text" name="email" id="email" maxlength="50" /></td>
</tr>
<tr>
	<td>Password : </td>
	<td><input type="password" name="password" id="password" maxlength="50" /></td>
</tr>
<tr>
	<td>First name : </td>
	<td><input type="text" name="first_name" id="first_name" maxlength="50" /></td>
</tr>
<tr>
	<td>Last name : </td>
	<td><input type="text" name="last_name" id="last_name" maxlength="50" /></td>
</tr>
<tr>
	<td>Contact# : </td>
	<td><input type="text" name="contact_no" id="contact_no" maxlength="50" /></td>
</tr>
<tr>
	<td valign="top">Address : </td>
	<td><textarea name="address" id="address" rows="4" cols="30"></textarea></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="Submit" value="Submit" />
	<input type="Reset" name="Reset" value="Reset" />
	</td>
</tr>
</table>
</form>
</fieldset>
<script src="script/validation.js"></script>
</body>
</html>