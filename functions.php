<?php 
function getTagList($p_id) {
    if (get_the_tags($p_id)) {
        echo '<div class="tags">' . __('Tags: ', 'm_n');
        echo get_the_tag_list('', ', ', '', $p_id);
        echo '</div>';
    }
}

function getCategoryList($p_id) {
    if (get_the_category($p_id)) {
        echo '<div class="categories">'. __('Categories: ', 'm_n');
        echo get_the_category_list(' ', '', $p_id);
        echo '</div>';
    }
}

/* ADD WIDGETS IN THE FOOTER */

if (function_exists('register_sidebar')) {
    register_sidebar(array(
			'name' => 'bucket left',
            'id' => 'sidebar-1',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
    ));

    register_sidebar(array(
			'name' => 'bucket right',
            'id' => 'sidebar-2',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
    ));
}
?>