<?php
 require "../../db/config.php";
    $id = $_GET['id'];

    $result = mysqli_query($conn,"delete from notice WHERE id='$id' ");
if(!$result){
    die("query failed".mysqli_error($conn));
}
    header("Location:../view_job_posts.php");

?>