<?php get_header(); ?>

<div id="singles">
<div class="single">

<div class="top"><a href="<?php echo get_option('home'); ?>/" title="主页">主页</a> &raquo; <?php the_category(','); ?> &raquo; <?php the_title(); ?>
</div>

  <?php while (have_posts()) : the_post(); ?> 
   <div class="post clear">
 <h3 class="hei"><?php the_title(); ?></h3>

<div class="from">
<?php the_time('Y-m-d') ?><span><?php comments_popup_link('添加留言', '1条评论', '%条评论'); ?></span></div>
<?php the_content(''); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<div class="postinfo">
<?php the_tags('Tags: ', ', ', '<br/>'); ?>
</div>
<p class="postnavi"><?php previous_post_link('<span class="alignleft">%link</span>') ?>
<?php next_post_link('<span class="alignright">%link</span>') ?></p>

<div class="relate">
<!--h3>相关文章</h3-->
<ul><?php wp_related_posts();?></ul>
</div>

<div class="newst">
<h3>最新文章</h3>
<ul><?php get_archives('postbypost', 10); ?></ul>
</div>


</div>

</div>

<div class="single">
<?php comments_template('',true); ?>

<?php endwhile; ?>
</div>
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>