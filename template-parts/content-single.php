<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	<br><br>
	<p>
		<a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Voltar</a>
	</p>
</article><!-- #post-## -->

