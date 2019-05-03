<!--
 * User: Md. Zahid Hossain
 * Date: 28-03-2019
 * Time: 2.00 AM
 -->
 

<?php require "db/config.php" ?>


<!-- header -->
<?php include "includes/header.php" ?>
<!-- top bar for signup/signin  -->
<?php include "includes/topBar.php" ?>
<!-- navbar -->
<?php include "includes/navbar.php" ?>

<?php 
$statement = "select * from banner where id = 1 ";
    $result = mysqli_query($conn,$statement);
    if(mysqli_num_rows($result) == 1 ){
        
        while($row = mysqli_fetch_assoc($result)){
            
            $banner1 = $row['banner1'];
            $banner2 = $row['banner2'];
            $banner3 = $row['banner3'];
            
        }
    }
?>


<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/<?php echo $banner1 ?>">
				
			</div>
			<div class="item">
				<img src="images/<?php echo $banner2 ?>">
				
			</div>
			<div class="item">
				<img src="images/<?php echo $banner3 ?>">
				
			</div>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->


	<!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>elcome
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4>About
						<span>ZST</span>
					</h4>
					<p>Education is the backbone of a nation so from a commitment to our nation Zohora Samad Trust established ZST School in 2012 at their own South Alekanda, Barishal, Bangladesh premises. At ZST School, our primary target is to educate tomorrow’s leaders, by training them with the life skills to master the challenges posed by an ever-changing world. In order to produce young people with confidence to shape the future, our teachers view each member of our student as a unique individual</p>
					<p></p>
				</div>
				<!-- Stats-->
				<div class="col-md-6 stats-info-agile">
					<div class="col-xs-6 stats-grid stat-border">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='768' data-delay='.5' data-increment="1">50</div>
						<p>Faculties</p>
					</div>
					<div class="col-xs-6 stats-grid">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10' data-delay='.5' data-increment="1">10</div>
						<p>Classes</p>
					</div>
					<div class="clearfix"></div>
					<div class="child-stat">
						<div class="col-xs-6 stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='800' data-delay='.5' data-increment="1">800</div>
							<p>Certified Teachers</p>
						</div>
						<div class="col-xs-6 stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='500' data-delay='.5' data-increment="1">500</div>
							<p>Happy Students</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->


	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>S</span>ervices
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bullhorn icon" aria-hidden="true"></span>
						<h4>Popular Courses</h4>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-certificate icon" aria-hidden="true"></span>
						<h4>Certification</h4>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-book icon" aria-hidden="true"></span>
						<h4>Book Library</h4>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-users icon" aria-hidden="true"></span>
						<h4>Best Teachers</h4>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bus icon" aria-hidden="true"></span>
						<h4>Transport Facility</h4>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-laptop icon" aria-hidden="true"></span>
						<h4>Excellent Lab</h4>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->


	<!-- notices -->
	<div class="news" id="news">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>নো</span>টিশ বোর্ড 
				</h3>
				<div class="tittle-style">

				</div>

			</div>


			<div  class="yaallahaa-news-grids-agile notices">
				<div id="notices" class="yaallahaa-news-grid">


					<!--
						  fetching notices through ajax from "fetch/fetch_notices"
						  script is written down below  
						-->


					<div class="clearfix"> </div>

				</div>


			</div>
		</div>
	</div>





	<!-- //news -->






<?php include "includes/footer.php" ?>


	

	
	
	<!-- notice fetch -->
	<script>
   	 $(document).ready(function(){
        
        fetch_notices();
        

        
        setInterval(function(){
            fetch_notices();
        },5000);
        
        
        
        function fetch_notices(){
        	var id = 1;
            
           $.ajax({
               type:"GET",
               url: "fetch/fetch_notices.php",
               success: function(data){
                   $('#notices').html(data);
               }
           });
       } 
        
       
        
        
    	});
	</script>
	<!-- end of notice fetch -->

	
	<!-- Flexslider-js for-testimonials -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 1
					},
					tablet: {
						changePoint: 768,
						visibleItems: 1
					}
				}
			});

		});
	</script>

<?php include "includes/end.php" ?>