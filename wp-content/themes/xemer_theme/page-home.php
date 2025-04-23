<?php

/**
 * Template name: Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();
?>

<!-- banner starts -->
<section class="banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider1.jpg')"></div>
                        <div class="swiper-content">
                            <h1>Make you Free to <span>travel</span> with us</h1>
                            <p class="mar-bottom-20">Foresee the pain and trouble that are bound to ensue and equal fail in their duty through weakness. </p>
                            <a href="" class="biz-btn">Explore More</a>
                            <a href="" class="biz-btn mar-left-10">Contact Us</a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider7.jpg')"></div>
                        <div class="swiper-content">
                            <h1><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
                            <p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London, Foresee the pain and trouble</p>
                            <a href="" class="biz-btn">Find More</a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider3.jpg')"></div>
                        <div class="swiper-content">
                            <h1>Your <span>Adventure</span> Wonderful Travel Calls Fast</h1>
                            <p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London to ensue and equal fail in their duty</p>
                            <a href="" class="biz-btn">View More</a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>
<!-- banner ends -->

<!-- form starts -->
<section class="banner-form">
    <div class="container">
        <div class="row display-flex">
            <div class="col-md-7 col-sm-12">
                <div class="why-us-about">
                    <div class="why-about-inner">
                        <h3 class="mar-bottom-5 themecolor">About NepaYatri</h3>
                        <h2 class="bold">We're truely dedicated to make your travel experience as much as simple and fun as possible</h2>
                        <p class="mar-0">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.<br> Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor, accumsan at consequat et, tempus sit ame</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="form-content">
                    <div class="tab-content">
                        <div id="travel" class="tab-pane in active">
                            <div class="row filter-box filter-box1">
                                <h3 class="form-title text-center">Find a Places</h3>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Your Destination</label>
                                        <div class="input-box">
                                            <i class="flaticon-placeholder"></i>
                                            <select class="niceSelect">
                                                <option value="1">Where are you going?</option>
                                                <option value="2">Argentina</option>
                                                <option value="3">Belgium</option>
                                                <option value="4">Canada</option>
                                                <option value="5">Denmark</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Check In</label>
                                        <div class="input-box">
                                            <i class="flaticon-calendar"></i>
                                            <input id="date-range0" type="text" placeholder="yyyy-mm-dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <div class="input-box">
                                            <i class="flaticon-calendar"></i>
                                            <input id="date-range1" type="text" placeholder="yyyy-mm-dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Adult</label>
                                        <div class="input-box">
                                            <i class="flaticon-add-user"></i>
                                            <select class="niceSelect">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Children</label>
                                        <div class="input-box">
                                            <i class="flaticon-add-user"></i>
                                            <select class="niceSelect">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                    <div class="form-group mar-top-5 mar-bottom-0 text-center">
                                        <a href="#" class="biz-btn biz-btn1"><i class="fa fa-search"></i> Find Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- form ends -->

<!-- why us starts -->
<section class="why-us pad-top-0">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Us</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="why-us-box">
            <div class="row">
                <div class="col-md-4">
                    <div class="why-us-item text-center">
                        <div class="why-us-icon">
                            <i class="flaticon-price"></i>
                        </div>
                        <div class="why-us-content">
                            <h3><a href="#">Competetive Pricing</a></h3>
                            <p class="mar-0">With 500+ suppliers and the purchasing power of 300 million members</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-us-item text-center">
                        <div class="why-us-icon">
                            <i class="flaticon-quality"></i>
                        </div>
                        <div class="why-us-content">
                            <h3><a href="#">Award Winning Service</a></h3>
                            <p class="mar-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-us-item text-center">
                        <div class="why-us-icon">
                            <i class="flaticon-global"></i>
                        </div>
                        <div class="why-us-content">
                            <h3><a href="#">Worldwide Coverage</a></h3>
                            <p class="mar-0">1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 citites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why us ends -->

<!-- top destination starts -->
<section class="top-desti pad-0">
    <div class="desti-inner">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination3.jpg" alt="desti">
                <div class="desti-title">
                    <div class="desti-title-inner">
                        <h2 class="white bold">Top Most <br>Destination</h2>
                        <p class="white mar-bottom-0">Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination3.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">New York</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination4.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">Armania</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination5.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">Manchester</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination7.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">kathmandu</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination8.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">Tokyo</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination9.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">Norwich</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="desti-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination10.jpg" alt="desti">
                    <div class="desti-content">
                        <div class="rating mar-bottom-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="white mar-bottom-0">Norwich</h3>
                    </div>
                    <div class="desti-overlay">
                        <a href="#" class="biz-btn-white">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top destination ends -->

<!-- Trending Starts -->
<section class="trending">
    <div class="container">
        <div class="section-title">
            <h2>Perfect Holiday Plan</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="trend-box">
            <div class="row mix tour">
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="trend-item">
                        <div class="ribbon ribbon-top-left"><span>25% OFF</span></div>
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending1.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p class="price">From <span>$350.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> United Kingdom</p>
                            <h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span class="mar-left-5">38 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending2.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p>Multi-day Tours</p>
                                <p class="price">From <span>$899.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> Germany</p>
                            <h4><a href="#">Bosphorus and Black Sea Cruise from Istanbul</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-half checked"></span>
                                <span class="fa fa-star-half checked"></span>
                            </div>
                            <span class="mar-left-5">48 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="trend-item">
                        <div class="ribbon ribbon-top-left"><span>Featured</span></div>
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending3.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p>Attraction Tickets</p>
                                <p class="price">From <span>$350.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> Denmark</p>
                            <h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span class="mar-left-5">32 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending4.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p class="price">From <span>$350.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> Japan</p>
                            <h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-half checked"></span>
                            </div>
                            <span class="mar-left-5">21 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="trend-item">
                        <div class="ribbon ribbon-top-left"><span>25% OFF</span></div>
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending5.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p>Multi-day Tours</p>
                                <p class="price">From <span>$899.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> Italy</p>
                            <h4><a href="#">Bosphorus and Black Sea Cruise from Istanbul</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-half checked"></span>
                                <span class="fa fa-star-half checked"></span>
                            </div>
                            <span class="mar-left-5">48 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="trend-item">
                        <div class="trend-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending6.jpg" alt="image">
                            <div class="trend-tags">
                                <a href="#"><i class="flaticon-like"></i></a>
                            </div>
                            <div class="trend-price">
                                <p>Attraction Tickets</p>
                                <p class="price">From <span>$350.00</span></p>
                            </div>
                        </div>
                        <div class="trend-content">
                            <p><i class="flaticon-location-pin"></i> Turkey</p>
                            <h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
                            <div class="rating mar-bottom-10">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span class="mar-left-5">18 Reviews</span>
                            <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending Ends -->

<!-- Call to action starts -->
<section class="call-to-action">
    <div class="container">
        <div class="action-content text-center mar-bottom-20">
            <h2 class="white mar-bottom-0">Find next place to visit</h2>
            <h3 class="white package-name">EXPLORE THE WORLD</h3>
        </div>
        <div class="video-button text-center">
            <div class="call-button1">
                <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                    <i class="fa fa-play"></i>
                </button>
            </div>
            <div class="video-figure"></div>
        </div>
    </div>
</section>
<!-- call to action Ends -->

<!-- cta_one starts -->
<section class="cta-one">
    <div class="container">
        <div class="cta-one_block display-flex space-between">
            <h2 class="white mar-bottom-0">Work with our amazing tour guides</h2>
            <a href="contact.html" class="biz-btn-white">Join our team</a>
        </div>
    </div>
</section>
<!-- cta_one ends -->

<!-- top deal starts -->
<section class="top-deals">
    <div class="container">
        <div class="section-title">
            <h2>Today's Top Deals</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="row top-deal-slider">
            <div class="col-md-4 slider-item">
                <div class="slider-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending7.jpg" alt="image">
                </div>
                <div class="slider-content">
                    <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
                    <h4><a href="#">Earning Asiana Club Miles</a></h4>
                    <p>With upto 30% Off, experience Europe your way!</p>
                    <div class="deal-price">
                        <p class="price">From <span>$250.00</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 slider-item">
                <div class="slider-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending8.jpg" alt="image">
                </div>
                <div class="slider-content">
                    <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
                    <h4><a href="#">Save big on hotels!</a></h4>
                    <p>With upto 30% Off, experience Europe your way!</p>
                    <div class="deal-price">
                        <p class="price">From <span>$250.00</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 slider-item">
                <div class="slider-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending9.jpg" alt="image">
                </div>
                <div class="slider-content">
                    <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
                    <h4><a href="#">Experience Europe Your Way</a></h4>
                    <p>With upto 30% Off, experience Europe your way!</p>
                    <div class="deal-price">
                        <p class="price">From <span>$250.00</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 slider-item">
                <div class="slider-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending10.jpg" alt="image">
                </div>
                <div class="slider-content">
                    <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Germany</h6>
                    <h4><a href="#">Earning Asiana Club Miles</a></h4>
                    <p>With upto 30% Off, experience Europe your way!</p>
                    <div class="deal-price">
                        <p class="price">From <span>$250.00</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- top deal ends -->

<!-- Discount action starts -->
<section class="discount-action pad-top-0">
    <div class="container">
        <div class="call-banner">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="call-banner-inner text-center">
                        <h2>SUMMER SPECIAL <br>UPTO 25% OFF</h2>
                        <h3 class="mar-bottom-20">SPEND THE BEST VACTION WITH US <br>The nights of Thailand</h3>
                        <a href="#" class="biz-btn biz-btn1">View Details</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12"></div>
            </div>
        </div>
    </div>
</section>
<!-- Discount action Ends -->

<!-- Top Featured -->
<section class="travelcounter">
    <div class="container">
        <div class="section-title">
            <h2 class="white">call our agents to book</h2>
            <p class="white">Travel award winning and top rated tour operator</p>
        </div>
        <div class="row service-gg">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="fas fa-hiking" aria-hidden="true"></i>
                    </div>
                    <div class="counter-content">
                        <h3 class="boats">80</h3>
                        <p class="mar-0">Pro Tour Guides</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                    </div>
                    <div class="counter-content">
                        <h3 class="location">19</h3>
                        <p class="mar-0">Tours are Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="fa fa-walking" aria-hidden="true"></i>
                    </div>
                    <div class="counter-content">
                        <h3 class="showroom">10</h3>
                        <p class="mar-0">Traveling Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="counter-content">
                        <h3 class="lisence">100</h3>
                        <p class="mar-0">Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Top Featured -->

<!-- Reviews starts-->
<section class="top-review bg-grey">
    <div class="container">
        <div class="section-title">
            <h2>Top Tour Reviews</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="row">
            <div class="review-slider">
                <div class="col-md-4 reviews-list align-center">
                    <div class="list-rv-detail">
                        <p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                    </div>
                    <div class="rev-author mar-top-40">
                        <div class="rev-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inbox3.jpg" alt="image"></div>
                        <div class="rev-content mar-left-20">
                            <h4 class="mar-bottom-5">John Doe</h4>
                            <p class="mar-bottom-5"> CEO/Mario Brand</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reviews-list align-center">
                    <div class="list-rv-detail">
                        <p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                    </div>
                    <div class="rev-author mar-top-40">
                        <div class="rev-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inbox1.jpg" alt="image"></div>
                        <div class="rev-content mar-left-20">
                            <h4 class="mar-bottom-5">Drank Bastis Doe</h4>
                            <p class="mar-bottom-5"> COO/Nell & wells Co.</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reviews-list align-center">
                    <div class="list-rv-detail">
                        <p class="mar-0"> <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                    </div>
                    <div class="rev-author mar-top-40">
                        <div class="rev-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inbox2.jpg" alt="image"></div>
                        <div class="rev-content mar-left-20">
                            <h4 class="mar-bottom-5">John Doe</h4>
                            <p class="mar-bottom-5"> CEO/Mario Brand</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reviews-list align-center">
                    <div class="list-rv-detail">
                        <p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                    </div>
                    <div class="rev-author mar-top-40">
                        <div class="rev-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inbox3.jpg" alt="image"></div>
                        <div class="rev-content mar-left-20">
                            <h4 class="mar-bottom-5">Wayne Nell</h4>
                            <p class="mar-bottom-5"> Director/Franchisis Com</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 reviews-list align-center">
                    <div class="list-rv-detail">
                        <p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                    </div>
                    <div class="rev-author mar-top-40">
                        <div class="rev-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inbox4.jpg" alt="image"></div>
                        <div class="rev-content mar-left-20">
                            <h4 class="mar-bottom-5">Yolksel Doke</h4>
                            <p class="mar-bottom-5"> CEO/Rupens Trator </p>
                            <ul class="list-inline">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Reviews -->

<!-- blog starts -->
<section class="blog">
    <div class="container">
        <div class="section-title">
            <h2>Recent Activities</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="blog-main">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 mar-bottom-25">
                            <div class="grid">
                                <div class="grid-item">
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
                                        <a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="grid">
                                <div class="grid-item grid-item1">
                                    <div class="grid-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending2.jpg" alt="blog">
                                    </div>
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 mar-bottom-25">
                            <div class="grid">
                                <div class="grid-item grid-item1">
                                    <div class="grid-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending6.jpg" alt="blog">
                                    </div>
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="grid">
                                <div class="grid-item">
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
                                        <a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 mar-bottom-25">
                            <div class="grid">
                                <div class="grid-item">
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3><a href="blog-single.html">Raising say express had chiefly detract</a></h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, velit nec luctus dictum Nam finibus.</p>
                                        <a href="blog-single.html" class="biz-btn biz-btn1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="grid">
                                <div class="grid-item grid-item1">
                                    <div class="grid-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trending7.jpg" alt="blog">
                                    </div>
                                    <div class="gridblog-content">
                                        <div class="date mar-bottom-10 white"><i class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                        <h3 class="mar-0"><a href="blog-single.html" class="white">Raising say express had chiefly detract</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->

<!-- partners starts -->
<section class="partners bg-grey">
    <div class="container">
        <div class="section-title">
            <h2>Our Awesome Parnters</h2>
            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="dest-partner">
            <div class="row partner-slider">
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl-3.png" alt="partners">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- partners ends -->

<!-- Instagram starts -->
<section class="insta-main pad-0">
    <div class="insta-inner">
        <div class="row display-flex">
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="insta-title">
                    <div class="insta-title-inner text-center">
                        <h4 class="white mar-bottom-5">Follow@instagram</h4>
                        <h3 class="white bold">Nepayatri</h3>
                        <a href="#" class="biz-btn-white">Follow Us</a>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-sm-9 col-xs-12">
                <div class="row attract-slider">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination3.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination4.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination5.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination6.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination7.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination8.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="insta-image">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination9.jpg" alt="insta"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram ends -->

<?php
get_footer();
