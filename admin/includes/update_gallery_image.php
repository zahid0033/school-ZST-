 <?php  

require '../../db/config.php';


//echo $file;


$file1 = $_FILES["image"]; 


move_uploaded_file($file1["tmp_name"], "../../images/" . $file1["name"]);

$image =  $file1["name"];

$statement= "insert into gallery(images) values ('$image')";


 if(mysqli_query($conn,$statement))
 {
   header('location:../../gallery1.php');
}
else
    
    die("Query Failed".mysqli_error($conn));

mysqli_close($conn);