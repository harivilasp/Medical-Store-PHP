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
<title>editadmin1</title>
</head>

<body>
<?php
require_once("../include/MyLib.php");
$sql="select * from adminreg where email='$e1'";
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n>0)

	{
		$rw=mysqli_fetch_array($result);
		$name=$rw["name"];
		$address=$rw["address"];
        $contact=$rw["contact"];
		$email=$rw["email"];

?>
<form method="post" action="editadmin2.php?email=<?php echo $e1;?>">
<p>Name:<input type="text" value="<?php echo $name;?>"id="t1" name="t1"></p>
<p>Address:<input type="text" value="<?php echo $address;?>" id="t2" name="t2"></p>
<p>Contact:<input type="text" value="<?php echo $contact;?>" id="t3" name="t3"></p>
<p><input type="submit" value="updata" id="b1" name="b1"></p>
</form>
<?php
	}
	else
	{
		echo "data not found";
	}
	?>
</body>
</html>