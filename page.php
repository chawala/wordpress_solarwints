<?php get_header(); ?>

<div class="container">
<h3 class="about"><?php the_field( 'about_title' ); ?></h3>
    
<img src="<?php bloginfo('template_directory'); ?>/img/underline.png" alt="" class="fluidSec"> 
    
<p><?php the_field( 'about' ); ?></p>    

</div>


<?php get_footer(); ?>
