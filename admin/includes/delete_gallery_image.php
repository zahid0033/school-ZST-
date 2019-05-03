<?php
 require "../../db/config.php";
    $id = $_GET['id'];

    $statement = "select * from gallery where id = '$id' ";
	$result = mysqli_query($conn,$statement);
	$count =  mysqli_num_rows($result);
	if ($count == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			$image_name = $row['images'];
			unlink("../../images/".$image_name);
		}
	}


    $result = mysqli_query($conn,"delete from gallery WHERE id='$id' ");
if(!$result){
    die("query failed".mysqli_error($conn));
}
    header("Location:../view_gallery_image.php");

?>