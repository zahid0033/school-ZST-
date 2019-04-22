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
						<span>Best Study</span>
					</h4>
					<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra sem eget.</p>
					<p>একুশ শতকের তীব্র প্রতিযোগিতামূলক বিশ্বের ক্রমবর্ধমান চ্যালেঞ্জ মোকাবেলা করে বাংলাদেশ গত দুই দশক ধরে এগিয়ে যাচ্ছে ধারাবহিক উন্নয়নের পথে। আমরা ইতোমধ্যে স্বল্পোন্নত দেশ থেকে উন্নয়নশীল দেশের কাতারে নাম লিখিয়েছি। ‘রূপকল্প-২০২১’ এর মাধ্যমে মধ্য আয়ের দেশ হওয়ার সাফল্য যখন দ্বার প্রান্তে তখন স্বপ্নের সীমানা বিস্তৃত ২০৪১ সালে উন্নত দেশ হওয়ার প্রত্যাশায়।</p>
				</div>
				<!-- Stats-->
				<div class="col-md-6 stats-info-agile">
					<div class="col-xs-6 stats-grid stat-border">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='768' data-delay='.5' data-increment="1">768</div>
						<p>Faculties</p>
					</div>
					<div class="col-xs-6 stats-grid">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='678' data-delay='.5' data-increment="1">678</div>
						<p>Approved Courses</p>
					</div>
					<div class="clearfix"></div>
					<div class="child-stat">
						<div class="col-xs-6 stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='800' data-delay='.5' data-increment="1">800</div>
							<p>Certified Teachers</p>
						</div>
						<div class="col-xs-6 stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='485' data-delay='.5' data-increment="1">485</div>
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
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-certificate icon" aria-hidden="true"></span>
						<h4>Certification</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-book icon" aria-hidden="true"></span>
						<h4>Book Library</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-users icon" aria-hidden="true"></span>
						<h4>Best Teachers</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bus icon" aria-hidden="true"></span>
						<h4>Transport Facility</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-laptop icon" aria-hidden="true"></span>
						<h4>Excellent Lab</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
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


	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Best
						<span>Study</span>
					</h4>
				</div>
				<div class="modal-body">
					<div class="model-img-info">
						<img src="images/e1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->


	<!-- //news -->
	<!-- middle section -->
	<div class="middle-sec-agile">
		<div class="container">
			<h4>Our
				<span>Best Study</span> Institute</h4>
			<ul>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Select A Course You Like And Explore It!</h5>
						<p>Integer eu facilisis nunc, a iaculis felis.</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Join A Seminar To Know More About It!</h5>
						<p>Integer eu facilisis nunc, a iaculis felis.</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Get Enrolled And Start Better Future With Us!</h5>
						<p>Integer eu facilisis nunc, a iaculis felis.</p>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
			<a class="button-style" href="join.html">Join Now</a>
		</div>
		<div class="pencil-img">
			<img src="images/bg5.png" alt="" />
		</div>
	</div>
	<!-- //middle section -->


	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>C</span>lient's
					<span>S</span>ay
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<ul id="flexiselDemo1">
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="images/te1.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Michael Paul</h5>
								<p>Client 1</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="images/te2.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Faul John</h5>
								<p>Client 2</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="images/te3.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Richa Roy</h5>
								<p>Client 3</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>

			</ul>
		</div>
	</div>
	<!-- //testimonials -->



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