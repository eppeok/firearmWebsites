<?php /* Template Name: Blog Page Template */ ?>

<?php get_header(); ?>

<main>
      <div class="innerPageBanner">
         
         <div class="innerPageText">
            <h2><?php the_title(); ?></h2>
         </div>
      </div>
      <div class="blohMain p-90">
         <div class="container">
            <div class="row">

 <?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'terms'    => $termid,
   
);
$query = new WP_Query( $args );

while($query->have_posts()){ $query->the_post(); ?>

               <div class="col-lg-4">
                  <a href="<?php the_permalink(); ?>" class="blogList">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                     <div class="blogIn">
                        <div class="blogDate">
                           <h4><?php echo get_the_date('j'); ?> <span><?php echo get_the_date('M, Y'); ?></span></h4>
                        </div>
                        <div class="blogText">
                           <p><?php the_title(); ?></p>
                        </div>
                     </div>
                  </a>
               </div>
               <?php } ?>
               <div class="paginaTion">
               <div class="new_pagination">
                        <?php
                             $big = 999999999;
                             echo paginate_links( array(
                                  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                  'format' => '?paged=%#%',
                                  'current' => max( 1, get_query_var('paged') ),
                                  'total' => $query->max_num_pages,
                                  'prev_text' => '&laquo; Prev',
                                  'next_text' => 'Next &raquo;',
                                  'type' => 'list'
                             ) );
                        ?>
                                              
                      </div>
                            <?php wp_reset_postdata(); ?>
               </div>
            </div>
         </div>

      </div>
   </main>
  
<?php get_footer(); ?>

