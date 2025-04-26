<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xemer_theme
 */

$product_id = get_the_ID();
$product = wc_get_product($product_id);
// set_post_views($product_id);
$terms = wp_get_post_terms($product_id, 'product_cat');
$categories = array_filter($terms, function ($term) {
	return $term->taxonomy === 'product_cat';
});

get_header();
?>

<?php
$product_setting = get_field('product_setting', 'option') ?? '';

?>

<!-- Banner -->
<?php
$banner_product = isset($product_setting['banner']) ? $product_setting['banner'] : '';
?>
<style>
	section.breadcrumb-outer:before {
		background-image: url(<?php echo $banner_product; ?>);
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
<!-- Detail Product -->
<section class="shop-main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 pad-right-30">
				<div class="shop-detail">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<?php
							$attachment_ids = $product->get_gallery_image_ids(); // Lấy danh sách ID ảnh gallery
							$image_id = get_post_thumbnail_id(get_the_ID()); // Lấy ảnh đại diện sản phẩm
							?>

							<div class="thumbnail-images">
								<?php if (!empty($attachment_ids)): ?>
									<div class="slider-store">
										<?php foreach ($attachment_ids as $attachment_id): ?>
											<div>
												<img src="<?php echo esc_url(wp_get_attachment_image_url($attachment_id, 'large')); ?>"
													alt="<?php echo esc_attr(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)); ?>"
													width="600" height="600" loading="lazy">
											</div>
										<?php endforeach; ?>
									</div>

									<div class="slider-thumbs">
										<?php foreach ($attachment_ids as $attachment_id): ?>
											<div>
												<img src="<?php echo esc_url(wp_get_attachment_image_url($attachment_id, 'thumbnail')); ?>"
													alt="<?php echo esc_attr(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)); ?>"
													width="100" height="100" loading="lazy">
											</div>
										<?php endforeach; ?>
									</div>
								<?php elseif (!empty($image_id)): ?>
									<div class="slider-store">
										<div>
											<img src="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'large')); ?>"
												alt="<?php the_title_attribute(); ?>" width="600" height="600"
												loading="lazy">
										</div>
									</div>

									<div class="slider-thumbs">
										<div>
											<img src="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'thumbnail')); ?>"
												alt="<?php the_title_attribute(); ?>" width="100" height="100"
												loading="lazy">
										</div>
									</div>
								<?php endif; ?>
							</div>

						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="single-content">
								<!-- Tên sp -->
								<h3><?php the_title(); ?></h3>
								<?php
								$regular_price = $product->get_regular_price();
								$sale_price = $product->get_sale_price();
								?>
								<!-- Giá sp -->
								<div class="shop-price mar-bottom-20">
									<del><span>$<?php echo $regular_price; ?></span></del>
									<ins><span>$<?php echo $sale_price; ?></span></ins>
								</div>
								<!-- Mô tả sp -->
								<div class="product-detail">
									<?php the_content(); ?>
								</div>
								<form class="cart mar-top-30" action="_self.html" method="post">
									<div class="quantity-buttons">
										<label class="screen-reader-text">Quantity</label>
										<input type="number" class="quantity-input" name="quantity" min="1" max="100"
											placeholder="No.">
									</div>
									<a href="#" class="biz-btn-black">Add to cart</a>
								</form>
								<?php
								$product_tags = get_the_terms(get_the_ID(), 'product_tag');
								?>

								<?php
								$product_tags = get_the_terms(get_the_ID(), 'product_tag');
								?>

								<?php if (!empty($product_tags) && !is_wp_error($product_tags)): ?>
									<div class="product-tags">
										<p>Tags:</p>
										<?php
										$tag_links = array();
										foreach ($product_tags as $tag) {
											$tag_links[] = '<a href="' . esc_url(get_term_link($tag)) . '">' . esc_html($tag->name) . '</a>';
										}
										echo implode(', ', $tag_links);
										?>
									</div>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
				<!--  -->
			</div>

			<div class="col-md-3 col-sm-12 col-xs-12 pad-left-30">
				<div class="shop-sidebar">
					<?php
					$recent_products = new WP_Query([
						'post_type' => 'product',
						'posts_per_page' => 3,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'DESC'
					]);
					?>

					<?php if ($recent_products->have_posts()): ?>
						<div class="shop-sidebar-box">
							<div class="sidebar-title">
								<h3 class="mar-bottom-30">Featured Products</h3>
							</div>

							<?php while ($recent_products->have_posts()):
								$recent_products->the_post();
								global $product; ?>
								<div class="recent-item clearfix display-flex">
									<div class="recent-image">
										<a href="<?php the_permalink(); ?>">
											<?php echo $product->get_image('thumbnail'); ?>
										</a>
									</div>
									<div class="recent-content pad-left-15">
										<h5 class="text-capitalize">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h5>
										<div class="post-detail">
											<div class="shop-price">
												<?php if ($product->is_on_sale()): ?>
													<del><span><?php echo wc_price($product->get_regular_price()); ?></span></del>
													<ins><span><?php echo wc_price($product->get_sale_price()); ?></span></ins>
												<?php else: ?>
													<ins><span><?php echo wc_price($product->get_price()); ?></span></ins>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata(); ?>
						</div>
					<?php endif; ?>

					<?php if (!empty($categories)): ?>
						<div class="shop-sidebar-box">
							<div class="sidebar-title">
								<h3 class="mar-bottom-30">Categories</h3>
							</div>
							<div class="shop-sidebar-content">
								<ul>
									<?php foreach ($categories as $category): ?>
										<li>
											<a href="<?php echo esc_url(get_term_link($category)); ?>">
												<?php echo esc_html($category->name); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>

					<?php
					$title_service = isset($product_setting['title_service']) ? $product_setting['title_service'] : '';
					$description_service = isset($product_setting['description_service']) ? $product_setting['description_service'] : '';
					$button_service = isset($product_setting['button_service']) ? $product_setting['button_service'] : '';
					?>

					<?php if ($title_service || $description_service || $button_service): ?>
						<div class="shop-sidebar-ad">
							<div class="ad-content">
								<?php if ($description_service): ?>
									<p><?php echo esc_html($description_service); ?></p>
								<?php endif; ?>

								<?php if ($title_service): ?>
									<h3><?php echo esc_html($title_service); ?></h3>
								<?php endif; ?>

								<?php if ($button_service): ?>
									<a href="<?php echo esc_url($button_service['url'] ?? '#'); ?>" class="biz-btn" <?php echo !empty($button_service['target']) ? 'target="' . esc_attr($button_service['target']) . '"' : ''; ?>>
										<?php echo esc_html($button_service['title'] ?? 'Contact Us'); ?>
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

<!-- Related Product -->
<?php
if (!empty($categories)) {
	$term_ids = wp_list_pluck($categories, 'slug');
} else {
	$term_ids = [];
}

$args = array(
	'post_type' => 'product',
	'posts_per_page' => 10,
	'post__not_in' => array($product_id),
	'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $term_ids,
		),
	),
);

