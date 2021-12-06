<?php

/*

Template Name: Home Page Template

*/

?>

<?php get_header(); ?>


  <div class="home-img bg-dark">
    <img src="<?php echo get_theme_mod("custom_image"); ?>" alt="">
  </div>

    <div class="welcome-box">
      <h1 class="welcome-text text-center"><?php echo get_theme_mod("home_title"); ?></h1>
      <p class="home-text">Based in Wellington, our needles love being apart of “the coolest little capital in the world”. <br><br>Our creative artists work closely with you to create the tattoo you deserve helping<br> you put your thought’s and ideas on to skin. </p>
    </div>



  <div id="mob-home">

    <div class="mob-welcome-box">
      <h1 class="mob-welcome-text text-center">Let Our Needles Tell Your Story</h1>
      <p class="mob-home-text text-center mx-3">Based in Wellington, our needles love being apart of “the coolest little capital in the world”. <br><br>Our creative artists work closely with you to create the tattoo you deserve helping<br> you put your thought’s and ideas on to skin. </p>
    </div>

  </div>


  <div id="mob-banner-img"></div>


  <div class="services bg-dark">
    <h2 class="beige-heading">Our Services</h2>

    <div class="container">
      <div id="service-item" class="row">
        <div class="col-sm">
            <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Neo-Traditional <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Blackwork <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Illustrative Portraits</p>
        </div>
        <div class="col-sm">
          <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Floral Pieces <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Realism <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Water Colour</p>
        </div>
        <div class="col-sm">
          <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Geometric Work <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Full Colour <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Animation Tattoo</p>
        </div>
      </div>
    </div>
  </div>


  <div id="mob-services" class=" bg-dark">
    <h2 class="mob-beige-heading">Our Services</h2>

    <div id="mob-container" class="container">

      <div id="mob-service-item">
        <div class="col-sm">
            <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Neo-Traditional <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Blackwork <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Illustrative Portraits</p>
        </div>
        <div class="col-sm">
          <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Floral Pieces <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Realism <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Water Colour</p>
        </div>
        <div class="col-sm">
          <p class="items"><i class="fa fa-bolt" aria-hidden="true"></i>Geometric Work <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Full Colour <br><br>
            <i class="fa fa-bolt" aria-hidden="true"></i>Animation Tattoo</p>
        </div>
      </div>

    </div>

  </div>


  <div class="banner-img">
      <h3 class="banner-text">pop in to chat about your next ink</h3>
      <a class="booking-link btn" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>" role="button"><h4> make a booking</h4></a>

      <h3 class="mob-banner-text">pop in to chat about your next ink</h3>
      <a class="mob-booking-link btn" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>" role="button"><h4> make a booking</h4></a>
  </div>


  <div class="our-work bg-dark">
      <h2 class="beige-heading">our work</h2>
      <?php
      echo do_shortcode('[smartslider3 slider="2"]');
      ?>
      <a class="gallery-link btn mt-5" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>" role="button"><h4> view gallery</h4></a>
  </div>

  <div class="mob-our-work bg-dark">
      <h2 class="mob-beige-heading">our work</h2>
      <?php
      echo do_shortcode('[smartslider3 slider="2"]');
      ?>
      <a class="mob-gallery-link btn" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>" role="button"><h4> view gallery</h4></a>
  </div>


  <div id="news" class="bg-dark">

    <div class="col-12">
     <h2 class="beige-heading">News items</h2>
   </div>

     <div class="news-post col-8">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <!-- here's the area where it loops over each post -->
            <div class="col-10">
                 <div class="card mb-3 mx-4">
                   <?php the_post_thumbnail("medium", ['class'=>'card-img-top']); ?>
                   <div class="card-body">
                      <h4 class="card-title" href="<?php the_permalink(); ?>">
                       <?php the_title(); ?>
                     </h4>
                     <p>Posted: <?php echo get_the_date(); ?></p>
                     <p class="card-text"><?php the_content(); ?></p>
                     <!-- <button id="card-link" href="<?php the_permalink(); ?>"> <h4 class="mt-1"> Read More</h4></button> -->
                   </div>
                 </div>
            </div>
        <?php endwhile;
            else : echo '<h3>There are no posts!</h3>';
        endif;
        ?>
    </div>
  </div>

  <div id="mob-news" class="bg-dark py-4">

    <div class="col-12">
     <h2 class="mob-beige-heading pb-3">News items</h2>
   </div>

     <div class="mob-news-post">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <!-- here's the area where it loops over each post -->
            <div class="col-10">
                 <div class="card mb-3">
                   <?php the_post_thumbnail("medium", ['class'=>'card-img-top']); ?>
                   <div class="card-body">
                      <h4 class="card-title" href="<?php the_permalink(); ?>">
                       <?php the_title(); ?>
                     </h4>
                     <p>Posted: <?php echo get_the_date(); ?></p>
                     <p class="card-text"><?php new_excerpt_length(); ?></p>
                     <!-- <button id="card-link" href="<?php the_permalink(); ?>"> <h4 class="mt-1"> Read More</h4></button> -->
                   </div>
                 </div>
            </div>
        <?php endwhile;
            else : echo '<h3>There are no posts!</h3>';
        endif;
        ?>
  </div>
</div>

<?php get_footer(); ?>
