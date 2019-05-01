<?php
session_start();
if (!(isset($_SESSION['username']))){
    header("location:../login.php");
}//else //{
?>
<?php

require '../../db/config.php';

$username=$_POST['username'];
$password=$_POST['password'];

$statement="insert into admin(username,password) values ('$username',md5('$password'))";

if(mysqli_query($conn,$statement))
{
    header('location:../view_all_admins.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);
?>