<?php

/**
 * Template name: Terms & Condition
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
?>

<!-- Banner Start -->
<?php
$banner_terms = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<style>
    section.breadcrumb-outer:before {
        background-image: url(<?php echo $banner_terms; ?>);
        background-repeat: no-repeat;

    }
</style>

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white"><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- Banner End -->

<!-- Content Start -->
<section class="terms">
    <div class="container">
        <div class="content">
            <?php
            $term_content = get_field('term_content') ?? [];
            ?>
            <?php if (isset($term_content) && is_array($term_content)): ?>
                <?php foreach ($term_content as $term): ?>
                    <div class="term editor">
                        <?php echo $term['content']; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Content End -->

<?php
get_footer();
