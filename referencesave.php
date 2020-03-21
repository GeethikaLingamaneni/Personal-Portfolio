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


if (isset($_POST['idZ']) and isset($_POST['NameZ'])and isset($_POST['DesignationZ']))
{ 
$id = $_POST['idZ'];
$name = $_POST['NameZ'];
$desig = $_POST['DesignationZ'];
}



$sql= "UPDATE reference SET Name= '$name', Designation='$desig' WHERE Id='$id'";
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