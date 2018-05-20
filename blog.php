<?php get_header(); 
	/*
	Template Name: Blog
 */
?>

<!-- Header section
================================================== -->
   <?php
    if(have_posts()){

      while(have_posts()){
        the_post(); ?>

<section id="header" class="header-five">
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


<!-- Blog section
================================================== -->
<section id="blog">
   <div class="container">
      <div class="row">

          <?php

            $blog_post = new WP_Query(array(

              'order' => 'asc',
              'order_by' => 'ID',
              'post_type' => 'post',
              'posts_per_page' => 2


             ));

             if($blog_post->have_posts()){
      
             while($blog_post->have_posts()){

             $blog_post->the_post();


            ?>

         <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1s">
         	  <div class="blog-thumb">
         		   <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
         		   <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
         		     <div class="post-format">
						        <span>By <a href="#"><?php the_author();?></a></span>
						        <span>On <i class="fa fa-date"></i><?php the_time('j F Y,l');?></span>
					       </div>
         		     <p><?php read_more(20);?></p>
         		     <a href="<?php the_permalink();?>" class="btn btn-default">Read More</a>
         	    </div>
		    </div>

		   <?php }
        }else{
          echo 'No Post';
           }

          ?>


          <?php

            $blog_post = new WP_Query(array(

              'order' => 'asc',
              'order_by' => 'ID',
              'offset' => 2,
              'post_type' => 'post',
              'posts_per_page' => 6


             ));

             if($blog_post->have_posts()){
      
             while($blog_post->have_posts()){

             $blog_post->the_post();


            ?>

        

		    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
         	  <div class="blog-thumb">
               <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
               <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
                 <div class="post-format">
                    <span>By <a href="#"><?php the_author();?></a></span>
                    <span>On <i class="fa fa-date"></i><?php the_time('j F Y,l');?></span>
                 </div>
                 <p><?php read_more(20);?></p>
                 <a href="<?php the_permalink();?>" class="btn btn-default">Read More</a>
              </div>
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