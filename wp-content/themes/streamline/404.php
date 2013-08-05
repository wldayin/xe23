<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

		<div class="entry">
		
			<div class="entry_top entry_top_first">

			<h2>Error - Page Not Found</h2>

			</div><!-- entry_top ends -->
			
			<div class="faux_entry">

				<div class="entry_content entry_content_first">
					
				<p>The page you are looking for has moved or does not exist. Please check the URL or visit the <a href="<?php echo get_option('home'); ?>/">Home Page</a>.</p>
				
				<p>Alternatively, use one of the links below to find what you're looking for:</p>
				
				<ul>
					<?php wp_list_pages('title_li=' ); ?>
					<li><a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a></li>
				</ul> 
				
				</div><!-- entry_content ends -->
				
				<div class="entry_footer">
				</div><!-- entry_footer ends -->
				
			</div><!-- faux_entry ends -->

		</div><!-- entry ends -->
<?php get_footer(); ?>