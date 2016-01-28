<?php include "assets/php/index.php" ; ?>

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
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="donate.html">Donate</a></li>
								<li class="active"><a href="contact.php">Contact Us</a></li>
							</ul><!-- nav -->
						</div><!-- navbar -->
					</div><!-- container-->
				</div><!-- navbar wrapper -->
			</div><!-- navbar-wrapper -->
		</header><!-- site-header -->

		<section class="feature-image">
			<h1 class="page-title">Contact Us</h1>
		</section>

		<section class="contact-form clearfix">
			<div class="col-md-6 col-md-offset-3 emailForm">
				<h1>My email form</h1>

				<?php echo $result; ?>

				<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>

				<form method="post">

					<div class="form-group">
						<label for="name">Your Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name"
						value="<?php echo $_POST['name']; ?>" />
					</div>

					<div class="form-group">
						<label for="email">Your Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Your Email"
						value="<?php echo $_POST['email']; ?>" />
					</div>

					<div class="form-group">
						<label for="comment">Your Message:</label>
						<textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
					</div>

					<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />

				</form>
			</div>
		</section>


		<!-- ===== FOOTER =====-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<a href="/"><img src="assets/images/logo.png" alt="Jared Barrows Foundation"></a>
					</div>
					<div class="col-sm-6">
						<nav>
							<ul class="list-unstyled list-inline">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="donate.html">Donate</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul><!-- ul -->
						</nav><!-- nav -->
					</div><!-- col -->
					<div class="col-sm-3">
						<p class="pull-right">&copy; 2016 Tyler Hines</p>
					</div>
				</div>
			</div><!-- container -->
		</footer>
	<!-- BOOTSTRAP CORE JAVASCRIPT
	Placed at the end of the document so the pages load faster! -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/global.js"></script>


	</body>
</html>