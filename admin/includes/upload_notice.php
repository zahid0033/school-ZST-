 <?php  

require '../../db/config.php';


//echo $file;

$title=$_POST['title'];
$description=$_POST['description'];


$file = $_FILES["file"]; 
move_uploaded_file($file["tmp_name"], "../uploads/" . $file["name"]);

$fileName =  $file["name"];


$statement= "insert into notice(adminId,title,description,image,postTime) values ('1','$title','$description','$fileName',now())";




if(mysqli_query($conn,$statement))
{
    header('location:../view_notices.php');
}
else
    
    die("Query Failed".mysqli_error($conn));

mysqli_close($conn);