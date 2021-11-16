<?php get_header(); ?>


  <div class="home-img">

    <div class="welcome-box">
      <h1 class="welcome-text text-center">Let Our Needles Tell Your Story</h1>
    </div>

  </div>


  <div class="services">
    <h2>Our Services</h2>

    <div class="container">
      <div class="row">
        <div class="col-sm">
            <p><img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Neo-Traditional <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Blackwork <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Illustrative Portraits</p>
        </div>
        <div class="col-sm">
          <p><img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Floral Pieces <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Realism <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Water Colour</p>
        </div>
        <div class="col-sm">
          <p><img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Geometric Work <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Full Colour <br><br>
            <img class="bolt" src="images/outline_bolt_black_24dp.png" alt="">Animation Tattoo</p>
        </div>
      </div>
    </div>

  </div>


  <div class="banner-img">
      <h3 class="banner-text">pop in to chat about your next ink</h3>
      <a class="booking-link btn mt-2" href="#" role="button"><h4> make a booking</h4></a>

  </div>


  <div class="our-work">
        <h3>our work</h3>

        <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>

        <a class="booking-link btn mt-2" href="#" role="button"><h4> view gallery</h4></a>

  </div>


  <div id="news">

    <div class="col-12">
     <h2>News items</h2>
   </div>

     <div class="row">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <!-- here's the area where it loops over each post -->
            <div class="col-3">
                 <div class="card mb-3">
                   <?php the_post_thumbnail("medium", ['class'=>'card-img-top']); ?>
                   <div class="card-body">
                     <h5 class="card-title">
                       <a href="<?php the_permalink(); ?>">
                       <?php the_title(); ?>
                       </a>
                     </h5>

                     <p>Posted: <?php echo get_the_date(); ?></p>
                     <p class="card-text"><?php new_excerpt_length(); ?></p>

                     <button id="card-link" class="rounded-pill text-light" href="<?php the_permalink(); ?>">Read More</button>
                   </div>
                 </div>
            </div>
        <?php endwhile;
            else : echo '<h3>There are no posts!</h3>';
        endif;
        ?>
      </div>
  </div>


</body>

<?php get_footer(); ?>
