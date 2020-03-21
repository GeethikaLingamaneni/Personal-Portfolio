<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="screen.css">

<style>
    
@media only screen and (max-width: 768px) 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}
</style>
</head>


<body style="padding:0 !important; margin: 0 !important;width:100%;height: -webkit-fill-available;">

<div class="row" style="width:100%;height: -webkit-fill-available;margin: 0 !important">

<div class="column1" style="background-color:#2f3742 ;" align="center">
<!--<section class="side";width=30% style="padding-left: 15px;padding-right: 15px"><br>-->
<img src="logo.png"  height="82" width="82"><br>
<h5><font color="White">Geethika L</font></h5><br>

<nav align="left" style="padding-left: 15px;color: #3046fc;height:-webkit-fill-available "><b>

<a  href="#" disabled><font color="#3046fc">HOME</font></a><br>

    <a  href="aboutme.php"  ><font color="#3046fc">ABOUT</font></a><br>
  
    <a  href="skills.php " ><font color="#3046fc">SKILLS</font></a><br>
  
    <a  href="resume.php" ><font color="#3046fc">RESUMES</font></a><br>
 
    <a href="portfolio.php" ><font color="#3046fc">PORTFOLIO</font></a><br>

    <a  href="blog.php" ><font color="#3046fc">BLOG</font></a><br>

    <a  href="references.php " ><font color="#3046fc">REFERENCES</font></a><br>
  
  
    <a  href="hireme.php " ><font color="#3046fc">HIRE ME</font></a><br>


  
    

  
    <script>
    function basicPopup(url) {
popupWindow = window.open(url,'popUpWindow','height=450,width=450,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
  }
</script>

<a href="login.html"><!-- target="center" onclick="basicPopup(this.href);return false"><font color="#3046fc"> -->LOG IN</font></a><br>

<a href="signup.html"><!-- target="center" onclick="basicPopup(this.href);return false"><font color="#3046fc"> -->SIGN UP</font></a>
<br><br>

  </b><font color="white"><i>All rights reserved<br>by Geethika</i></font></nav>
</font> 

</div>



<div class="banner";style="padding-left=10px" align="left">
        
        

    <section class="text" style="margin-top: 207px; margin-left: 18px;">
        
<font color="white">
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
$sql = "INSERT INTO home(Mymessage, Adminname, Role, Cv) VALUES ('Hello I AM','GEETHIKA LINGAMANENI','DEVELOPER',Load_file('/xampp/htdocs/lingamaneni_portfolio/Resume.docx'))";

$sql="SELECT * FROM home where Id=1";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result,true))
{
echo   $row['Mymessage'] ;
echo "<br>";
echo "<h2>" .$row['Adminname']. "</h2>" ;
echo "<br>";
echo $row['Role'];
}
    ?><br>
<button class='btn' onclick="window.location.href = 'Resume.docx';"> <i class="fa fa-download"></i>  Download my cv
</button>
</font>
</section>
<div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>
</div>

</div>
</div>
</div>	
</body>
</html>
