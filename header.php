<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stories_of_Us
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

 <header>
      <div class="burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="50" viewBox="0 0 54 50">
          <g id="Group_2" data-name="Group 2" transform="translate(-1658 -100.234)">
            <rect id="Rectangle_1" data-name="Rectangle 1" width="54" height="12" transform="translate(1658 100.234)" fill="#434343"/>
            <rect id="Rectangle_2" data-name="Rectangle 2" width="54" height="12" transform="translate(1658 119.234)" fill="#434343"/>
            <rect id="Rectangle_3" data-name="Rectangle 3" width="54" height="12" transform="translate(1658 138.234)" fill="#434343"/>
          </g>
        </svg>
      </div>
      <h1 ><a href="<?php echo get_site_url();?>">Stories of Us</a></h1>
 </header> <?php get_template_part( 'template-parts/main-menu' ); ?>