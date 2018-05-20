<?php get_header(); 
	/*
	Template Name: About Us
 */
?>




<!-- Header section
================================================== -->
      <?php
    if(have_posts()){

      while(have_posts()){
        the_post(); ?>

<section id="header" class="header-three" style="background-image: url(<?php the_post_thumbnail(); ?>);">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
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


<!-- About section
================================================== -->
<section id="about">
   <div class="container">
      <div class="row">

          <?php

            $about_post = new WP_Query(array(

            	'order' => 'asc',
            	'order_by' => 'ID',
            	'post_type' => 'about',
             	'posts_per_page' => 1


             ));

             if($about_post->have_posts()){
      
             while($about_post->have_posts()){

             $about_post->the_post();


            ?>

         <div class="wow fadeInUp col-md-4 col-sm-5" data-wow-delay="1.3s">
         	<?php the_post_thumbnail(); ?>
         	<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>

			 	<?php }
        }else{
          echo 'No Post';
           }

          ?>


              <?php

            $about_post = new WP_Query(array(

            	'order' => 'asc',
            	'order_by' => 'ID',
            	'offset' => 1,
            	'post_type' => 'about',
             	'posts_per_page' => 1


             ));

             if($about_post->have_posts()){
      
             while($about_post->have_posts()){

             $about_post->the_post();


            ?>

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="1.6s">
			
         	<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php the_post_thumbnail(); ?>
		
		</div>

			 	<?php }
        }else{
          echo 'No Post';
           }

          ?>



		<div class="clearfix"></div>


		   <?php

            $about_post = new WP_Query(array(

            	'order' => 'asc',
            	'order_by' => 'ID',
            	'offset' => 2,
            	'post_type' => 'about',
             	'posts_per_page' => 3


             ));

             if($about_post->have_posts()){
      
             while($about_post->have_posts()){

             $about_post->the_post();


            ?>

		<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>

		<?php }
        }else{
          echo 'No Post';
           }

          ?>

		<div class="clearfix"></div>


			<?php

            $about_post = new WP_Query(array(

            	'order' => 'asc',
            	'order_by' => 'ID',
            	'offset' => 5,
            	'post_type' => 'about',
             	'posts_per_page' => 2


             ));

             if($about_post->have_posts()){
      
             while($about_post->have_posts()){

             $about_post->the_post();


            ?>

		<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1.4s">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>

		<?php }
        }else{
          echo 'No Post';
           }

          ?>

      </div>
   </div>
</section>
<?php get_footer(); 

?>