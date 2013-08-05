<?php get_header(); ?>

<div id="singles">

<div class="single">

<?php while (have_posts()) : the_post(); ?>
 
  <div class="post clear" style="border:none">
    <h3 class="hei"><?php the_title(); ?></h3>
          <?php the_content(''); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
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