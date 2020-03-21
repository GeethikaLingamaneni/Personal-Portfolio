<!DOCTYPE html>
<html>
<head>
	<title>References</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="references.css">
    <link rel="stylesheet" href="portfolio.css">
    <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <style> 
        .vertical { 
            border-left: 4px solid lightgrey; 
            height: 300px; 
            position:relative; 
            left: 50%; 
            color: grey;
        } 
        p {
          position: relative;
  width: 300px;
  padding: 10px;
  border: 1px solid lightgray;
  margin: 0;
}
@media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}
</style>
 </head>
 
<body style="padding:0 !important; margin: 0 !important;width: 100%;position: relative;">
  <?PHP


/*if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {

header ("Location: login.html");

}
else
{
  header ("Location: references.php");

}*/
?>
<div class="container" id="wrapper">
	<div align="center">
  <h1><span style='border:2px blue solid; font-size:20px;text-align: center;'>References</span></h1>
  </div>
  <div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>
    <br>
    <br>
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

$s="SELECT * FROM reference where Id=1";
$r = mysqli_query($conn,$s);
while($row = mysqli_fetch_array($r,true))
{
  $name1=$row['Name'];
  $desig1=$row['Designation'];
}

$s2="SELECT * FROM reference where Id=2";
$r2 = mysqli_query($conn,$s2);
while($row2 = mysqli_fetch_array($r2,true))
{
  $name2=$row2['Name'];
  $desig2=$row2['Designation'];
}

$s3="SELECT * FROM reference where Id=3";
$r3 = mysqli_query($conn,$s3);
while($row3 = mysqli_fetch_array($r3,true))
{
  $name3=$row3['Name'];
  $desig3=$row3['Designation'];
}
?>



<div class="row" style="padding:0 !important; margin: 0 !important; width:100%;position: relative;">
  <div class="column1" align= "center" style="position: relative;">
   <p> <img src="mallika.jpg" style="width: 50px;height: 50px; border-radius: 50% ; margin-top: -38px;">
<br><br><?php echo $name1;?><br><font color="grey"><?php echo $desig1;?></font><br><br></p>
</div>

  <div class="column2" align="center" style="position: relative;">
      <p><img src="nagabhushanam.jpg" style="width: 50px;height:50px; border-radius: 50%;margin-top: -38px;">
<br><br><?php echo $name2;?><br><font color="grey"><?php echo $desig2;?></font><br><br></p>
</div>
  

  <div class="column3" align="center" style="position: relative;">
    <p><img src="ramakrishna.jpg" style="width: 50px;height: 50px; border-radius: 50%;margin-top: -38px;">
<br><br><?php echo $name3;?><br><font color="grey"><?php echo $desig3;?></font><br><br></p>
</div>

</div>


<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="home.html"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div></div>
</body>
</html>