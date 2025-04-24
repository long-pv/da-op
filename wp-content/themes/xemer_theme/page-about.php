<?php

/**
 * Template name: About Us
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

<!-- About Us -->
<?php
$about_us = get_field('about_us') ?? [];
?>

<section class="about-us">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $about_us['title']; ?></h2>
        </div>
        <div class="about-desc editor">
            <?php echo $about_us['content']; ?>
        </div>
    </div>
</section>

<!-- Why About Us -->
<?php
$why_about_us = get_field('why_about_us') ?? [];
?>

<section class="why-us pad-top-80 bg-grey">
    <div class="container">
        <div class="why-us-about">
            <div class="row display-flex">
                <div class="col-md-6 col-xs-12">
                    <div class="why-about-inner">
                        <h4><?php echo $why_about_us['subtitle']; ?></h4>
                        <h2><?php echo $why_about_us['title']; ?></h2>
                        <div class="mar-bottom-25 editor">
                            <?php echo $why_about_us['des']; ?>
                        </div>
                        <a href="<?php echo $why_about_us['link_button']; ?>"
                            class="biz-btn biz-btn1"><?php echo $why_about_us['title_button'] ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="why-about-image">
                                <img src="<?php echo $why_about_us['image_1']; ?>" alt="about">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="why-about-image">
                                <img src="<?php echo $why_about_us['image_2']; ?>" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Attraction -->
<?php
$attraction = get_field('attraction') ?? '';
$attraction_items = $attraction['attraction_item'];
?>

<section class="attraction">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $attraction['title']; ?> </h2>
            <div class="editor">
                <?php echo $attraction['description']; ?>
            </div>
        </div>

        <?php if ($attraction_items): ?>
            <div class="why-us-box">
                <div class="row attract-slider">
                    <?php foreach ($attraction_items as $attraction_item): ?>
                        <div class="col-md-2">
                            <div class="attraction-inner text-center">
                                <div class="attraction-icon">
                                    <a href="<?php echo $attraction_item['attraction_link']; ?>">
                                        <img src="<?php echo $attraction_item['attraction_icon']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="attraction-content">
                                    <h5 class="mar-0">
                                        <a href="<?php echo $attraction_item['attraction_link']; ?>">
                                            <?php echo $attraction_item['attraction_content']; ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Action -->
<?php
$action = get_field('action') ?? '';
?>

<section class="call-to-action action1 pad-bottom-0">
    <div class="container">
        <div class="section-title">
            <div class="action-content">
                <h3 class="white package-name"><?php echo $action['title']; ?></h3>
                <h2 class="discounted"><?php echo $action['discount']; ?></h2>
                <h2 class="white"><?php echo $action['description']; ?></h2>
                <p class="mar-bottom-20"><?php echo $action['excerpt']; ?> </p>
                <a href="<?php echo $action['link_button']; ?>" class="biz-btn"><?php echo $action['title_button']; ?>
                </a>
            </div>
        </div>
        <div class="row display-flex">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="video-click">
                    <?php echo $action['video']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews -->
<?php
$reviews = get_field('reviews') ?? '';
$review_items = $reviews['review_item'];
?>

<section class="customer-reviews">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $reviews['title']; ?></h2>
            <div class="editor">
                <?php echo $reviews['description']; ?>
            </div>
        </div>
        <?php if ($review_items): ?>
            <div class="row about-slider">
                <?php foreach ($review_items as $review_item): ?>
                    <div class="col-md-4 review-item">
                        <div class="review-image">
                            <img src="<?php echo $review_item['avatar']; ?>" alt="image">
                            <div class="review-quote">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="review-content mar-top-25">
                            <div class="editor">
                                <?php echo $review_item['content']; ?>
                            </div>
                            <h3 class="mar-bottom-5"> <?php echo $review_item['name']; ?></h3>
                            <p class="mar-bottom-5"> <?php echo $review_item['position']; ?></p>
                            <ul class="list-inline mar-0">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Top Featured -->
<?php
$travel_counter = get_field('travel_counter') ?? '';
$travel_counter_items = $travel_counter['travel_counter_item'];
?>

<section class="travelcounter counter1">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $travel_counter['title']; ?></h2>
            <div class="editor">
                <?php echo $travel_counter['description']; ?>
            </div>
        </div>
        <?php if ($travel_counter_items): ?>
            <div class="row service-gg">
                <?php foreach ($travel_counter_items as $travel_counter_item): ?>
                    <div class="col-md-3">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="<?php echo $travel_counter_item['travel_counter_icon']; ?>" alt="">
                            </div>
                            <div class="counter-content">
                                <h3 class="boats"> <?php echo $travel_counter_item['travel_counter_count']; ?></h3>
                                <div class="mar-0">
                                    <?php echo $travel_counter_item['travel_counter_content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
</section>

<!-- Tour Agents -->
<?php
$tour_agent = get_field('tour_agent') ?? '';
$tour_agent_items = $tour_agent['tour_agent_item'];
?>

<section class="tour-agent">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $tour_agent['title']; ?></h2>
            <div class="editor">
                <?php echo $tour_agent['description']; ?>
            </div>
        </div>
        <?php if ($tour_agent_items): ?>
            <div class="agent-main">
                <div class="row">
                    <?php foreach ($tour_agent_items as $tour_agent_item): ?>
                        <div class="col-md-3">
                            <div class="agent-list">
                                <div class="agent-image">
                                    <img src="<?php echo $tour_agent_item['avatar'] ?>" alt="agent">
                                    <div class="agent-content">
                                        <h3 class="white mar-bottom-5"><?php echo $tour_agent_item['name'] ?></h3>
                                        <p class="white mar-0"><?php echo $tour_agent_item['position'] ?></p>
                                    </div>
                                </div>
                                <div class="agent-social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
