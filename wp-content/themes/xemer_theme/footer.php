<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

$setting_footer = get_field('setting_footer', 'option');
$column_1 = isset($setting_footer['column_1']) ? $setting_footer['column_1'] : '';
$column_2 = isset($setting_footer['column_2']) ? $setting_footer['column_2'] : '';
$column_3 = isset($setting_footer['column_3']) ? $setting_footer['column_3'] : '';
$copyright_text = isset($setting_footer['copyright_text']) ? $setting_footer['copyright_text'] : '';
$menu = isset($setting_footer['menu']) ? $setting_footer['menu'] : '';
?>

<!-- footer starts -->
<footer>
    <div class="footer-upper pad-bottom-50">
        <div class="container">
            <div class="row">
                <?php if (!empty($column_1)) : ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-about">
                            <div class="footer-about-in mar-bottom-30">
                                <h3 class="white"><?= esc_html($column_1['title_top']) ?></h3>
                                <div class="footer-phone">
                                    <div class="cont-icon"><i class="flaticon-call"></i></div>
                                    <div class="cont-content mar-left-20">
                                        <p class="mar-0"><?= esc_html($column_1['text_1']) ?></p>
                                        <p class="bold mar-0"><?= $column_1['text_2'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="white"><?= esc_html($column_1['title_menu']) ?></h3>
                            <p>
                                <?php foreach ($column_1['list_item'] as $item): ?>
                                    <?= esc_html($item['text']) ?><br>
                                <?php endforeach; ?>
                            </p>
                            <ul class="social-links">
                                <?php foreach ($column_1['social-links'] as $social): ?>
                                    <li>
                                        <a href="<?= esc_url($social['link']) ?>" target="_blank">
                                            <i class="<?= esc_attr($social['icon_class']) ?>" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-links">
                        <?php if (!empty($column_2['title_menu'])) : ?>
                            <h3 class="white"><?php echo esc_html($column_2['title_menu']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($column_2['list_item']) && is_array($column_2['list_item'])) : ?>
                            <ul>
                                <?php foreach ($column_2['list_item'] as $item) :
                                    $link = $item['link'] ?? [];
                                    $title = $link['title'] ?? '';
                                    $url = $link['url'] ?? '#';
                                    $target = !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '"' : '';
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url($url); ?>"<?php echo $target; ?>><?php echo esc_html($title); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-links">
                        <?php if (!empty($column_3['title_menu'])) : ?>
                            <h3 class="white"><?php echo esc_html($column_3['title_menu']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($column_3['list_item']) && is_array($column_3['list_item'])) : ?>
                            <ul>
                                <?php foreach ($column_3['list_item'] as $item) :
                                    $link = $item['link'] ?? [];
                                    $title = $link['title'] ?? '';
                                    $url = $link['url'] ?? '#';
                                    $target = !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '"' : '';
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url($url); ?>"<?php echo $target; ?>><?php echo esc_html($title); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-text pull-left">
                <?php if (!empty($copyright_text)) : ?>
                    <p class="mar-0"><?php echo esc_html($copyright_text) ?></p>
                <?php endif; ?>
            </div>
            <div class="footer-nav pull-right">
                <?php if (!empty($menu) && is_array($menu)) : ?>
                    <ul>
                        <?php foreach ($menu as $item) :
                            $title = $item['link']['title'] ?? '';
                            $url = $item['link']['url'] ?? '#';
                            $target = !empty($item['link']['target']) ? ' target="' . esc_attr($item['link']['target']) . '"' : '';
                            ?>
                            <li>
                                <a href="<?php echo esc_url($url); ?>"<?php echo $target; ?>><?php echo esc_html($title); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<!-- footer ends -->

<!-- search popup -->
<div id="search1">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<?php wp_footer(); ?>

</body>

</html>