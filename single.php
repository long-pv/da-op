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

<section class="breadcrumb-outer text-center">
	<div class="container">
		<div class="breadcrumb-content">
			<h2 class="white">
				<?php echo get_the_title(); ?>
			</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php echo get_the_title(); ?>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>

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
				<!--  -->
				<!-- Phân trang -->
				<div class="blog-next mar-bottom-30">
					<?php
					$prev_post = get_previous_post();
					$next_post = get_next_post();
					?>

					<?php if ($prev_post): ?>
						<a href="<?php echo get_permalink($prev_post->ID); ?>" class="pull-left">
							<div class="prev">
								<i class="fa fa-arrow-left white"></i>
								<p class="white">Previous Post</p>
								<p class="white"><?php echo esc_html(get_the_title($prev_post)); ?></p>
							</div>
						</a>
					<?php endif; ?>

					<?php if ($next_post): ?>
						<a href="<?php echo get_permalink($next_post->ID); ?>" class="pull-right">
							<div class="next">
								<i class="fa fa-arrow-right white"></i>
								<p class="white">Next Post</p>
								<p class="white"><?php echo esc_html(get_the_title($next_post)); ?></p>
							</div>
						</a>
					<?php endif; ?>
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
