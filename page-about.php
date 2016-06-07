<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
<section class="container">
<!-- <h1>Im about page</h1> -->
	<div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
	<div id="primary" class="content-area col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
<!-- <h1>I am work with me</h1> -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'about' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>

</section> <!-- End Container -->	
<?php
get_footer();
