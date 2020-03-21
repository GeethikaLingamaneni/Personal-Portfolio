<!DOCTYPE html>
<html>
<head>
	<title>References</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
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

$.post("referencesave.php", {     idZ : "1",
                           NameZ : $("textarea[name*='ta1']").val(),
                         DesignationZ : $("textarea[name*='ta11']").val(),
                         },
                           doUpdate);

$.post("referencesave.php", {     idZ : "2",
                           NameZ : $("textarea[name*='ta2']").val(),
                           DesignationZ : $("textarea[name*='ta21']").val(),
                         },
                           doUpdate);

$.post("referencesave.php", {     idZ : "3",
                           NameZ : $("textarea[name*='ta3']").val(),
                           DesignationZ : $("textarea[name*='ta31']").val(),
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
 
<body style="padding:0 !important; margin: 0 !important;width: 100%;position: relative;">
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
<br><br><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta1" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $name1;?></textarea><br>
        <br></div><br><font color="grey"><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta11" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $desig1;?></textarea><br>
        </div></div><br><br></div></font><br><br></p>
</div>

  <div class="column2" align="center" style="position: relative;">
      <p><img src="nagabhushanam.jpg" style="width: 50px;height:50px; border-radius: 50%;margin-top: -38px;">
<br><br><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta2" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $name2;?></textarea><br>
        <br></div><br><font color="grey"><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta21" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $desig2;?></textarea><br>
        <input name="submit" id="submit" type="button" value="Save" onclick="doEdit()" /></div></div><br><br></div></font><br><br></p>
</div>
  

  <div class="column3" align="center" style="position: relative;">
    <p><img src="ramakrishna.jpg" style="width: 50px;height: 50px; border-radius: 50%;margin-top: -38px;">
<br><br><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta3" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $name3;?></textarea><br>
        <br></div><br><font color="grey"><div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta31" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $desig3;?></textarea><br>
        </div></div><br><br></div></font><br><br></p>
</div>

</div>


<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="homeedit.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div></div>
</body>
</html>