<?php
session_start();

$_SESSION["user_id"] = "";
//$_SESSION["email"] = "";

header("Location: index.php");
exit;

?>

