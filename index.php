<?php
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files

// on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit.
get_header();

// ajout du header
get_template_part('templates/banner');

//Ajout de la section testimonials
get_template_part('templates/testimonials');

//Ajout de la section features
get_template_part('templates/features');

//Ajout de la section video
get_template_part('templates/video');

//Ajout de la section details
get_template_part('templates/details');

// //Ajout de la section screenshots
get_template_part('templates/screenshots');

// //Ajout de la section download
get_template_part('templates/download');

// //Ajout de la section statistics
get_template_part('templates/statistics');

// //Ajout de la section contact
get_template_part('templates/contact');

// // https://developer.wordpress.org/themes/basics/template-files/#using-template-files
// // Ajout d'un fichier footer.php pour y mettre le footer
get_footer();
