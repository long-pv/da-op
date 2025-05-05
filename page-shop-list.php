<?php

/**
 * Template name: Shop list
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
$image_banner = get_field('image_banner',$page_id);
$form_contact = get_field('form_contact',$page_id);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
    'post_type' => 'product',
    'posts_per_page' => 9,
    'paged' => $paged,
    'meta_query' => [],
    'tax_query' => [
        [
            'taxonomy' => 'product_type',
            'field' => 'slug',
            'terms' => 'simple',
        ],
    ],
];

// Tìm theo tên sản phẩm
if (!empty($_GET['key'])) {
    $args['s'] = sanitize_text_field($_GET['key']);
}

// Lọc theo category
if (!empty($_GET['category'])) {
    $args['tax_query'][] = [
        'taxonomy' => 'product_cat',
        'field' => 'slug',
        'terms' => sanitize_text_field($_GET['category']),
    ];
}

// Lọc theo khoảng giá
$min_price = isset($_GET['min_price']) ? floatval($_GET['min_price']) : 0;
$max_price = isset($_GET['max_price']) ? floatval($_GET['max_price']) : 0;
if ($min_price || $max_price) {
    $args['meta_query'][] = [
        'key' => '_price',
        'value' => [$min_price, $max_price],
        'compare' => 'BETWEEN',
        'type' => 'NUMERIC'
    ];
}

// Sắp xếp theo giá
if (!empty($_GET['sort_by'])) {
    $sort = $_GET['sort_by'];
    if ($sort === 'price_asc') {
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'ASC';
        $args['meta_key'] = '_price';
    } elseif ($sort === 'price_desc') {
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';
        $args['meta_key'] = '_price';
    }
}

$query = new WP_Query($args);

?>
<style>
    section.breadcrumb-outer:before{
        background: url(<?php echo $image_banner ?>) no-repeat;
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
                        <div class="col-md-12">
                            <div class="shop_sort_by">
                                <div class="title">Sort by</div>
                                <select name="sort_by" id="sort_by">
                                    <option value="">Default</option>
                                    <option value="price_asc" <?php selected($_GET['sort_by'] ?? '', 'price_asc'); ?>>Price: Low to High</option>
                                    <option value="price_desc" <?php selected($_GET['sort_by'] ?? '', 'price_desc'); ?>>Price: High to Low</option>
                                </select>
                            </div>


                        </div>
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
                                            echo wp_get_attachment_image( $image_id, 'medium' ); ?>
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
                            <form method="get" class="product-filter-form" action="<?php the_permalink(); ?>">
                                <div class="shop-sidebar-box">
                                    <h3 class="sidebar-title-text">Search name</h3>
                                    <input type="text" name="key" placeholder="Search name..."
                                           value="<?php echo esc_attr($_GET['key'] ?? ''); ?>"/>
                                </div>

                                <div class="shop-sidebar-box">
                                    <h3 class="sidebar-title-text">Lọc theo danh mục</h3>
                                    <select name="category">
                                        <option value="">All Categories</option>
                                        <?php
                                        $terms = get_terms('product_cat', ['hide_empty' => false]);
                                        $current_category = $_GET['category'] ?? '';
                                        foreach ($terms as $term) {
                                            $selected = selected($current_category, $term->slug, false);
                                            echo "<option value='" . esc_attr($term->slug) . "' $selected>" . esc_html($term->name) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="shop-sidebar-price">
                                    <h3 class="sidebar-title-text">Khoảng giá</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <input style="margin-bottom: 20px" type="number" name="min_price"
                                                   placeholder="Min Price"
                                                   value="<?php echo esc_attr($_GET['min_price'] ?? ''); ?>"/>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="number" name="max_price" placeholder="Max Price"
                                                   value="<?php echo esc_attr($_GET['max_price'] ?? ''); ?>"/>
                                        </div>
                                    </div>
                                </div>

                                <button class="biz-btn submit-search" type="submit">Filter</button>
                            </form>
                        </div>
                        <?php if (!empty($form_contact)) : ?>
                            <div class="shop-sidebar-ad">
                                <div class="ad-content">
                                    <?php if (!empty($form_contact['title_small'])) : ?>
                                        <p><?php echo esc_html($form_contact['title_small']); ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($form_contact['title'])) : ?>
                                        <h3><?php echo esc_html($form_contact['title']); ?></h3>
                                    <?php endif; ?>

                                    <?php if (!empty($form_contact['link']['url']) && !empty($form_contact['link']['title'])) : ?>
                                        <a class="biz-btn" href="<?php echo esc_url($form_contact['link']['url']); ?>" <?php echo !empty($form_contact['link']['target']) ? 'target="' . esc_attr($form_contact['link']['target']) . '"' : ''; ?>>
                                            <?php echo esc_html($form_contact['link']['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop Ends -->

<?php
get_footer();
