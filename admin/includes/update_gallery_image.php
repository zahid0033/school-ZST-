 <?php  

require '../../db/config.php';


//echo $file;


$file1 = $_FILES["image"];
$description = $_POST['description']; 

move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/" . $file1["name"]);

var_dump($_FILES["image"]["error"]);

$image =  $file1["name"];

$statement= "insert into gallery(images,description) values ('$image','$description')";

if(mysqli_query($conn,$statement))
{
   header('location:../view_gallery_image.php');
}
else
    
    die("Query Failed".mysqli_error($conn));

mysqli_close($conn);