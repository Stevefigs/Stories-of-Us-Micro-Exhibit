<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stories_of_Us
 */

get_header();
?>


<h1 class="art-title"><?php the_field('post_title');?></h1>


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : the_post(); ?>
    

  <?php the_post_thumbnail();?>

  
  <section class="copy">
    <h1 class="post-title"><?php the_title();?></h1>
    <?php the_content();?>

    <aside class="mobile-post-nav">
    <ul>
      <li><?php previous_post_link();?></li>
      <br>
      <li><?php next_post_link();?></li>

    </ul>
  </aside>

  </section>

  <aside class="post-nav">
  	<ul>
  		<li><?php previous_post_link();?></li>
  		<li><?php next_post_link();?></li>

  	</ul>
  </aside>


		<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();?>
