<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();

    $setting_header = get_field('setting_header', 'option');
    $header_top = isset($setting_header['header_top']) ? $setting_header['header_top'] : '';
    $social_links = isset($setting_header['social_links']) ? $setting_header['social_links'] : '';
	?>


	<!-- header starts -->
	<header class="main_header_area">
		<div class="header-content">
			<div class="container">
				<div class="links links-left">
                    <?php if (!empty($header_top) && is_array($header_top)): ?>
                        <ul>
                            <?php foreach ($header_top as $item): ?>
                                <?php
                                $icon = !empty($item['icon_class']) ? $item['icon_class'] : '';
                                $text = !empty($item['text']) ? $item['text'] : '';
                                $link = !empty($item['link']) ? $item['link'] : '#';
                                ?>
                                <?php if ($text): ?>
                                    <li>
                                        <a href="<?php echo esc_url($link); ?>">
                                            <?php if ($icon): ?>
                                                <i class="<?php echo esc_attr($icon); ?>"></i>
                                            <?php endif; ?>
                                            <?php echo esc_html($text); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

				</div>
				<div class="links links-right pull-right">
					<ul>
						<li>
                            <?php if (!empty($social_links) && is_array($social_links)): ?>
                                <ul class="social-links">
                                    <?php foreach ($social_links as $item): ?>
                                        <?php
                                        $icon = !empty($item['icon_class']) ? $item['icon_class'] : '';
                                        $link = !empty($item['link']) ? $item['link'] : '#';
                                        ?>
                                        <?php if ($icon): ?>
                                            <li>
                                                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Bar -->
		<div class="header_menu affix-top">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-flex">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand" href="index.html">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-black.png" alt="image">
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" id="responsive-menu">
								<li class="dropdown submenu active">
									<a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li class="submenu dropdown">
											<a href="index.html">Home Style <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="index.html">Home Slider</a></li>
												<li><a href="index-1.html">Home Banner</a></li>
												<li><a href="index-2.html">Home Video</a></li>
											</ul>
										</li>
										<li><a href="index-3.html">Home Style 1</a></li>
										<li><a href="index-4.html">Home Style 2</a></li>
										<li><a href="index-5.html">Home Style 3</a></li>
										<li class="submenu dropdown">
											<a href="home-search.html">Home Search <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="home-search.html">search Banner</a></li>
												<li><a href="home-search1.html">Search Slider</a></li>
												<li><a href="home-search2.html">Search Video</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="index-flights.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index-flights.html">Flight Home</a></li>
										<li><a href="flightlist.html">Flight Grid</a></li>
										<li><a href="flightlist-1.html">Flight List</a></li>
										<li><a href="flight-single.html">Flight Detail</a></li>
										<li><a href="flight-booking.html">Booking</a></li>
										<li><a href="flight-confirm.html">Thank You</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="index-hotel.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index-hotel.html">Hotel Home</a></li>
										<li class="submenu dropdown">
											<a href="hotellist-1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Lists<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="hotellist-1.html">Hotel List 1</a></li>
												<li><a href="hotellist-2.html">Hotel List 2</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="hotelsingle-1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Detail<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="hotelsingle-1.html">Hotel Single 1</a></li>
												<li><a href="hotelsingle-2.html">Hotel Single 2</a></li>
											</ul>
										</li>
										<li><a href="hotel-booking.html">Hotel Booking</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="index-cars.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index-cars.html">Cars Home</a></li>
										<li><a href="car-grid-view.html">Cars Grid</a></li>
										<li><a href="car-list-view.html">Cars List</a></li>
										<li><a href="car-detail.html">Cars Detail</a></li>
										<li><a href="car-booking.html">Cars Booking</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="index-cruise.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cruise <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index-cruise.html">Cruise Home</a></li>
										<li><a href="cruise-grid-view.html">Cruise Grid</a></li>
										<li><a href="cruise-list-view.html">Cruise List</a></li>
										<li><a href="cruise-detail.html">Cruise Detail</a></li>
										<li><a href="cruise-booking.html">Cruise Booking</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="tourlist-1.html">Tour List 1</a></li>
												<li><a href="tourlist-2.html">Tour List 2</a></li>
												<li><a href="tourlist-3.html">Tour List 3</a></li>
												<li><a href="toursinge-1.html">Tour Single 1</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="service.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="service.html">Service</a></li>
												<li><a href="service-detail.html">Service Detail</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="about.html">About Us</a></li>
												<li><a href="about1.html">About Us 1</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="events.html">Events One</a></li>
												<li><a href="events1.html">Events Two</a></li>
												<li><a href="events-detail.html">Events Detail</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="gallery.html">Gallery 1</a></li>
												<li><a href="gallery1.html">Gallery 2</a></li>
												<li><a href="gallery2.html">Gallery Masonry</a></li>
												<li><a href="gallery3.html">Gallery Lightbox</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="contact.html">Contact Us</a></li>
												<li><a href="contact1.html">Contact Us 1</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="404.html">Error Page 1</a></li>
												<li><a href="404-1.html">Error Page 1</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="comingsoon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comming Soon<i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="comingsoon.html">Coming Soon 1</a></li>
												<li><a href="comingsoon-1.html">Coming Soon 2</a></li>
											</ul>
										</li>
										<li><a href="hotel-booking.html">Booking</a></li>
										<li><a href="confirmation.html">Confirmation</a></li>
										<li><a href="testimonial.html">Testimonials</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="terms.html">Terms</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="blog-home.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="blog-home.html">Blog Homepage</a></li>
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-full.html">Blog Fullwidth</a></li>
										<li><a href="blog-left.html">Blog Left</a></li>
										<li><a href="blog-list.html">Blog Right</a></li>
										<li><a href="blog-masonry.html">Blog Masonry</a></li>
										<li class="submenu dropdown">
											<a href="blog-single.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog Single <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="blog-single.html">Blog Single</a></li>
												<li><a href="single-full.html">Blog Single Full</a></li>
												<li><a href="single-left.html">Blog Single Left</a></li>
												<li><a href="blog-single.html">Blog Single Right</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="dashboard-my-profile.html">User Profile</a></li>
										<li><a href="dashboard-list.html">User Wishlist</a></li>
										<li><a href="dashboard-messages.html">User Messages</a></li>
										<li><a href="dashboard-history.html">Booking History</a></li>
										<li><a href="dashboard-add-new.html">Add New</a></li>
										<li><a href="dashboard-hotel-list.html">Hotel List</a></li>
										<li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="shop.html">Shop Home</a></li>
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="shop-detail.html">Shop Single</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Account</a></li>
										<li><a href="forgot-password.html">Forgot Password</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#search1" class="mt_search"><i class="fa fa-search"></i></a>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<div id="slicknav-mobile"></div>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
		</div>

		<!-- Navigation Bar Ends -->
	</header>
	<!-- header ends -->