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
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
