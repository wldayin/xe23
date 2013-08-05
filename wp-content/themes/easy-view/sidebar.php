	<div id="sidebar">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

			<li><h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<li><h2>Meta</h2>
					<ul>
						<li><?php wp_loginout(); ?></li>
						<?php wp_register(); ?>
						<?php wp_meta(); ?>
					</ul>
				</li>
			<?php } endif; ?>
		</ul>
	</div>
