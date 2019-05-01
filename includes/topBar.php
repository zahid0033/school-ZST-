
<!--
 * User: Md. Zahid Hossain
 * Date: 28-03-2019
 * Time: 2.00 AM
 -->

<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>	Dengu Sardar Road South Alekanda,Barishal Bangladesh.
				</p>
			</div>
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<a class="facebook" href="#">
						<span class="fa fa-facebook"></span>
					</a>
				</div>
				<div class="header-top-righ">
					
					<?php
					session_start();
						if ((isset($_SESSION['username']))){
							echo '<a href="admin/index.php"><span class="fa fa-user" aria-hidden="true"></span>'.$_SESSION['username'].'</a>';
						}else {
							echo '<a href="login.php"><span class="fa fa-sign-out" aria-hidden="true"></span>Login</a>';
						}
					?>



					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>