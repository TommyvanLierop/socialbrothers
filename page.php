<?php
/**
 * The default template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package socialbrothers
 */

get_header();

  while (have_posts()) {
    the_post();

    get_template_part('template-parts/content', 'page');
  }

get_footer();
