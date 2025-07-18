<?php /* Template Name: Inner Page Template */ ?>

<?php get_header(); ?>

  <div class="main__content">
      <div class="container">
  
      <section class="policy_innr_page">      
        <div class="page_header text-center">
           <h1 class="site_title"><?php the_title(); ?></h1>
        </div>
   
         <?php
         while(have_posts()){the_post();

            the_content();

         }
          ?>

      </section>
 </div>
</div>
<?php get_footer(); ?>