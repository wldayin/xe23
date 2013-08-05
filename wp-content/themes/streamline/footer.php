<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

				</div><!-- content_left ends -->
				
				<?php get_sidebar(); ?>

				<div id="widget_lists">

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Bar') ) : ?>

					<div class="widget_list_unit">
					
					<h3>Visit Our Friends!</h3>
					
					<p>A few highly recommended friends...</p>
					
					<ul>
					<?php
						foreach(get_bookmarks() as $key => $item) {
						?><li><a href="<?=$item->link_url;?>" target="_blank"><?=$item->link_name;?></a></li><?php echo "\n" ?>
						<?php
						}						
					?>
					
					</ul>
					
					</div><!-- widget_list_unit -->

					<div class="widget_list_unit">

					<h3>Archives</h3>
					
					<p>All entries, chronologically...</p>
					
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
					</div><!-- widget_list_unit -->

					<div class="widget_list_unit">

					<h3>Pages List</h3>
					
					<p>General info about this blog...</p>
					
					<ul>
					<?php wp_list_pages('title_li='); ?>
					</ul>
				
					</div><!-- widget_list_unit -->

					<?php endif ?>

					<div id="widget_lists_bottom">
					</div><!-- widget_lists_bottom ends -->

				</div><!-- widget_lists ends -->

				</div><!-- faux_outer ends -->
			
				<div id="footer">
					
					<div id="footer_left">Copyright &copy; <?= date('Y') ?> - <?= bloginfo('name') ?></div>
					
					<div id="footer_right">
					Powered by <a href="http://www.wpcourse.com">WordPress</a>
					</div>

				</div><!-- footer ends -->

			</div><!-- content ends -->

		</div><!-- faux_right ends -->
		
	</div><!-- faux_left ends -->
	
</div><!-- container ends -->

<?php wp_footer(); ?>
</body>
</html>