<?php include('include/home/header.php'); ?>
<style>
      @font-face { font-family: Roboto-Regular; src: url('fonts/Roboto-Regular.TTF'); } 
      h3 {
         font-family: Roboto-Regular
      }
      hr {
      	color:black ,font-weight: bold;
      }
    </style>
    	<section>
		<div class="container">
			<div class="row">
				

                    
    <div class="col-sm-12 padding-right">
        
        
        <!-- FlexSlider -->
				 
            
<!-- FlexSlider -->  
<!--
					<div class="col-sm-12 padding-right"><div class="faculty-div">
					<center><h2 >Where tasteful creations begin.</h2>
					
					<hr />
                  
					<h4 >

					
                   </p>
					<a  href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#su">
                                <i class="fa fa-plus fa-lg"></i> Book Events Now!
                            </a>


					

					<br><br> 
						-->
					</center><b><h2>THE FURNITURES</b></h2><hr></div>
								

	
<!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
                    
				}
				else
				{
					$result = mysql_query("SELECT * FROM products ");
                }
					
				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-right">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img class="img-rounded" src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="180" height="170" /></a>
                    </a>
					
					<h2>'.$row['Product'].'</h2>
					<p>'.$row['Category'].', ₱ '.$row['Price'].'</p>
					
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-primary add-to-cart"><i class="fa fa-shopping-cart"></i>Order Now</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>

<!-- Mediul Modal -->
<!--
			<div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color: #ac3a86" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Set an appointment</h2>
              </div>
              <div class="modal-body">
				 <form enctype="multipart/form-data" method="post" action="reserve.php">
                   <fieldset>
                            <p>Name:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Insert Name" id="name" name="name" type="text">
                           
							 
							</div>
							
							<p>Reason:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Type of Event" id="event" name="event" type="text" required>
                           
							 
							</div>

							<p>Date And Time  </p>
                            <div class="form-group">
							
                                <input id="date" size="30" style="color:black;" name="date" type="date" autocomplete="off" style="width:130px; height:20px;">
		
								<select name="hr" class="btn-default" id="hr" style="width:50px; height:30px;">
										    		<?php 
										    			$x = 12;
										    			for($time = 1; $time <= $x; $time++){
										    		?>
										    			<option value="<?php echo $time; ?>"><?php echo $time; ?></option>
										    		<?php
										    			}//end fpr
										    		 ?>
										    	</select>
								<select name="min" class="btn-default" id="min" style="width:50px; height:30px;">
										    		<?php 
										    			$x = 59;
										    			for($time = 1; $time <= $x; $time++){
										    		?>
										    			<option value="<?php echo $time; ?>"><?php echo $time; ?></option>
										    		<?php
										    			}//end fpr
										    		 ?>
										    	</select>
								<select name="ampm" class="btn-default" id="ampm" style="width:50px; height:30px;">
										    		<option value="AM">AM</option>
										    		<option value="PM">PM</option>
										    	</select>


                  

							 
							</div>
							 <br>
				 &nbsp <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				  &nbsp <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button><br><br>
				
				
							 <p>Other Information about the reservation will be further asked on the appointment</p>
							</div><br>
							
-->
							
				   
				   
					 </fieldset>
                  
            
              </div>

               

				   </form>

            </div>
          </div>

<?php include('include/home/footer.php'); ?>