<?php

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'before_widget' => '<div class="sidebar %1$s %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2><strong>',
        'after_title' => '</h2></strong>',
    ));
	
// 页面翻页
function page_navi($before='', $after='', $prelabel='', $nxtlabel='', $pages_to_show=6, $always_show=false) {
global $request, $posts_per_page, $wpdb, $paged;
if(empty($prelabel)) { $prelabel = '&laquo;';
} if(empty($nxtlabel)) {$nxtlabel = '&raquo;';} $half_pages_to_show = round($pages_to_show/2);
if (!is_single()) {if(!is_category()) {preg_match('#FROM\s(.*)\sORDER BY#siU', $request, $matches); } else {
preg_match('#FROM\s(.*)\sGROUP BY#siU', $request, $matches); }$fromwhere = $matches[1];
$numposts = $wpdb->get_var("SELECT COUNT(DISTINCT ID) FROM $fromwhere");
$max_page = ceil($numposts /$posts_per_page);if(empty($paged)) {$paged = 1;}if($max_page > 1 || $always_show) {
echo"$before <div class='pagers'><span>当前第 $paged / $max_page 页 : </span>"; if ($paged >= ($pages_to_show-1)) {
echo'<a href="http://9yls.net/">&laquo; 首页</a>' ; }
previous_posts_link($prelabel); for($i = $paged - $half_pages_to_show; $i <= $paged + $half_pages_to_show; $i++) { if ($i >= 1 && $i <= $max_page) { if($i == $paged) {echo "<strong>$i</strong>";
} else {echo'<a href="'.get_pagenum_link($i).'">'.$i.'</a>';}}}next_posts_link($nxtlabel, $max_page);
if (($paged+$half_pages_to_show) < ($max_page)) {echo '<a href="'.get_pagenum_link($max_page).'">最后 &raquo;</a>'; }
echo "</div> $after";}}}

// 评论引用
function pings($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
<li id="comment-<?php comment_ID(); ?>" class="pings"><?php printf('%1$s. ', ++$trackbackcount); ?> <cite><?php comment_author_link(); ?></cite></li> <?php }


// 热评文章  
function get_most_comment($posts_num=10, $days=30){  
global $wpdb;  
$sql = "SELECT `ID` , `post_title` , `comment_count` FROM $wpdb->posts WHERE `post_type` = 'post' AND TO_DAYS( now( ) ) - TO_DAYS( `post_date` ) < $days 
ORDER BY `comment_count` DESC LIMIT 0 , $posts_num ";  
$posts = $wpdb->get_results($sql);  
$output = "";  
foreach ($posts as $post){  
$output .= "\n<li><a href= \"".get_permalink($post->ID)."\" rel=\"bookmark\" title=\"".$post->post_title."\" >".$post->post_title."</a></li>";  
} echo $output; }

?>