<?php
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/popper.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/Headroom.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/jQuery.headroom.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/smoothscroll.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . 'js/custom.js', array ( 'jquery' ), 1.1, true);

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

?>

