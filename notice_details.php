
<!--
 * User: Md. Zahid Hossain
 * Date: 28-03-2019
 * Time: 2.00 AM
11:00 AM
 -->
 

<?php require "db/config.php" ?>

<?php $id = $_GET['id']; ?>

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

	
	<div id="details" class="container">

		<!--
			  fetching notice detials based on their id through ajax from "fetch/fetch_notice_details"
			  script is written down below  
		-->



	</div>


	
	<!-- fetch notice details -->
	<script>
   	 $(document).ready(function(){
        
        fetch_notices();
        
        
        
        
        function fetch_notices(){
        	var id = "<?php echo $id ?>";
            
           $.ajax({
               type:"GET",
               data:{id:id},
               url: "fetch/fetch_notice_details.php",
               success: function(data){
                   $('#details').html(data);
               }
           });
       } 
        
       
        
        
    	});
	</script>
	<!-- end of notice details fetch -->

<?php include "includes/end.php" ?>
