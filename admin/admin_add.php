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


 	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>R</span>egistration
					<span>A</span>dmin
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="includes/reg_admin.php" method="post">
					<div class="">
						<p>User Name </p>
						<input type="text" class="name" name="username" required="" />
					</div>
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="password" required="" />
					</div>

					<input type="submit" value="Save" name="submit">
					
				</form>
			</div>

		</div>
	</div>


</div>

   
<?php include "includes/admin_footer.php" ?>