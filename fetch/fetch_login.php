<?php

require '../db/config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($_POST['submit'])){
    
    $statement="select username, password from admin where username='$username' and password=md5('$password')";

    $result = mysqli_query($conn, $statement);
            if (mysqli_num_rows($result) == 1)
            {

            	$_SESSION['username']= $username;
                
            	header("location:../admin/index.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
                header("location:../login.php");
            }
            mysqli_close($conn);
    
}


?>