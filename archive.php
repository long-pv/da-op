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
$term_current = get_queried_object();
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
			<h2 class="white"><?php echo $term_current->name; ?></h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $term_current->name; ?></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Blog starts -->
<section class="blog blog-left">
	<div class="container">
		<div class="row">
			<!-- Blog List -->
			<div class="col-md-8 pad-left-30 pull-right">
				<div class="blog-main">
					<?php if (have_posts()): ?>
						<div class="row">
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
							?>
						</div>
						<?php
					endif;
					?>
				</div>

				<div class="d-flex justify-content-center" style="z-index: 9999;position:relative;">
					<div class="col-md-12 tax-product_cat">
						<div class="pagination-content text-center">
							<ul class="pagination">
								<?php
								echo paginate_links(array(
									'base' => get_pagenum_link(1) . '%_%',
									'format' => 'page/%#%/',
									'current' => max(1, get_query_var('paged')),
									'total' => $wp_query->max_num_pages,
									'type' => 'list',
									'prev_text' => '&laquo;',
									'next_text' => '&raquo;',
								));
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- sidebar starts -->
			<div class="col-md-4 pad-right-30">
				<div class="blog-sidebar">
					<!-- Authors Start -->
					<?php
					$author = get_field('author_news', 'option');
					$bg_image = !empty($author['background_image']) ? esc_url($author['background_image']) : '';
					$avatar = !empty($author['avatar']) ? esc_url($author['avatar']) : '';
					$label = !empty($author['label']) ? esc_html($author['label']) : '';
					$name = !empty($author['name']) ? esc_html($author['name']) : '';
					$position = !empty($author['position']) ? esc_html($author['position']) : '';
					$link_facebook = !empty($author['link_facebook']) ? esc_html($author['link_facebook']) : '';
					$link_email = !empty($author['link_email']) ? esc_html($author['link_email']) : '';
					$link_twitter = !empty($author['link_twitter']) ? esc_html($author['link_twitter']) : '';
					?>

					<div class="author-news mar-bottom-30" <?php if ($bg_image): ?>style="background-image: url('<?php echo $bg_image; ?>'); background-size: cover;" <?php endif; ?>>
						<div class="author-news-content">
							<?php if ($avatar): ?>
								<div class="author-thumb">
									<img src="<?php echo $avatar; ?>" alt="<?php echo esc_attr($name ?: 'Author'); ?>">
								</div>
							<?php endif; ?>
							<div class="author-content">
								<?php if ($label): ?>
									<span><?php echo $label; ?></span>
								<?php endif; ?>
								<?php if ($name): ?>
									<h4 class="title"><a href="#" class="white"><?php echo $name; ?></a></h4>
								<?php endif; ?>
								<?php if ($position): ?>
									<p class="mar-0"><?php echo $position; ?></p>
								<?php endif; ?>
								<div class="header-social">
									<ul>
										<!-- Facebook -->
										<li>
											<a href="<?php echo $link_facebook; ?>"
												onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
												class="social_share_post_facebook">
												<i class="fab fa-facebook-f"> </i>
											</a>
										</li>
										<!-- Gmail -->
										<li>
											<a href="mailto:<?php echo $link_email; ?>">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<!-- Twitter -->
										<li>
											<a href="<?php echo $link_twitter; ?>"
												onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
												class="social_share_post_twitter">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="overlay"></div>
					</div>
					<!-- Authors End -->

					<!-- Categories -->
					<div class="sidebar-item">
						<h3>All Categories</h3>
						<ul class="sidebar-category">
							<?php
							$categories = get_categories([
								'orderby' => 'name',
								'order' => 'ASC',
								'hide_empty' => false,
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
									$popular_post = get_field('popular_post', 'option'); // Banner từ theme option
									$popular_posts = $popular_post['popular_post'];
									?>

									<?php if ($popular_post['banner']): ?>
										<div class="sidebar-image mar-bottom-20 mar-top-20">
											<a href="#"><img src="<?php echo $popular_post['banner']; ?>" alt=""></a>
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
									$recent_post = get_field('recent_post', 'option');
									$recent_query = new WP_Query([
										'posts_per_page' => 3,
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
									]);
									?>

									<?php if ($recent_post['banner']): ?>
										<div class="sidebar-image mar-bottom-20 mar-top-20">
											<a href="#"><img src="<?php echo $recent_post['banner']; ?>" alt=""></a>
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

					<!-- Recent Videos Start -->
					<div class="sidebar-item">
						<h3>Recent Videos</h3>
						<div class="sidebar-videos about-slider">
							<?php
							$recent_video = get_field('recent_video', 'option');
							$recent_videos = $recent_video['recent_video'];

							if ($recent_videos && is_array($recent_videos)):
								foreach ($recent_videos as $post):
									setup_postdata($post);
									?>
									<article class="post mar-bottom-20">
										<div class="content-image">
											<a href="<?php the_permalink(); ?>">
												<?php if (has_post_thumbnail()): ?>
													<?php the_post_thumbnail('medium'); ?>
												<?php endif; ?>
											</a>
										</div>
										<div class="content-list mar-top-15">
											<div class="date mar-bottom-5"><?php echo get_the_date(); ?></div>
											<h4 class="mar-0">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h4>
										</div>
									</article>
									<?php
								endforeach;
								wp_reset_postdata();
							endif;
							?>
						</div>
					</div>
					<!-- Recent Videos End-->

					<!-- Tags -->
					<div class="sidebar-item">
						<h3>Tags</h3>
						<?php
						$tags = get_tags([
							'orderby' => 'name',
							'order' => 'ASC',
							'hide_empty' => false,
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
