<?php
 require "../../db/config.php";
    $id = $_GET['id'];

    $statement = "select * from notice where id = '$id' ";
	$result = mysqli_query($conn,$statement);
	$count =  mysqli_num_rows($result);
	if ($count == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			$file = $row['image'];
			if ($file != "") {
				unlink("../../uploads/".$file);
			}
		}
	}

    $result = mysqli_query($conn,"delete from notice WHERE id='$id' ");
if(!$result){
    die("query failed".mysqli_error($conn));
}
    header("Location:../view_notices.php");

?>