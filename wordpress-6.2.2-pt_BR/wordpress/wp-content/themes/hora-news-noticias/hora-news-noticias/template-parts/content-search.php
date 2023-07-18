<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			hora_news_noticias_posted_on();
			hora_news_noticias_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php hora_news_noticias_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php hora_news_noticias_entry_footer(); ?>
	</footer>
</article><?php the_ID(); ?>
