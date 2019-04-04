<?php 
session_start();
include "includes/admin_header.php"
?>

    
<div id="wrapper">

  
  <div class="container">
       <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
        <form name="summernote" method="post" action="setdata.php">
            News Headline:<br/><input type="text" class="form-control" name="heading" required /><br/>
            News Body:<br/><textarea name="newsbody" id="summernote" class="summernote"></textarea><br/>
            <input type="submit" class="btn btn-success" value="Save News"/>
        </form>
    </div>


  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
<?php include "includes/admin_footer.php" ?>