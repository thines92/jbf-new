<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-Type" content="text/html;charset=UTF-8">
		<meta charset="utf=8">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | Jared Barrows Foundation</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/main.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

	</head>
	<body>
		<!-- ==== HEADER ==== -->
		<header class="site-header">
			
			<!-- NAVBAR -->
			<div class="navbar-wrapper">
				
				<div class="navbar navbar-inverse navbar-fixed-top">
					
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="/" class="navbar-brand"><img src="assets/images/logo.png" alt="Jared Barrows Foundation"></a>
						</div><!--navbar-->

						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="<?php if ($first_part=="") echo "active" ?>"><a href="/jbf-new/">Home</a></li>
								<li class="<?php if ($first_part=="about.php") echo "active" ?>"><a href="/jbf-new/about.php">About Us</a></li>
								<li class="<?php if ($first_part=="donate.php") echo "active" ?>"><a href="/jbf-new/donate.php">Donate</a></li>
								<li class="<?php if ($first_part=="contact.php") echo "active" ?>"><a href="/jbf-new/contact.php">Contact Us</a></li>
							</ul><!-- nav -->
						</div><!-- navbar -->
					</div><!-- container-->

				</div><!-- navbar wrapper -->

			</div><!-- navbar-wrapper -->

		</header><!-- site-header -->