<?php
/**
 * Template Name: Fullwidth Page
 */

get_header(); 

$lewa = get_post_meta( get_the_ID(), 'lewa', true ); 
$prawa = get_post_meta( get_the_ID(), 'prawa', true ); 

?>

<div id="content">
<p>&nbsp;</p>
<div class="grid_7 ">
<?php echo $lewa; ?>
</div>
<div class="polski">
<div class="grid_5 ">

<?php echo $prawa; ?>

<p style="text-align:right"><a href="../../kontakt"><img src="http://hhg.pl/wp-content/uploads/2012/10/zapytaj2.png" alt=""></a></p></div>

<div class="clear"></div></div>
<div class="angielski">
<div class="grid_5 ">

<?php echo $prawa; ?>

<p style="text-align:right"><a href="../../kontakt"><img src="http://hhg.pl/wp-content/uploads/2013/03/askus.png" alt=""></a></p></div>

<div class="clear"></div></div>


<?php get_footer(); ?>