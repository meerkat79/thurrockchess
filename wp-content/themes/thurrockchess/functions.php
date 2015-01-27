<?php 
register_sidebar(array(
    'name'=> '1st Sidebar',
    'id'=> '1st',
    'description' => 'Top bar 1',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));

register_sidebar(array(
    'name'=> '2nd Sidebar',
    'id' => '2nd',
    'description' => 'Top bar 2',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));
/*Theme support with flexible arguments added*/
$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

?>