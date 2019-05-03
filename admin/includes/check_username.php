<?php
 require "../../db/config.php";
    

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($conn,$_POST['username']);

	if (!empty($username)) {
		$query = mysqli_query($conn,"select * from admin where username = '$username'");
		$username_result = mysqli_num_rows($query);

		if ($username_result == 0) {
			echo '<span class="btn btn-primary">Username Available</span>';
		}
		else if($username_result == 1){
			echo '<span class="btn btn-danger">This username has been taken already</span>';
		}
	}
}
?>