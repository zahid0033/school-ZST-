
<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View Notices</h2>
    <h3><a href='notice_add.php' style='float:left;' class='btn btn-info'>Add Notice</a></h3>
    <h3><a href='convertxml/jobPost_xml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
    
    
   
    
    
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>Notice ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Post Date</th>
        <th>Action</th>
		</tr>
        <?php
            require '../db/config.php';

            $statement="select * from notice order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {


                while($row = mysqli_fetch_assoc($result))
                {



                    $short= substr($row['description'],0,150 ); 

                    echo "<tr>"; 

          					echo "<td>".$row['id']."</td>";
          					echo "<td>".$row['title']."</td>";
                    echo "<td>".$short."... </td>";
          					echo "<td>".$row['postTime']."</td>";



          					echo "<td><a href=\"includes/delete_notice.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"view_notice.php?id=$row[id]\">View</a></td>";

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