
<?php 
    $id = $_GET['id']; 
session_start();
include "includes/admin_header.php";
?>
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper" class="">


       
    <div class="container">
            <?php
                require "../db/config.php";

                $statement="select * from notice where id='$id'";
                $result = mysqli_query($conn, $statement);
               

                if (mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        $title = $row['title'];
                        $description = $row['description'];
                        $postTime = $row['postTime'];
                    
                    }
                }
                else
                {
                    echo "Nothing found";
                }
                
        
        
                mysqli_close($conn);
            ?>
            
            
          <div class="col-sm-12">
              <div class="panel-group">
                
                 <div class="panel panel-info">

                     <div class="panel-heading">
                        <h2><?php echo $title ?></h2>
                        <h4><?php echo $postTime ?><i class="fa fa-check-circle" aria-hidden="true" style="margin-left:10px;"></i></h4>
                     </div>
                     <div class="panel-body">
                          
                         <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Description</b></p>
                         <p><?php echo $description ?></p>
                         
                     </div>
                 </div>
                  
              </div>
            
           </div>
            
    </div>

</div>
<?php include "includes/admin_footer.php" ?>