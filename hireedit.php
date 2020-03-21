<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="hireme.css">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="portfolio.css">
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"> </script>
    <script>
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
<script type="text/javascript">
  
function doEdit() {
  //alert($("textarea[name*='ta3']").val());
  //var salary = $("textarea[name*='ta3']").val();
  //alert($('#ta1').val());
   /*var theText = document.getElementById('thetext');
   var theEditor = document.getElementById('ta1');
   var editorArea = document.getElementById('editor');
 
  
   //hide editor, show text
   theText.style.display = 'inline';
   editorArea.style.display = 'none';*/
//var allDataTrimmed = allContent.split("~");

$.post("hiresave.php", {     idZ : "1",
                           salaryZ : $("textarea[name*='ta1']").val(),
                           roleZ : $("textarea[name*='ta11']").val(),
                         },
                           doUpdate);

$.post("hiresave.php", {     idZ : "2",
                           salaryZ : $("textarea[name*='ta2']").val(),
                           roleZ : $("textarea[name*='ta21']").val(),
                         },
                           doUpdate);

$.post("hiresave.php", {     idZ : "3",
                           salaryZ : $("textarea[name*='ta3']").val(),
                           roleZ : $("textarea[name*='ta31']").val(),
                         },
                           doUpdate);

function doUpdate(response)
 {
var respfromserver = response;
var respfromservertrimmed = respfromserver.trim();

    if (respfromservertrimmed) 
    {
      //alert("respfromservertrimmed>>"+respfromservertrimmed);

    }
    else{
      alert("Sorry, Could not perform the Edited Changes! Possible Error is:" + respfromservertrimmed);
    }
}
}



</script>
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
       <h2><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta1" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $salary1;?></textarea></div></div></h2><br>
      <h3><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta11" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role1;?></textarea><br><br>
        </div></div><br><br></h3><br>
   </h4> </p>
</p>
<a href="contactmeedit.php" >
<input type="Submit" name="Contact us" value="Contact us " id="button" ></a>
  
  </div>

  <div class="column" style="text-align:center">
    <p align="center">
    <img src="car5.png"  height="100" width="150"><br>
<p align="center">
      <h2><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta2" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $salary2;?></textarea>
        </div></div></h2><br>
      <h3><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta21" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role2;?></textarea><br><br>
        <input name="submit" id="submit" type="button" value="Save" onclick="doEdit()" /></div></div><br><br></h3><br>
      
    </p>
  </p>
  <a href="contactmeedit.php" >
  <input type="Submit" name="Contact us" value="Contact us"id="button" ></a>
  
  </div>


  <div class="column" style="text-align:center">
    <p align="center">
    <img src="car6.png" height="100" width="150"><br>
<p align="center">
      <h2><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta3" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $salary3;?></textarea>
        </div></div><br></h2>
      <h3><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta31" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role3;?></textarea><br><br>
        </div></div><br><br></h3><br>
      
    </p>
  </p>

<a href="contactmeedit.php" > <input type="Submit" name="Contact us" value="Contact us"  id="button" ></a>
  
  </div>

</div>
</p>

<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="homeedit.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>
</div>
</body>
</html>
