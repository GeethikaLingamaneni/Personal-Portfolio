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


if (isset($_POST['idZ']) and isset($_POST['companyZ'])and isset($_POST['roleZ']))
{	
$id = $_POST['idZ'];
$company = $_POST['companyZ'];
$role = $_POST['roleZ'];
}


$sql= "UPDATE resume SET Company='$company',RolenP='$role' WHERE Id='$id'";
                    if (mysqli_query($conn, $sql))
                    {
                      echo "SUCCESS";
                    }
                    else{
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }


mysqli_close($conn);
?>