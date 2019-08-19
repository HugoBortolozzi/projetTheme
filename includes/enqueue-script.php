<?php
class EnqueueScript
{
  /**
   * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
   * Nous avons ajouter le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )

   * Le mot static permet de pouvoir utiliser la méthode directelement depuis la class sans devoir l'instancier
   *
   * @return void
   */
  public static function ajout_css_js()
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
}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/

// Nous créeons une instance de la class EnqueueScript afin de la passer en paramètre dans notre add_action
//$enqueue_script = new EnqueueScript();
// la function add_action prend en deuxième paramêtre soit un string (qui correspond au nom d'une fonction), soit un tableau. Dans le tableau on passe en premier paramêtre l'un objet instance d'une class et en deuxième paramêtre un string qui correspond au nom de la méthode de l'objet passé en premier paramêtre.
// Il est possible de ne pas devoir instancier la class avec la syntaxe ci-dessous. Attention il faut alors que la méthode soit static
add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);