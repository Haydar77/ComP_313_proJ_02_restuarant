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
<legend>User Verification</legend>
<form id="verify_user_form" action="verify_user_action.php" method="post">
<table border="0">
<!-- <?php
//if($_GET["err_msg"] == 1){
?>
<tr>
	<td colspan="2"><b>Wrong verification code</b></td>
</tr>
<?php
//}
?> -->

<tr>
	<td colspan="2">Please check your email for the verification code</td>
</tr>
<tr>
	<td>Verification Code : </td>
	<td><input type="text" name="verification_code" id="verification_code" maxlength="50" /></td>
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