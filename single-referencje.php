<?php
/**
 * Template Name: Fullwidth Page
 */

get_header(); 

$logo = get_post_meta( get_the_ID(), 'logo', true ); 
$tresc = get_post_meta( get_the_ID(), 'tresc', true ); 
$podpis = get_post_meta( get_the_ID(), 'podpis', true ); 
$tresc1 = nl2br($tresc);
$podpis1 = nl2br($podpis);

?>

<div id="content">

<?php $args = array(
    'numberposts'     => 0,
    'offset'          => 0,
    'orderby'         => 'post_date',
    'order'           => 'DESC',
    'post_type'       => 'referencje',
    'post_status'     => 'publish',
    'suppress_filters' => true ); ?>
    
<div style="text-align: center">
<?php print_custom_field('logo:to_image_tag', 'original'); ?>
</div>
<div style="font-style: italic"><br/>"<?php echo $tresc1; ?>"</div>
<div><br/><?php echo $podpis1; ?></div>
	
	</div>




<?php get_footer(); ?>