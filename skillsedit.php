<!DOCTYPE html>
<html>
<head>
  <title>Skills
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="skills.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="portfolio.css">
  <link crossorigin="anonymous" media="all" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css-circular-prog-bar.css" rel="stylesheet">
 <style type="text/css">

            body{
                background-color: #fff;
                margin: 0;
                padding: 0;
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            }

            .page {
                margin: 40px;
                    align-content: center;
                    text-align: center;
            }

            h1{
                margin: 40px 0 60px 0;
            }

            .dark-area {
                background-color: #666;
                padding: 40px;
                margin: 0 -40px 20px -40px;
                clear: both;
            }

            .clearfix:before,.clearfix:after {content: " "; display: table;}
            .clearfix:after {clear: both;}
            .clearfix {*zoom: 1;}

            /* Extra small devices "mobile phones" */
@media only screen and (max-width: 768px) {...} 
 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 992px) {...} 
/* Extra small devices "Tabs" */
@media only screen and (max-width: 1200px) {...}
 
@media only screen and (max-width: 1920px) {...}

        </style>
<link rel="stylesheet" href="css/circle.css">
</head>
<body style="padding:0 !important; margin: 0 !important;width: auto">
  <div align="center">
  <h4><span style='border:2px blue solid; font-size:20px;text-align: center; margin-top: 300px'>Skills</span></h4>
  
    </div>
    <div align="right">
  <h5><span style='align-content: right;text-align: center;'><A HREF = logout.php>Log Out</A></span></h5>
</div>

<div>
    <div class="row">
  <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
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
 background-color: lightgrey;
  text-align:center;
  
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
 
}
function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
</script>

<script type="text/javascript">
  
