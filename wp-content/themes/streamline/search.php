<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

		<!--<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>-->

			<div class="entry">
			
				<div class="entry_top entry_top_first">

				<h2>Search Results for "<?php the_search_query(); ?>"</a></h2>

				</div><!-- entry_top ends -->

				<div class="faux_entry">

					<div class="entry_content entry_content_first">

					<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
						
						<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
	
						<?php the_excerpt(''); ?>
						
						<p class="full_post"><a href="<?php the_permalink(); ?>">View Full Post &gt;&gt;</a></p>
	
						<?php endwhile; ?>

					<?php else : ?>
				
						<p>No posts found. Try a different search.</p>
						<?php //get_search_form(); ?>
				
					<?php endif; ?>

					</div><!-- entry_content ends -->

				</div><!-- faux_entry ends -->

			</div><!-- entry ends -->

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

<?php get_footer(); ?>