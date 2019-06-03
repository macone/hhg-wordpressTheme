<?php get_header(); ?>
<div id="content" class="grid_8 <?php echo of_get_option('blog_sidebar_pos') ?>">
  <h2>Search for: <span>"<?php the_search_query(); ?>"</span></h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <?php if ( has_post_thumbnail()) { ?>	
		<?php echo '<figure class="featured-thumbnail no-hover">'; the_post_thumbnail(); echo '</figure>'; ?>
	 <?php } ?>
      <div class="extra-wrap">
	 	<h3 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		 <div class="post-meta">
			<time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('d.m.Y'); ?></time>
		 </div><!--.post-meta-->
		 <div class="post-content">
		   <div class="excerpt alt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,28);?></div>
		   <a href="<?php the_permalink() ?>" class="button">more info</a>
		 </div>
	 </div>
    </article>

  <?php endwhile; else: ?>
    <div class="no-results">
      <h2>No Results</h2>
      <p>Please feel free try again!</p>
      <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
    </div><!--noResults-->
  <?php endif; ?>

  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav class="oldernewer">
      <div class="older">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div><!--.older-->
      <div class="newer">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div><!--.newer-->
    </nav><!--.oldernewer-->
  <?php endif; ?>

</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
