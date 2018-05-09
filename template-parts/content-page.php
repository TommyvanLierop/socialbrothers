<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package socialbrothers
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('d-flex flex-column'); ?>>
  <?php get_template_part('partials/logo-header'); ?>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5 d-flex flex-column justify-content-between">
          <?php get_template_part('partials/intro-block'); ?>

          <?php echo do_shortcode('[contact-form-7 id="12" title="Email form"]'); ?>
        </div>

        <div class="col-12 col-md-5 offset-md-2 order-first order-md-2 d-flex flex-column justify-content-end">
          <div class="d-flex justify-content-end">
            <?php get_template_part('partials/textblock-square'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
