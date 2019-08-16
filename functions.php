<?php

// Pour ne pas avoir de fichier contenant trop de ligne de code nous allons repartir le tout dans des fichiers spécifiques afin de rendre le tout plus lisible.
// Nous découvrons ici la function require_once() de php qui nous permet d'importer des fichiers
// Nous découvrons également la fonction get_template_directory() qui renvoi le chemin du dossier du thème actif sur (à ne pas confondre avec get_template_directory_uri() qui renvoi une url) 
require_once(get_template_directory() . '/includes/enqueue-script.php');

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
/**
 * Fonction qui modifie les attributs du dropdown de la navbar
 * */
function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');


function change_dropdown_class($drop) {  
  $drop = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$drop);  
  return $drop;  
}  
add_filter('wp_nav_menu','change_dropdown_class');


// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3); 
