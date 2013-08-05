<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php $i = 1; // This is the beginning of the loop that counts to identify post #1 ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

					<div class="entry" id="post-<?php the_ID(); ?>">
					
						<div class="entry_top<?php if ($i == 1) { ?> entry_top_first<?php } // This is the if statement that identifies post #1 ?>">

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<div class="date_holder">
							
								<div class="month_year"><?php the_time('M d') ?><br /><span class="smaller"><?php the_time('Y') ?></span></div>
								
								<div class="comments_link">
									<?php if ( comments_open() ) { ?>
									<?php comments_popup_link('0', '1', '%'); ?><br />
										<span class="smaller">
											<?php comments_popup_link('Comments', 'Comment', 'Comments'); ?>
										</span>
									<?php } else { ?>
										Comments Off
									<?php } ?>
								</div>
															
							</div><!-- date_holder ends -->
					
						</div><!-- entry_top ends -->
						
						<div class="faux_entry">

							<div class="entry_content<?php if ($i == 1) { ?> entry_content_first<?php } // This is the if statement that identifies post #1 ?>">
								
							<?php the_content('Read the rest of this entry &raquo;'); ?>
							
							</div><!-- entry_content ends -->
							
							<div class="entry_footer">
							<span>Written by <?php the_author() ?> in: <?php the_category(', ') ?> |</span> <span><?php edit_post_link('Edit', '', ' |</span><span> '); ?><?php the_tags('Tags: ', ', ', ' |</span> <span>'); ?> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> |</span><span> <a href="<?php the_permalink() ?>">More &gt;&gt;</a></span>
							</div><!-- entry_footer ends -->
							
						</div><!-- faux_entry ends -->

					</div><!-- entry ends -->

	    <?php $i++; // This is the end of the loop that identifies post #1. See comments above. ?>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_footer(); ?>