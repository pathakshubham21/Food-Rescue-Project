<?php
session_start();
$un=$_POST["un"];
$nm=$_POST["nm"];
$lo=$_POST["lo"];
$mo=$_POST["mo"];
$pr=$_POST["pr"];
$ab=$_POST["ab"];
$tm=$_POST["tm"];
$pic=$_POST["pic"];


$con=mysqli_connect("localhost","root","","food");
if(!$con)
	die("Server could not connected");
$sqldata="insert into `food_data` values('".$un."','".$nm."','".$tm."','".$pic."','".$pr."','".$ab."','".$lo."','".$mo."')";
$rs=mysqli_query($con,$sqldata);

if($rs!=0)
{

 echo "<script> alert('Data inserted');
  location.href='index.php'; </script>";
        


}
else
echo "Data not inserted";

?>


