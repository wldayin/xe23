<?php get_header(); ?>

<div class="archive">

<?php if (have_posts()) : ?>

<div class="top">
<a href="<?php echo get_option('home'); ?>/" title="首页">首页</a> &raquo; 搜索结果
</div>

  <?php while (have_posts()) : the_post(); ?> 
   <div class="post">
 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<div class="clear">
<div class="from">
<?php the_time('Y-m-d') ?><span><?php comments_popup_link('添加评论', '1条评论', '%条评论'); ?></span></div>
<?php the_excerpt(); ?>
<div class="postinfo">
阅读全文:<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</div>
</div>
</div>
<?php endwhile; ?>
<?php page_navi() ?>

<?php else : ?>

		<h1 class="center">没有找到你需要的</h1>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		
<?php endif; ?>
</div>


<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>