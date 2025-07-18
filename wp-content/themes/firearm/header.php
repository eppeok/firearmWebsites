<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
   href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,600;0,700;1,600&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
   rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header id="myHeader">
      <div class="topInfo">
         <div class="container">
            <nav class="navbar navbar-expand-lg">
               <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              ?>
               <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ) ;?>">
                  <img src="<?php echo $image[0]; ?>" alt="Creative813" class="logo-1">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                     <i class="fas fa-bars"></i>
                  </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav menunav">
                       <?php wp_nav_menu( array('menu' => 'Header Menu' , 'container' => '' , 'items_wrap' => '%3$s', 'add_li_class'  => 'nav-item', 'add_a_class'     => 'nav-link', )); ?>
                     </ul>
               </div>
            </nav>
         </div>
      </div>
   </header>
