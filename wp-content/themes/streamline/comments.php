<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
	?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
		}
	}
?>

<!-- You can start editing here. -->

<div id="comments_holder">
	
<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<!--<div class="navigation">
		<div class="alignleft"><?php // previous_comments_link() ?></div>
		<div class="alignright"><?php // next_comments_link() ?></div>
	</div>-->

	<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li>
		<div <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
		
		<p class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a></p>
			
			<div class="avatar_holder">
			<?php echo get_avatar($comment, '40', get_bloginfo('template_directory').'/images/photos/default_avatar.gif' ); ?>
			</div><!-- avatar_holder ends -->
			
			<div class="comment_holder">			
			<cite><?php comment_author_link() ?></cite> says:
			<?php if ($comment->comment_approved == '0') : ?>
			<p>Your comment is awaiting moderation.</p>
			<?php endif; ?>
      		<br /><br />
			<?php comment_text() ?>
      		</div><!-- comment_holder ends -->

			<p class="clear"><?php edit_comment_link('edit','',''); ?></p>
      
		</div><!-- comment container ends -->

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>
		</li>
	<?php endforeach; /* end for each comment */ ?>

	</ol>

	<!--<div class="navigation">
		<div class="alignleft"><?php // previous_comments_link() ?></div>
		<div class="alignright"><?php // next_comments_link() ?></div>
	</div>-->
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3>Leave a Reply</h3>

<!--<div class="cancel-comment-reply">
	<small><?php //cancel_comment_reply_link(); ?></small>
</div>-->

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <!--<a href="<?php// echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>--></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php //if ($req) echo "aria-required='true'"; ?> class="txt" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php //if ($req) echo "aria-required='true'"; ?> class="txt" />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" class="txt" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="75" rows="9" tabindex="4"></textarea></p>

<p><input name="submit" type="image" id="submit" tabindex="5" value="Submit Comment" src="<?php bloginfo('template_url');?>/images/btns/btn_submit.jpg" /></p>
<?php //comment_id_fields(); ?>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>
</form>

<?php endif; // If registration required and not logged in ?>
</div><!-- respond ends -->

<?php endif; // if you delete this the sky will fall on your head ?>
</div><!-- comments_holder ends -->