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


   
    <h2 style="text-align:center;margin-bottom: 40px;">Upload Banner</h2>
   
    <p class="text-center" style="margin-bottom: 30px"><b>PS:</b> You can upload max 3 banner at a time. Image size should be 1600 X 800 px for better quality</p>

	<div class="container">
	   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
	    <form name="summernote" method="post" enctype="multipart/form-data" action="includes/update_banner.php">


	    <div class="row">

	    	<div class="col-sm-12" style="margin-bottom: 25px;padding: 20px 0;background:linear-gradient(to right, #bfbcbc , #16d6ea)">

	    		<div class="col-sm-6">
	    		<b> Banner 1 </b>
		    	</div>
		    	<div class="col-sm-6">
		    		<input type="file" name="banner1" >
		    	</div>
	    		
	    	</div>

	    	
	    	<div class="col-sm-12" style="margin-bottom: 25px;padding: 20px 0;background:linear-gradient(to right, #bfbcbc , #16d6ea)">

	    		<div class="col-sm-6">
	    		<b> Banner 2 </b>
		    	</div>
		    	<div class="col-sm-6">
		    		<input type="file" name="banner2">
		    	</div>
	    		
	    	</div>

	    	

	    	<div class="col-sm-12" style="margin-bottom: 25px;padding: 20px 0;background:linear-gradient(to right, #bfbcbc , #16d6ea)">

	    		<div class="col-sm-6">
	    		<b> Banner 3 </b>
		    	</div>
		    	<div class="col-sm-6">
		    		<input type="file" name="banner3">
		    	</div>
	    		
	    	</div>
	    	

	    </div>
			<input type="submit" style="float: right; margin-bottom: 15px" class="btn btn-success " value="Save"/>

	        
	    </form>
	</div>

</div>

   
<?php include "includes/admin_footer.php" ?>