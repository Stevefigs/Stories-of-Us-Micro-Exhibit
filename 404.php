<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stories_of_Us
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oh no, retreat! Retreat I say!', 'stories-of-us' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Well this is no fun. Seems like we`ve reached a dead end.', 'stories-of-us' ); ?></p>

					<?php
					the_widget( 'WP_Widget_Recent_Posts' );
					?>


			

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
