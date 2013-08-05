<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1 class="title"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
			<?php edit_post_link('Edit this page.', '<p class="post-author">', '</p>'); ?>
		</div>
	
	<?php endwhile; endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>