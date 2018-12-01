<style>
body{ font: 14px sans-serif; 
                text-align: center; 
                background-image: url("bg2.jpg");
                height: 600px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;

</style>
<?php include('include/home/header.php'); ?>
	



	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
			<div class="faculty-div">
				<i>
						<h3><font color = "white">About Us</h3>
						<hr>
				<div class="col-sm-12 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					<i>
						<?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
              ?> 
                                                
                             <?php echo $row['site_about']; ?>                   
                                                
                                <?php }?>
					<br><br><br><br>
					<br><br><br><br>	
					<br><br><br><br>
					<br><br><br><br>
					<br>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
<?php include('include/home/footer.php'); ?>