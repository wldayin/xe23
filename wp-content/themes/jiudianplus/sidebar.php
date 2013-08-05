<div class="right">

 <?php if ( is_single() ) : ?>
 
      <?php $categories = get_the_category(); foreach ($categories as $category) : ?>
         <div class="sidebar">
          <h2><strong>同分类文章</strong></h2>
            <ul>
            <?php $posts = get_posts('numberposts=10&category='. $category->term_id); foreach($posts as $post) : ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <?php endforeach; ?> <?php endforeach; ?>
            </ul>
         </div>

 <?php else : ?>
 
       <div class="sidebar">
         <h2><strong>最新文章</strong></h2>
            <ul><?php get_archives('postbypost', 10); ?></ul>
       </div> 
	   
         <div class="sidebar">
           <h2><strong>热评推荐</strong></h2>
             <ul><?php get_most_comment(10,1000); ?></ul>
         </div>
<?php endif ?>

          <div class="sidebar">
            <h2><strong>最新评论</strong></h2>
              <ul><?php global $wpdb; $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,SUBSTRING(comment_content,1,20) AS com_excerpt
FROM $wpdb->comments
LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID)
WHERE comment_approved = '1' AND comment_type = '' AND
post_password = ''
ORDER BY comment_date_gmt DESC
LIMIT 10";
$comments = $wpdb->get_results($sql);
$output = $pre_HTML;
foreach ($comments as $comment) {
$output .= "\n<li>".strip_tags($comment->comment_author)
.":" . " <a href=\"" . get_permalink($comment->ID) .
"#comment-" . $comment->comment_ID . "\" title=\"on " .
$comment->post_title . "\">" . strip_tags($comment->com_excerpt)
."</a></li>";
} $output .= $post_HTML;
echo $output; ?></ul>
</div>


<div class="sidebar">
<h2><strong>友情链接</strong></h2>
<ul><?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
</ul>
</div>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif ?>
					
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="搜索" />
</div>
</form>

</div>
