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
$column_4 = isset($setting_footer['column_4']) ? $setting_footer['column_4'] : '';
$copyright_text = isset($setting_footer['copyright_text']) ? $setting_footer['copyright_text'] : '';
$menu = isset($setting_footer['menu']) ? $setting_footer['menu'] : '';
?>

<!-- footer starts -->
<footer>
    <div class="footer-upper pad-bottom-50">
        <div class="container">
            <div class="row">
                <?php if (!empty($column_1)) : ?>
                    <div class="col-md-4 col-sm-12 col-xs-12">
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

                <div class="col-md-2 col-sm-6 col-xs-12">
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-subscribe">
                        <?php if (!empty($column_4['title_menu'])) : ?>
                            <h3 class="white"><?php echo esc_html($column_4['title_menu']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($column_4['description'])) : ?>
                            <p class="white"><?php echo esc_html($column_4['description']); ?></p>
                        <?php endif; ?>
                        <form method="post">
                            <input type="email" placeholder="Your Email">
                            <input class="biz-btn mar-top-15" type="submit" value="Subscribe">
                        </form>
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

<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-title section-border">
                <h3>Login</h3>
            </div>
            <div class="login-form section-border">
                <form>
                    <div class="form-group">
                        <input type="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter password">
                    </div>
                </form>
                <div class="form-btn">
                    <a href="#" class="biz-btn biz-btn1">LOGIN</a>
                </div>
                <div class="form-group form-checkbox">
                    <input type="checkbox"> Remember Me
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="login-social section-border">
                <p>or continue with</p>
                <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
            </div>
            <div class="sign-up">
                <p>Do not have an account?<a href="#">Sign Up</a></p>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
</div>

<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-title section-border">
                <h3>Register</h3>
            </div>
            <div class="login-form section-border">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password">
                    </div>
                </form>
                <div class="form-btn">
                    <a href="#" class="biz-btn biz-btn1">REGISTER</a>
                </div>
                <div class="form-group form-checkbox">
                    <input type="checkbox"> Remember Me
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="login-social section-border">
                <p>or continue with</p>
                <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
            </div>
            <div class="sign-up">
                <p>Do not have an account?<a href="#">Sign Up</a></p>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>