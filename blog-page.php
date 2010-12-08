<?php
/**
 * Template Name: Blog Page
 * @package WordPress
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'index' ); ?>
			
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>