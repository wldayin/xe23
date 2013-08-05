<?php get_header(); ?>

<!--左侧分类 开始--> 
<div class="left">
<?php $display_categories = array(3,7,8); foreach ($display_categories as $category) { ?>
<?php query_posts("showposts=1&cat=$category"); ?>

 <div class="post" id="post-<?php the_ID(); ?>">
   <div class="ttt"><a href="<?php echo get_category_link($category);?>"><?php single_cat_title(); ?></a><span><?php echo category_description($category); ?></span></div>
   
   <?php while (have_posts()) : the_post(); ?>
       <div class="clear">
          <div class="headline">
 <?php if( get_post_meta($post->ID, "Image", true) ): ?>
<a href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo get_post_meta($post->ID, "Image", true); ?>" title="<?php the_title(); ?>" alt="" width="310" height="245" /></a>
  <?php else: ?>     
          <!--如果没有 Image 的自定义字段,则显示主题中自带的图片-->
          <?php if($category==7){?> 
<a href="<?php the_permalink() ?>" rel="bookmark"><img src="wp-content/themes/jiudianplus/images/mysql.jpg" title="<?php the_title(); ?>" alt="" width="310" height="245" /></a>
			<?php }elseif($category==8){ ?>
<a href="<?php the_permalink() ?>" rel="bookmark"><img src="wp-content/themes/jiudianplus/images/linux.jpg" title="<?php the_title(); ?>" alt="" width="310" height="245" /></a>			
			<?php }else{ ?>
<a href="<?php the_permalink() ?>" rel="bookmark"><img src="wp-content/themes/jiudianplus/images/php.jpg" title="<?php the_title(); ?>" alt="" width="310" height="245" /></a>
			<?php } ?>
  <?php endif; ?>
 
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<div class="txt"><?php the_excerpt(); ?></div>
  <div class="from">
    <span class="pinglun"><?php comments_popup_link('添加评论', '1条评论', '%条评论'); ?></span>
    作者:<?php the_author_posts_link('') ?> <?php the_time('Y-m-d') ?>
   </div>
   </div></div>
 <?php endwhile; ?>
    </div>
<?php } ?> 
</div>
<!--左侧分类 结束-->


<!--中间分类 开始-->
<div class="cen">
<?php $display_categories = array(3,7,8); foreach ($display_categories as $category) { ?>
<?php query_posts("showposts=4&cat=$category&offset=1")?>
<div class="cat">
 <?php while (have_posts()) : the_post(); ?>
 <div class="post" id="post-<?php the_ID(); ?>">
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<div class="txt"><?php the_excerpt(); ?></div>
<div class="from">
<span class="pinglun"><?php comments_popup_link('添加评论', '1条评论', '%条评论'); ?></span>
 <?php the_time('Y-m-d') ?>
</div>
</div>
 <?php endwhile; ?>
 </div>
<?php } ?> 
 </div>
<!--中间分类 结束-->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>