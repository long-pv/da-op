<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

?>

<!-- footer starts -->
<footer>
	<div class="footer-upper pad-bottom-50">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="footer-about">
						<div class="footer-about-in mar-bottom-30">
							<h3 class="white">Need Nepayatri Help?</h3>
							<div class="footer-phone">
								<div class="cont-icon"><i class="flaticon-call"></i></div>
								<div class="cont-content mar-left-20">
									<p class="mar-0">Got Questions? Call us 24/7!</p>
									<p class="bold mar-0"><span>Call Us:</span> (888) 1234 56789</p>
								</div>
							</div>
						</div>
						<h3 class="white">Contact Info</h3>
						<p>PO Box: +47-252-254-2542<br>
							Location: Collins Stree, Vicotria 80, Australia</p>
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="footer-links">
						<h3 class="white">Company</h3>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Statement</a></li>
							<li><a href="#">Feedbacks</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="footer-links">
						<h3 class="white">Support</h3>
						<ul>
							<li><a href="#">Account</a></li>
							<li><a href="#">Legal</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Affiliate Program</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="footer-subscribe">
						<h3 class="white">Mailing List</h3>
						<p class="white">Sign up for our mailing list to get latest updates and offers</p>
						<form>
							<input type="email" placeholder="Your Email">
							<a href="#" class="biz-btn mar-top-15">Subscribe</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-payment pad-top-30 pad-bottom-30 bg-white">
		<div class="container">
			<div class="pay-main display-flex space-between">
				<div class="footer-logo pull-left">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-black.png" alt="image"></a>
				</div>
				<div class="footer-payment-nav pull-right">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/mastercard.png" alt="image"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/paypal.png" alt="image"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/skrill.png" alt="image"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/visa.png" alt="image"></li>
						<li>
							<select>
								<option>English (United States)</option>
								<option>English (United States)</option>
								<option>English (United States)</option>
								<option>English (United States)</option>
								<option>English (United States)</option>
							</select>
						</li>
						<li>
							<select>
								<option>$ USD</option>
								<option>$ USD</option>
								<option>$ USD</option>
								<option>$ USD</option>
								<option>$ USD</option>
							</select>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="copyright-text pull-left">
				<p class="mar-0">2020 Nepayatri. All rights reserved.</p>
			</div>
			<div class="footer-nav pull-right">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- footer ends -->

<?php wp_footer(); ?>

</body>

</html>