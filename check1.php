<?php
error_reporting(0);
$un=$_POST["un"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];
$cor=$_POST["lo"];
$fee=$_POST["mo"];
$n=$_POST["name"];
$pic=$_POST["pic"];

if($pw1!=$pw2)
{
	die("Password and Confirm Password are same");
}

$con=mysqli_connect("localhost","root","","food");
if(!$con)
	die("Server could not connected");
$sqldata="insert into User values('".$un."','".$pw1."','".$n."','".$fee."','".$pic."','".$cor."','"."0"."')";
$rs=mysqli_query($con,$sqldata);
if($rs!=0)
{
 echo "<script> alert('Account Created');
  location.href='Login.php'; </script>";
}
else
echo "<script> alert('Something went wrong try again');</script>";

?>


