<!DOCTYPE html>
<html>
<head>
	<title>About</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
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

$.post("aboutsave.php", {    
                           MynameZ : $("textarea[name*='ta1']").val(),
                           MymailZ : $("textarea[name*='ta2']").val(),
                           PhoneZ: $("textarea[name*='ta3']").val(),
                           DOBZ : $("textarea[name*='ta4']").val(),
                           AddressZ : $("textarea[name*='ta5']").val(),
                           NationalityZ : $("textarea[name*='ta6']").val(),
                           MytakeZ : $("textarea[name*='ta7']").val()
                         },
                           doUpdate);



function doUpdate(response)
 {
var respfromserver = response;
var respfromservertrimmed = respfromserver.trim();

    if (respfromservertrimmed) 
    {
      alert("respfromservertrimmed>>"+respfromservertrimmed);

    }
    else{
      alert("Sorry, Could not perform the Edited Changes! Possible Error is:" + respfromservertrimmed);
    }
}
}



</script>

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
    <div class="col-6"><img src="name.png"  height="30" width="30">Name:<div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta1" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $name;?></textarea><br>
        </div></div><br><br></div>
    <div class="col-6"><img src="Mail.png"  height="30" width="30"> Email: <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta2" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $mail;?></textarea><br>
        </div></div><br><br></div><br><br>
</div>
    <div class="w-100"></div>
     <div class="row">
    <div class="col-6"><img src="Phone.jpg"  height="30" width="30"> Phone: <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta3" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $phone;?></textarea><br>
        </div></div></div><br><br>
    <div class="col-6"><img src="calendar.png"  height="30" width="30"> Date of Birth: <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta4" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $bday;?></textarea><br>
        </div></div></div><br><br>
</div>
    <div class="w-100"></div>
     <div class="row">
    <div class="col-6"><img src="location.jpg"  height="30" width="30"> Address: <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta5" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $add;?></textarea><br>
        </div></div></div><br>
    <div class="col-6"><img src="flag.png"  height="30" width="30"> Nationality: <div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta6" onkeyup="textAreaAdjust(this)" style="overflow:hidden"><?php echo $nation;?></textarea><br>
        </div></div></div>

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
<div id="thetext" onclick="toggleEditor()" style="text-align:center">
  <div id="editor" style="text-align:center"> <textarea id="ta1" name="ta7" onkeyup="textAreaAdjust(this)" style="overflow:hidden;width: 100%"><?php echo $matter;?></textarea><br>
        <input name="submit" id="submit" type="button" value="Save" onclick="doEdit()" /></div></div>


<br>
<br>
 Yours Sincerely,<br>
<img src="sign.png"  height="50" width="100">
 </p>
 

</section>
</div>

    </section>
  
<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="homeedit.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>
</div>
</body>
</html>
