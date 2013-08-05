<?php get_header(); ?>

	<div id="main">

	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<h1>Archives by Month:</h1>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

	<h1>Archives by Subject:</h1>
		<ul>
			<?php wp_list_categories(); ?>
		</ul>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>