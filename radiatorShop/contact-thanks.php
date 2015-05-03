<?php 

session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>


<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Yoder's Radiator Repair</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
		</style>
		<link rel="stylesheet" href="css/bootstrap-flatly-theme.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.html">Yoder's Radiator Repair</a>
		</div>
		
		<div id="navbar" class="navbar-collapse collapse pull-right">
		  <ul class="nav navbar-nav">
			<li><a href="index.html">Home</a></li>
			  <li><a href="about.html">About</a></li>
			  <li><a href="services.html">Services</a></li>
			  <li  class="active"><a href="contact.html">Contact</a></li>
			  
			</li>
		  </ul>
		</div><!--/.navbar-collapse -->
	  
	  </div>
	</nav>


	<div class="container">
	  <!-- Example row of columns -->
	  <div class="row">

		<div class="col-md-8 col-md-offset-2">
		  <h2>Thanks for contacting us!</h2>
		  <p>We'll get back to you soon! <span id="operationalStatus">The local time is <span id="local_time" class="text-info"></span>, and we are currently <span id="open_or_closed"></span></span></p>
		</div>
		
		
		<div class="col-md-12"><br><!--spacing after paragraph--></div>
		<div class="col-md-4 col-md-offset-2">



		  <!-- ADDRESS AND CONTACT INFORMATION -->
		<div class="panel panel-default">
			<div class="panel-heading"><h3><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Office</h3></div>
			  <div class="panel-body">
				<address>
				  <strong>Yoder's Radiator Repair</strong>
					<br>10792 East U.S. Highway 50
					<br>Cannelburg, IN 47519
					<br><a href="http://maps.apple.com/?q=Yoder's Radiator Repair 10792 East U.S. Highway 50 Cannelburg, IN 47519" class="label label-info">Map it!</a>
				  </address>
				  <br><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a href="tel:8122954084"> (812)295-4084</a>
				  <br><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:yodersradiator@live.com"> YodersRadiator@live.com</a>
			  </div>
			</div>
			</div>

<div class="col-md-4">
			<!-- HOURS OF OPERATION -->
			<div class="panel panel-default">
			  <div class="panel-heading"><h3><span class="glyphicon glyphicon-time"> </span> Hours of Operation</h3></div>
			  <div class="panel-body">
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>Day</th>
					  <th>Time</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>Mon - Fri</td>
					  <td>8 AM - 5 PM (EST)</td>
					</tr>
					<tr>
					  <td>Sat - Sun</td>
					  <td>Closed</td>
					</tr>
				  </tbody>
				</table> 
			  </div>
			</div>

		
		
	  </div>


			
		

		
		
	  </div>

	  <hr>

	  <footer>
		<div class="col-md-3 pull-left">
		  <p>&copy; 2015 Yoder's Radiator Repair<br> <address><a href="http://maps.apple.com/?q=Yoder's Radiator Repair 10792 East U.S. Highway 50 Cannelburg, IN 47519"> 10792 E. US Hwy 50 <br> Cannelburg, IN - 47519</a></address> <br> <a href="tel:8122954084"> (812)295-4084</a> <br> <a href="mailto:yodersradiator@live.com"> YodersRadiator@live.com</a></p>
		</div>
	  </footer>
	</div> <!-- /container -->        
	<!-- Google reCAPTCHA script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

		<script src="js/vendor/bootstrap.min.js"></script>

		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
		
	</body>
</html>

<?php 
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>