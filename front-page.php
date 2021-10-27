<?php
/**
 * The template for displaying the static home page
 *
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stories_of_Us
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class="start-here"><?php 
// get the link to the most recent post 
$homelink_query = new WP_Query('post_type=post&posts_per_page=1'); 
while ($homelink_query->have_posts()) : $homelink_query->the_post(); 
?>  
<a class="button" href="<?php the_permalink() ?>">Begin Here</a>  
<?php 
endwhile; 
wp_reset_postdata(); 
?></div>
		
	</main><!-- #main -->
<div class="mobile-start-here"><?php 
// get the link to the most recent post 
$homelink_query = new WP_Query('post_type=post&posts_per_page=1'); 
while ($homelink_query->have_posts()) : $homelink_query->the_post(); 
?>  
<a class="button" href="<?php the_permalink() ?>">Begin Here</a>  
<?php 
endwhile; 
wp_reset_postdata(); 
?></div>
<?php
// get_sidebar();
get_footer();
