<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
<main>
      <div class="mainBanner" style="background: url(<?php the_field('banner_background'); ?>); background-size: cover;">
         <div class="container">
            <div class="swiper-container bannerSlider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="mainInnerBan">
                        <div class="bannerImage">
                           <img src="<?php the_field('banner_image'); ?>" alt="Gun Web Design Service">
                        </div>
                        <div class="innerText">
                           <h1 class="slider-title animated animate__delay-2s"><?php the_field('banner_title'); ?></h1>
                           <h2 class="animated slider-sub-para"><?php the_field('banner_content'); ?></h2>
                           <a class="myBtn btn-4 animated slider-buttton" href="<?php the_field('banner_button_link'); ?>" target="_blank"><?php the_field('banner_button_name'); ?></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--<div class="google-rating totop">
       <a href="<?php //the_field('google_ratings'); ?>" target="_blank">  <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/google-rating.jpg" alt="Google Rating"></a>

      </div>-->
	  <!--about us-->
	   <div class="aboutUs p-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="fade-left">
					<h2><?php the_field('about_us_title'); ?></h2>
					<?php the_field('about_us_content'); ?>
					<a class="myBtn btn-4 animated slider-buttton" href="<?php the_field('about_button_link'); ?>" target="_blank"><?php the_field('about_button_name'); ?></a>
				</div>
				<div class="col-lg-6 align-self-center" data-aos="fade-right">
				<img src="<?php the_field('about_us_image'); ?>" alt="Gun Web Design Service">
				</div>
			</div>
		</div>
	   </div>
	  <!--End about us-->
	  <!--How does it works-->
	  <div class="how-it-work p-90">
		<div class="container">
		<h2 class="text-center"><?php the_field('howdoesitwork_heading'); ?></h2>
		<?php
			if( have_rows('instruction_lists') ):
				while( have_rows('instruction_lists') ) : the_row();
				$row = get_row_index();
		?>
			<div class="row <?php if($row % 2 === 0){ echo 'flex-row-reverse'; } ?>">
				<div class="col-lg-6 align-self-center">
					<h3><?php the_sub_field('step_heading');?></h3>
					<?php the_sub_field('content');?>
				</div>
				<div class="col-lg-6">
				<img src="<?php the_sub_field('image');?>" alt="step">
				</div>
			</div>
		<?php
			endwhile;
			endif;
		?>
		</div>
		</div>
	  <!--End How does it works-->
	  <div class="testimonialsBox p-90" id="testimonials">
         <div id="particles-js"></div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6" data-aos="fade-right">
                  <div class="testiSlide">
                     <h2><?php the_field('testimonial_title'); ?></h2>
                     <div class="swiper-container testiSlider">
                        <div class="swiper-wrapper">
                     <?php
                        $args2 = array(
                            'post_type' => 'testimonials_firearm',
                            'posts_per_page' => -1,
                        );
                        $query2 = new WP_Query( $args2 );
                     
                if($query2->have_posts()){
                  while($query2->have_posts()){ $query2->the_post(); 
                    ?>
                          <div class="swiper-slide">
                              <div class="testiInnerSlider">
                                 <p><?php echo get_the_content(); ?> <span><?php the_title(); ?></span></p>
                              </div>
                           </div>
                            <?php  } } wp_reset_postdata(); ?>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6" data-aos="fade-left">
                  <div class="testiVideo">                 
                    <div class="ratio ratio-16x9">
                      <video  id='video'  controls="controls"    poster="<?php the_field('testimonial_image'); ?>" >
                        <source  id='mp4'  src="<?php the_field('testimonial_video'); ?>" type="video/mp4">
                        <source  id='ogv'  src="<?php the_field('testimonial_video_ogg_format'); ?>" type="video/ogg">
                     </video>

                     </div> 
                      <p><?php the_field('testimonial_video_text'); ?></p>

                  </div>
               </div>
            </div>
         </div>
      </div>
	  <!--feature-->
	  <div class="feature-area p-90">
		<div class="container">
			<h2 class="text-center"><?php the_field('feature_heading'); ?></h2>
			<div class="row">
			<div class="col-lg-6">
			<img src="<?php the_field('feature_image_1'); ?>" alt="feature">
			</div>
			<div class="col-lg-6 align-self-center">
				<h3><?php the_field('feature_heading_1'); ?></h3>
				<?php the_field('feature_content_1'); ?>
			</div>
			</div>
			<div class="row flex-row-reverse">
			
			<div class="col-lg-6 align-self-center">
			<img src="<?php the_field('feature_image_2'); ?>" alt="feature">
			</div>
			<div class="col-lg-6 align-self-center">
			<h3><?php the_field('feature_heading_2'); ?></h3>
			<?php the_field('feature_content_2'); ?>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-6 align-self-center">
				<h3><?php the_field('feature_heading_3'); ?></h3>
				<?php the_field('feature_content_3'); ?>
			</div>
			<div class="col-lg-6">
			<img src="<?php the_field('feature_image_3'); ?>" alt="feature">
			</div>
			</div>
			<div class="row flex-row-reverse">
			<div class="col-lg-6 align-self-center">
				<h3><?php the_field('feature_heading_4'); ?></h3>
				<?php the_field('feature_content_4'); ?>
			</div>
			<div class="col-lg-6">
			<img src="<?php the_field('feature_image_4'); ?>" alt="feature">
			</div>
			
			</div>
			<div class="row">
			<div class="col-lg-6 align-self-center">
				<h3><?php the_field('feature_heading_5'); ?></h3>
				<?php the_field('feature_content_5'); ?>
			</div>
			<div class="col-lg-6">
			<img src="<?php the_field('feature_image_5'); ?>" alt="feature">
			</div>
			</div>
			<div class="row flex-row-reverse">
				<div class="col-lg-6 align-self-center">
				<h3><?php the_field('feature_heading_6'); ?></h3>
				<?php the_field('feature_content_6'); ?>
			</div>
			<div class="col-lg-6">
			<img src="<?php the_field('feature_image_6'); ?>" alt="feature">
			</div>
			</div>
			</div>
		</div>
	  </div>
	  <!--end feature-->
	  <div class="ourPortfolio p-90" id="portfolio">
         <div class="container-fluid p-0">
            <h2 data-aos="zoom-in"><?php the_field('portfolio_title'); ?></h2>
            <div class="row g-0">
               <div class="swiper-container portfolioSlider">
                  <div class="swiper-wrapper">
                  <?php
                        $args = array(
                            'post_type' => 'portfolio_firearm',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $args );
                        $i=1;
             if($query->have_posts()){
               while($query->have_posts()){ $query->the_post(); 
                  $value = str_pad($i,2,"0",STR_PAD_LEFT);
                  ?>
                     <div class="swiper-slide">
                        <div class="portBox">
                           <a href="<?php the_permalink(); ?>">
                              <h3><span><?php echo $value; ?></span></h3>
                              <div class="pRImg">
                                 <img src="<?php the_post_thumbnail_url(); ?>" alt="Firearm Website Design">
                              </div>
                              <p><?php the_title(); ?></p>
                           </a>
                        </div>
                     </div>
                      <?php $i++; } } wp_reset_postdata(); ?>           
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
               </div>
               <div class="scheduleBtn" data-aos="zoom-in">
                  <a href="<?php the_field('portfolio_button_link'); ?>" class="myBtn" target="_blank"><?php the_field('portfolio_button_name'); ?></a>
               </div>
            </div>
         </div>
      </div>
      <div class="whyCustom p-90" id="why-us">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6" data-aos="fade-right">
                  <div class="cusImg">
                     <img src="<?php the_field('why_us_image'); ?>" alt="Websites Design For Firearm Tampa">
                  </div>
               </div>
               <div class="col-lg-6" data-aos="fade-left">
                  <div class="whypara">
                     <h2><?php the_field('why_us_title'); ?></h2>
                     <?php the_field('why_us_content'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      
   </main>

<?php get_footer(); ?>