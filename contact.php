<?php get_header(); 
	/*
	Template Name: Contact Us
 */
?>

<!-- Header section
================================================== -->
      <?php
    if(have_posts()){

      while(have_posts()){
        the_post(); ?>

<section id="header" class="header-four" style="background-image: url(<?php the_post_thumbnail(); ?>);">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8" >
            	<div class="header-thumb">
					<?php the_content();?>
           		</div>
			</div>

		</div>
	</div>		
</section>

 <?php }
    }
  ?>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<div id="map-canvas"></div>
			</div>
		</div>

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Let's work together!</h1>
			<div class="contact-form">
				<?php echo do_shortcode("[pure_mix_contact_form]"); ?>
			</div>
		</div>

		<div class="clearfix"></div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.3s">
					<div class="media-object pull-left">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="media-body">
						 <?php dynamic_sidebar('contact_phone');?>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.6s">
					<div class="media-object pull-left">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="media-body">
						 <?php dynamic_sidebar('contact_email');?>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.9s">
					<div class="media-object pull-left">
						<i class="fa fa-globe"></i>
					</div>
					<div class="media-body">
						 <?php dynamic_sidebar('contact_address');?>
					</div>
				</div>
			</div>

      </div>
   </div>
</section>



<?php get_footer(); 

?>