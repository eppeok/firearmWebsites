<?php  get_header(); ?>


<?php

$post_id = get_the_id();
$args = array( 
    'post_type'   => 'portfolio_firearm',
    'orderby'  => 'post_date',
    'order'    => 'DESC'
);
$posts = get_posts( $args );

$ids = array();
foreach ( $posts as $thepost ) {
    $ids[] = $thepost->ID;
}

$thisindex = array_search( $post_id, $ids );
$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;

 ?>


<section class="port_dt">
	<div class="container-fluid p-0">
		<div class="row">

<div class="portfolio-details">
	<div class="body-widget">
		<div class="portfolio-title-area">
			<h2 class="port-heading"> <?php the_title(); ?></h2>
		</div>
	</div>
	<div class="portfolio-content">
		<div class="container">
			<div class="row gx-5">
				<div class="col-lg-6">
					<div class="portfolio-images">
						<div class="image-item">
							<a href="<?php the_post_thumbnail_url(); ?>" data-toggle="lightbox" data-gallery="gallery">
							<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Gun Friendly eCommerce Website Design"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<div class="profolio-project-details">
						<?php the_content(); ?>
					
					</div>
					<div class="view-site"> <a href="<?php the_field('client_website_button_link'); ?>" target="_blank"><?php the_field('client_website_button_text'); ?> </a></div>
						<div class="cn_r">
							<a id="twl_cal_link_2" href="<?php the_field('consultation_button_link'); ?>" class="twl-button" target="_blank" ><span><?php the_field('consultation_button_text'); ?></span></a>
						<div>
					
				</div>
			</div>
		</div>
	</div>
	<section class="multi-portfolio-nav-area">
		<div class="">
			<div class="row">
				<?php if (false !== $previd ) { ?>
				<div class="col-md-6">
					<div class="port-nav-item" data-bg="<?php echo get_the_post_thumbnail_url($previd) ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($previd) ?>);">
						<div class="port-nav-content-widget">
							<div class="body-widget">
								<a href="<?php echo get_permalink($previd) ?>">
									<p>Previous Project</p>
									<h3> <i>←</i> <?php echo get_the_title($previd) ?></h3> </a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
				<?php if (false !== $nextid ) { ?>
				<div class="col-md-6">
					<div class="port-nav-item" data-bg="<?php echo get_the_post_thumbnail_url($nextid) ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($nextid) ?>);">
						<div class="port-nav-content-widget">
							<div class="body-widget">
								<a href="<?php echo get_permalink($nextid) ?>">
									<p>Next Project</p>
									<h3><?php echo get_the_title($nextid) ?> <i>→</i></h3> </a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
</div>

</div>

</div>
</section>





<?php get_footer(); ?>