<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Web Services Calculator</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<!-- Bootstrap -->
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/styles.css' rel='stylesheet'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
	<script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
	<![endif]-->
</head>
<body>
	<div class='navbar navbar-inverse navbar-fixed-top'>
		<div class='container'>
			<div class='navbar-header'>
			
				<!-- button displays when on mobile devices -->
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				
				<a href='#' class='navbar-brand'>Web Services Calculator</a>
			</div>
			<div class='collapse navbar-collapse'>
				
				<ul class='nav navbar-nav navbar-right'>
					<li class='active'><a href='#'>Home</a></li>
					<li><a href='#'>Preview</a></li>
					<li><a href='#'>Print</a></li>
					<li><a href='#reset' data-toggle='modal'>Reset</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<!-- main jumbotron for a primary marketing message or call to action -->
	<div class='jumbotron'>
		<div class='container'>
			<h1 class='h1'>Welcome.</h1>
			<p>
				Use the application below to receive a bid for web services. Select from the list of options and view the corresponding hours of development and associate costs. Your total will be dynamically calculated and compared to your budget in real-time.
			</p>
		</div>
	</div><!-- end of jumbotron -->
	
	
	
	<!-- form for client information -->
	<form role='form' id='form'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>			
					<h2 class='h2' >Client Information</h2>
					<hr>
					<p class='error'>* required field</p>
							<div class='form-group'>
								<label>Client Name<span class="error"> *</span></label>
								
								<input class='form-control input-lg' placeholder='Enter name' required>
								
							</div>
							
							<div class='form-group'>
								<label>Project Name<span class="error"> *</span></label>
								<input class='form-control input-lg' placeholder='Enter project name' required>
							</div>
							
							<div class='form-group'>
								<label>Phone</label>
								<input type='tel' class='form-control input-lg' placeholder='Enter phone number'>
							</div>
							
							<div class='form-group'>
								<label>Address</label>
								<input class='form-control input-lg' placeholder='Enter address'>
							</div>
							
							<div class='form-group'>
								<label>Date<span class="error"> *</span></label>
								<input type='date' class='form-control input-lg' required>
							</div>	
							
							<div class='form-group'>
								<label>Budget<span class="error"> *</span></label>
								<input class='form-control input-lg' name='budget' placeholder='Enter your budget' maxlength="4" required>
							</div>	
							
							
					
				</div><!-- end of col -->	
			</div><!-- end of row -->
		</div><!-- end of container -->
	
				
		<!-- frontend options -->		
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
					<h2 class='h2'>Design & Front-end</h2>
					<hr>
					<h3 class='h3'>Basics</h3>
						<div class='radio'>
							<label>Update or modify existing site - 3 hrs</label>
							<input type='radio' name='options' id='optionsRadios1' value='3'>
							
						</div>
						
						<div class='radio'>
							<label>Has template for customization - 6 hrs</label>
							<input type='radio' name='options' id='optionsRadios2' value='6'>
						</div>
						
						<div class='radio'>
							<label>Needs template for customization - 10 hrs</label>
							<input type='radio' name='options' id='optionsRadios3' value='10'>
						</div>
						
						<div class='radio'>
							<label>Build Custom Site - 20 hrs</label>
							<input type='radio' name='options' id='optionsRadios4' value='20'>
						</div>
						
					
						<h3 class='h3'>Interactive Elements</h3>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Image Gallery' data-content='Include a scrolling image gallery to your site. Features smooth animations, user controls, and optional captions' data-placement='top' data-trigger='hover'>Image Gallery - 4 hrs</label>
							<input type='checkbox' name='options' value='4'>
						</div>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Animated Navigation Menu' data-content='Fluid animations for navigation menus and dropdown submenus' data-placement='right' data-trigger='hover'>Animated Navigation Menu - 3 hrs</label>
							<input type='checkbox' name='options' value='3'>
						</div>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Advertisement Slider' data-content='Display your latest promotions or advertisements in a scrolling carousel' data-placement='bottom' data-trigger='hover'>Advertisement Slider - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>
						
						
						
						<h3 class='h3'>Add Ons</h3>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Responsive Design' data-content='A web design approach aimed at building a site that provides optimal viewing experience across a wide range of devices' data-placement='top' data-trigger='hover'>Responsive Design - 12 hrs</label>
							<input type='checkbox' name='options' value='12'>
						</div>
						
						<div class='checkbox'>
							<label>jQuery Mobile Site - 40 hrs</label>
							<input type='checkbox' name='options' value='40'>
						</div>
						
						<div class='checkbox'>
							<label>Social Media Integration - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Logo Design' data-content='A custom designed logo will add a professional look to your website' data-placement='right' data-trigger='hover'>Logo Design - 4 hrs</label>
							<input type='checkbox' name='options' value='4'>
						</div>
						
						<div class='checkbox'>
							<label data-toggle='popover' title='Custom Branding' data-content='Branding will add a personalized brand identity that your customers will recognize' data-placement='right' data-trigger='hover'>Custom Branding - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>		
				</div>
				
				
				<!-- backend development options -->
				<div class='col-md-6'>
					<h2 class='h2'>Back-end Development</h2>
					<hr>
					<h3 class='h3'>Under the Hood</h3>
						
						<div class='checkbox'>
							<label>Content Management System - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>
						
						<div class='checkbox'>
							<label>Admin Login - 5 hrs</label>
							<input type='checkbox' name='options' value='5'>
						</div>
						
						<div class='checkbox'>
							<label>Contact Form - 3 hrs</label>
							<input type='checkbox' name='options' value='3'>
						</div>
						
						<div class='checkbox'>
							<label>Email Auto Responders - 2 hrs</label>
							<input type='checkbox' name='options' value='2'>
						</div>
						
						<div class='checkbox'>
							<label>Custom Blog - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>
						
					
						<h3 class='h3'>Search Engine Optimization</h3>
						
						<div class='checkbox'>
							<label>Meta Tag Keyword Optimization  - 5 hrs</label>
							<input type='checkbox' name='options' value='5'>
						</div>
						
						<div class='checkbox'>
							<label>Link Building - 6 hrs</label>
							<input type='checkbox' name='options' value='6'>
						</div>
						
						<div class='checkbox'>
							<label>User Traffic Reports - 1 hr</label>
							<input type='checkbox' name='options' value='1'>
						</div>
						
						<h2 class='h2'>Total</h2>
						<hr>
						<p class='totals'>Budget: $<span class='budget'>0</span></p>
						<p class='totals'>Total Hours: <span class='total-hours'>0</span></p>
						<p class='totals'>Total Cost: $<span class='total-cost'>0.00</span></p>
				
				</div><!-- end of col -->
			</div><!-- end of row -->
		</div><!-- end of container -->
		
		
		<!-- summary of work or contractual terms -->
		<div class='container'>
			<h2 class='h2'>Agreement</h2>
			<hr>
				<div class='form-group'>
					<label>(for developer use only)</label>
					<textarea class='form-control' rows='6'></textarea>
				</div>
		</div><!-- end of container -->
		
		<!-- modal for form reset -->
		<div class='modal fade' id='reset'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						<h4 class='modal-title'>Reset Form</h4>
					</div>
						<div class='modal-body'>
						<p>Are you sure you want to reset this form?</p>
					</div>
						<div class='modal-footer'>
						<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						<button type='button' class='btn btn-primary' id='reset2'>Reset</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	</form>
	

	<!-- footer -->
	<div class='navbar navbar-default navbar-fixed-bottom'>
		<div class='container'>
			<p class='navbar-text pull-right'>Application Developed by CJ Sheets</p>
		</div>	
	</div>
	
	
	<div class='container'>
		<button type='button' class='btn btn-default'>
			<span class='glyphicon glyphicon-ok-sign'></span> Preview Bid
	  	</button>
				
		<button type='button' class='btn btn-primary'>
			<span class='glyphicon glyphicon-print'></span> Print Bid
	  	</button>
	</div>
	
	

		
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src='https://code.jquery.com/jquery.js'></script>
	<!-- include all compiled plugins (below), or include individual files as needed -->
	<script src='js/bootstrap.min.js'></script>
	<!-- include external js -->
	<script src='js/bidcalculator.js'></script>	
	<script src='js/formreset.js'></script>
	
</body>
</html>