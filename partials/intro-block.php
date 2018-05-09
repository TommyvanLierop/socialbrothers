<div class="intro-block">
  <?php if (get_field('intro_title')){ ?>
    <h1 class="style-first-word"><?php the_field('intro_title'); ?></h1>
  <?php } ?>

  <hr>

  <?php if (get_field('intro_text')) {
    the_field('intro_text');
  } ?>
</div>
