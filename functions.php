<?php
/**
 * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
 *
 * @return void
 */
function ajout_css_js()
{
  // Ajout des scripts css
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css'); 
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome-all.css');
  wp_enqueue_style('font-montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,600,700");
  wp_enqueue_style('open-sans', "https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i");
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');
?>


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/swiper.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet">