<?php
/**
 * Template Name: Fullwidth Page
 */

get_header(); 

$tab1 = get_post_meta( get_the_ID(), 'zakladkai', true ); 
$tab2 = get_post_meta( get_the_ID(), 'zakladkaii', true ); 
$tab3 = get_post_meta( get_the_ID(), 'zakladkaiii', true ); 
$tab4 = get_post_meta( get_the_ID(), 'zakladkaiv', true ); 
$tab5 = get_post_meta( get_the_ID(), 'zakladkav', true ); 
$tab6 = get_post_meta( get_the_ID(), 'zakladkavi', true ); 
$tab7 = get_post_meta( get_the_ID(), 'zakladkavii', true ); 
$tab1l = get_post_meta( get_the_ID(), 'lewai', true ); 
$tab2l = get_post_meta( get_the_ID(), 'lewaii', true ); 
$tab3l = get_post_meta( get_the_ID(), 'lewaiii', true ); 
$tab4l = get_post_meta( get_the_ID(), 'lewaiv', true ); 
$tab5l = get_post_meta( get_the_ID(), 'lewav', true ); 
$tab6l = get_post_meta( get_the_ID(), 'lewavi', true ); 
$tab7l = get_post_meta( get_the_ID(), 'lewavii', true ); 
$tab1p = get_post_meta( get_the_ID(), 'prawai', true ); 
$tab2p = get_post_meta( get_the_ID(), 'prawaii', true ); 
$tab3p = get_post_meta( get_the_ID(), 'prawaiii', true ); 
$tab4p = get_post_meta( get_the_ID(), 'prawaiv', true ); 
$tab5p = get_post_meta( get_the_ID(), 'prawav', true ); 
$tab6p = get_post_meta( get_the_ID(), 'prawavi', true ); 
$tab7p = get_post_meta( get_the_ID(), 'prawavii', true ); 
$button = get_post_meta( get_the_ID(), 'buttonaskus', true ); 

?>

<div id="content">


<div id="post-484" class="post-484 page type-page status-publish hentry page">
          
				<p>&nbsp;</p>
<div class="tabs"><div class="tab-menu"><ul>

<li><a href="#tab1" class="active" style="">
<?php echo $tab1; ?></a></li><li><a href="#tab2"><?php echo $tab2; ?></a></li><li><a href="#tab3"><?php echo $tab3; ?></a></li><li><a href="#tab4"><?php echo $tab4; ?></a></li><li><a href="#tab5"><?php echo $tab5; ?></a></li><li><a href="#tab6"><?php echo $tab6; ?></a></li><li><a href="#tab7"><?php echo $tab7; ?></a></li></ul><div class="clear"></div></div><!-- .tab-menu (end) --><div class="tab-wrapper">

<?php for($i=1;$i<=7;$i++) { ?>

<div id="tab<?php echo $i; ?>" class="tab" style="display: block; ">
<div class="grid_7 "><p><br/><span style="text-transform:uppercase; text-decoration: underline;"><?php echo ${'tab'.$i}; ?>:</span><br/></p><?php echo ${'tab'.$i.'l'}; ?></div>
<div class="grid_4 "><div style="margin-top:20px"><?php echo ${'tab'.$i.'p'}; ?></div></div>
<div class="clear"></div>
<div class="grid_11 "><br>
<?php echo $button; ?></div>
<div class="clear"></div>
</div><!-- .tab (end) -->

<?php } ?>


</div><!-- .tab-wrapper (end) --></div><!-- .tabs (end) -->
<div class="clear"></div>
<div class="hr"></div>
<div class="polski">
<h2 style="font-family: 'Aller Regular'; text-align:center">Rekrutacja pracowników w obszarze sprzedaży i marketingu.</h2></div>
<div class="angielski">
<h2 style="font-family: 'Aller Regular'; text-align:center">Sales and marketing recruitment.</h2></div>
        <div class="pagination">
                  </div><!--.pagination-->


    </div>


</div>




<?php get_footer(); ?>