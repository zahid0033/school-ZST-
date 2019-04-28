<?php 
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


<div id="page-wrapper" class="">


   
    <h2 style="text-align:center">Add Notice</h2>
   

	<div class="container">
	   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
	    <form name="summernote" method="post" enctype="multipart/form-data" action="includes/upload_notice.php">
			News Headline:<br/><input type="text" class="form-control" name="title"/><br/>
	        News Body:<br/><textarea name="description" id="summernote" class="summernote"></textarea><br/>

  			<input type="file" name="file"> <br>

	        <input type="submit" class="btn btn-success" value="Save"/>
	    </form>
	</div>

</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
   
<?php include "includes/admin_footer.php" ?>