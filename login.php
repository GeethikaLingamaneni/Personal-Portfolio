<?php
/*session_start();

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }
 else
 {*/
  session_start();
ob_start();
$servername = "localhost:3306";
$database = "geethika_wdm_project";
$username = "geethika_250298";
$passworddb = "Geeth@2598";
$conn = mysqli_connect($servername, $username, $passworddb, $database);

if (!$conn) 
{
      die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['user']) and isset($_POST['pwd1']))
{ 
$user = $_POST['user'];
$password = $_POST['pwd1'];
}

$sql="SELECT * from signup WHERE User='$user'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if ($count==1) 
{

if($stmt = $conn->prepare("SELECT Password,UserType,User FROM signup WHERE  User = ? ")) 
{
$_SESSION['user']= $user;

   $stmt->bind_param("s", $user);
   $stmt->execute(); 
   $stmt->bind_result($upass,$utype,$uname);

   while ($stmt->fetch()) 
   {
    if ($password == $upass and $utype == 'Admin')

    {
      echo  '<script> ';
     echo 'alert("login successful")';
     echo '</script> ';
    /* if($_SESSION['user'])
     {*/ 
     /*echo  '<script> ';
     echo 'alert("Welcome" . $user . "admin")';
     echo '</script> ';*/
       
      header("Location: homeedit.php");
     
    /* }
     else
     {
      header("Location:login.html");
     
     }*/
   
     }
   

    else if ($password == $upass and $utype == 'User'){


      echo  '<script> ';
     echo 'alert("login successful")';
     echo '</script> ';
  
       
      header("Location: home.php");
     
     }
else{
  echo  '<script type="text/javascript">';
     echo 'alert("Sorry wrong password entered!")';
     echo '</script> ';
    echo '</script> <a href="login.html">Back to Log In </a>';
                      
    // header("Location:login.html");
     }
   }
 }
else
    {
     echo  '<script> ';
     echo 'alert("login failed")';
     echo '</script> ';
   
    }
}
else{
  echo"Invalid credentials";
  echo '</script> <a href="signup.html">Sign up to Continue </a>';
                        
}

mysqli_close($conn);

?>