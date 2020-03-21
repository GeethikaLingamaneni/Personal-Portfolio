<?php
session_start();

$servername = "localhost:3306";
$database = "geethika_wdm_project";
$username = "geethika_250298";
$password = "Geeth@2598";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
      die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['MynameZ']) and isset($_POST['MymailZ'])and isset($_POST['PhoneZ'])and isset($_POST['DOBZ'])and isset($_POST['AddressZ'])and isset($_POST['NationalityZ'])and isset($_POST['MytakeZ']))
{	
$name=$_POST['MynameZ'];
$mail=$_POST['MymailZ'];
$phone=$_POST['PhoneZ'];
$bday=$_POST['DOBZ'];
$add=$_POST['AddressZ'];
$nation=$_POST['NationalityZ'];
$take=$_POST['MytakeZ'];
}


$sql= "UPDATE aboutme SET Myname= '$name', Mymail= '$mail' ,  DOB='$bday' ,Myphone= '$phone' , Location='$add'  , Natinonality= '$nation' , Mytake= '$take' WHERE Id='1'";
                    if (mysqli_query($conn, $sql))
                    {
                      echo "SUCCESS";
                    }
                    else
                    {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

/*if($stmt = $conn->prepare("INSERT into hireme('Salary', 'Role' , 'Id') values ('$id','$salary','$role')")) {

   //$stmt->bind_param("s", $user);
   $stmt->execute(); 
   $stmt->bind_result($upass);
echo "DOne";
   /*while ($stmt->fetch()) {
   	echo "success";
   }
$stmt->close();

}

mysqli_close($conn);*/
?>