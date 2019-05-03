<!--
 * User: Md. Zahid Hossain
 * Date: 28-03-2019
 * Time: 2.00 AM
 -->
 
<?php

if ((isset($_SESSION['username']))){
    header("location:admin/index.php");
}//else //{
?>

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
				<li>Login</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>L</span>ogin
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="fetch/fetch_login.php" method="post">
					<div class="">
						<p>User Name </p>
						<input type="text" class="name" name="username" required="" />
					</div>
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="password" required="" />
					</div>

					<input type="submit" value="Login" name="submit">
					
				</form>
			</div>

		</div>
	</div>


<?php include "includes/footer.php" ?>


<?php include "includes/end.php" ?>