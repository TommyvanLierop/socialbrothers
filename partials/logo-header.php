<header class="header">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <?php if (get_field('logo')) { ?>
        <div class="header-image col col-sm-10 col-md-8 col-lg-5">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php the_field('logo'); ?>" alt="logo from <?php the_field('company_name'); ?>">
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</header>
