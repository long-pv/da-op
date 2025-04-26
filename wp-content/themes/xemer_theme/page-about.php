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

<!-- Banner -->
<?php
$banner_cat = get_the_post_thumbnail(get_the_ID(), 'full', ['alt' => get_the_title()]);
?>
<style>
    section.breadcrumb-outer:before {
        background-image: url(<?php echo $banner_cat; ?>);
        background-repeat: no-repeat;

    }
</style>

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white"><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us 1</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<!-- About Us -->
<?php
$about_us = get_field('about_us') ?? [];
?>

<section class="about-us">
    <div class="container">
        <div class="section-title">
            <?php if (!empty($about_us['title'])): ?>
                <h2><?php echo esc_html($about_us['title']); ?></h2>
            <?php endif; ?>
        </div>
        <?php if (!empty($about_us['content'])): ?>
            <div class="about-desc editor">
                <?php echo $about_us['content']; ?>
            </div>
        <?php endif; ?>
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
                        <?php if (!empty($why_about_us['subtitle'])): ?>
                            <h4><?php echo esc_html($why_about_us['subtitle']); ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($why_about_us['title'])): ?>
                            <h2><?php echo esc_html($why_about_us['title']); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($why_about_us['des'])): ?>
                            <div class="mar-bottom-25 editor">
                                <?php echo wp_kses_post($why_about_us['des']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($why_about_us['title_button'])): ?>
                            <a href="<?php echo esc_url($why_about_us['link_button']); ?>"
                                class="biz-btn biz-btn1"><?php echo esc_html($why_about_us['title_button']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php if (!empty($why_about_us['image_1'])): ?>
                                <div class="why-about-image">
                                    <img src="<?php echo esc_url($why_about_us['image_1']); ?>" alt="about">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php if (!empty($why_about_us['image_2'])): ?>
                                <div class="why-about-image">
                                    <img src="<?php echo esc_url($why_about_us['image_2']); ?>" alt="about">
                                </div>
                            <?php endif; ?>
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
$attraction_items = isset($attraction['attraction_item']) ? $attraction['attraction_item'] : [];
?>
<section class="attraction">
    <div class="container">
        <div class="section-title">
            <?php if (!empty($attraction['title'])): ?>
                <h2><?php echo esc_html($attraction['title']); ?> </h2>
            <?php endif; ?>

            <?php if (!empty($attraction['description'])): ?>
                <div class="editor">
                    <?php echo wp_kses_post($attraction['description']); ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($attraction_items) && is_array($attraction_items)): ?>
            <div class="why-us-box">
                <div class="row attract-slider">
                    <?php foreach ($attraction_items as $attraction_item): ?>
                        <div class="col-md-2">
                            <div class="attraction-inner text-center">
                                <?php if (!empty($attraction_item['attraction_link']) && !empty($attraction_item['attraction_icon'])): ?>
                                    <div class="attraction-icon">
                                        <a href="<?php echo esc_url($attraction_item['attraction_link']); ?>">
                                            <img src="<?php echo esc_url($attraction_item['attraction_icon']); ?>" alt="">
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($attraction_item['attraction_content']) && !empty($attraction_item['attraction_link'])): ?>
                                    <div class="attraction-content">
                                        <h5 class="mar-0">
                                            <a href="<?php echo esc_url($attraction_item['attraction_link']); ?>">
                                                <?php echo esc_html($attraction_item['attraction_content']); ?>
                                            </a>
                                        </h5>
                                    </div>
                                <?php endif; ?>
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
                <?php if (!empty($action['title'])): ?>
                    <h3 class="white package-name"><?php echo esc_html($action['title']); ?></h3>
                <?php endif; ?>

                <?php if (!empty($action['discount'])): ?>
                    <h2 class="discounted"><?php echo esc_html($action['discount']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($action['description'])): ?>
                    <h2 class="white"><?php echo esc_html($action['description']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($action['excerpt'])): ?>
                    <p class="mar-bottom-20"><?php echo esc_html($action['excerpt']); ?></p>
                <?php endif; ?>

                <?php if (!empty($action['link_button']) && !empty($action['title_button'])): ?>
                    <a href="<?php echo esc_url($action['link_button']); ?>" class="biz-btn">
                        <?php echo esc_html($action['title_button']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <?php if (!empty($action['video'])): ?>
            <div class="row display-flex">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-xs-12">
                    <div class="video-click">
                        <?php echo $action['video']; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Reviews -->
<?php
$reviews = get_field('reviews') ?? [];
$review_items = isset($reviews['review_item']) ? $reviews['review_item'] : [];
?>

<section class="customer-reviews">
    <div class="container">
        <?php if (!empty($reviews['title']) || !empty($reviews['description'])): ?>
            <div class="section-title">
                <?php if (!empty($reviews['title'])): ?>
                    <h2><?php echo esc_html($reviews['title']); ?></h2>
                <?php endif; ?>
                <?php if (!empty($reviews['description'])): ?>
                    <div class="editor">
                        <?php echo wp_kses_post($reviews['description']); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($review_items) && is_array($review_items)): ?>
            <div class="row about-slider">
                <?php foreach ($review_items as $review_item): ?>
                    <div class="col-md-4 review-item">
                        <div class="review-image">
                            <?php if (!empty($review_item['avatar'])): ?>
                                <img src="<?php echo esc_url($review_item['avatar']); ?>" alt="image">
                            <?php endif; ?>
                            <div class="review-quote">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="review-content mar-top-25">
                            <?php if (!empty($review_item['content'])): ?>
                                <div class="editor">
                                    <?php echo wp_kses_post($review_item['content']); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($review_item['name'])): ?>
                                <h3 class="mar-bottom-5"><?php echo esc_html($review_item['name']); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($review_item['position'])): ?>
                                <p class="mar-bottom-5"><?php echo esc_html($review_item['position']); ?></p>
                            <?php endif; ?>

                            <ul class="list-inline mar-0">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <li><i class="fa fa-star"></i></li>
                                <?php endfor; ?>
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
$travel_counter = get_field('travel_counter') ?? [];
$travel_counter_items = isset($travel_counter['travel_counter_item']) ? $travel_counter['travel_counter_item'] : [];
?>

