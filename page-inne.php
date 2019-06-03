<?php
/**
 * Template Name: Strona z innymi
 */

get_header(); ?>

<?php if(is_page(1106)) { ?>

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <?php if(has_post_thumbnail()) {
          echo '<a href="'; the_permalink(); echo '">';
          echo '<figure class="featured-thumbnail"><span class="img-wrap">'; the_post_thumbnail(); echo '</span></figure>';
          echo '</a>';
          }
        ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/oferty.png" alt="" style="margin-left: 10px" /><br/><br/>
				
<?php

global $post;

$args = array('numberposts' => 99, 'orderby' => 'post_date', 'order' => 'ASC', 'post_type' => 'inne' );



$myposts = get_posts( $args );

?>

<?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<?php $nrref = get_post_meta($post->ID, 'nr_ref', true); $wypis = get_post_meta( get_the_ID(), 'excerpt', true ); $data = get_post_meta( get_the_ID(), 'datastart', true ); $data_dodania = get_post_meta($post->ID, 'data_dodania', true);?>
<div class="grid_4">
	<p style="border-bottom: 1px solid lightgray; background-color: #F3F3F4; padding-left: 10px; min-height: 65px"><a href="<?php the_permalink(); ?>" style="text-decoration: none; font-size: 14px"><strong><?php the_title(); ?></strong></a><br/><span style="color: gray; font-size: 11px">Nr Ref. <?php echo $nrref.' / '.$data_dodania; ?></span></p><div style="min-height: 189px"><?php echo $wypis; ?></div><p style="text-align: right"><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: gray"><img class="pl" src="<?php echo get_template_directory_uri(); ?>/images/oferta_more.png" alt="" /><img class="en" src="<?php echo get_template_directory_uri(); ?>/images/oferta_more_en.png" alt="" /></a></p>
	</div>
	
	

<?php endforeach; ?>

</div>
				
				<div class="clear"></div><div class="hr"></div>
<div class="pl"><h1 style="text-align: center"><a href="../rekrutacja-on-line">&#187; Prześlij nam swoje CV</a></h1></div>
<div class="en"><h1 style="text-align: center"><a href="../rekrutacja-on-line">&#187; Send us your CV</a></h1></div>
<!--<h1><a href="mailto:formularzcv@hhg.pl">&#187; Prześlij nam swoje CV</a></h1>-->
<div class="hr"></div>
<div class="pl"><h2 style="font-family: 'Aller Regular'; text-align: center">Gwarantujemy, że znajdziesz wymarzoną pracę!</h2></div>

<div class="en"><h2 style="font-family: 'Aller Regular'; text-align: center">We guarantee you'll find your dream job!</h2></div>

  <?php endwhile; ?>
</div><!--#content-->



<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <?php if(has_post_thumbnail()) {
          echo '<a href="'; the_permalink(); echo '">';
          echo '<figure class="featured-thumbnail"><span class="img-wrap">'; the_post_thumbnail(); echo '</span></figure>';
          echo '</a>';
          }
        ?>
  
				<?php the_content(); ?>
        <div class="pagination">
          <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
        </div><!--.pagination-->
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->

<?php } else if(is_page(578)) { ?>
<img src="<?php bloginfo( 'template_url' ); ?>/images/referencje.png" alt="" />
<?php global $post;
$args = array('numberposts' => 99, 'orderby' => 'post_date', 'order' => 'ASC', 'post_type' => 'referencje' );
$myposts = get_posts( $args );

?>


<?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<?php $logo = get_post_meta(get_the_ID(), 'logo', true); $tresc = nl2br(get_post_meta( get_the_ID(), 'tresc', true )); $podpis = nl2br(get_post_meta( get_the_ID(), 'podpis', true ));  ?>
<?php if($logo) { ?>

<div class="grid_6" style="border-bottom: 1px solid #e4e4e4; margin-bottom: 10px; font-family: Arial; min-height: 324px">
	<p style="text-align: center"><?php print_custom_field('logo:to_image_tag', 'original'); ?></p>
	<p style="/*text-decoration: italic; min-height: 126px*/"><em><?php echo $tresc; ?></em></p>
	<p style="/*min-height: 84px*/"><b><?php echo $podpis; ?></b></p>
		</div>

<?php } else { ?>

<div class="grid_6" style="border-bottom: 1px solid #e4e4e4; margin-bottom: 10px; font-family: Arial; min-height: 230px">
	<p style="/*text-decoration: italic; min-height: 126px*/"><em><?php echo $tresc; ?></em></p>
	<p style="/*min-height: 84px*/"><b><?php echo $podpis; ?></b></p>
		</div>

<?php } endforeach; ?>
</div>
<div class="clear"></div>

<?php } else { ?>

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <?php if(has_post_thumbnail()) {
          echo '<a href="'; the_permalink(); echo '">';
          echo '<figure class="featured-thumbnail"><span class="img-wrap">'; the_post_thumbnail(); echo '</span></figure>';
          echo '</a>';
          }
        ?>
  
				<?php the_content(); ?>
        <div class="pagination">
          <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
        </div><!--.pagination-->
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->

<?php } ?>

<?php get_footer(); ?>
