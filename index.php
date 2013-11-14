<!DOCTYPE html>
<html lang="en">
<head>
	<title>Website Bid Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			
				<!-- button displays when on mobile devices -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a href="#" class="navbar-brand">Website Bid Calculator</a>
			</div>
			<div class="collapse navbar-collapse">
				
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Preview</a></li>
					<li><a href="#">Print</a></li>
					<li><a href="#">Reset</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Website Bid Calculator</h1>
			<p>
				Use the application below to get a bid for web services. Select different options and view the corresponding hours needed and associate costs. Your total will be dynamically calculated in real-time.
			</p>
			<p><a class="btn btn-primary btn-lg" role="button">Preview Bid &raquo;</a></p>
		</div>
	</div>
	
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Client Information</h2>
				<hr>
					<form role="form">
						<div class="form-group">
							<label>Client Name:</label>
							<input class="form-control" placeholder="Enter name">
						</div>
						
						<div class="form-group">
							<label>Project Name:</label>
							<input class="form-control" placeholder="Enter project name">
						</div>
						
						<div class="form-group">
							<label>Phone:</label>
							<input type="tel" class="form-control" placeholder="Enter phone number">
						</div>
						
						<div class="form-group">
							<label>Address:</label>
							<input class="form-control" placeholder="Enter address">
						</div>
						
						<div class="form-group">
							<label>Date:</label>
							<input type="date" class="form-control">
						</div>	
						
						<div class="form-group">
							<label>Budget:</label>
							<input class="form-control" placeholder="Enter your budget">
						</div>	
				
					</form>
				
			</div>
			
			<div class="col-md-4">
				<h2>Web Design</h2>
				<hr>
				<h3>Site Design</h3>
					<div class="radio">
						<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
						<p>Update or modify existing site - 3hrs</p>
						</label>
					</div>
					
					<div class="radio">
						<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						<p>Has template for customization - 6hrs</p>
						</label>
					</div>
					
					<div class="radio">
						<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						<p>Needs template for customization - 10hrs</p>
						</label>
					</div>
					
					<div class="radio">
						<label>
						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
						<p>Build custom site - 20hrs</p>
						</label>
					</div>
					
				
					<h3>Interactivity</h3>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Image Gallery - 4hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Animated Navigation Menu - 3hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Interactive Advertisement - 6hrs</p>
						</label>
					</div>
					
					
					
					<h3>Add Ons</h3>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Responsive Design - 12hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>JQuery Mobile Site - 40hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Social Media Integration - 6hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Logo Design - 4hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Site Branding - 6hrs</p>
						</label>
					</div>
					
					
					
			</div>
			
			
			
			<div class="col-md-4">
				<h2>Web Development</h2>
				<hr>
				<h3>Under the Hood</h3>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Content Management System 6hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Admin Login - 5hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Contact Form - 3hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Email auto responders - 2hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Custom blog site - 6hrs</p>
						</label>
					</div>
					
				
					<h3>Search Engine Optimization</h3>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Meta tag keyword optimization  - 5 hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>Link Building - 6hrs</p>
						</label>
					</div>
					
					<div class="checkbox">
						<label>
						<input type="checkbox" value="">
						<p>User Traffic Reports - 1hr</p>
						</label>
					</div>
					
					
					<h3>Summary</h3>
						<div class="form-group">
							<label>(for developer use only)</label>
							<textarea class="form-control" rows="3"></textarea>
						</div>
					

					
					
			</div><!-- end of col -->
		</div><!-- end of row -->
	</div><!-- end of container -->
	
	
	
	
	
	
	<!-- footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
	
		<div class="container">
			<p class="navbar-text pull-right">Application Developed by CJ Sheets</p>
		</div>
	
	</div>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>