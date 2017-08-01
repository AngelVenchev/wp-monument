<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Saka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container content-area-inner">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- .container .content-area-inner -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
