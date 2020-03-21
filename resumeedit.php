<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resume.css">
    <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <script type="text/javascript">
      
function doEditFresh() {

$.post("resumesave.php", {     idZ : "1",
                          companyZ : $("textarea[name*='ta1']").val(),
                           roleZ : $("textarea[name*='ta11']").val()
                         },
                           doUpdate);

$.post("resumesave.php", {     idZ : "2",
                          companyZ : $("textarea[name*='ta2']").val(),
                           roleZ : $("textarea[name*='ta21']").val()
                         },
                           doUpdate);

$.post("resumesave.php", {     idZ : "3",
                          companyZ : $("textarea[name*='ta3']").val(),
                           roleZ : $("textarea[name*='ta31']").val()
                         },
                           doUpdate);
}
function doUpdate(response)
 {
var respfromserver = response;
var respfromservertrimmed = respfromserver.trim();

    if (respfromservertrimmed) 
    {
      //alert("respfromservertrimmed>>"+respfromservertrimmed);

    }
    else
    {
      alert("Sorry, Could not perform the Edited Changes! Possible Error is:" + respfromservertrimmed);
    }
}


    </script>
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


<script type="text/javascript">
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
* 
</style>

<script type="text/javascript">
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

?>

<style >@media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}

.div#editor {
   display: none;
}
textarea{
  align:center;
  text-align:center;
  width:100%;
}
</style>



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
            <td style="padding-left: 10px"><font color="white"><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta1" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $c1;?></textarea>
      </div></div><br><br></div></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta11" name="ta11" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role1;?></textarea>
        </div></div><br><br></div></td>
         </tr>
</table>

<br><br><br><br>


<table width="400px" style="text-align: left">
         <tr bgcolor="blue" style="height: 30px">
            <td style="padding-left: 10px" ><font color="white"> <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta3" name="ta3" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $c3;?></textarea>
        </div></div><br><br></div></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta31" name="ta31" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role3;?></textarea><br>
        </div></div><br><br></div></td>
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
            <td style="padding-left: 10px"><font color="white"> <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta2" name="ta2" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $c2;?></textarea>
        </div></div><br><br></div></font></td>
        </tr>
         <tr bgcolor="lightgrey" style="height: 30px">
            <td style="padding-left: 10px"> <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta21" name="ta21" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $role2;?></textarea><br>
        </div></div><br><br></div></td>
         </tr>
</table><br>
<br>
<br>
<input name="submit" id="submit" type="button" value="Save" onclick="doEditFresh()" />
  </div>


<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="homeedit.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>

</div>
 </div>
</div>
</body>
</html>