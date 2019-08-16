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
  wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css');

  // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery.min.js', null, true);
  wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', ['jquery-perso'], null, true);

  wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', ['jquery-perso'], null, true);
  wp_enqueue_script('morphext', get_template_directory_uri() . '/js/morphext.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('validator', get_template_directory_uri() . '/js/validator.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', ['jquery-perso'], null, true);
}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');

/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu');
/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function ajout_menu_a_class($atts, $item, $args)
{
  $class = 'nav-link page-scroll'; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3); 