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
					<div id="status" style="float: right; margin-bottom: 5px"></div>
					<div class="">
						<p>User Name </p>
						<input type="text" class="name" id="username" name="username" required="" />
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


<script type="text/javascript">

	$('#username').keyup(function(){
		var username = $('#username').val();
		$('#status').html('<span>Loading</span>');

		if (username != '' ) {
			$.post('includes/check_username.php',{username:username},
			function(data){
				$('#status').html(data);
			});
		}
		else{
			$('#status').html('');
		}



	});
	
</script>

   
<?php include "includes/admin_footer.php" ?>