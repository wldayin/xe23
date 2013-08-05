<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php $i = 1; // This is the beginning of the loop that counts to identify post #1 ?>

	<?php if (have_posts()) : ?>
		<!--
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>-->


		<?php while (have_posts()) : the_post(); ?>

			<div class="entry" id="post-<?php the_ID(); ?>">

				<div class="entry_top<?php if ($i == 1) { ?> entry_top_first<?php } // This is the if statement that identifies post #1 ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<div class="date_holder">
							
								<div class="month_year"><?php the_time('M d') ?><br /><span class="smaller"><?php the_time('Y') ?></span></div>
								
								<div class="comments_link">
									<?php if ( comments_open() ) { ?>
									<a href="<?php the_permalink() ?>#respond">Leave a<br /><span class="smaller">Comment</span></a>
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
							<span>Written by <?php the_author() ?> in: <?php the_category(', ') ?> |</span> <span><?php edit_post_link('Edit', '', ' |</span> <span>'); ?><?php the_tags('Tags: ', ', ', ''); ?></span>
							</div><!-- entry_footer ends -->
							
						</div><!-- faux_entry ends -->

					</div><!-- entry ends -->

	    <?php $i++; // This is the end of the loop that identifies post #1. See comments above. ?>
				
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

<?php get_footer(); ?>
