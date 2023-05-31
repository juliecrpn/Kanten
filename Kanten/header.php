<?php 
/**
 * This is the template that displays all the <head> 
 * section and everything up until main
 * 
 * documentation: https://developer.wordpress.org/themes/basics/
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=$, initial-scale=1.0">
  <title>Kanten</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var menu = document.querySelector('.navcontainer');
    var headerHeight = menu.offsetHeight;
  
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > headerHeight) {
        menu.classList.add('fixed-menu');
      } else {
        menu.classList.remove('fixed-menu');
      }
    });
  });
</script>

  </head>
  <!-- Inserting menu to all pages: Get template parts -->
  <?php 
    get_template_part('template-parts/navigation/navmenu')
  ?>
  <body <?php body_class(); ?>>
 