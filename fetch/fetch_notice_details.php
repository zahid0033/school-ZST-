<?php 

require "../db/config.php"; 


$id = $_GET['id']; 


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


		$short= substr($description,0,100 ); 

		if($image == ""){

			$output .='     	<div class="col-sm-12">
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
			$output .='     	

					<div class="col-sm-12">
			         	<div class="panel-group">
			            	<div class="panel panel-info">
			                	<div class="panel-heading">
				                  <h3>'.$title.'</h3>
				                  <h5>'.$postTime.'</h5>
			                	</div>

			               		<div class="panel-body">

					                   <p>
					                   		<img class="float-right" src="images/'.$image.'" alt="" style="float: right;height: 200px;">
					                   		'.$description.'
					                   </p>


					            </div>
					        </div>
					    </div>
					</div> ';
		}


   

    }
}

echo $output;

?>