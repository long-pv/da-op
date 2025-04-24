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
$page_id = get_the_ID();
$section_banner = get_field('slide', $page_id);
$section_banner_list_starts = get_field('single_banner', $page_id);
$special_offer = get_field('special_offer', $page_id);
$featured_categories = get_field('featured_categories', $page_id);
$car_banner = get_field('car_banner', $page_id);
$slide_brand = get_field('slide_brand', $page_id);
$section_banner_list_starts2 = get_field('single_banner_2', $page_id);
$recent_activities = get_field('recent_activities', $page_id);
?>


<?php
$section_banner = get_field('slide', get_the_ID());
if (!empty($section_banner) && is_array($section_banner)) :
    ?>
    <!-- banner starts -->
    <section class="banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($section_banner as $slide):
                        $image_url = !empty($slide['image']) ? wp_get_attachment_image_url($slide['image'], 'full') : '';
                        $title = !empty($slide['title']) ? $slide['title'] : '';
                        $sub_title = !empty($slide['sub_title']) ? $slide['sub_title'] : '';
                        $button = !empty($slide['button']) && is_array($slide['button']) ? $slide['button'] : [];
                        ?>
                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <?php if ($image_url): ?>
                                    <div class="slide-image" style="background-image:url('<?php echo esc_url($image_url); ?>')"></div>
                                <?php endif; ?>
                                <div class="swiper-content">
                                    <?php if ($title): ?>
                                        <h1 class="mar-0"><?php echo esc_html($title); ?></h1>
                                    <?php endif; ?>
                                    <?php if ($sub_title): ?>
                                        <p class="mar-bottom-30"><?php echo esc_html($sub_title); ?></p>
                                    <?php endif; ?>
                                    <?php if (!empty($button['title']) && !empty($button['url'])): ?>
                                        <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ?? '_self'); ?>" class="biz-btn">
                                            <?php echo esc_html($button['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- banner ends -->
<?php endif; ?>


<?php
if (!empty($section_banner_list_starts) && is_array($section_banner_list_starts)) :
    ?>
    <!-- banner list starts -->
    <section class="banner_area pad-bottom-0">
        <div class="container">
            <div class="row">
                <?php foreach ($section_banner_list_starts as $item):
                    $image_url = !empty($item['image']) ? wp_get_attachment_image_url($item['image'], 'full') : '';
                    $lable = !empty($item['lable']) ? $item['lable'] : '';
                    $title = !empty($item['title']) ? $item['title'] : '';
                    $button = !empty($item['button']) && is_array($item['button']) ? $item['button'] : [];
                    ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <?php if ($image_url): ?>
                                    <a href="<?php echo esc_url($button['url'] ?? '#'); ?>">
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </a>
                                <?php endif; ?>
                                <div class="banner_text">
                                    <?php if ($lable): ?>
                                        <h4><?php echo esc_html($lable); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($title): ?>
                                        <h3><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($button['title']) && !empty($button['url'])): ?>
                                        <a href="<?php echo esc_url($button['url']); ?>" class="biz-btn-black" target="<?php echo esc_attr($button['target'] ?? '_self'); ?>">
                                            <?php echo esc_html($button['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- banner list Ends -->
<?php endif; ?>


    <!-- shop starts -->
    <section class="shop">
        <div class="container">
            <div class="section-title title-full">
                <h2 class="mar-0"><?php echo $special_offer ?></h2>
            </div>
            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10,
                'meta_query'     => array(
                    array(
                        'key'     => 'special_offer',
                        'value'   => '1',
                        'compare' => '='
                    )
                ),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_type',
                        'field'    => 'slug',
                        'terms'    => 'simple', // chỉ lấy sản phẩm simple
                    )
                )
            );

            $loop = new WP_Query($args);
            ?>
            <div class="special-offer mar-top-10">
                <div class="row hotel-slider-slick">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 mar-top-10 mar-bottom-10">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <div class="ribbon ribbon-top-left">
                                <span>
                                    <?php
                                    $regular_price = $product->get_regular_price();
                                    $sale_price = $product->get_sale_price();
                                    $percent = round((($regular_price - $sale_price) / $regular_price) * 100);
                                    echo $percent . '% OFF';
                                    ?>
                                </span>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo $product->get_image(); ?>
                                    </a>
                                </div>
                                <div class="shop-content">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <div class="shop-price">
                                        <?php if ( $product->is_on_sale() ) : ?>
                                            <del><span><?php echo wc_price($product->get_regular_price()); ?></span></del>
                                        <?php endif; ?>
                                        <ins><span><?php echo wc_price($product->get_price()); ?></span></ins>
                                    </div>
                                    <a class="biz-btn-black mar-top-20" href="<?php echo esc_url( $product->get_permalink()); ?>">
                                        <?php echo esc_html('View product' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>


        </div>
    </section>
    <!-- Shop Ends -->

    <!-- shop starts -->
    <section class="shop bg-grey">
        <div class="container">
            <div class="section-title title-full">
                <h2 class="mar-0"><?php echo $featured_categories ?></h2>
            </div>
            <?php
            $category_slug = 'accessories';

            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10,
                'tax_query'      => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_type',
                        'field'    => 'slug',
                        'terms'    => 'simple',
                    ),
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => $category_slug,
                    )
                )
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                ?>
                <div class="special-offer mar-top-10">
                    <div class="row partner-slider-slick">
                        <?php while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 mar-top-10 mar-bottom-10">
                                <div class="shop-item">
                                    <div class="shop-image">
                                        <?php if ($product->is_on_sale()) : ?>
                                            <div class="ribbon ribbon-top-left"><span><?php echo round(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100); ?>% OFF</span></div>
                                        <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo $product->get_image(); ?>
                                        </a>
                                    </div>
                                    <div class="shop-content">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="shop-price">
                                            <?php if ($product->is_on_sale()) : ?>
                                                <del><span><?php echo wc_price($product->get_regular_price()); ?></span></del>
                                            <?php endif; ?>
                                            <ins><span><?php echo wc_price($product->get_price()); ?></span></ins>
                                        </div>
                                        <a class="biz-btn-black mar-top-20" href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo esc_html('View product' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!-- Shop Ends -->

<?php if ( ! empty( $car_banner ) && is_array( $car_banner ) ) : ?>
    <!-- banner list starts -->
    <section class="banner_area">
        <div class="container">
            <div class="single_banner">
                <div class="row display-flex">
                    <div class="col-md-6 col-xs-12">
                        <?php if ( ! empty( $car_banner['button']['url'] ) && ! empty( $car_banner['image'] ) ) : ?>
                            <a href="<?php echo esc_url( $car_banner['button']['url'] ); ?>">
                                <img src="<?php echo esc_url( wp_get_attachment_url( $car_banner['image'] ) ); ?>" alt="image">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="banner_text1">
                            <?php if ( ! empty( $car_banner['label'] ) ) : ?>
                                <h4><?php echo esc_html( $car_banner['label'] ); ?></h4>
                            <?php endif; ?>
                            <?php if ( ! empty( $car_banner['title'] ) ) : ?>
                                <h2><?php echo esc_html( $car_banner['title'] ); ?></h2>
                            <?php endif; ?>
                            <?php if ( ! empty( $car_banner['description'] ) ) : ?>
                                <p><?php echo esc_html( $car_banner['description'] ); ?></p>
                            <?php endif; ?>
                            <?php if ( ! empty( $car_banner['button']['url'] ) && ! empty( $car_banner['button']['title'] ) ) : ?>
                                <a href="<?php echo esc_url( $car_banner['button']['url'] ); ?>" class="biz-btn-black">
                                    <?php echo esc_html( $car_banner['button']['title'] ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner list Ends -->
<?php endif; ?>



<?php if ( ! empty( $slide_brand ) && is_array( $slide_brand ) ) : ?>
    <!-- partners starts -->
    <section class="partners bg-grey">
        <div class="container">
            <div class="dest-partner">
                <div class="section-title">
                    <?php if ( ! empty( $slide_brand['title'] ) ) : ?>
                        <h2 class="mar-0"><?php echo esc_html( $slide_brand['title'] ); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="row partner-slider-slick">
                    <?php
                    if ( ! empty( $slide_brand['list_brand'] ) && is_array( $slide_brand['list_brand'] ) ) {
                        foreach ( $slide_brand['list_brand'] as $brand_id ) {
                            $brand_image_url = wp_get_attachment_url( $brand_id );
                            if ( $brand_image_url ) {
                                ?>
                                <div class="col-md-2">
                                    <img src="<?php echo esc_url( $brand_image_url ); ?>" alt="partners">
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- partners ends -->
<?php endif; ?>


<?php if ( ! empty( $recent_activities ) && is_array( $recent_activities ) ) : ?>
    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            <div class="section-title">
                <?php if ( ! empty( $recent_activities['title'] ) ) : ?>
                    <h2><?php echo esc_html( $recent_activities['title'] ); ?></h2>
                <?php endif; ?>
                <?php if ( ! empty( $recent_activities['description'] ) ) : ?>
                    <p><?php echo esc_html( $recent_activities['description'] ); ?></p>
                <?php endif; ?>
            </div>
            <div class="blog-main">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post_status'    => 'publish'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // hoặc 'full' nếu bạn muốn kích thước lớn hơn
                            $date = get_the_date('M d, Y'); // Ví dụ: Apr 23, 2025
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="grid">
                                    <div class="grid-item">
                                        <div class="grid-image">
                                            <?php if ($image_url): ?>
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i> <?php echo esc_html($date); ?></div>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="mar-0"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->
<?php endif; ?>

<?php
if (!empty($section_banner_list_starts2) && is_array($section_banner_list_starts2)) :
    ?>
    <!-- banner list starts -->
    <section class="banner_area pad-top-0">
        <div class="container">
            <div class="row">
                <?php foreach ($section_banner_list_starts2 as $item):
                    $image_url = !empty($item['image']) ? wp_get_attachment_image_url($item['image'], 'full') : '';
                    $lable = !empty($item['lable']) ? $item['lable'] : '';
                    $title = !empty($item['title']) ? $item['title'] : '';
                    $button = !empty($item['button']) && is_array($item['button']) ? $item['button'] : [];
                    ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <?php if ($image_url): ?>
                                    <a href="<?php echo esc_url($button['url'] ?? '#'); ?>">
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </a>
                                <?php endif; ?>
                                <div class="banner_text">
                                    <?php if ($lable): ?>
                                        <h4><?php echo esc_html($lable); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($title): ?>
                                        <h3><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($button['title']) && !empty($button['url'])): ?>
                                        <a href="<?php echo esc_url($button['url']); ?>" class="biz-btn-black" target="<?php echo esc_attr($button['target'] ?? '_self'); ?>">
                                            <?php echo esc_html($button['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- banner list Ends -->
<?php endif; ?>

<?php
get_footer();
