<?php
/**
 * Template Name: Strefa Kandydata
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
			<div class="col-md-12 col-lg-6 img-box-txt">
					<h2>Oferty Pracy</h2>
					<ul>
						<li>Sprzedaż</li>
						<li>Marketing</li>
						<li>inne</li>
					</ul>
					<a href="<?php echo get_permalink(596); ?>"> <button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt">
				<h2>Klub HHG</h2>
				<p>
				Klub HHG zrzesza ponad 3000 osób aktywnych zawodowo, zajmujących kluczowe stanowiska w obszarze marketingu i sprzedaży (w kanałach tradycyjnych i e-commerce). To oni dowiadują się pierwsi o nowych rekrutacjach. 
				</p>
				<a href="<?php echo get_permalink(1963); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_1.png" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/corporate-teamworking-colleagues-in-modern-office-3X4LGFE.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt">
					<h2>Zasady i wartości</h2>
					<ul>
						<li>Dostęp do bieżących informacji o rekrutacji</li>
						<li>Bezpieczeństwo Kandydata </li>
						<li>Opieka nad Kandydatem w trakcie rekrutacji i po zakończeniu</li>
						<li>Wsparcie dla kandydatów, u których decyzja o zmianie okazuje się nietrafiona</li>
						<li>Wspólna ocena współpracy </li>
					</ul>
					<a href="<?php echo get_permalink(1961); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
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