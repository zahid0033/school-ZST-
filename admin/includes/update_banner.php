 <?php  

require '../../db/config.php';


//echo $file;
$statement = "select * from banner where id = 1";
	$result = mysqli_query($conn,$statement);
	$count =  mysqli_num_rows($result);
	if ($count > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$pre_banner1 = $row['banner1'];
			$pre_banner2 = $row['banner2'];
			$pre_banner3 = $row['banner3'];
		}
	}


$file1 = $_FILES["banner1"]; 
$file2 = $_FILES["banner2"]; 
$file3 = $_FILES["banner3"]; 



move_uploaded_file($file1["tmp_name"], "../../images/" . $file1["name"]);
move_uploaded_file($file2["tmp_name"], "../../images/" . $file2["name"]);
move_uploaded_file($file3["tmp_name"], "../../images/" . $file3["name"]);

$banner1 =  $file1["name"];
$banner2 =  $file2["name"];
$banner3 =  $file3["name"];


if ($banner1 != "" && ($banner2 == "" && $banner3 == "")) {
	$statement= "update banner set banner1 = '$banner1' where id = 1;";
	unlink("../../images/".$pre_banner1);
}
elseif ($banner2 != "" && ($banner1 == "" && $banner3 == "")) {
	$statement= "update banner set banner2 = '$banner2' where id = 1;";
	unlink("../../images/".$pre_banner2);
}
elseif ($banner3 != "" && ($banner1 == "" && $banner2 == "")) {
	$statement= "update banner set banner3 = '$banner3' where id = 1;";
	unlink("../../images/".$pre_banner3);
}
elseif ($banner1 != "" && $banner2 != "" && $banner3 == "") {
	$statement= "update banner set banner1 = '$banner1', banner2 = '$banner2' where id = 1;";
	unlink("../../images/".$pre_banner1);
	unlink("../../images/".$pre_banner2);
}
elseif ($banner1 != "" && $banner3 != "" && $banner2 == "") {
	$statement= "update banner set banner1 = '$banner1', banner3 = '$banner3' where id = 1;";
	unlink("../../images/".$pre_banner1);
	unlink("../../images/".$pre_banner3);
}
elseif ($banner2 != "" && $banner3 != "" && $banner1 == "") {
	$statement= "update banner set banner2 = '$banner2', banner3 = '$banner3' where id = 1;";
	unlink("../../images/".$pre_banner2);
	unlink("../../images/".$pre_banner3);
}
elseif ($banner1 != "" && $banner2 != "" && $banner3 != "") {
	$statement= "update banner set banner1 = '$banner1', banner2 = '$banner2', banner3 = '$banner3' where id = 1;";
	unlink("../../images/".$pre_banner1);
	unlink("../../images/".$pre_banner2);
	unlink("../../images/".$pre_banner3);
}

// $statement= "update banner set banner1 = '$banner1', banner2 = '$banner2', banner3 = '$banner3' where id = 1;";



if(mysqli_query($conn,$statement))
{
    header('location:../../index.php');
}
else
    
    die("Query Failed".mysqli_error($conn));

mysqli_close($conn);