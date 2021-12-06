<?php

/*

Template Name: Our Work Template

*/

?>

<?php get_header(); ?>



<div class="gallery bg-dark">
    <h2  class="beige-heading text-center">Our Work</h2>

    <div class="photoblocks-gallery">

      <?php
      echo do_shortcode('[photoblocks id=1]');
      ?>

    </div>
</div>

<div id="testimonial" class="bg-dark">

  <div class="col-12">
   <h2 class="beige-heading">testimonials</h2>
 </div>

    <div class="gallery-news-post col-8 mb-4">

     <?php
     query_posts(array(
       'post_type' => Testimonial
       )
     );
     ?>
     <?php
     if (have_posts() ) :
         while (have_posts() ) : the_post(); ?>

           <!-- here's the area where it loops over each post -->
           <div class="col-6">
                <div class="card mb-3 mx-4">
                  <?php the_post_thumbnail("medium", ['class'=>'card-img-top']); ?>
                  <div class="card-body">
                      <h4 class="card-title" href="<?php the_permalink(); ?>">
                      <?php the_title() ?>
                      </h4>
                    <p>Posted: <?php echo get_the_date(); ?></p>
                    <p class="card-text"><?php new_excerpt_length(); ?></p>
                  </div>
                </div>
           </div>

       <?php
     endwhile;
           else : echo '<p>There are no posts!</p>';
       endif;
       ?>
    </div>
  </div>

  <div id="mob-testimonial" class="bg-dark">

    <div class="col-12">
     <h2 class="mob-beige-heading">testimonials</h2>
   </div>
    <div class="mob-testimonial-post mb-5 col-6">

     <?php
     query_posts(array(
       'post_type' => Testimonial
       )
     );
     ?>
     <?php
     if (have_posts() ) :
         while (have_posts() ) : the_post(); ?>

           <!-- here's the area where it loops over each post -->
           <div class="col-12">
                <div class="card mb-3">
                  <?php the_post_thumbnail("medium", ['class'=>'card-img-top']); ?>
                  <div class="card-body">
                      <h4 class="card-title" href="<?php the_permalink(); ?>">
                      <?php the_title() ?>
                      </h4>
                    <p>Posted: <?php echo get_the_date(); ?></p>
                    <p class="card-text"><?php new_excerpt_length(); ?></p>
                  </div>
                </div>
           </div>

       <?php
     endwhile;
           else : echo '<p>There are no posts!</p>';
       endif;
       ?>
    </div>
  </div>

<div class="banner-img">
    <h3 class="banner-text">pop in to chat about your next ink</h3>
    <a class="booking-link btn" href="#" role="button"><h4> make a booking</h4></a>

    <h3 class="mob-banner-text">pop in to chat about your next ink</h3>
    <a class="mob-booking-link btn" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>" role="button"><h4> make a booking</h4></a>
</div>



<?php get_footer(); ?>
