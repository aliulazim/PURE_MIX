<?php get_header(); 

?>

<!-- Header section
================================================== -->
<?php

	$query =  new WP_Query('pagename=blog');

    if($query->have_posts()){

      while($query->have_posts()){
        $query->the_post(); ?>

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


<!-- Single Post section
================================================== -->
<section id="single-post">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="2.3s">
         	  <div class="blog-thumb">

         	  <?php


             if(have_posts()){
      
             while(have_posts()){

             the_post();


            ?>
         		   
         		   <h1><?php the_title(); ?></h1>
         			    <div class="post-format">
						        <span>By <a href="#"><?php the_author();?></a></span>
						        <span>On <i class="fa fa-date"></i> <?php the_time('j F Y,l');?></span>
					       </div>
         		<?php the_content();?>
               
              <?php the_post_thumbnail(); ?>
               
               
         <?php }
          }else{
          echo 'No Post';
           }

        ?>
               

               <div class="blog-comment">
                 <h3>Comments</h3>
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src="images/comment1.jpg" class="img-responsive" alt="blog">
                       </div>
                      <div class="media-body">
                        <h4 class="media-heading">Jenne leon</h4>
                        <h5>5 June 2016, Sunday</h5>
                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                      </div>
                    </div>
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src="images/comment2.jpg" class="img-responsive" alt="blog">
                       </div>
                      <div class="media-body">
                        <h4 class="media-heading">Jenne leon</h4>
                        <h5>4 June 2016, Saturday</h5>
                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                      </div>
                    </div>
               </div>

               <div class="blog-comment-form">
                  <h3>Leave a comment</h3>
                    <?php comments_template();?>
               </div>
         	  </div>
		    </div>

      </div>
   </div>
</section>



<?php get_footer(); 

?>