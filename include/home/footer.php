
<div class="footer-bottom" style="background-color:rgb(0,0,0);" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
							<div class="social-icons">
							<ul class="nav navbar-nav">
								<li><a href="https://facebook.com"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="https://youtube.com"><i class="fa fa-youtube-play fa-lg"></i></a></li>
								<li><a href="https://instagram.com"><i class="fa fa-instagram fa-lg"></i></a></li>
						
							</ul>
						
				<div class="row"> <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
              ?> 
                                    
					<div class="copy-right">
           <p><center> &copy; 2018  <?php echo $row['site_name']; ?>. All Rights Reserved   </center> </p> </div> 
                                <?php }?>
											</div>
			</div>

		
						
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>