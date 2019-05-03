 <?php
session_start();
if (!(isset($_SESSION['username']))){
    header("location:../login.php");
}//else //{
?>
<?php  

require '../../db/config.php';

//echo $file;

$username = $_SESSION['username'];
$query = "select * from admin where username = '$username' ";

$result = mysqli_query($conn,$query);
               
$count =  mysqli_num_rows($result);

if($count > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];

		$title=$_POST['title'];
		$description=$_POST['description'];
		$description = mysqli_real_escape_string($conn,$_POST['description']);


		$file = $_FILES["file"]; 
		move_uploaded_file($file["tmp_name"], "../../uploads/" . $file["name"]);

		$fileName =  $file["name"];
			

		$statement= "insert into notice(adminId,title,description,image,postTime) values ('$id','$title','$description','$fileName',now())";

		if(mysqli_query($conn,$statement))
		{
		    header('location:../view_notices.php');
		}
		else
		    
		    die("Query Failed".mysqli_error($conn));

		mysqli_close($conn);
	}
}
