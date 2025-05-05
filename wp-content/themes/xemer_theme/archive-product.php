<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$term = get_queried_object();

$args = [
    'post_type'      => 'product',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'tax_query'      => [
        // Lọc theo danh mục hiện tại
        [
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $term->term_id,
        ],
        // Lọc chỉ lấy sản phẩm đơn
        [
            'taxonomy' => 'product_type',
            'field'    => 'slug',
            'terms'    => 'simple',
        ],
    ],
];

$query = new WP_Query($args);
$term = get_queried_object(); // Lấy object của danh mục hiện tại
$thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true); // Lấy ID ảnh
$image_url = wp_get_attachment_url($thumbnail_id); // Lấy URL ảnh
?>
    <style>
        section.breadcrumb-outer:before{
            background: url(<?php echo $image_url ?>) no-repeat;
        }
    </style>

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white"><?php the_title() ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url()?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->


    <!-- shop starts -->
    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right">
                    <div class="row">
                        <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                            global $product; ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="shop-item mar-bottom-30">
                                    <div class="shop-image">
                                        <?php if ($product->is_on_sale()): ?>
                                            <div class="ribbon ribbon-top-left">
                                                <span><?php echo round(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100); ?>% OFF</span>
                                            </div>
                                        <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $image_id = $product->get_image_id();
                                            echo wp_get_attachment_image( $image_id, 'medium' );
                                            ?>
                                        </a>
                                    </div>
                                    <div class="shop-content">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="shop-price">
                                            <?php echo $product->get_price_html(); ?>
                                        </div>
                                        <a class="biz-btn-black mar-top-20"
                                           href="<?php echo esc_url($product->get_permalink()); ?>"><?php echo esc_html('View product'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                            <div class="col-md-12">
                                <h4 class="text-center m-2">No products found.</h4>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($query->max_num_pages > 1) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-content text-center">
                                    <ul class="pagination">
                                        <?php
                                        echo paginate_links(array(
                                            'base' => get_pagenum_link(1) . '%_%',
                                            'format' => 'page/%#%/',
                                            'current' => max(1, get_query_var('paged')),
                                            'total' => $query->max_num_pages,
                                            'type' => 'list',
                                            'prev_text' => '&laquo;',
                                            'next_text' => '&raquo;',
                                        ));
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-sidebar">
                        <div class="shop-sidebar-box">
                            <div class="sidebar-title">
                                <h3 class="mar-bottom-30">Featured Products</h3>
                            </div>

                            <?php
                            $args = array(
                                'post_type'      => 'product',
                                'posts_per_page' => 4,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'product_type',
                                        'field'    => 'slug',
                                        'terms'    => 'simple',
                                    ),
                                ),
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) :
                                while ($loop->have_posts()) : $loop->the_post();
                                    global $product;
                                    ?>
                                    <div class="recent-item clearfix display-flex">
                                        <div class="recent-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                $image_id = $product->get_image_id();
                                                echo wp_get_attachment_image( $image_id, 'medium' );
                                                ?>
                                            </a>
                                        </div>
                                        <div class="recent-content pad-left-15">
                                            <h5 class="text-capitalize">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h5>
                                            <div class="post-detail">
                                                <div class="shop-price">
                                                    <?php if ($product->is_on_sale()) : ?>
                                                        <del><span><?php echo wc_price($product->get_regular_price()); ?></span></del>
                                                        <ins><span><?php echo wc_price($product->get_sale_price()); ?></span></ins>
                                                    <?php else : ?>
                                                        <ins><span><?php echo wc_price($product->get_price()); ?></span></ins>
                                                    <?php endif; ?>
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
                        <div class="shop-sidebar-box">
                            <div class="sidebar-title">
                                <h3 class="mar-bottom-30">Categories</h3>
                            </div>
                            <div class="shop-sidebar-content">
                                <ul>
                                    <?php
                                    $current_cat_id = is_product_category() ? get_queried_object_id() : 0;

                                    $args = array(
                                        'taxonomy'     => 'product_cat',
                                        'parent'       => 0,
                                        'orderby'      => 'name',
                                        'order'        => 'ASC',
                                        'hide_empty'   => false,
                                    );

                                    $product_categories = get_terms($args);

                                    foreach ($product_categories as $cat) {
                                        $cat_link = get_term_link($cat);
                                        $is_active = ($cat->term_id == $current_cat_id) ? ' class="active"' : '';

                                        echo '<li' . $is_active . '><a href="' . esc_url($cat_link) . '">' . esc_html($cat->name) . '</a>';

                                        // Hiển thị danh mục con nếu có
                                        $sub_args = array(
                                            'taxonomy'   => 'product_cat',
                                            'parent'     => $cat->term_id,
                                            'hide_empty' => false,
                                        );
                                        $sub_cats = get_terms($sub_args);
                                        if (!empty($sub_cats)) {
                                            echo '<ul>';
                                            foreach ($sub_cats as $sub) {
                                                $sub_link = get_term_link($sub);
                                                $is_sub_active = ($sub->term_id == $current_cat_id) ? ' class="active"' : '';
                                                echo '<li' . $is_sub_active . '><a href="' . esc_url($sub_link) . '">' . esc_html($sub->name) . '</a></li>';
                                            }
                                            echo '</ul>';
                                        }

                                        echo '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop Ends -->

<?php
get_footer();

