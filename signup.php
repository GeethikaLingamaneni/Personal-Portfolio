<?php
$servername = "localhost:3306";
$database = "geethika_wdm_project";
$username = "geethika_250298";
$password = "Geeth@2598";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());
}
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$user=$_POST['user'];
$password=$_POST['pwd1'];


  $sql="SELECT * FROM signup WHERE User='$user'|| Email='$email' ";
    $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) > 0)
        {
            $result = mysqli_fetch_all($res);
            /*echo  '<script type="text/javascript"> ';
                        echo 'alert("A user with same Username/Email  already exists!")';
                        echo '</script> ';*/

            foreach($result as $value)
            {
                //echo $value[2];
                if(strcmp(strval( $value[2] ) , $email)== 0)
                {
                  
                     echo  '<script type="text/javascript"> ';
                        echo 'alert("A user with same Email  already exists!")';
                        echo '</script> <a href="signup.html">Back to Sign UP </a>';
                        break;
                        
    
                }
                if(strcmp(strval( $value[3] ) , $user)== 0)
                {
                        echo  '<script type="text/javascript">';
                        echo 'alert("A user with same username already exists!")';
                        echo '</script> <a href="signup.html">Back to Sign UP </a>';
                        break;
                }
        
            }

        } 
        else
                { //here you need to add else condition
                   $sql = "INSERT INTO signup (Firstname, Lastname, Email, User,Password) VALUES ('$fname','$lname', '$email','$user','$password')";
                    if (mysqli_query($conn, $sql))
                    {
                        echo  '<script> ';
                        echo 'alert("Successfully signed in")';
                         echo '</script> <a href="login.html"> Log In to Continue </a>';
                        echo '</script> ';

                    
                    }

                    else
                    {
                        echo  '<script> ';
                        echo 'alert("Error: " . $sql . "<br>" . mysqli_error($conn)")';
                        echo '</script>';
                        
                    }
                }

?>