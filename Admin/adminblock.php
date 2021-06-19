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
<html >
<head>
<title>adminhome</title>
</head>

<body>
<h1>admin home</h1>
<p><a href="PROFILE1.php?email=<?php echo $e1;?>">Profile</a></p>
<p><a href="admin2.php">New Admin</a></p>
<p><a href="showadmin.php">Manage</a></p>
<p><a href="Changepassword.php">change password</a></p>
<p><a href="../Logout.php">Logout</a></p>
<p><a href="deleteadmin1.php">deleteadmin</a></p>
<p><a href="medicalstore2.php">medicalstore</a></p>
</body>
</html>