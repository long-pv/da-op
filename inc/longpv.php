<?php
function xemer_theme_custom_admin_footer()
{
    echo 'Thanks for using WordPress. Powered by <a target="_blank" href="https://tramkienthuc.net/">Xemer Theme</a>.';
}
add_filter('admin_footer_text', 'xemer_theme_custom_admin_footer');
