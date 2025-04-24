<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Breadcrumb -->
	<?php
	$banner_cat = get_field('banner_image', get_queried_object()) ?? '';
	// var_dump($banner_cat);
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
				<h2 class="white">Blog Grid</h2>
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="overlay"></div>
	</section>
	<!-- BreadCrumb Ends -->

	<!-- blog starts -->
	<section class="blog blog-left">
		<div class="container">
			<div class="row">
				<!-- Blog List -->
				<div class="col-md-8 pad-left-30 pull-right">
					<div class="blog-main">
						<div class="row">
							<?php if (have_posts()): ?>

								<!-- <header class="page-header">
								<?php
								// the_archive_title('<h1 class="page-title">', '</h1>');
								// the_archive_description('<div class="archive-description">', '</div>');
								?>
							</header>.page-header -->

								<?php
								/* Start the Loop */
								while (have_posts()):
									the_post(); ?>
									<div class="col-md-6 col-sm-6 col-xs-12 mar-bottom-30">
										<div class="grid">
											<div class="grid-item">
												<div class="grid-image">
													<?php
													if (has_post_thumbnail()):
														the_post_thumbnail();
													endif;
													?>
												</div>

												<div class="gridblog-content">
													<div class="date mar-bottom-15">
														<i class="flaticon flaticon-calendar"></i>
														<?php echo get_the_date(); ?>
													</div>
													<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<p><?php echo get_the_excerpt(); ?></p>
													<a href="<?php the_permalink(); ?>" class="biz-btn biz-btn1">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<?php
									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									// get_template_part('template-parts/content', get_post_type());
									// Post Item
							
								endwhile;

								the_posts_navigation();

							else:

								get_template_part('template-parts/content', 'none');

							endif;
							?>

							<div class="col-xs-12">
								<div class="blog-button text-center">
									<a href="blog-single.html" class="biz-btn biz-btn1">Load More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- sidebar starts -->
				<div class="col-md-4 pad-right-30">
					<div class="blog-sidebar">
						<!-- Categories -->
						<div class="sidebar-item">
							<h3>All Categories</h3>
							<ul class="sidebar-category">
								<!-- <li>
									<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">All</a>
								</li> -->

								<?php
								$categories = get_categories([
									'orderby' => 'name',
									'order' => 'ASC',
								]);

								foreach ($categories as $category):
									$is_active = is_category($category->term_id);
									?>
									<li <?php if ($is_active)
										echo 'class="active"'; ?>>
										<a href="<?php echo get_category_link($category->term_id); ?>">
											<?php echo esc_html($category->name); ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<!-- Tags -->
						<div class="sidebar-item">
							<h3>Tags</h3>
							<?php
							$tags = get_tags([
								'orderby' => 'name',
								'order' => 'ASC',
								'hide_empty' => false, // Chỉ lấy tag có bài viết
							]);

							if ($tags): ?>
								<ul class="sidebar-tags">
									<?php foreach ($tags as $tag): ?>
										<li>
											<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
												<?php echo esc_html($tag->name); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog Ends -->

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
