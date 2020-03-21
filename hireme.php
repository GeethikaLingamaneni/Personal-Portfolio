<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="hireme.css">
<link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="portfolio.css">
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"> 
function toggleEditor() {
   var theText = document.getElementById('thetext');
   var theEditor = document.getElementById('ta1');
   var editorArea = document.getElementById('editor');
 
   //set text in text div to textarea
   //correct line breaks, prevent HTML injection
   var subject = theText.innerHTML;
   subject = subject.replace(new RegExp("<br />", "gi"), 'n');
   subject = subject.replace(new RegExp("<br />", "gi"), 'n');
   subject = subject.replace(new RegExp("<", "gi"), '<');
   subject = subject.replace(new RegExp(">", "gi"), '>');
   theEditor.value = subject;
 
   //hide text, show editor
   theText.style.display = 'none';
   editorArea.style.display = 'inline';
}


function doEdit() {
   var theText = document.getElementById('thetext');
   var theEditor = document.getElementById('ta1');
   var editorArea = document.getElementById('editor');
 
   //this is where you would call your AJAX update script
   //e.g., doXMLRequest(data);
   //you probably want to make your DB update BEFORE converting for display
 
   //set text to be value in editor
   //correct line breaks, prevent HTML injection
   var subject = theEditor.value;
   subject = subject.replace(new RegExp("<", "g"), '<');
   subject = subject.replace(new RegExp(">", "g"), '>');
   subject = subject.replace(new RegExp("n", "g"), '<br />');
   theText.innerHTML = subject;
 
   //hide editor, show text
   theText.style.display = 'inline';
   editorArea.style.display = 'none';
}


div#editor {
   display: none;
}
textarea{
  width:100%;
}
function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
</script>
<style>
  @media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body style="padding:0 !important; margin: 0 !important; width: 100%">

<div class="container" id="wrapper">
<div align="center">
  <h1><span style='border:2px blue solid; font-size:20px;align-content: center;text-align: center;'>Hire me</span></h1>
  
</div>
<div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>
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

/*if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) 
{

header ("Location: login.html");

}
else
{
  header ("Location: hireme.php");

}*/

$s="SELECT * FROM hireme where Id=1";
$r = mysqli_query($conn,$s);
while($row = mysqli_fetch_array($r,true))
{
  $salary1=$row['Salary'];
  $role1=$row['Role'];
}

$s2="SELECT * FROM hireme where Id=2";
$r2 = mysqli_query($conn,$s2);
while($row2 = mysqli_fetch_array($r2,true))
{
  $salary2=$row2['Salary'];
  $role2=$row2['Role'];
}

$s3="SELECT * FROM hireme where Id=3";
$r3 = mysqli_query($conn,$s3);
while($row3 = mysqli_fetch_array($r3,true))
{
  $salary3=$row3['Salary'];
  $role3=$row3['Role'];
}

?>

<div class="row";align="center">

  <div class="column" style="text-align:center";>
    <p align="center">
    <img src="car4.png"  height="100" width="150"><br>
    <p align="center">
       <h2><?php echo $salary1;?></h2><br>
      <h3><?php echo $role1;?></h3><br>
   </h4> </p>
</p>
<a href="contactme.php" >
<input type="Submit" name="Contact us" value="Contact us " id="button" ></a>
  
  </div>

  <div class="column" style="text-align:center">
    <p align="center">
    <img src="car5.png"  height="100" width="150"><br>
<p align="center">
      <h2><?php echo $salary2;?></h2><br>
      <h3><?php echo $role2;?></h3><br>
      
    </p>
  </p>
  <a href="contactme.php" >
  <input type="Submit" name="Contact us" value="Contact us"id="button" ></a>
  
  </div>


  <div class="column" style="text-align:center">
    <p align="center">
    <img src="car6.png" height="100" width="150"><br>
<p align="center">
      <h2><?php echo $salary3;?></h2><br>
      <h3><?php echo $role3;?></h3><br>
      
    </p>
  </p>

<a href="contactme.php" > <input type="Submit" name="Contact us" value="Contact us"  id="button" ></a>
  
  </div>

</div>
</p>

<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="home.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>
</div>
</body>
</html>

