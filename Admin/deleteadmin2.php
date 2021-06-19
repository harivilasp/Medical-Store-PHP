<?php
$e1=$_GET["email"];
$cn=mysqli_connect("localhost","root","","anjalu");
if(!$cn)
{
	echo "unable to connect";
	die();
}
$sql="delete from adminreg where email='$e1'";
//echo $sql;die();
$n=mysqli_query($cn,$sql);
if($n>0)
{
	?>
		<h1>Item delete</h1>
        <p><a href="adminblock.php"></p>
	<?php
}
else
{
		?>
			<h1>Na karu</h1>
		<?php
}
?>