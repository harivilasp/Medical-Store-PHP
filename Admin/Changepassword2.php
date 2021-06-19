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
<title>ChangePassword2</title>
</head>

<body>
<?php
$oldpass=$_POST["T1"];
$newpass=$_POST["T2"];
require_once("../include/MyLib.php");
$sql="update logindata set password='$newpass' where email='$e1' AND password='$oldpass'";
$n=mysqli_query($cn,$sql);
if($n>0)
{
	?>
		<h1>Password changed</h1>
	<?php
}
else
{
	?>
		<h1>Error : Cannot changed Password </h1>
	<?php
}
?>
<p><a href="adminblock.php">Continue</a></p>
</body>
</html>