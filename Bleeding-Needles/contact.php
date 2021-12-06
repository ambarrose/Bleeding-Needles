<?php

/*

Template Name: Contact Us Template

*/

?>

<?php get_header(); ?>

<div class="contact-img bg-dark">
    <img src="<?php echo get_theme_mod("custom_image2"); ?>" alt="">
</div>

  <div class="contact-box">
    <h1 class="welcome-text pb-3">Contact Us</h1>
    <?php
    echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]');
    ?>
  </div>



<div class="mob-contact-img"></div>

<div class="mob-contact-box bg-dark">
  <h1 class="mob-beige-heading">Contact Us</h1>
  <?php
  echo do_shortcode('[contact-form-7 id="28" title="Contact form"]');
  ?>
</div>


<div class="contact bg-dark">

    <div class="details">
        <h4 class="hours pt-3">hours</h4> <br>
      <div class="col-sm pt-5">
          <h4 class="contact-us"><i class="fa fa-clock-o" aria-hidden="true"></i>TUESDAY TO SATURDAY 10AM-5PM <br><br>
          <i class="fa fa-phone" aria-hidden="true"></i>04 123 4567 <br><br>
          <i class="fa fa-map-marker" aria-hidden="true"></i> 42 Ward Street Trentham, Upper Hutt</h4>
      </div>

    </div>

    <div class="map">
      <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>

</div>

<div class="mob-contact bg-dark">

    <div class="mob-details px-2">
        <h4 class="beige-heading pt-5">hours</h4>
      <div class="mob-contact-details">
          <h4 class="contact-us"><i class="fa fa-clock-o" aria-hidden="true"></i>TUESDAY TO SATURDAY 10AM-5PM <br><br>
          <i class="fa fa-phone" aria-hidden="true"></i>04 123 4567 <br><br>
          <i class="fa fa-map-marker" aria-hidden="true"></i> 42 Ward Street Trentham, Upper Hutt</h4>
      </div>

    </div>

    <div class="mob-map">
      <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>

</div>

    <div class="r-policy bg-dark">
        <h2  class="beige-heading">return policy</h2>

        <p class="policy">Bleeding Needles Tattoos is not obligated to provide you with a refund or exchange if you change your mind about a purchase - so please choose your items and sizes CAREFULLY. <br><br> In the unlikely event that the product you purchased is faulty, we will happily exchange your item. <br><br>
        Our Accessory products are provided by Printful, their policy may differ from ours, and will need to be coordinated with them directly. Please refer to Printful’s policy here. <br><br>
        If you have any questions about our policy, please refer to this website for help -  Consumer.org.nz <br><br>
        Thank You!</p>
    </div>

    <div class="mob-r-policy bg-dark">
        <h2 class="beige-heading">return policy</h2>

        <p class="mob-policy px-3">Bleeding Needles Tattoos is not obligated to provide you with a refund or exchange if you change your mind about a purchase - so please choose your items and sizes CAREFULLY. <br><br> In the unlikely event that the product you purchased is faulty, we will happily exchange your item. <br><br>
        Our Accessory products are provided by Printful, their policy may differ from ours, and will need to be coordinated with them directly. Please refer to Printful’s policy here. <br><br>
        If you have any questions about our policy, please refer to this website for help -  Consumer.org.nz <br><br>
        Thank You!</p>
    </div>

<?php get_footer(); ?>
