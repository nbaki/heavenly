<?php
add_filter('show_admin_bar', '__return_false');
function get_childTheme_url() {
    return dirname( get_bloginfo('stylesheet_url') );
}

function getPageContent($id) {
    $post = get_page($id);
    $content = '';
    if ($post) {
        $content = apply_filters('the_content', $post->post_content);
        $content = str_replace(']]>', ']]>', $content);
    }
    return $content;
}

?>
