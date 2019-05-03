<!--
 * User: Md. Zahid Hossain
 * Date: 28-03-2019
 * Time: 2.00 AM
 -->


<!-- header -->
<?php include "includes/header.php" ?>
<!-- top bar for signup/signin  -->
<?php include "includes/topBar.php" ?>
<!-- navbar -->
<?php include "includes/navbar.php" ?>


	
	<!-- banner -->
	<div class="inner_page_agile">

	</div>
	<!--//banner -->
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
	<!-- //short-->



	<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur <span>G</span>allery
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="agileinfo-gallery-row">

				<?php 

				require "db/config.php"; 


				$query = "select * from gallery ";

				$result = mysqli_query($conn,$query);
				               
				$count =  mysqli_num_rows($result);

				if($count>0){
					while($row = mysqli_fetch_assoc($result)){
						$image = $row['images'];
						$description = $row['description'];


						echo '<div class="col-xs-4 w3gallery-grids">
									<a href="images/'.$image.'" class="imghvr-hinge-right figure">
										<img src="images/'.$image.'" alt="" class="gallery_image" />
										<div class="agile-figcaption">
											<h4>'.$description.'</h4>
										</div>
									</a>
								</div>';
					}
				}
				?>






				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Gallery -->



<?php include "includes/footer.php" ?>


	<script>
		$(function () {
			var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
				navText: ['&lsaquo;', '&rsaquo;']
			});
		});
	</script>
	
<?php include "includes/end.php" ?>