<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


<div id="page-wrapper" class="">


   
    <h2 style="text-align:center">Add Notice</h2>
   

	<div class="container">
	   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
	    <form name="summernote" method="post" action="setdata.php">
			News Headline:<br/><input type="text" class="form-control" name="heading"/><br/>
	        News Body:<br/><textarea name="newsbody" id="summernote" class="summernote"></textarea><br/>
	        <input type="submit" class="btn btn-success" value="Save News"/>
	    </form>
	</div>

</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
   
<?php include "includes/admin_footer.php" ?>