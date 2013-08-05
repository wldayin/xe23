<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11"><meta name="verification" content="http://9yls.net/" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); } 
elseif (is_single() || is_page() ) { single_post_title(); } elseif (is_search() ) { bloginfo('name'); echo " 搜索结果: "; echo wp_specialchars($s); } else { wp_title('',true); } ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<? if (is_home()){
$description = "你的介绍.";
$keywords = "WordPress, WordPress Theme, WordPress 主题, 博客, 主题";
} elseif (is_single()){if ($post->post_excerpt) {$description  = $post->post_excerpt;
} else {$description = substr(strip_tags($post->post_content),0,220);}
$keywords = ""; $tags = wp_get_post_tags($post->ID);foreach ($tags as $tag ) {$keywords = $keywords . $tag->name . ", ";}}?>
<meta name="keywords" content="<?=$keywords?>" />
<meta name="description" content="<?=$description?>" />

<?php if(is_single()){?><link rel="canonical" href="<?php echo get_permalink($post->ID);?>" /> <?php } ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
<?php wp_head(); ?>
</head> <body>

<div class="header"><div class="wapper clear">
<a href="<?php echo get_option('home'); ?>/"><div class="logo"><strong><?php bloginfo('name'); ?></strong></div></a>
<ul class="menu clear">
<li class="none"><a href="<?php echo get_option('home'); ?>/">首页</a></li>
<?php wp_list_categories('title_li=&include=8,7,3'); ?>
</ul>
<ul class="nav clear">
<li class="myread"><a href="<?php bloginfo('rss_url'); ?>">订阅本站</a></li>
<?php wp_meta(); ?>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
</ul>
</div></div>
 
<div class="wapper clear main">