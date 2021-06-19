<?php
$email=$_POST["T1"];
$password=$_POST["T2"];
require_once("include/MyLib.php");
$sql="select * from logindata where email='$email' AND password='$password'";
//echo $sql; die();
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
	$rw=mysqli_fetch_array($result);
	$utype=$rw["usertype"];
	//create session
	session_start();
	$_SESSION["email"]=$email;
	$_SESSION["usertype"]=$utype;
	if($utype=="admin")
{
	header("Location:Admin/adminblock.php");
	die();
}
else if($utype=="user")
{
	header("Location:userhome/userblock.php");
	die();
}
}
else
{
	header("Location:loginerror.php");
	die();
}

?> 











