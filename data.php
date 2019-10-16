<?php
session_start();
$con=mysqli_connect("localhost","root","","food");
if(!$con)
	die("Server could not connected");

$sqldata="select * from user where Username='".$_SESSION["user"]."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	?>
<div style="height: 80px; background-color: black;">
			<img align="center"  src="logo3.png"style="margin-left: 20px;margin-top:0px;"  width="180" height="80" >

			<input type="button" value="Logout" onclick="window.location.href='index.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 100px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 40px;margin-right: 30px;">

				<p style="color: white;float: right; margin-right: -100px;margin-top: 10px;">
					Welcome 
				<?php
				echo $_SESSION["user"];
				
				?></p>
		

	</div>
	<style type="text/css">
  ul li
{
list-style-type:none;
display:inline-block;
text-decoration:none;
margin-top: 15px;
}
ul li a{

color:black;
padding:100px;
color: black;

}
	</style>
	<div style="background-color: #edf1fe; height: 50px;">
		<ul>
			<li><a href="get.php"><b>Purchage Food</b></a></li>
				<li><a href="purchage.php"><b>Sell Food</b></a></li>
					<li><a href="#"><b>Exchange Food</b></a></li>
		
	</div>
	<div style="margin-left: 50px;">
		<br>
		<br>


	<img src="<?php echo $value['Image']; ?>" width="100" height="100" border="2" style="border-radius: 30%;" >
	<br>
	<?php
	echo "<br><b>Name: </b>".$value["Name"]."<br> <b>Location: </b>".$value["Location"]."<br> "."<b>Username: </b>".$value["Username"]."<br>"."<b>Mobile Number: </b>".$value["Mobile Number"];
	
	?>

</div>
	
</div>