$query = new WP_Query($args);

if ($query->have_posts()): ?>
	<section class="related-products pad-bottom-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Related <span>Products</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien
							et, auctor vulputate quam donec vitae consectetur turpis</p>
					</div>
				</div>
			</div>
			<div class="row partner-slider">
				<?php while ($query->have_posts()):
					$query->the_post(); ?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="shop-item">
							<div class="shop-image">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('medium', array('alt' => esc_attr(get_the_title()))); ?>
									<?php else: ?>
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image.jpg'); ?>"
											alt="<?php esc_attr_e('No image', 'your-text-domain'); ?>">
									<?php endif; ?>
								</a>
								<?php
								global $product;
								if ($product && $product->is_on_sale()):
									$regular_price = (float) $product->get_regular_price();
									$sale_price = (float) $product->get_sale_price();
									if ($regular_price > 0 && $sale_price > 0) {
										$discount = round((($regular_price - $sale_price) / $regular_price) * 100);
										?>
										<div class="ribbon ribbon-top-left"><span><?php echo esc_html($discount); ?>% OFF</span></div>
									<?php }
								endif;
								?>
							</div>
							<div class="shop-content">
								<h4 class="text-capitalize">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
								<div class="shop-price">
									<?php if ($product && $product->get_regular_price()): ?>
										<del><span><?php echo wc_price($product->get_regular_price()); ?></span></del>
									<?php endif; ?>
									<?php if ($product && $product->get_sale_price()): ?>
										<ins><span><?php echo wc_price($product->get_sale_price()); ?></span></ins>
									<?php endif; ?>
								</div>
								<a class="biz-btn-black mar-top-20" href="<?php echo esc_url($product->add_to_cart_url()); ?>">
									<?php esc_html_e('Add to cart', 'your-text-domain'); ?>
								</a>
							</div>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php
// get_sidebar();
get_footer();
