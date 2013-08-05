		<form action="<?php bloginfo('url'); ?>/" id="search_form" method="get">
			<fieldset>
			<input type="text" class="txt" id="s" name="s" value="<?php the_search_query(); ?>" />
			<input type="image" class="submit" id="searchsubmit" src="<?php bloginfo('template_directory'); ?>/images/btns/btn_search.jpg" title="Search" />
			</fieldset>
		</form>