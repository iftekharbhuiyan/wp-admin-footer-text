<?php
/**
 * set custom footer message
 * using "admin_footer_text" hook
 * WP Codex: https://developer.wordpress.org/reference/hooks/admin_footer_text/
 */
function custom_admin_footer_text() {
    echo '<p>This is a custom text.</p>';
}
add_filter('admin_footer_text','custom_admin_footer_text');
?>