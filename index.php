<?php include "assets/php/index.php"; ?>
<?php include "templates/header.php" ?>
		
		<!-- ===== HERO ===== -->
		<section id="hero" class="parallax-window" data-parallax="scroll" data-image-src="assets/images/sky-heart.jpg">

			<article class="container clearfix">
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">
						<p class="lead">Since 2008, we have been helping the Marshfield community in honor of Jared Barrow's memory.
						You can help too!</p>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="home-donate">
						
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHTwYJKoZIhvcNAQcEoIIHQDCCBzwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCuNRmpCU8zQu+uf1WrWf9H3Vy0QG5oYeNzJqa5vfYu5Gyf7GN05ysxWXkBfWIUr37P0cF8b+koGRQ3+CCJ9Ummp0d4+PcLwH4hShgRbr+6Nj9UbP0hB1a8q9d8kkugpWwSC6ENyR08AKIAlCltXAoumnofKx40Dh7nArVCbPXyOTELMAkGBSsOAwIaBQAwgcwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI1PlAu3x/oA2Agah9PVlXF1cmaitZoHmyglDfawh1axfZjGsAqw2ycLRh20BMgG3MmGCY5FNyHAAOZF1BtFDBR3FbAALuYZXtsxXvnsFy0HO0gf7mWeByUBF4OTzgM40BOpo77hxP6NL3+NqXk0UO4LNWzD6ujST8R3cgcdLKkpzUsXQEjETedNcIktaL4xfG9lsjUGF5js4V65cs3N5E+E5Fo6PK5l8vMtL2MPCEcSxLYVagggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xNjAxMjgxNDIxMDRaMCMGCSqGSIb3DQEJBDEWBBRSD7xMUczfAc0kxXRoNfMIymNbNzANBgkqhkiG9w0BAQEFAASBgE+lbnEjWmlzLsB/6fuYdd7h/PDv59V1AS8LTOp2MTYPNSRPfW0R6vUWD5TNa8zHOHlkxCi77uu4tAW5B43VJjoiVuI3mI+PJ7wYJrHnePYe27Xy5PhMP9XunICuSdL5PhKNlduLnfZFYi+7qWM7qBy1YCNcV0hbLvDwj9mqrWd2-----END PKCS7-----
							">
							<input type="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" class="btn btn-danger btn-lg" value="Donate now &raquo;" name="submit" alt="PayPal - The safer, easier way to pay online!">

						</form><!-- form -->
					</div>
					
				</div><!-- row -->

			</article><!-- container -->

		</section>


		<!-- ===== WHO-WE-ARE ===== -->
		<section id="who-we-are">
			
			<article class="container">
				<div class="row">
					
					<div class="section-header">
						<i class="fa fa-users fa-4x"></i>
						<h3>Who We Are</h3>
					</div><!-- section-header -->

					<div class="col-sm-6 col-sm-offset-3">
						<p>The Jared Barrows Foundation was founded in memory of Jared Barrows. The purpose of this charity is to give back to the town of Marshfield, Jared's hometown. Because of Jared's kindness, generosity and his love for the town of Marshfield, we have no doubt in our minds that he would have wanted to give back to the community in which he grew up. <a href="about.html">learn more &raquo;</a></p>
					</div><!-- end col -->

				</div><!-- row -->
			</article><!-- container -->

		</section>


		<!-- ===== WHAT-WE-DO ===== -->
		<section id="what-we-do">
			
			<article class="container">
				<div class="row">
								
					<div class="section-header">
						<h3>What We Do</h3>
					</div><!-- section-header -->

					<div class="col-sm-5 col-sm-offset-1">
						<div class="section-title">
							<i class="fa fa-wrench fa-3x"></i>
							<h4>Rebuild</h4>
						</div><!-- section-title -->

						<p>Our first major project was helping to rebuild the Marshfield basketball courts. We had this idea because the couts were extremely worn down from use and made it very difficult people to use them. With the help of our incredible donators, we were able to rebuild the courts into what they are today. <a href="#">learn more &raquo;</a></p>
					</div><!-- end-col -->

					<div class="col-sm-5">
						<div class="section-title">
							<i class="fa fa-graduation-cap fa-3x"></i>
							<h4>Education</h4>
						</div>

						<p>The Jared Barrows Foundation was created to help the people of Marshfield and the surrounding communities. In order to do this, we have continued our efforts to provide a scholarship every year to a senior that is on his way to college. We believe that education is the best way to help. <a href="#">learn more &raquo;</a></p>
					</div>



				</div><!-- row -->

			</article><!-- container -->

		</section>


		<!-- ===== What We've Done ====== -->
		<section id="done" class="done-image" class="parallax-window" data-parallax="scroll" data-image-src="assets/images/ocean-view.jpg">
			<article class="container">
				<div class="row">

				<div class="section-header">
					<i class="fa fa-history fa-4x"></i>
					<h3>What We've Done So Far</h3>
				</div>

				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									$10,000+ <span>raised</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									9 <span>scholarships</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									1 <span>big project</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->

					</div><!-- end col -->
					
				</div><!-- row -->
			</article><!-- container -->
		</section><!-- done -->


		<!-- ===== HELP ===== -->
		<section id="help">
			<article class="container">
				<div class="row">
					
					<div class="section-header">
						<i class="fa fa-user-plus fa-4x"></i>
						<h3>Want to Help?</h3>
					</div>

					<div class="col-sm-6 col-sm-offset-3">
						<p>The Jared Barrows Foundation is only able to exist because of the wonderful people who decide to help everyday. We are always working to try and help the community of Marshfield in honor of Jared's memory, and we would love your help! If you would like to know about any ongoing projects we have, you can <a href="contact.html">contact us</a>. Or if you would like, you can also <a href="donate.html">donate</a> to our cause. Every donation goes straight back to the community and is extremely appreciated!</p>
					</div>

				</div><!-- row -->
			</article><!-- container -->
		</section>

		<?php include "templates/footer.php" ?>