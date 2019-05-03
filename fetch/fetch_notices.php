<?php 

require "../db/config.php"; 


$query = "select * from notice order by id desc limit 4 ";

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


   $output .='  <div class="col-md- yaallahaa-news-left" >
						<div class="col-xs-2 ">
							<div class="news-left-text">
								<span class="fa fa-bullhorn" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-10 news-grid-info-bottom-w3ls">
							<div class="news-left-top-text text-color1">
								<a href="notice_details.php?id='.$id.'" style="color: Blue;font-size: 20px">'.$title.'</a>
							</div>
							<div class="date-grid">
								<div class="admin">
									<a href="">
										<span class="fa fa-clock-o" aria-hidden="true"></span> '.$postTime.'</a>
								</div>
								<div class="description">
									<p style="font-color:black">'.$short.'....</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-w3ls-text">
								
							</div>
						</div>
						<div class="clearfix"> </div>
				</div> ';

    }
}

echo $output;

?>