<?php
/*
Template Name: Home Page
*/
?>



<?php get_header(); ?>




<!--Carousel-->
<div id="demo" class="carousel slide" data-ride="carousel">

<a href="#secOne" i> <i class="ion-ios-arrow-thin-down  bounce"></i> </a>


  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li> 
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>  
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo( 'template_directory' ); ?>/img/solar-inst1-fc.jpg" alt="Los Angeles" class="img-fluid">
      
      <h3 class="carousel-caption carousel_h3 animated bounceInLeft"><?php the_field( 'slider_title1' ); ?></h3>
      
      <p class="carousel-caption carousel_p animated bounceInRight"><?php the_field( 'slider_title1_sub' ); ?></p>
      
    </div>
    
    
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/img/inverter.jpg" alt="Inverter" class="img-fluid">
      
      <h3 class="carousel-caption carousel_h3">
      <?php the_field( 'slider_title2' ); ?></h3>
       
      <p class="carousel-caption carousel_p " >
      <?php the_field( 'slider_title2_sub' ); ?></p>
      
    </div>
    
    
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/img/smart-ups.jpg" alt="UPS" class="img-fluid">
       <h3 class="carousel-caption carousel_h3"><?php the_field( 'slider_title3' ); ?></h3>
      <p class="carousel-caption carousel_p"><?php the_field( 'slider_title3_sub' ); ?></p>
        
    </div>
      
      
      <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/img/solar-light1.jpg" alt="Solarlight" class="img-fluid">
       <h3 class="carousel-caption carousel_h3"><?php the_field( 'slider_title4' ); ?></h3>
      <p class="carousel-caption carousel_p"><?php the_field( 'slider_title4_sub' ); ?></p>
        
    </div>
      
      
      <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/img/solarwater.jpg" alt="Solarpump" class="img-fluid">
       <h3 class="carousel-caption carousel_h3"><?php the_field( 'slider_title5' ); ?></h3>
      <p class="carousel-caption carousel_p"><?php the_field( 'slider_title5_sub' ); ?></p>
        
    </div>
      
      
      <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/img/solar-installation-1.jpg" alt="Installation" class="img-fluid">
       <h3 class="carousel-caption carousel_h3"><?php the_field( 'slider_title6' ); ?></h3>
      <p class="carousel-caption carousel_p"><?php the_field( 'slider_title6_sub' ); ?></p>
        
    </div>
      
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <span id="secOne"></span>
</div>
<!--Carousel Ends-->


<!--Welcome-->
<section class="welcome">
   
   <div class="container animated wow slideInUp" data-wow-delay="0.2s">
    
    <h1 class=""><?php the_field( 'wel_title' ); ?></h1>
    <p class=""><?php the_field( 'wel_description' ); ?></p>
    
    <img src="<?php bloginfo('template_directory'); ?>/img/underline.png" alt="" class="fluidCon" id="">
    
    </div>
    
</section>
<!--Welcome Ends-->


<!--Practice-->
<section class="practice animated wow slideInUp" data-wow-delay="0.2s">
   
   <h3 class=""><?php the_field( 'prac_title' ); ?></h3>
   <p class="container pracp"><?php the_field( 'prac_description' ); ?></p>
   <img src="<?php bloginfo('template_directory'); ?>/img/underline.png" alt="" class="fluidSec">
 
    <div class="container">
        <div class="row">
            <div class="col-sm-6 prac">
                <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field( 'area1' ); ?></h4>
                <img src="<?php bloginfo('template_directory'); ?>/img/off-grid-solar1.jpg" alt="" class="img-fluid">
                <p class=""><?php the_field( 'area1_description' ); ?></p>
                
                
            </div>
               <div class="col-sm-6 prac">
                <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field( 'area2' ); ?></h4>
                <img src="<?php bloginfo('template_directory'); ?>/img/grid-tie-system.jpg" alt="" class="img-fluid">   
                <p class=""><?php the_field( 'area2_description' ); ?></p>
            </div>
        </div> <!--Row-->
    </div> <!--Container-->
    
    
      <div class="container">
        <div class="row">
            <div class="col-sm-6 prac">
                <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field( 'area3' ); ?></h4>
                <img src="<?php bloginfo('template_directory'); ?>/img/ups-system.jpg" alt="" class="img-fluid">   
                <p class=""><?php the_field( 'area3_description' ); ?></p>
            </div>
               <div class="col-sm-6 prac">
                <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field( 'area4' ); ?> </h4>
               <img src="<?php bloginfo('template_directory'); ?>/img/grid-tie-backup.jpg" alt="" class="img-fluid">    
                <p class=""><?php the_field( 'area4_description' ); ?> </p>
            </div>
        </div> <!--Row-->
    </div> <!--Container-->
    
     
</section>
<!--Practice Ends-->

<!--Contact-->
<section class="contact animated wow slideInUp" data-wow-delay="0.4s" id="contact">
   
   <h3 class="">Contact us for a free Consultation</h3>
   <p>Send us your contact info and we will get back to you soon as possible</p>
   
    <div class="conrow">
        <?php echo do_shortcode( '[contact-form-7 id="74" title="My form"]' ); ?>
    </div>
</section>
<!--Contact Ends-->



<?php get_footer(); ?>
