<?php get_header(); ?>

<div class="archive">

<div class="top">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<a href="<?php echo get_option('home'); ?>/" title="首页">首页</a> &raquo; <?php
if (is_category()) { ?><?php echo single_cat_title(); ?><?php }
elseif (is_day()) { ?><?php the_time('Y-m-d'); ?><?php }
elseif (function_exists('is_tag') && is_tag()) { ?><?php echo single_tag_title(); ?><?php }
elseif (is_month()) { ?><?php the_time('Y-m'); ?><?php }
elseif (is_year()) { ?><?php the_time('Y'); ?><?php }
elseif (is_search()) { ?>搜索结果<?php }
elseif (is_author()) { ?>Author Archive</h2><?php }
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>Blog Archives
<?php } ?>
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
</div>


<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>