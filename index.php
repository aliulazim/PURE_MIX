<?php get_header(); 

?>


<!-- Header section
================================================== -->
<section id="header" class="header-one" style="background-image: url(<?php header_image(); ?>);">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <?php dynamic_sidebar('home_header');?>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">

                           <?php wp_nav_menu(array(

                          'theme_location' => 'portfolio_menu'
                      )); ?>
                      
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                         <?php

                           $portfolio_post = new WP_Query(array(

                            'post_type' => 'portfolio',
                            'posts_per_page' => -1


                          ));

                        if($portfolio_post->have_posts()){
      
                        while($portfolio_post->have_posts()){

                        $portfolio_post->the_post();


                      ?>

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <?php the_post_thumbnail(); ?>
                                       <div class="portfolio-overlay">

                                          <div class="portfolio-item">
                                                <a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                                <h2><?php the_title(); ?></h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>




                          <?php }
                           }else{
                           echo 'No Post';
                           }

                         ?>





                            </div>
                        </div>

               </div>

         </div>

      </div>
   </div>
</section>

<?php get_footer(); 

?>

