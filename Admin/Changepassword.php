<?php
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="admin")
{
	header("Location:../AuthError.php");
	die();
}
?>
<html>
<head>
<title>ChangePassword</title>
</head>

<body>
<form method="post" action="Changepassword2.php">
<p>old Password<input type="password" id="T1" name="T1"></p>
<p>New Password<input type="password" id="T2" name="T2"></p>
<p>Confirm Password<input type="password" id="T3" name="T3"></p>
<button type="submit" id="b1" name="b1">Change</button>
</form>
</body>
</html>