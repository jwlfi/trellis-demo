<?php
/**
 * The template for displaying all single posts.
 *
 * @package SweetHeat
 */

get_header(); ?>

		<main id="blog" class="single-post content-full-width" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'past_event' ); ?>

				<?php sweetheat_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->


<?php get_footer(); ?>