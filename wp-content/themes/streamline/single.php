<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="entry" id="post-<?php the_ID(); ?>">
			
				<div class="entry_top entry_top_first">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<div class="date_holder">
							
								<div class="month_year"><?php the_time('M d') ?><br /><span class="smaller"><?php the_time('Y') ?></span></div>
								
								<div class="comments_link">
								<?php if ( comments_open() ) { ?>
								<a href="#respond">Leave a<br /><span class="smaller">Comment</span></a>
								<?php } else { ?>
								Comments Off
								<?php } ?>
								</div>
															
							</div><!-- date_holder ends -->
					
						</div><!-- entry_top ends -->
						
						<div class="faux_entry">

							<div class="entry_content entry_content_first">
								
							<?php the_content('Read the rest of this entry &raquo;'); ?>
							
							</div><!-- entry_content ends -->
							
							<div class="entry_footer">
							<span>Written by <?php the_author() ?> in: <?php the_category(', ') ?> |</span> <span><?php edit_post_link('Edit', '', ' |</span> <span>'); ?><?php the_tags('Tags: ', ', ', ''); ?></span>
							</div><!-- entry_footer ends -->
							
						</div><!-- faux_entry ends -->

					</div><!-- entry ends -->

		<!--<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>-->

	<?php comments_template(); ?>

	<?php endwhile; else: ?>
	
	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>