<?php theme_include('header'); ?>

<article>
	<header>
		<h1><?php echo article_title(); ?></h1>
		<small><?php echo article_date(); ?></small>
	</header>
	<?php echo article_markdown(); ?>
</article>

<?php theme_include('footer'); ?>
