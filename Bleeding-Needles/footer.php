<?php wp_footer(); ?>

<div id="footer" class="container-fluid">

    <div id="f-nav-section" class="row">

      <div class="col-4 col-md mt-2">
        <small class="d-block">© Bleeding Needles 2017–2021</small>
      </div>

      <div id="f-links" class="col-8 col-md">

					<a id="f-about-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('about-us')); ?>">About Us</a>

					<a id="f-gallery-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>">Our Work</a>

					<a id="f-contact-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>">Contact Us</a>

      </div>

    </div>

</div>

<div id="mob-footer" class="container-fluid">

    <div id="mob-f-nav-section">

      <div id="mob-f-links" class="col-12">

					<a id="mobf-about-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('about-us')); ?>">About Us</a>

					<a id="mobf-gallery-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>">Our Work</a>

					<a id="mobf-contact-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>">Contact Us</a>

      </div>

      <div class="col-md mt-2">
        <small class="d-block text-light">© Bleeding Needles 2017–2021</small>
      </div>

    </div>

</div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
