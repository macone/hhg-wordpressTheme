<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-8 blog-main">
			<p>test</p>

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
			endwhile; endif;
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>