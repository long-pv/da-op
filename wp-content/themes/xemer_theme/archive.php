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

<!-- Breadcrumb -->
<?php
$banner_cat = get_field('banner_image', get_queried_object()) ?? '';
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
							endwhile;
							the_posts_navigation();
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

					<!-- Recent & Popular -->
					<div class="sidebar-item">
						<div class="sidebar-tabs">
							<div class="sidebar-navtab text-center">
								<ul class="nav nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#popular"><i class="fa fa-check-circle"></i> Most
											Popular </a>
									</li>
									<li>
										<a data-toggle="tab" href="#recent"><i class="fa fa-check-circle"></i>
											Recent Post</a>
									</li>
								</ul>
							</div>

							<div class="tab-content">
								<!-- Most Popular -->
								<div id="popular" class="tab-pane fade in active">
									<?php
									$popular_banner = get_field('popular_banner', 'option'); // Banner từ theme option
									$popular_posts = get_field('popular_post', 'option');   // Danh sách post object
									?>

									<?php if ($popular_banner): ?>
										<div class="sidebar-image mar-bottom-20 mar-top-20">
											<a href="#"><img src="<?php echo $popular_banner; ?>" alt=""></a>
										</div>
									<?php endif; ?>

									<?php if ($popular_posts):
										$i = 1;
										foreach ($popular_posts as $post):
											setup_postdata($post); ?>
											<article class="post mar-bottom-20">
												<div class="content display-flex">
													<div class="blog-no"><?php echo sprintf('%02d', $i++); ?></div>
													<div class="content-list pad-left-15">
														<div class="date mar-bottom-5"><?php echo get_the_date(); ?></div>
														<h4 class="mar-0">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h4>
													</div>
												</div>
											</article>
										<?php endforeach;
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>

								<!-- Recent Post -->
								<div id="recent" class="tab-pane fade">
									<?php
									$recent_banner = get_field('recent_banner', 'option');
									$recent_query = new WP_Query([
										'posts_per_page' => 3,
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
									]);
									?>

									<?php if ($recent_banner): ?>
										<div class="sidebar-image mar-bottom-20 mar-top-20">
											<a href="#"><img src="<?php echo $recent_banner; ?>" alt=""></a>
										</div>
									<?php endif; ?>

									<?php if ($recent_query->have_posts()):
										$i = 1;
										while ($recent_query->have_posts()):
											$recent_query->the_post(); ?>
											<article class="post mar-bottom-20">
												<div class="content display-flex">
													<div class="blog-no"><?php echo sprintf('%02d', $i++); ?></div>
													<div class="content-list pad-left-15">
														<div class="date mar-bottom-5"><?php echo get_the_date(); ?></div>
														<h4 class="mar-0">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h4>
													</div>
												</div>
											</article>
										<?php endwhile;
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
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

<?php
// get_sidebar();
get_footer();
