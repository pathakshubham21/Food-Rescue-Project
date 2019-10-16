<html>
<head>
    <link rel="stylesheet" type="text/css" href="name1.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    
  background: url(bg2.jpg);
  background-repeat: no-repeat;
  background-color: red;
  background-size: 100% 100%;

  }
</style>

</head>
<body>
  <div style="height: 80px; background-color: #F76C6C">
      <img align="center" id="hh"  src="logo3.png"style="margin-left: 20px;margin-top:0px;border-radius: 0%;"   width="180" height="80" >
      <input type="button" id="hh" value="Back to Home" onclick="window.location.href='index.php'"  style="color: white; border-radius: 5%; float:right; background-color:#eeeeff; color: black; height: 30px;width: 230px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">
  </div>
  <br>
  <br>
  
<form action="check per.php" method="post" name="frm" enctype="multipath/form-data">
  <table align="center" style="background-color:white; width: 500px; margin-top:-20px; border-radius: 5%;">
    <tr>
      <td>
          <img align="center"  src="login.png"style=" border-radius: 30%; margin-left: 170px;px;margin-top:0px;"  width="160" height="120" >
          <br>
      </td>
    </tr>
    <tr>
      <td align="center">     <br>  <br>
     Food Name:     <input type="text" name="un" placeholder="Enter the Food Name..." style="height: 40px; width: 220px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
        <br>
      </td>
    </tr>
    <tr>
     
      <tr>
      <td align="center">
          <br>
        Name:
        <input type="text" name="nm" placeholder="Enter the Name..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 5px;">
          <br>
      </td>
    </tr>
<tr>
      <td align="center">
          <br>
        Location   ::
        <input type="text" name="lo" placeholder="Enter the Location..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 5px;">
          <br>
      </td>
    </tr>
<tr>
      <td align="center">
          <br>
        Mobile Number
        <input type="text" name="mo" placeholder="Enter the Mobile Number..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 5px;">
          <br>
      </td>
    </tr>
    <td align="center">
          <br>
        Price
        <input type="text" name="pr" placeholder="Enter the Price..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px; margin-left: 5px;">
          <br>
      </td>
    </tr>

<tr>
      <td align="center">
          <br>
        
        <div >
  <label for="exampleFormControlTextarea1">About</label>
  <textarea name="ab" rows="4" cols="22"></textarea>
</div>

      </td>
    </tr>

    
  
      <tr>
      <td align="center">
          <br>
        Time
    <input type="text" name="tm" placeholder="Enter the Time..."  style="height: 40px; width:220px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;  margin-left: 30px;">
      <br>
      
      Profile Photo:<input style="margin-right: -100px;" type="file" value="Upload Image" name="pic">

      </td>
    </tr>
    <tr align="center">
      <td align="center"> <br>  <br>
          <input type="submit" id="hh" value="Post"  style="color: black; border-radius: 7%; background-color:#eeeeff; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:15px;margin-bottom: 10px;">
      </td>
      
    </tr>

    
      <br>
  </table>
</form>
</div>
<vr>
  <br>
  <center><p>© 2019 Online Food Rescue Services, Inc. or its affiliates.<br>
All rights reserved.</p></center>

</body>
</html>