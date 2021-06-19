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
<title>profile</title>
</head>

<body>
<h1>profile</h1>
<?php
//connect php with mysql
require_once("../include/MyLib.php");
$sql="select * from adminreg where email='$e1'";//email from session
//echo $sql;die();
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
	$rw=mysqli_fetch_array($result);
	//fetch the data from row
	$name=$rw["name"];
	$address=$rw["address"];
	$contact=$rw["contact"];
	?>
		<h3>Name:<?php echo $name;?></h3>
        <p>Address:<?php echo $address;?></p>
        <p>Contact:<?php echo $contact;?></p>
        <p>Email<?php echo $e1;?></p>
        <p>
        <a href="editadmin1.php?email=<?php echo $e1;?>">Edit</a> <a href="deleteadmin1.php?email=<?php echo $e1;?>">delete</a></p>
	<?php
}
else
{
	?>
		<h1>Data not found</h1>
	<?php
}
?>
</body>
</html>