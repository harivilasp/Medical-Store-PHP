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
<title>medicalstore1</title>
</head>

<body>
<?php
$name=$_POST["t1"];
$address=$_POST["t2"];
$contact=$_POST["t3"];
$email=$_POST["t4"];
$password=$_POST["t5"];
$usertype="medicalstore";
require_once("../include//MyLib.php");
$sql="insert into medicalstore
values('$name','$address','$contact','$email')";
//echo $sql;die();
$n=mysqli_query($cn,$sql);
if($n>0)
{
	echo "data saved";
}
else
{
	echo "data not saved";
}
$sql2="insert into logindata
values('$email','$password','$usertype')";
//echo $sql;die();

$n=mysqli_query($cn,$sql2);
if($n>0)
{
	echo "logindata saved";
}
else
{
	echo "logindata not saved";
}

?>
<p><a href="medicalstore2.php?email=<?php echo $email;?>">medicalstore</p>
</body>
</html>