<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">



  <?php wp_head();?>
	
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
               <?php if(has_custom_logo()){
      if(function_exists('the_custom_logo')){
       the_custom_logo();
      } } 
      elseif(display_header_text() && has_custom_logo() == false){
       printf(
          '<a href="%s" title="%s">%s</a>'
          ,esc_url( home_url('/') )
          ,esc_attr(get_bloginfo( 'name' , 'display' ))
          ,get_bloginfo('name')
         );
       }?>
                
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     <?php wp_nav_menu(array(

                          'theme_location' => 'header_menu'
                      )); ?>
                      

                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>