function doEditAGain() {
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
$.post("mskillsave.php", {     idZ : "1",
                           SkillZ : $("textarea[name='ta1']").val(),
                           WidthZ : $("textarea[name='ta11']").val()
                         },
                           doUpdate);

$.post("mskillsave.php", {     idZ : "2",
                           SkillZ : $("textarea[name='ta2']").val(),
                           WidthZ : $("textarea[name='ta21']").val()
                         },
                           doUpdate);
$.post("mskillsave.php", {     idZ : "3",
                           SkillZ : $("textarea[name='ta3']").val(),
                           WidthZ : $("textarea[name='ta31']").val()
                         },
                           doUpdate);

$.post("mskillsave.php", {     idZ : "4",
                           SkillZ : $("textarea[name='ta4']").val(),
                           WidthZ : $("textarea[name='ta41']").val()
                         },
                           doUpdate);


}
function doEdit(){
  $.post("tskillsave.php", {     idZ : "1",
                           SkillZ : $("textarea[name*='ta51']").val(),
                           WidthZ : $("textarea[name*='ta5']").val()
                         },
                           doUpdate);
$.post("tskillsave.php", {     idZ : "2",
                           SkillZ : $("textarea[name*='ta61']").val(),
                           WidthZ : $("textarea[name*='ta6']").val()
                         },
                           doUpdate);
$.post("tskillsave.php", {     idZ : "3",
                           SkillZ : $("textarea[name*='ta71']").val(),
                           WidthZ : $("textarea[name*='ta7']").val()
                         },
                           doUpdate);
$.post("tskillsave.php", {     idZ : "4",
                           SkillZ : $("textarea[name*='ta81']").val(),
                           WidthZ : $("textarea[name*='ta8']").val()
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
    else{
      alert("Sorry, Could not perform the Edited Changes! Possible Error is:" + respfromservertrimmed);
    }
}




</script>
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


$s1="SELECT * FROM m_skills where Id=1";
$r1 = mysqli_query($conn,$s1);
while($row1 = mysqli_fetch_array($r1,true))
{
 $mskill1=$row1['Skill'];
 $mwidth1=$row1['Width'];
}

$s2="SELECT * FROM m_skills where Id=2";
$r2 = mysqli_query($conn,$s2);
while($row2 = mysqli_fetch_array($r2,true))
{
 $mskill2=$row2['Skill'];
 $mwidth2=$row2['Width'];
}

$s3="SELECT * FROM m_skills where Id=3";
$r3 = mysqli_query($conn,$s3);
while($row3 = mysqli_fetch_array($r3,true))
{
 $mskill3=$row3['Skill'];
 $mwidth3=$row3['Width'];
}
$s4="SELECT * FROM m_skills where Id=4";
$r4 = mysqli_query($conn,$s4);
while($row4 = mysqli_fetch_array($r4,true))
{
 $mskill4=$row4['Skill'];
 $mwidth4=$row4['Width'];
}




$ts1="SELECT * FROM t_skills where Id=1";
$tr1 = mysqli_query($conn,$ts1);
while($rowt1 = mysqli_fetch_array($tr1,true))
{
 $tskill1=$rowt1['Skills'];
 $twidth1=$rowt1['Width'];
}
$ts2="SELECT * FROM t_skills where Id=2";
$tr2 = mysqli_query($conn,$ts2);
while($rowt2 = mysqli_fetch_array($tr2,true))
{
 $tskill2=$rowt2['Skills'];
 $twidth2=$rowt2['Width'];
}
$ts3="SELECT * FROM t_skills where Id=3";
$tr3 = mysqli_query($conn,$ts3);
while($rowt3 = mysqli_fetch_array($tr3,true))
{
 $tskill3=$rowt3['Skills'];
 $twidth3=$rowt3['Width'];
}
$ts4="SELECT * FROM t_skills where Id=4";
$tr4 = mysqli_query($conn,$ts4);
while($rowt4 = mysqli_fetch_array($tr4,true))
{
 $tskill4=$rowt4['Skills'];
 $twidth4=$rowt4['Width'];
}



$l1="SELECT * FROM lsk_skills where Id=1";
$p1= mysqli_query($conn,$l1);
while($rowlp1 = mysqli_fetch_array($p1,true))
{
 $lang1=$rowlp1['Lang'];
 $percent1=$rowlp1['Percent'];
}


$l2="SELECT * FROM lsk_skills where Id=2";
$p2= mysqli_query($conn,$l2);
while($rowlp2 = mysqli_fetch_array($p2,true))
{
 $lang2=$rowlp2['Lang'];
 $percent2=$rowlp2['Percent'];
}



$l3="SELECT * FROM lsk_skills where Id=3";
$p3= mysqli_query($conn,$l3);
while($rowlp3 = mysqli_fetch_array($p3,true))
{
 $lang3=$rowlp3['Lang'];
 $percent3=$rowlp3['Percent'];
}




?>
<div class="column" style="padding-left:30px;text-align: left;height:200px"><div class="market">MARKETABLE SKILS</div><br>
<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta11" name="ta11" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()" ><?php echo $mwidth1;?></textarea>%</p>
  <div class="w3-container w3-blue w3-center"style="width:<?php echo $mwidth1;?>%;height: 20px;text-align: left"><img src="web.png" height="15px";width="15px"></img> <textarea style="height:17px" id="ta1" name="ta1" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $mskill1;?> </textarea> </div>
</div><br></div>
<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta21" name="ta21" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()" ><?php echo $mwidth2;?></textarea>%</p>
  <div class="w3-container w3-red w3-center"style="width:<?php echo $mwidth2;?>%;height: 20px;text-align:left"><img src="python.png" height="15px";width="15px"></img> <textarea style="height:17px" id="ta1" name="ta2" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $mskill2;?></textarea></div>
</div><br></div>
<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta31" name="ta31" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $mwidth3;?></textarea>%</p>
  <div class="w3-container w3-green w3-center"style="width:<?php echo $mwidth3;?>%;height: 20px;text-align: left;"><img src="java.png" height="15px";width="15px"></img><textarea style="height:17px" id="ta3" name="ta3" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()"> <?php echo $mskill3;?></textarea> </div>
</div><br></div>
<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta41" name="ta41" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $mwidth4;?></textarea>%</p>
  <div class="w3-container w3-orange w3-center"style="width:<?php echo $mwidth4;?>%;height: 20px;text-align: left"> <font color="white" align="left"><img src="c.jpg" height="15px";width="15px"></img> <textarea style="height:17px" id="ta4" name="ta4" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $mskill4;?> </textarea></font></div>
</div><br><input name="submit" id="submit" type="button" value="Save" onclick="doEditAGain()" /></div>
</div>

   
<div class="column" style="text-align: left;height: 240px;padding-right: 30px"><div class="market">TRANSFERABLE SKILLS</div><br>
<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta51" name="ta5" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $twidth1;?></textarea>%</p>
  <div class="w3-container w3-blue w3-center"style="width:<?php echo $twidth1;?>%;height: 20px;text-align: left"> <font color="white"><img src="communication.png" height="15px";width="15px"></img> <textarea style="height:17px" id="ta5" name="ta51" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $tskill1;?></textarea></font></div>
</div><br></div>

<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta61" name="ta6" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $twidth2;?></textarea>%</p>
  <div class="w3-container w3-red w3-center"style="width:<?php echo $twidth2;?>%;height: 20px;text-align: left"> <font color="white"><img src="team.jpg" height="15px";width="15px"></img> <textarea style="height:17px" id="ta6" name="ta61" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $tskill2;?></textarea></font></div>
</div><br></div>

<div class="w3-container">
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta71" name="ta7" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $twidth3;?></textarea>%</p>
  <div class="w3-container w3-green w3-center"style="width:<?php echo $twidth3;?>%;height: 20px;text-align: left"> <font color="white"><img src="leadership.png" height="15px";width="15px"></img>  <textarea style="height:17px" id="ta7" name="ta71" onkeyup="textAreaAdjust(this)"onclick="toggleEditor()" ><?php echo $tskill3;?></textarea></font></div>
</div><br></div>

<div class="w3-container" >
<div class="w3-grey"><p style="text-align: right;color: white;float: right"><textarea style="height:17px" id="ta81" name="ta8" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()"><?php echo $twidth4;?></textarea>%</p>
  <div class="w3-container w3-orange w3-center"style="width:<?php echo $twidth4;?>%;height: 20px;text-align: left"> <font color="white"><img src="time.jpg" height="15px";width="15px"></img> <textarea style="height:17px" id="ta8" name="ta81" onkeyup="textAreaAdjust(this)" onclick="toggleEditor()" ><?php echo $tskill4;?></textarea> </font></div>
</div><br></div>  &nbsp;

<input name="submit" id="submit" type="button" value="Save" onclick="doEdit()" />

</div>
</div>

<div class="row2" style="width: 100%" align="center">
  <br><br>
 LANGUAGE SKILLS & KNOWLEDGE

<br><br>
<br>

<div class="page" align="center">
<div class="clearfix" align="center" style="align-content: center;" >

<div align="center" class="columna">
                <div class="c100 p95 big green" width="33.3%">
                    <span><font color="black"><?php echo $percent1;?>%<br><h6><?php echo $lang1;?></h6></font></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
</div> 

<div align="center" class="coloumb">
<div class="c100 p100 big green" width="33.3%">
                    <span><font color="black"><?php echo $percent2;?>%<br><h6><?php echo $lang2;?></h6></font></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
</div>

<div align="center" class="columnc">
        <div class="c100 p90 big green" width="33.3%">
                    <span><font color="black"><?php echo $percent3;?>%<br><h6><?php echo $lang3;?></h6></font></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
        </div>
</div>

</div>
</div>
</div>

<div id="mybutton">
  <span style='border:1px grey solid; font-size:20px;text-align: center;background-color: black'><a href="homeedit.php"><i class="iconify" data-icon="ion-md-arrow-up"></i></a> </span>
  </div>

</body>
</html>