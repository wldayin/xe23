<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">

		<div id="sidebar_piece">
		</div><!-- sidebar_piece ends -->

			<?php // get_search_form(); ?>

      <?php include (TEMPLATEPATH . '/searchform.php'); ?>

			<ul>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() ) {
			?><li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<h2 class="browsing">Page Not Found</h2><br />
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<h2 class="browsing">Currently browsing:<br /> <?php single_cat_title(''); ?> Category Archives</h2>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<h2 class="browsing">Currently browsing:<br /> <?php the_time('l, F jS, Y'); ?> Archives</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="browsing">Currently Browsing: <br /><?php the_time('M Y'); ?> Archives</h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2 class="browsing">Currently Browsing:<br /> <?php the_time('Y'); ?> Archives</h2>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<h2 class="browsing">Search Results for:<br /> '<?php the_search_query(); ?>'</h2>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="browsing">Currently Browsing: <br /> Blog Archives</h2>

			<?php } ?>

			</li> <?php }?>
			
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks('target=blank'); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<!--<li><?php //wp_loginout(); ?></li>-->
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div><!-- sidebar ends -->