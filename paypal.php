<!-- Modal -->
<div clas		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		
		
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
		<link href="css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
		<link href="css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/light_blue.css" rel="stylesheet">
		

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans    ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top dark ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								
								<BR>
     <!-- <form action="cart/data.php?q=checkout" method="POST"> -->
            <div class="form-group">
	
				<legend>Billing information</legend>
								<form role="form" class="form-horizontal" id="billing-information">
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Personal Info</h3>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
										<div class="form-group">
													<label>Firstname</label>
													<input type="text" name="fname" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Lastname</label>
													<input type="text" name="lname" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Contact #</label>
													<input type="text" name="contact" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" class="form-control">
												</div>
												<div class="form-group">
													<label>Complete Address</label>
													<input type="text" name="address" class="form-control" required>
												</div>
											<!--<div class="form-group">
												<div class="form-group">
													<label>Fax</label>
													<input type="text" name="fax" class="form-control" required>
												</div>
											</div>-->
												<div class="form-group">
												<div class="form-group">
													<label>City</label>
													<input type="text" name="city" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<div class="form-group">
													<label>Zip Code</label>
													<input type="text" name="code" class="form-control" required>
												</div>
											</div>
																
									<center>
									<h1 class="page-title">Checkout Payment</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
						
								<legend>Payment</legend>
								<center>
								<form role="form" class="form-horizontal" id="payment-information">
									<div class="row">
										<div class="col-lg-3" align="right">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													Credit Card<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
											<div class="space"></div>
										<div class="row" align = "right">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Paypal<i class="fa fa-cc-paypal pl-10"></i>
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										</div>
										</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Credit Card<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-4">
															<select class="form-control">
																<option value="visa" selected="selected">VISA</option>
																<option value="master-card">Master Card</option>
																<option value="american-express">American Express</option>
															</select>															
														</div>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label">Card Number<small class="text-default">*</small></label>
																<input type="text" name="cnum" class="form-control" required>
												</div>
											<!--<div class="form-group">
												<label class="col-md-3 control-label">Expiration Date<small id="xdate" class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-xs-6 col-sm-2">
															<select class="form-control">
																<option value="01" selected="selected">01</option>
																<option value="03">02</option>
																<option value="03">03</option>
																<option value="04">04</option>
																<option value="05">05</option>
																<option value="06">06</option>
																<option value="07">07</option>
																<option value="08">08</option>
																<option value="09">09</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<div class="col-xs-6 col-sm-2">
															<select class="form-control">
																<option value="2014" selected="selected">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																<option value="2017">2017</option>
																<option value="2018">2018</option>
																<option value="2019">2019</option>
																<option value="2020">2020</option>
																<option value="2021">2021</option>
																<option value="2022">2022</option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
															</select>
														</div>
													</div>
												</div>
											</div> -->
											<div class="form-group">
												<label class="col-md-3 control-label">CVS<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-xs-6 col-sm-2">
															<input type="text" id="cvs" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									
								</form>
								<br>
							</fieldset>
						</div>
					
						<!-- main end -->
					
						 <div class="modal-footer">
						 
        <button href="index.php"type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button href="item2.php" type="submit" class="btn btn-success">Submit</button>
          </form>
		  <script>
function myFunction() {
    var x = document.getElementById("myCheck").required;
    document.getElementById("demo").innerHTML = x;
}
</script>
      </div>

					</div>
				</div>
			</section>
			</div>													
</body>	
</html>	
					