<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p class="post-info">Posted On <?php the_date('', '', ' at ', true); the_time(); ?> in <?php the_category(', '); edit_post_link('Edit this post.', ' &#183; ', ''); ?></p>
			
			<?php the_content('Continue With "'.the_title('', '', false).'"...') ?>
			
			<p class="post-author">Posted by <?php the_author(); the_tags( ' &#183; Tags: ', ', ', ' &#183;' ); ?> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		</div>
	
	<?php endwhile; else : ?>
	
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>