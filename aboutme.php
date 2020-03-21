<!DOCTYPE html>
<html>
<head>
	<title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="about.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
</head>
<style >@media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}</style>
<body style="padding:0 !important; margin: 0 !important;width:100%;height: -webkit-fill-available">
  
<?php
$servername = "localhost:3306";
$database = "geethika_wdm_project";
$username = "geethika_250298";
$password = "Geeth@2598";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
      die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM aboutme where Id=1";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,true))
{
  $name=$row['Myname'];
  $pic=$row['Mypic'];
  $mail=$row['Mymail'];
  $bday=$row['DOB'];
  $phone=$row['Myphone'];
  $add=$row['Location'];
  $nation=$row['Natinonality'];
  $matter=$row['Mytake'];
}



/*if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {

header ("Location: login.html");

}
else
{
  header ("Location: aboutme.php");
  }
*/

?>




  <div class="container" id="wrapper">
	<div align="center">
  <h1><span style='border:2px blue solid; font-size:20px;text-align: center;'>About me</span></h1>
 
    </div>

<div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>

<div class="container" style="padding-left:10px !important">

<div class="row" style="height: -webkit-fill-available;">

    <div align="center"; class="pic";style="width=40%";class="col col-lg-*";>
        <section class="side";width=40% style="padding-left: 15px;">
<br>
<br>

     <img src="mypic.jpg"  height="150" width="150"><br>
     <p align="center">Developer</p>
</section>
</div>





<div style="width:100% !important;" class="col col-xl-*";>  
  <section width=100%; style="padding-left: 20px;">
        <br>
        <br>
  <div class="row">
    <div class="col-6"><img src="name.png"  height="30" width="30"> Name: <?php echo $name;?></div><br><br>
    <div class="col-6"><img src="Mail.png"  height="30" width="30"> Email: <?php echo $mail;?></div><br><br>
</div>
    <div class="w-100"></div>
     <div class="row">
    <div class="col-6"><img src="Phone.jpg"  height="30" width="30"> Phone: <?php echo $phone;?></div><br><br>
    <div class="col-6"><img src="calendar.png"  height="30" width="30"> Date of Birth: <?php echo $bday;?></div><br><br>
</div>
    <div class="w-100"></div>
     <div class="row">
    <div class="col-6"><img src="location.jpg"  height="30" width="30"> Address: <?php echo $add;?></div><br>
    <div class="col-6"><img src="flag.png"  height="30" width="30"> Nationality: <?php echo $nation;?></div>

  </div>
  <br>
  
 Social Profiles : <span style='border:1px grey solid; font-size:20px;text-align: center;'>
  <a href="https://www.linkedin.com/in/geethikalingamaneni/">
    <i class="icon ion-social-linkedin" style="background-color: white;color: grey"></i></a></span>
  <span style='border:1px grey solid; font-size:20px;text-align: center;'><a href="https://aboutme.google.com/u/0/?referer=gplus"> <i class="icon ion-social-googleplus"style="background-color: white;color: grey"></i></a></span>
  <span style='border:1px grey solid; font-size:20px;text-align: center;'><a href="https://www.facebook.com/lingamanenigeethika"> <i class="icon ion-social-facebook"style="background-color: white;color: grey"></i></a> </span>
  <span style='border:1px grey solid; font-size:20px;text-align: center;'><a href="https://www.instagram.com/geethikalingamaneni/"> <i class="icon ion-social-instagram"style="background-color: white;color: grey"></i></a></span>
    <span style='border:1px grey solid; font-size:20px;text-align: center;'><a href="https://twitter.com/lingamanenigeet"> <i class="icon ion-social-twitter"style="background-color: white;color: grey"></i></a></span>
<br>
<br>

 <p>
<?php

echo  $matter ;
?>


<br>
<br>
 Yours Sincerely,<br>
<img src="sign.png"  height="50" width="100">
 </p>
 

</section>
</div>

    </section>
  
<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="home.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>
</div>
</body>
</html>
