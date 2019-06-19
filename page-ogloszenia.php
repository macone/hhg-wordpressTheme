<?php

/**

 * Template Name: Strona z ogłoszeniami

 */



get_header(); ?>



<?php if(is_page(596)) { ?>



<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <?php if(has_post_thumbnail()) {
          echo '<a href="'; the_permalink(); echo '">';
          echo '<figure class="featured-thumbnail"><span class="img-wrap">'; the_post_thumbnail(); echo '</span></figure>';
          echo '</a>';
          }
        ?>
				<div class="container flex justify-content-center"><img src="<?php bloginfo( 'template_url' ); ?>/images/oferty.png" alt="" style="margin-left: 10px" /></div>

				

<?php
global $post;
$argsa = array('numberposts' => 99, 'orderby' => 'post_date', 'order' => 'ASC', 'post_type' => 'sprzedaz' );
$argsb = array('numberposts' => 99, 'orderby' => 'post_date', 'order' => 'ASC', 'post_type' => 'marketing' );
$argsc = array('numberposts' => 99, 'orderby' => 'post_date', 'order' => 'ASC', 'post_type' => 'inne' );


$mypostsa = get_posts( $argsa );
$mypostsb = get_posts( $argsb );
$mypostsc = get_posts( $argsc );

?>

	<div class="container mt-5">
			<div class="row">

<?php foreach( $mypostsa as $post ) :	setup_postdata($post); ?>
<?php $nrref = get_post_meta($post->ID, 'nr_ref', true); $wypis = get_post_meta( get_the_ID(), 'excerpt', true ); $data = get_post_meta( get_the_ID(), 'datastart', true );?>

<?php 
	$dzial = get_post_meta( get_the_ID(), 'dzial', true );
	$kraj = get_post_meta( get_the_ID(), 'kraj', true );
	$lokalizacja = get_post_meta( get_the_ID(), 'lokalizacja', true );
	$podleglyzespol = get_post_meta( get_the_ID(), 'podlegly_zespol', true );
	$raportujedo = get_post_meta( get_the_ID(), 'raportuje_do', true );
?>
<div class="col-4 job-offer mb-5">

	<h3 class="bg-rect"><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>		</a>
	</h3>
	<p class="">
		<span style="color: gray; font-size: 11px">Nr Ref. <?php echo $nrref.' / '.$data_dodania; ?></span>
	</p>
	<p><strong>Dział: </strong><?php echo $dzial; ?></p>
	<p><strong>Raportuje do: </strong><?php echo $raportujedo; ?></p>
	<p><strong>Podległy zespół: </strong><?php echo $podleglyzespol; ?></p>
	<p><strong>Lokalizacja: </strong><?php echo $lokalizacja; ?></p>
	<p><strong>Kraj: </strong><?php echo $kraj; ?></p>
	<h5 style="margin-top:50px;">Cel Stanowiska:</h5>
	<p style="min-height: 189px"><?php echo $wypis; ?></p>
	<p style="text-align: right">
		<a href="<?php the_permalink(); ?>" style="text-decoration: none; color: gray">
			<button class="pl hhg-btn-outline">Przejdź do oferty<i class="fas fa-chevron-right"></i></button>
			<button class="en hhg-btn-outline">Go to offer<i class="fas fa-chevron-right"></i></button>
		</a>
	</p>
	
</div>
	<?php endforeach; ?>
	

<?php foreach( $mypostsb as $post ) :	setup_postdata($post); ?>
<?php $nrref = get_post_meta($post->ID, 'nr_ref', true); $wypis = get_post_meta( get_the_ID(), 'excerpt', true ); $data = get_post_meta( get_the_ID(), 'datastart', true );?>

<?php 
	$dzial = get_post_meta( get_the_ID(), 'dzial', true );
	$kraj = get_post_meta( get_the_ID(), 'kraj', true );
	$lokalizacja = get_post_meta( get_the_ID(), 'lokalizacja', true );
	$podleglyzespol = get_post_meta( get_the_ID(), 'podlegly_zespol', true );
	$raportujedo = get_post_meta( get_the_ID(), 'raportuje_do', true );
?>
<div class="col-4 job-offer mb-5">

	<h3 class="bg-rect"><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>		</a>
	</h3>
	<p class="">
		<span style="color: gray; font-size: 11px">Nr Ref. <?php echo $nrref.' / '.$data_dodania; ?></span>
	</p>
	<p><strong>Dział: </strong><?php echo $dzial; ?></p>
	<p><strong>Raportuje do: </strong><?php echo $raportujedo; ?></p>
	<p><strong>Podległy zespół: </strong><?php echo $podleglyzespol; ?></p>
	<p><strong>Lokalizacja: </strong><?php echo $lokalizacja; ?></p>
	<p><strong>Kraj: </strong><?php echo $kraj; ?></p>
	<h5 style="margin-top:50px;">Cel Stanowiska:</h5>
	<p style="min-height: 189px"><?php echo $wypis; ?></p>
	<p style="text-align: right">
		<a href="<?php the_permalink(); ?>" style="text-decoration: none; color: gray">
			<button class="pl hhg-btn-outline">Przejdź do oferty<i class="fas fa-chevron-right"></i></button>
			<button class="en hhg-btn-outline">Go to offer<i class="fas fa-chevron-right"></i></button>
		</a>
	</p>
	
</div>

<?php endforeach; ?>

<?php foreach( $mypostsc as $post ) :	setup_postdata($post); ?>
<?php $nrref = get_post_meta($post->ID, 'nr_ref', true); $wypis = get_post_meta( get_the_ID(), 'excerpt', true ); $data = get_post_meta( get_the_ID(), 'datastart', true );?>

<?php 
	$dzial = get_post_meta( get_the_ID(), 'dzial', true );
	$kraj = get_post_meta( get_the_ID(), 'kraj', true );
	$lokalizacja = get_post_meta( get_the_ID(), 'lokalizacja', true );
	$podleglyzespol = get_post_meta( get_the_ID(), 'podlegly_zespol', true );
	$raportujedo = get_post_meta( get_the_ID(), 'raportuje_do', true );
?>
<div class="col-4 job-offer mb-5">

	<h3 class="bg-rect"><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>		</a>
	</h3>
	<p class="">
		<span style="color: gray; font-size: 11px">Nr Ref. <?php echo $nrref.' / '.$data_dodania; ?></span>
	</p>
	<p><strong>Dział: </strong><?php echo $dzial; ?></p>
	<p><strong>Raportuje do: </strong><?php echo $raportujedo; ?></p>
	<p><strong>Podległy zespół: </strong><?php echo $podleglyzespol; ?></p>
	<p><strong>Lokalizacja: </strong><?php echo $lokalizacja; ?></p>
	<p><strong>Kraj: </strong><?php echo $kraj; ?></p>
	<h5 style="margin-top:50px;">Cel Stanowiska:</h5>
	<p style="min-height: 189px"><?php echo $wypis; ?></p>
	<p style="text-align: right">
		<a href="<?php the_permalink(); ?>" style="text-decoration: none; color: gray">
			<button class="pl hhg-btn-outline">Przejdź do oferty<i class="fas fa-chevron-right"></i></button>
			<button class="en hhg-btn-outline">Go to offer<i class="fas fa-chevron-right"></i></button>
		</a>
	</p>
	
</div>
<?php endforeach; ?>

</div>

<div class="clear"></div><div class="hr"></div>

<div class="polski"><h1 style="text-align: center"><a href="../rekrutacja-on-line">&#187; Prześlij nam swoje CV</a></h1>

<!--<h1><a href="mailto:formularzcv@hhg.pl">&#187; Prześlij nam swoje CV</a></h1>-->

<div class="hr"></div>

<h2 style="font-family: 'Aller Regular'; text-align: center">Gwarantujemy, że znajdziesz wymarzoną pracę!</h2>





  

</div></div>



<div class="angielski"><h1 style="text-align: center"><a href="../rekrutacja-on-line">&#187; Send us your CV</a></h1>

<!--<h1><a href="mailto:formularzcv@hhg.pl">&#187; Send us your CV</a></h1>-->

<div class="hr"></div>

<h2 style="font-family: 'Aller Regular'; text-align: center">We guarantee you'll find your dream job!</h2>





  <?php endwhile; ?>

</div></div>



<!--#content-->



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