<section class="travelcounter counter1">
    <div class="container">
        <?php if (!empty($travel_counter['title']) || !empty($travel_counter['description'])): ?>
            <div class="section-title">
                <?php if (!empty($travel_counter['title'])): ?>
                    <h2><?php echo esc_html($travel_counter['title']); ?></h2>
                <?php endif; ?>
                <?php if (!empty($travel_counter['description'])): ?>
                    <div class="editor">
                        <?php echo wp_kses_post($travel_counter['description']); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($travel_counter_items) && is_array($travel_counter_items)): ?>
            <div class="row service-gg">
                <?php foreach ($travel_counter_items as $travel_counter_item): ?>
                    <div class="col-md-3">
                        <div class="counter-item">
                            <?php if (!empty($travel_counter_item['travel_counter_icon'])): ?>
                                <div class="counter-icon">
                                    <img src="<?php echo esc_url($travel_counter_item['travel_counter_icon']); ?>" alt="">
                                </div>
                            <?php endif; ?>

                            <div class="counter-content">
                                <?php if (!empty($travel_counter_item['travel_counter_count'])): ?>
                                    <h3 class="boats"><?php echo esc_html($travel_counter_item['travel_counter_count']); ?></h3>
                                <?php endif; ?>

                                <?php if (!empty($travel_counter_item['travel_counter_content'])): ?>
                                    <div class="mar-0">
                                        <?php echo esc_html($travel_counter_item['travel_counter_content']); ?>
                                    </div>
                                <?php endif; ?>
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
$tour_agent = get_field('tour_agent') ?? [];
$tour_agent_items = isset($tour_agent['tour_agent_item']) ? $tour_agent['tour_agent_item'] : [];
?>

<section class="tour-agent">
    <div class="container">
        <?php if (!empty($tour_agent['title']) || !empty($tour_agent['description'])): ?>
            <div class="section-title">
                <?php if (!empty($tour_agent['title'])): ?>
                    <h2><?php echo esc_html($tour_agent['title']); ?></h2>
                <?php endif; ?>
                <?php if (!empty($tour_agent['description'])): ?>
                    <div class="editor">
                        <?php echo wp_kses_post($tour_agent['description']); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($tour_agent_items) && is_array($tour_agent_items)): ?>
            <div class="agent-main">
                <div class="row">
                    <?php foreach ($tour_agent_items as $tour_agent_item): ?>
                        <div class="col-md-3">
                            <div class="agent-list">
                                <?php if (!empty($tour_agent_item['avatar'])): ?>
                                    <div class="agent-image">
                                        <img src="<?php echo esc_url($tour_agent_item['avatar']); ?>" alt="agent">
                                        <div class="agent-content">
                                            <?php if (!empty($tour_agent_item['name'])): ?>
                                                <h3 class="white mar-bottom-5"><?php echo esc_html($tour_agent_item['name']); ?></h3>
                                            <?php endif; ?>
                                            <?php if (!empty($tour_agent_item['position'])): ?>
                                                <p class="white mar-0"><?php echo esc_html($tour_agent_item['position']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

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
