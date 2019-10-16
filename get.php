<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="height: 80px; background-color: #F76C6C;">
      <img align="center" id="hh"  src="logo3.png"style="margin-left: 20px;margin-top:0px;border-radius: 0%;"   width="180" height="80" >
      <input type="button" id="hh" value="Back to Home" onclick="window.location.href='index.php'"  style="color: white; border-radius: 5%; float:right; background-color:#eeeeff; color: black; height: 30px;width: 230px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">
  </div>
  <br>
  <marquee behavior="alternate" scrollamount="20"><h2 style="color: red"><b>Order Food Online near to You With Food Rescue</b></h2></marquee>
  <br>
</body>
</html>



<?php
session_start();
$con=mysqli_connect("localhost","root","","food");
if(!$con)
  die("Server could not connected");
$sql = "SELECT * FROM food_data";
$res= mysqli_query($con,$sql);
$mes= mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($res)){
    $count=$count+1;
}
while($count>0){
  $row1 = mysqli_fetch_array($mes);

  
  echo "<div class='container'> <div class='row'><div class='col-md-3' style='background-color: #ECECEC; border-radius:5%;height: 420px;''><img src='".$row1['Image']."' height='190' width='260'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p><center><button  style='margin-top:-10px; width:80px;' type='button' class='btn btn-success'><a style='text-decoration: none;' href='ty.html'>Rescue</a></button></center> </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3' style='background-color: #ECECEC;border-radius:5%;height: 420px;''><img src='".$row1['Image']."' height='190' width='260'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p><center><button style='margin-top:-10px; width:80px;' type='button' class='btn btn-success'><a style='text-decoration: none;' href='ty.html'>Rescue</a></button></center>  </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3' style='background-color: #ECECEC;border-radius:5%;height: 420px;''><img src='".$row1['Image']."' height='190' width='260'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p><center><button style='margin-top:-10px; width:80px;' type='button' class='btn btn-success'><a style='text-decoration: none;' href='ty.html'>Rescue</a></button></center>  </div><div class='col-md-1'></div></div></div>"."<br>";
    $count=$count-1;
}





?>