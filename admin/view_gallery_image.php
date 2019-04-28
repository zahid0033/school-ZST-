
<?php 
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


<div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View Images</h2>
    <h3><a href='upload_gallery_image.php' style='float:left;margin-bottom: 2em' class='btn btn-info'>Add Image</a></h3>
    <br>

    
   
    
    
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>ID</th>
        <th>Image name</th>
        <th>Action</th>
		</tr>
        <?php
            require '../db/config.php';

            $statement="select * from gallery order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {


                while($row = mysqli_fetch_assoc($result))
                {


                    echo "<tr>"; 

          					echo "<td>".$row['id']."</td>";
          					echo "<td>".$row['images']."  <img src='../images/".$row['images']."' alt='' class='short' /> </td>";
          					echo "<td><a href=\"includes/delete_notice.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> </td>";

          					echo "</tr>";
                  

                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
		</table>
</div>

<?php include "includes/admin_footer.php" ?>