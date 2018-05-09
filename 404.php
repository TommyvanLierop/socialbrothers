<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package socialbrothers
 */

 get_header();
?>

	<section class="error-404 not-found">
		<div class="page-content">
      <h1 class="page-title style-first-word"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'socialbrothers'); ?></h1>

      <p><?php esc_html_e('It looks like nothing was found at this location. ', 'socialbrothers'); ?></p>

      <a href="<?php echo home_url(); ?>" class="primary-btn">Go home instead</a>
		</div>
	</section>

<?php get_footer();
