<?php include('include/home/header.php'); ?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<div class="faculty-div">
						<h3>Gallery</h3>
						<hr />		    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8"> <center>
	    			<img class="thumbnail" src="wall-2.jpg" width="450" height="350">
					<img class="thumbnail" src="1.jpg" width="450" height="350">
	    		</div>
	    		<div class="col-sm-4">
	    			
                                    <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
              ?> 
                                                
	    				<div class="faculty-div">
						<h3>Contact Info</h3>
						<hr />
	    				<address>
	    					<p><?php echo $row['comp_name']; ?>  </p>
							<p>Mobile: <?php echo $row['site_phone']; ?>   </p>
							<p>Tel: <?php echo $row['fax']; ?>  </p>
							<p>Email: <?php echo $row['site_email']; ?>   </p>
	    				</address>
                                <?php }?>
	    				
	    			</div>
					<img src="images/assets/sweetonion.png" width="380" height="250">
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php include('include/home/footer.php'); ?>