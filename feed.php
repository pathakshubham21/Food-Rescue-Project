
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

	echo "<div class='container'> <div class='row'><div class='col-md-3' style='background-color: red;height: 350px;''><img src='".$row1['Image']."' height='100' width='250'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p> </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3' style='background-color: red;height: 350px;''><img src='".$row1['Image']."' height='100' width='250'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p> </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3' style='background-color: red;height: 350px;''><img src='".$row1['Image']."' height='100' width='250'><h3>". $row1['Name']."</h3><p>"."<b>Location :</b>".$row1['Location']."<br>"."<b>Seller Name :</b>".$row1['Owner NameTime']."<br>"."<b>Details :</b>".$row1['About']."<br>"."<b>Mobile Number :</b>".$row1['Mobile Number']."<br>"."<b>Time :</b>".$row1['Time']."</p> </div><div class='col-md-1'></div></div></div>"."<br>";
    $count=$count-1;
}





?>