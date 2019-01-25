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


<fieldset>
<legend>Admin Login</legend>
<form id="login_form" action="admin_login_action.php" method="post">
<table border="0">
<tr>
	<td>Email address : </td>
	<td><input type="text" name="admin_email" id="admin_email" maxlength="50" /></td>
</tr>
<tr>
	<td>Password : </td>
	<td><input type="password" name="admin_password" id="admin_password" maxlength="50" /></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="Submit" value="Submit" />
	<input type="Reset" name="Reset" value="Reset" /></td>
</tr>
<tr>
	<td></td>
	<td><a href="#reset_pwd.php">Forgot Password?</a></td>
</tr>
</table>
</form>
</fieldset>

</body>
</html>