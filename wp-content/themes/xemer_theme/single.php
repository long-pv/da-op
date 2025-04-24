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

<main id="primary" class="site-main">
	<section class="blogmain">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12 pad-right-30">

					<?php
					while (have_posts()):
						the_post();

						get_template_part('template-parts/content-blog', get_post_type());

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'xemer_theme') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'xemer_theme') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()):
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
