<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xemer_theme
 */

get_header();
?>

<section class="blogmain">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12 pad-right-30">
				<?php
				while (have_posts()):
					the_post();

					get_template_part('template-parts/content-blog', get_post_type());

				endwhile; // End of the loop.
				?>
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

<?php
// get_sidebar();
get_footer();
