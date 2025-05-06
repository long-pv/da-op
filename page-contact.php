<?php

/**
 * Template name: Contact Us
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
$contact_us = get_field('contact_us', $page_id);
?>

    <!-- contact starts -->
<?php if (!empty($contact_us)) : ?>
    <section class="contact-main bg-grey">
        <div class="container">
            <?php if (!empty($contact_us['title'])) : ?>
                <div class="section-title">
                    <?php if (!empty($contact_us['title'])) : ?>
                        <h2><?php echo esc_html($contact_us['title']); ?></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="contact-info mar-bottom-30">
                <?php if (!empty($contact_us['list_item'])) : ?>
                    <div class="row">
                        <?php foreach ($contact_us['list_item'] as $item) : ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="<?php echo esc_attr($item['icon_class']); ?>"></i>
                                    </div>
                                    <div class="info-content">
                                        <?php echo $item['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="contact-map">
                <div class="row">
                    <div class="col-md-6">
                        <div id="map" style="width: 100%;">
                            <div class="map-responsive" style="height: 463.5px; border-radius: 20px;overflow: hidden">
                                <?php if (!empty($contact_us['iframe_map'])) : ?>
                                    <?php echo $contact_us['iframe_map']; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-form1" class="contact-form">
                            <div class="form_contact_home">
                                <?php if (!empty($contact_us['contact_form'])) : ?>
                                    <?php echo do_shortcode($contact_us['contact_form']); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!-- contact Ends -->


<?php
get_footer();
