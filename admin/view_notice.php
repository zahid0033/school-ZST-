<?php
session_start();
if (!(isset($_SESSION['username']))){
    header("location:../login.php");
}//else //{
?>
<?php 
    $id = $_GET['id']; 
include "includes/admin_header.php";
?>
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper" class="">


       
    <div class="container">
            <?php
                require "../db/config.php";

        $query = "select * from notice where id= '$id'";

        $result = mysqli_query($conn,$query);
                       
        $count =  mysqli_num_rows($result);
                                 //   echo $count;

        $output = '';



        if($count > 0){
                                
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $image = $row['image'];
                $postTime = $row['postTime'];



                if($image == ""){

                echo '         <div class="col-sm-12">
                                         <div class="panel-group">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                  <h3>'.$title.'</h3>
                                                  <h5>'.$postTime.'</h5>
                                                </div>

                                               <div class="panel-body">

                                                   <p>
                                                        '.$description.'
                                                   </p>


                                                       </div>
                                                   </div>
                                            </div>
                                        </div> ';

                }
                else{
                    echo  '         

                            <div class="col-sm-12">
                                <div class="panel-group">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                          <h3>'.$title.'</h3>
                                          <h5>'.$postTime.'</h5>
                                        </div>

                                        <div class="panel-body">

                                               
                                               <p><span style="float: right;color: red;border: 1px solid black;padding: 1em;"> Download your file from here <a  href="../uploads/'.$image.'" donwload>'.$image.'</a></span></p>
                                                <p> '.$description.' </p>
                                               


                                               <p>  </p>


                                        </div>
                                    </div>
                                </div>
                            </div> ';
                }


           

            }
        }


            ?>
            
            
    </div>

</div>
<?php include "includes/admin_footer.php" ?>