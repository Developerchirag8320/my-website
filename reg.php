<?php
include_once("config.php");
?>

<?php
if($link === false)
{
	die("ERROR: could not connect.".mysqli_connect_error());
}

$name=mysqli_real_escape_string($link,$_REQUEST['name']);
$Email=mysqli_real_escape_string($link,$_REQUEST['Email']);
$password=mysqli_real_escape_string($link,$_REQUEST['password']);
$cpassword=mysqli_real_escape_string($link,$_REQUEST['cpassword']);

echo $sql="INSERT INTO regestration1(name,Email,password,cpassword)VALUES('$name','$Email','$password','$cpassword')";
	if(mysqli_query($link,$sql))
{
	header("Location:login.php");
}
else
{
	echo"ERROR:colud not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);

 ?>