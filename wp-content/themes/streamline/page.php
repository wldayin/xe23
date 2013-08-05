<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="entry" id="post-<?php the_ID(); ?>">

			<div class="entry_top entry_top_first">

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			</div><!-- entry_top ends -->
						
				<div class="faux_entry">

					<div class="entry_content entry_content_first">
						
					<?php the_content(); ?>

					<?php edit_post_link('Edit this', '<p>', '</p>'); ?>	
								
					</div><!-- entry_content ends -->

				</div><!-- faux_entry ends -->
		
		</div><!-- entry ends -->
		
		<?php endwhile; endif; ?>

<?php get_footer(); ?>