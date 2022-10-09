<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

		<!-- 	<?php if ('post' === get_post_type()) : ?>
			<div class="entry-meta">
				<?php
						accounting_posted_on();
						accounting_posted_by();
				?>
			</div>
		<?php endif; ?> -->
	</header><!-- .entry-header -->

	<!-- <?php accounting_post_thumbnail(); ?> -->




</article><!-- #post-<?php the_ID(); ?> -->