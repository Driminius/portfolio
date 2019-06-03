<?php
  add_theme_support( 'post-thumbnails' );
?>

<?php
$defaults = array(
  'default-color'          => '',
  'default-image'          => '',
  'default-repeat'         => '',
  'default-position-x'     => '',
  'default-attachment'     => '',
  'wp-head-callback'       => '_custom_background_cb',
  'admin-head-callback'    => '',
  'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
?>


<?php
    function startwordpress_google_fonts() {
        wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato');
        wp_enqueue_style( 'Lato');
        wp_register_style('Oswald', 'https://fonts.googleapis.com/css?family=Oswald');
        wp_enqueue_style( 'Oswald');
    }
    add_action('wp_print_styles', 'startwordpress_google_fonts');
?>

<?php
  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
