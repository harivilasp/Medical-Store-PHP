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
<title>deleteadmin1</title>
</head>

<body>
<?php
$e1=$_GET["email"];
$cn=mysqli_connect("localhost","root","","anjalu");
if(!$cn)
{
	echo "unable to connect";
	die();
}
$sql="select * from adminreg where email='$e1'";
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
while($rw=mysqli_fetch_array($result))
{
	$name=$rw["name"];
    $address=$rw["address"];
	$contact=$rw["contact"];
	$email=$rw["email"];


?>
<h1><?php echo $name;?></h1>
<p><?php echo $address;?></p>
<p><?php echo $contact;?></p>
<p><?php echo $email;?></p>
<h2>Do you really want to delete it!</h2>
<a href="deleteadmin2.php?email=<?php echo $email;?>">Delete</a>
<h1>
  <?php
}
}
else
{
	?>
data not found </h1>
    <?php
}
?></body>
</html>