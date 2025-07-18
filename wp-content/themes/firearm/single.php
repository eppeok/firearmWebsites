<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<main>
      <div class="innerPageBanner">
         <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-details.jpg" alt=""> -->
         <div class="innerPageText">
            <h2><?php the_title(); ?></h2>
         </div>
      </div>
      <div class="blogDetailsPage p-90">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">

               	<?php 

               	while ( have_posts() ) { the_post(); ?>
                  <div class="blogDetailsInn">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                     <ul class="blogListDetails">
                        <li>
                           <a href="javascript:void(0)"><i class="fas fa-user"></i><?php the_author(); ?></a>
                        </li>
                        <li>
                           <a href="javascript:void(0)"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('M j, Y'); ?> </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)"><i class="fas fa-comment-dots"></i><?php echo get_comments_number(get_the_id()); ?> Comment</a>
                        </li>
                     </ul>
                     <div class="blogDetailT">
                        <h3><?php the_title(); ?></h3>

                        <?php the_content(); ?>
                      
                     </div>
                 

                      <?php 	if ( comments_open() || get_comments_number() ) {
                  		comments_template();
                  	} ?>


                  </div>
              <?php } ?>
               </div>
               <div class="col-lg-4">
                  <div class="recentList">
                     <h3> Recent Posts</h3>
                     <div class="row">


 <?php


$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
   
   
);
$query = new WP_Query( $args );

while($query->have_posts()){ $query->the_post(); ?>
                        <div class="col-lg-12">
                           <div class="recentListInner bor_bot">
                              <div class="recentImageing">
                                 <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                              </div>
                              <div class="recentText">
                                 <p><?php the_title(); ?>
                                    <span>
                                     <?php echo get_the_date('M j, Y'); ?>
                                    </span>
                                 </p>
                              </div>
                           </div>
                        </div>
                   
<?php } ?>
 <?php wp_reset_postdata(); ?>
                        <div class="col-lg-12">
                           <div class="onlineHealth">
                              <img src="<?php the_field('single_sidebar_image',137); ?>" alt="">
                              <h3><?php the_field('single_sidebar_phone_text',137); ?>
                              </h3>
                              <a href="tel:3234922223"><?php the_field('single_sidebar_phone_number',137); ?></a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>

   <?php

get_footer();
