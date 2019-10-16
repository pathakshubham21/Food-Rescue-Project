<?php
session_start();


$n=$_POST["un"];
$p=$_POST["pw"];
$con=mysqli_connect("localhost","root","","food");
if(!$con)
	die("Server could not connected");
$sqldata="select * from user where Username='".$n."' and Password='".$p."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	if($value["Password"]==$p)
	{
		$_SESSION["user"]=$n;
		$_SESSION["pic"]=$value["Photo"];
		header("location:data.php");

	}
	else
	{
		echo "<script>alert('worng username or password');</script>";
		
	}
	

?>

