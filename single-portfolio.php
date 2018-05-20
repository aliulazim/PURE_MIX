<?php get_header();

?>


<!-- Header section
================================================== -->
<section id="header" class="header-two">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
           		 <div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="1.6s">Project title</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="1.9s">Nulla scelerisque lectus urna</h3>
           		 </div>
			</div>

		</div>
	</div>		
</section>


<!-- Single Project section
================================================== -->
<section id="single-project">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="2.3s">
			<div class="project-info">
				<h4>Client</h4>
				<p><?php echo get_post_meta($post->ID,'Client_Name',true); ?></p>
			</div>

			
			<div class="project-info">
				<h4>Date</h4>
				<p><?php echo get_post_meta($post->ID,'date',true); ?></p>
			</div>
			<div class="project-info">
				<h4>Category</h4>
				<p><?php the_category();?></p>
			</div>
		</div>

		<?php while(have_posts()) : the_post() ;?>

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="2.6s">
			<p class="margin10"><?php the_content();?></p>
			<?php the_post_thumbnail();?>
		</div>
		<?php endwhile; ?>

      </div>
   </div>
</section>

<?php get_footer();?> 