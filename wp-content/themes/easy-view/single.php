<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p class="post-info">Posted On <?php the_date('', '', ' at ', true); the_time(); ?> in <?php the_category(', '); edit_post_link('Edit this post.', ' &#183; ', ''); ?></p>
			
			<?php the_content('Continue With "'.the_title('', '', false).'"...') ?>
			
			<p class="comment-info">
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Both Comments and Pings are open ?>
					You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.

				<?php } ?>
			</p>
			
			<p class="post-author">Posted by <?php the_author(); the_tags( ' &#183; Tags: ', ', ', ' &#183;' ); ?> <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></a></p>
		</div>
	
		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>