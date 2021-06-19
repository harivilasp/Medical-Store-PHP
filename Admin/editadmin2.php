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
<title>editadmin2</title>
</head>

<body>
<?php
$e1=$_GET["email"];
require_once("../include/MyLib.php");
$name=$_POST["t1"];
$address=$_POST["t2"];
$contact=$_POST["t3"];
$sql="update adminreg set name='$name' address='$address' contact='$contact' where email='$e1'";
//echo $sql;die();
$n=mysqli_query($cn,$sql);
if($n>0)
{
	?>
    <h1>data updated</h1>
     <?php
}
else
{
	?>
    <h1>data not updated</h1>
    <?php
}
?>
    


</body>
</html>