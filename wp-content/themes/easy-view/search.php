<?php get_header(); ?>

	<div id="main">
	
	<h1 class="heading">Search Results</h1>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post result">
			<h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
			<p class="post-author">Posted On <?php the_date('', '', ' at ', true); the_time(); ?> in <?php the_category(', '); edit_post_link('Edit this post.', ' &#183; ', ''); ?> by <?php the_author(); the_tags( ' &#183; Tags: ', ', ', ' &#183;' ); ?> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		</div>

	<?php endwhile; else : ?>

		<h2>No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>