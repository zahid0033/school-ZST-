<?php
session_start();
if (!(isset($_SESSION['username']))){
    header("location:../login.php");
}//else //{
?>
<?php 
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View All Admins</h2>
    <h3><a href='admin_add.php' style='float:left;' class='btn btn-info'>Add Admin</a></h3>
    
    
    
    
    
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
		</tr>
        <?php
            require '../db/config.php';

            $statement="select * from admin order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['username']."</td>";

					echo "<td><a href=\"includes/delete_admin.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> </td>";
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