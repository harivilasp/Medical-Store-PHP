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

<title>showadmin</title>
</head>

<body>
<?php
require_once("../include/MyLib.php");
$sql="select * from adminreg";
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
        <p><?php echo $email;?></p><hr>
        <?php
	}
}
else
{
	?>
    <h1>data not found</h1>
    <?php
}

?>

</body>
</html>