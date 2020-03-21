<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resume.css">
    <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <style> 
      @media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}
        .vertical { 
            border-left: 4px solid lightgrey; 
            height: 300px; 
            position:absolute; 
            left: 50%; 
            color: grey;
        } 
    </style>
</head>


<body style="padding:0 !important; margin: 0 !important;width: 100%">

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

$s="SELECT * FROM resume where Id=1";
$r = mysqli_query($conn,$s);
while($row = mysqli_fetch_array($r,true))
{
  $c1=$row['Company'];
  $role1=$row['RolenP'];
}

$s2="SELECT * FROM resume where Id=2";
$r2 = mysqli_query($conn,$s2);
while($row2 = mysqli_fetch_array($r2,true))
{
  $c2=$row2['Company'];
  $role2=$row2['RolenP'];
}

$s3="SELECT * FROM resume where Id=3";
$r3 = mysqli_query($conn,$s3);
while($row3 = mysqli_fetch_array($r3,true))
{
  $c3=$row3['Company'];
  $role3=$row3['RolenP'];
}




/*if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {

header ("Location: login.html");

}
else
{
  header ("Location: resume.php");

}*/
?>



<div class="container" id="wrapper">
	<div align="center">
  <h1><span style='border:2px blue solid; font-size:20px;text-align: center;'>Resumes</span></h1>
  
    </div>
    <div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>
    
    <br>
    <br>

<div class="container-fluid" id="wrapper">
<div class="row" style="position: relative;">
  <div class="column1"  align="right">

<br><br><br><br>


<table width="400px" style="text-align: left">
         <tr bgcolor="blue" style="height: 30px">
            <td style="padding-left: 10px"><font color="white"><?php echo $c1;?></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <?php echo $role1;?></td>
         </tr>
</table>

<br><br><br><br>


<table width="400px" style="text-align: left">
         <tr bgcolor="blue" style="height: 30px">
            <td style="padding-left: 10px" ><font color="white"> <?php echo $c3;?></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <?php echo $role3;?></td>
         </tr>
</table>

  </div>


  <div class="column2"> 
  	<div style="text-align: center;position: relative;">
 	<div class = "vertical" style="height: 50px;color: grey;text-align: center;">
   </div> <br><br>
   <font color="blue" ><i>2019</i></font><br>
   <div class = "vertical" style="height: 50px;color: grey;text-align: center;">
   </div> <br><br>
   <font color="blue"><i>2018</i></font>
 <br>
 <div class = "vertical" style="height: 50px;color: grey;text-align: center;">
   </div> <br><br>
   <font color="blue"><i>2017</i></font><br>
   <div class = "vertical" style="height: 50px;color: grey;text-align: center;">
   </div> <br><br>
   <font color="blue"><i>2016</i></font><br>
   <div class = "vertical" style="height: 50px;color: grey;text-align: center;">
   </div>
</div>
</div>


  <div class="column3" align="center">
  	
<br><br><br><br><br><br><br><br>

<table width="400px" style="text-align: left">
         <tr bgcolor="blue" style="height: 30px">
            <td style="padding-left: 10px"><font color="white"> <?php echo $c2;?></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <?php echo $role2;?></td>
         </tr>
</table>

  </div>


<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="home.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>

</div>
 </div>
</div>
</body>
</html>