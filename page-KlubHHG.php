<?php
/**
 * Template Name: KlubHHG
 */

get_header(); ?>

<nav class="navbar d-flex justify-content-center bordered check-black" >
          <?php 
            wp_nav_menu( array(
							'theme_location' => 'kandydat',
							'menu' => 'kandydat',
              'depth' => 1,
              'container' => false,
              'menu_class' => 'nav',
              'walker' => new wp_Bootstrap_Navwalker())
            );
          ?>
</nav>




<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/creative-business-people-working-on-business-NUVCFPK.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Klub HHG </h2>
				<p>Klub HHG zrzesza ponad 3000 osób aktywnych zawodowo, zajmujących kluczowe stanowiska w obszarze marketingu i sprzedaży (w kanałach tradycyjnych i e-commerce). To oni dowiadują się pierwsi o nowych rekrutacjach. Jeżeli chcesz do nich dołączyć, prześlij nam swoje zgłoszenie. 
				</p>
			</div>

			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>HHG Club </h2>
				<p>HHG Club is a group of over 3000 active professionals, working at key positions in sales and marketing (in both traditional and e-commerce channels). They are the first to learn about new recruitment processes. If you would like to join them, send us your application.  
				</p>
			</div>

		</div>
	</div>
</section>


<script>
$(function(){ 
	$('.row').hide()
	
	let cont = $('.row');
	let i = 0
	let interval = setInterval(()=>
	{
		$(cont[i]).fadeIn(1000);
		i++
		if (i==20){
			clearInterval(interval);
		}
	}, 500);
});
</script>

<?php get_footer(); ?>