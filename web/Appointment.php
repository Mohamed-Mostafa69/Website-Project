<?//php include('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Lawyer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Law Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href='<?php echo $url = "index.php";?>'>Lawyers</a></h1>
			</div>
			
			<div class="hea-rgt">
				<a href='<?php echo $url = "Appointment.php";?>'>Get Appointment</a>
			</div>
			<div class="navigation">
				 <nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href='<?php echo $url = "index.php";?>'>Home</a></li>
						<li><a href='<?php echo $url = "Cases.php";?>'>Cases</a></li>
						<li><a href='<?php echo $url = "clients.php";?>'>Clients</a></li>
						<li><a href='<?php echo $url = "Login.php";?>'>Login</a></li>
						
						
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class="soc">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="rss"> </span></a></li>
						<li><a href="#"><span class="drbl"> </span></a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				
					<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	
	<!-- banner-starts -->
   <div class="contact">
		<div class="container">
			<div class="contact-top">
				<h2>Appointment</h2>
				<p id="bebo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla. Sed cursus ante dapibus diam. Sed nisi. Nulla. </p>
			</div>	
			
			 <div class="col-md-6 contact-bottom">
				 <form method="post" action="connection.php">
				 	<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="text"  name="name" placeholder="Name" >	
					<input type="text"  name="Phone_Number" placeholder="Number">				
					<input type="Email" name= "Email" placeholder="Email">
					<br>
					<input type="submit" value="Submit" name="save">
				</form>	
			</div>
				<div class="clearfix"></div>		
		</div>
	</div>
	<!-- footer-starts -->
	<div class="footer">
		<div class="container">
				<div class="col-md-4 contact-left">
				<h4>Address</h4>
					<div class="cont-tp">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
					</span></div>
					
					<address>
						  795 Folsom Ave, Suite 600<br>
						  San Francisco, CA 94107<br>
						  <abbr >Phone :</abbr> (123) 456-7890
						</address>
				</div>
				<div class="col-md-4 contact-left">
				<h4>Phone/Fax</h4>
					<div class="cont-tp">
						<span class="glyphicon glyphicon-phone" aria-hidden="true">
					</span></div>
					
					<p>Phone : +1234567890 </p>
					<p>Phone : +1234567890 </p>
					<p>Fax : +1234567890 </p>
				</div>
				
				<div class="clearfix"></div>
			
			
		</div>
	</div>
	<!-- footer-end -->
</body>
</html>