<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();

    $setting_header = get_field('setting_header', 'option');
    $header_top = isset($setting_header['header_top']) ? $setting_header['header_top'] : '';
    $social_links = isset($setting_header['social_links']) ? $setting_header['social_links'] : '';
    $logo = isset($setting_header['logo']) ? $setting_header['logo'] : '';
	?>


	<!-- header starts -->
	<header class="main_header_area">
		<div class="header-content">
			<div class="container">
				<div class="links links-left">
                    <?php if (!empty($header_top) && is_array($header_top)): ?>
                        <ul>
                            <?php foreach ($header_top as $item): ?>
                                <?php
                                $icon = !empty($item['icon_class']) ? $item['icon_class'] : '';
                                $text = !empty($item['text']) ? $item['text'] : '';
                                $link = !empty($item['link']) ? $item['link'] : '#';
                                ?>
                                <?php if ($text): ?>
                                    <li>
                                        <a href="<?php echo esc_url($link); ?>">
                                            <?php if ($icon): ?>
                                                <i class="<?php echo esc_attr($icon); ?>"></i>
                                            <?php endif; ?>
                                            <?php echo esc_html($text); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

				</div>
				<div class="links links-right pull-right">
					<ul>
						<li>
                            <?php if (!empty($social_links) && is_array($social_links)): ?>
                                <ul class="social-links">
                                    <?php foreach ($social_links as $item): ?>
                                        <?php
                                        $icon = !empty($item['icon_class']) ? $item['icon_class'] : '';
                                        $link = !empty($item['link']) ? $item['link'] : '#';
                                        ?>
                                        <?php if ($icon): ?>
                                            <li>
                                                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Bar -->
		<div class="header_menu affix-top">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-flex">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand" href="<?php echo home_url()?> ">
								<img src="<?php echo $logo ?>" alt="image">
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" id="responsive-menu">
								<li>
									<a href="<?php echo home_url()?>" >Home</a>
								</li>
								<li>
									<a href="<?php echo get_field('gioi_thieu','option') ?>" >Giới thiệu</a>
								</li>
								<li class="submenu dropdown">
									<a href="<?php echo get_field('san_pham','option') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        echo '<li><a href="'.get_field('san_pham','option').'">'.esc_html('All').'</a></li>';
                                        // Lấy danh mục sản phẩm của WooCommerce
                                        $terms = get_terms(array(
                                            'taxonomy' => 'product_cat',
                                            'hide_empty' => false, // Hiển thị cả danh mục không có sản phẩm
                                        ));

                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                // Kiểm tra nếu danh mục có danh mục con
                                                $child_terms = get_terms(array(
                                                    'taxonomy' => 'product_cat',
                                                    'hide_empty' => false,
                                                    'parent' => $term->term_id,
                                                ));

                                                if (!empty($child_terms)) {
                                                    echo '<li class="submenu dropdown">';
                                                    echo '<a href="' . get_term_link($term) . '" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
                                                    echo esc_html($term->name) . '<i class="fa fa-angle-right" aria-hidden="true"></i></a>';
                                                    echo '<ul class="dropdown-menu">';

                                                    foreach ($child_terms as $child) {
                                                        echo '<li><a href="' . get_term_link($child) . '">' . esc_html($child->name) . '</a></li>';
                                                    }

                                                    echo '</ul>';
                                                    echo '</li>';
                                                } else {
                                                    echo '<li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
								<li >
									<a href="<?php echo get_field('cam_ket','option') ?>" >Cam kết</i></a>
								</li>
								<li >
									<a href="<?php echo get_field('tin_tuc','option') ?>" >Tin tức</a>
								</li>
								<li>
									<a href="<?php echo get_field('lien_he','option') ?>" >Liên hệ</a>
								</li>
								<li class="dropdown">
									<a href="#search1" class="mt_search"><i class="fa fa-search"></i></a>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<div id="slicknav-mobile"></div>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
		</div>

		<!-- Navigation Bar Ends -->
	</header>
	<!-- header ends -->