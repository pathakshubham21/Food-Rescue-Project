<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
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

<!-- footer css -->




</head>
<body style="background-color: #A8D0E6;">
  
<div class="topnav" style="letter-spacing: 2px; height: 100px;">
  <img src="logo3.png" id="hh" style="border-radius: 0%;height: 80px;width: 180px; position: absolute;top: 10px;left: 20px;">
<div style="margin-left: 150px;text-align: center;margin-top: 30px;">
  <a  href="#"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="purchage.php">Post Your Food</a>
  <a href="get.php">Purchase Item</a>
  <a href="cs.html">Exchange Food</a>
   <div  style="float: right;margin-right: 30px;"> <button id="hh" style="margin-left: 30px;width: 80px;" type="button" onclick="window.location.href='login.php'"  class="btn btn-light">Login</button>
    <button id="hh" style="margin-left: 30px;width: 80px;" type="button" onclick="window.location.href='register.php'"  class="btn btn-light">Sign Up</button>
   </div>
   </div></div>
   <div>
     <marquee behavior="scroll" direction="left" scrollamount="20"><h4 style="font-size:20px;color: red;"><b>*Throwing away food is like stealing from the table of those who are poor and hungry. ... Donate food near me Toll Free  +91 9087790877 India</b></h4></marquee>

   </div>
<nav>
<ul>
<li>
<a style="text-decoration: none;" href="2.html">Impact of Food wasting</a>
</li>
<li>
<a style="text-decoration: none;" href="1.html"> Causes of food waste </a></li>
<li>
<a style="text-decoration: none;" href=" 3.html"> Fact of Food Wasting</a></li>

</ul>
</nav>
</div>
<br><br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/0eqxgvZNn0I?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</iframe></div>
<div class="col-md-6"><center>
  <h2><b>Disadvantage of food waste </b></h2></center>
  <p><b><i>
    Image result for food waste impact on environment
Food waste that ends up in landfills produces a large amount of methane – a more powerful greenhouse gas than even CO2. ... If you look at land usage, around 1.4 billion hectares of land, which is roughly one-third the world's total agricultural land area, is used to grow food that is wasted<br>
<br>About 21 million tonnes of wheat are wasted in India and 50% of all food across the world meets the same fate and never reaches the needy. In fact, according to the agriculture ministry, INR 50,000 crores worth of food produced is wasted every year in the country..
<br>
<br>According to the Food Sustainability Index 2017, the countries with the lowest food waste generation per capita include Greece and China (44 kg per year), followed by India (51 kg). The countries with the highest waste creation are Australia (361 kg), followed by the U.S. (278 kg).</i>
  </b></p>
</div>
  </div>
</div>
<br>
<br>
<br>

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
echo '<html>
<head>
<style>
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}</style>
</head>
<body>    <footer class="site-footer" style="margin-top:440px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Agriculture, along with its allied sectors, is the largest source of livelihood in India. About 82 per cent of the country’s farmers are small and marginal, having holdings less than one hectare. Over the years, irrigation potential has increased largely due to increased access to precious groundwater. However, 60 per cent of our agricultural land is still primarily rain-fed</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">Food Sell</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">Food Purchage</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Food Exchange</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Waste food Impact</a></li>
              <li><a href="http://scanfcode.com/category/android/">Fact of Food Waste</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Couses of Food Waste</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by 
         <a href="#">Food Rescue</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer></body></html>';




?>

<!--footer-->
  <!-- Site footer -->
 
   

</body>
</html>
