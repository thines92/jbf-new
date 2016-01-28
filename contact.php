<?php include "assets/php/index.php"; ?>
<?php include "templates/header.php"; ?>

		<section class="feature-image" class="parallax-window" data-parallax="scroll" data-image-src="assets/images/forest-road.jpg">
			<h1 class="page-title">Contact Us</h1>
		</section>

		<section class="contact-form clearfix">
			<div class="col-md-6 col-md-offset-3 emailForm">

				<?php echo $result; ?>

				<p class="lead">Please get in touch and we will get back to you as soon as possible!</p>

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


		<?php include "templates/footer.php"; ?>