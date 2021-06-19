<html >
<head>
<title>admin2</title>
</head>

<body>
<?php
$name=$_POST["t1"];
$address=$_POST["t2"];
$contact=$_POST["t3"];
$email=$_POST["t4"];
$password=$_POST["t5"];
$usertype="admin";
require_once("../include//MyLib.php");
$sql="insert into adminreg
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

</body>
</html>