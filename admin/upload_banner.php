<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


<div id="page-wrapper" class="">


   
    <h2 style="text-align:center">Upload Banner</h2>
   

	<div class="container">
	   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
	    <form name="summernote" method="post" enctype="multipart/form-data" action="includes/update_banner.php">

			<p> <b> Banner 1 </b> </p>  <input type="file" name="banner1" > <br>
			<p> <b> Banner 2 </b> </p>  <input type="file" name="banner2"> <br>
			<p> <b> Banner 3 </b> </p>  <input type="file" name="banner3"> <br>

			

	        <input type="submit" class="btn btn-success" value="Save"/>
	    </form>
	</div>

</div>

   
<?php include "includes/admin_footer.php" ?>