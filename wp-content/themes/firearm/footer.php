<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?> 
<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<footer id="contact">
      <div class="footerInner" >
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mainForm">
					  
                     <!--<h2><?php the_field('get_in_touch_title',$frontpage_id); ?></h2>-->
                     <?php //echo do_shortcode('[contact-form-7 id="44" title="Get In Touch"]'); ?>
                   <div class="pipeform" style="text-align: center;">
                     <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/2TByMZjhlmq0PD3Fq8yX2Gj68NbOKkuSn6pJFtgRF7f4a0aKXVCx6d2TOibCwMLhp"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
                   </div>
                     <div class="bottomSocialMed">
                        <ul>
                           <?php wp_nav_menu( array('menu' => 'Social Menu' , 'container' => '' , 'items_wrap' => '%3$s' )); ?>
                        </ul>
						 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
						 <i class="fa fa-phone" style="font-size:20px ; text-align: center;color:#ffffff;
"> +18137712836</i><br><i class="fa fa-map-marker" style="font-size:20px;color:#ffffff;text-align: center;
"> 3104 N Armenia Ave, Tampa, FL 33607,USA</i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footerCopyRightMain">
         <ul class="copyRight">
            
            <li><?php the_field('copyright_text_1',$frontpage_id); ?></li>
            <li> <a href="javascript:void(0)"><?php the_field('copyright_text_2',$frontpage_id); ?></a></li>
            <?php wp_nav_menu( array('menu' => 'Footer Menu' , 'container' => '' , 'items_wrap' => '%3$s' )); ?>
            <!--<li><?php the_field('design_text',$frontpage_id); ?> <a href="<?php the_field('development_link',$frontpage_id); ?>" target="_blank">
                  <img class="creLogo" src="<?php the_field('development_logo',$frontpage_id); ?>" alt="Creative813"></a></li>-->
         </ul>
      </div>
	<style type="text/css">.seofooter h2{display:none;}</style>
<div class="seofooter"><h2>

<?php

$Path=$_SERVER['REQUEST_URI'];

if($Path=="/") echo "Firearms Marketing Agency";

?>

</h2>
</div> 
   </footer>
 
   <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
   <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

   <?php wp_footer(); ?>
   <script>
    jQuery(document).ready(function(){
        var current_hash = window.location.hash
        if (current_hash !== "") {
            if (jQuery(window).width() < 767){
                  jQuery('html,body').animate({
                      scrollTop: jQuery(current_hash).offset().top-40
                  }, 500);
            }
            else if (jQuery(window).width() < 991){
                  jQuery('html,body').animate({
                      scrollTop: jQuery(current_hash).offset().top-50
                  }, 500);
              }
            else{
              jQuery('html,body').animate({
                      scrollTop: jQuery(current_hash).offset().top-90
                  }, 500);
   
            }
        }
   // jQuery('.whyu').click(function() {
jQuery("body").on('click', '.whyu', function(){
   jQuery('html,body').animate({
                      scrollTop: jQuery('#why-us').offset().top-90
                  }, 100);
}); 
  // studio
jQuery("body").on('click', '.porta', function(){
   jQuery('html,body').animate({
                      scrollTop: jQuery('#portfolio').offset().top-90
                  }, 100);
}); 
// contact
 jQuery("body").on('click', '.testa', function(){
    jQuery('html,body').animate({
                      scrollTop: jQuery('#testimonials').offset().top-90
                  }, 100);
}); 
// calender
 jQuery("body").on('click', '.contacta', function(){
     jQuery('html,body').animate({
                      scrollTop: jQuery('#contact').offset().top-90
                  }, 100);
}); 
});   

</script>

</body>
</html>