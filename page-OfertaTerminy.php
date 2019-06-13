<?php
/**
 * Template Name: Oferta i Terminy
 */

get_header(); ?>

<nav class="navbar d-flex justify-content-center bordered check-black" >
          <?php 
            wp_nav_menu( array(
							'theme_location' => 'skMenu',
              'menu' => 'skMenu',
              'depth' => 1,
              'container' => false,
              'menu_class' => 'nav',
              'walker' => new wp_Bootstrap_Navwalker())
            );
          ?>
</nav>


<section>
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/KAM.png" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt">
					<h2>Executive Search </h2>
					<p>Dotrzemy do kandydatów pracujących w firmach konkurencyjnych lub biznesach pokrewnych. Sprawdzimy ich dostępność, kompetencje, profil psychologiczny i referencje.</p>
					<ul>
						<li>Czas realizacji: 4 - 6 tygodni</li>
						<li>Okres gwarancji: 6 - 9 m-cy</li>
					</ul>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt">
				<h2>Target Search </h2>
				<p>Sprawdzimy Kandydatów, którzy aktualnie pracują w firmach, wskazanych przez Klienta (metodologia rekomendowana dla maksymalnie 15 firm). </p>
				<ul>
						<li>Czas realizacji: 3 - 4 tygodnie.</li>
						<li>Okres gwarancji: 6 m-cy. </li>
				</ul>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720-o-nas-1.jpg" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row  mt">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_bazy-hhg.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt">
					<h2>Wykorzystanie Baz HHG</h2>
					<p>Wyselekcjonujemy z baz HHG Kandydatów odpowiadających potrzebom Klienta, przeprowadzimy ponowne spotkania z wybranymi Kandydatami i dostarczymy Klientowi dossier rekomendowanych osób. </p>
					<ul>
						<li>Czas realizacji: 2 - 4 tygodnie. </li>
						<li>Okres gwarancji: 6 m-cy.</li>
					</ul>
					<button class="hhg-btn-outline">Sprawdź Bazy HHG <i class="fas fa-chevron-right"></i></button>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6 img-box-txt">
				<h2>Weryfikacja Referencji </h2>
				<p>Badamy referencje Kandydatów na 4 poziomach: </p>
				<ol>
					<li>Ostatni przełożony</li>
					<li>1 – 2 współpracowników</li>
					<li>Podwładny</li>
					<li>Klient zewnętrzny</li>
				</ol>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_BABAKA-Z-TELEFONEM.jpg" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_Executive-Search.png" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt">
					<h2>Selekcja </h2>
					<ul>
						<li>..........</li>
						<li>..........</li>
					</ul>
				</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt">
				<h2>Badania Rynku </h2>
				<p>Badamy przede wszystkim dostępność Kandydatów pracujących w Twojej branży:  </p>
				<ul>
					<li>Czy są zainteresowani zmianą pracy? </li>
					<li>Jeśli tak, co ich do tego motywuje?</li>
					<li>Jakie mają oczekiwania (w tym: finansowe) wobec nowej pracy? </li>
					<li>W jakim terminie mogą rozpocząć nową pracę? </li>
				</ul>


				<p>Wspólnie z Klientem ustalamy listę firm i stanowisk, które należy objąć badaniem. 
Badamy także profil Kandydatów zainteresowanych zmianą pracy:   </p>
				<ul>
					<li>Doświadczenie i kompetencje </li>
					<li>Obecny zakres obowiązków</li>
					<li>Obszar odpowiedzialności</li>
					<li>Sukcesy i porażki na obecnym stanowisku </li>
				</ul>

				<p>W trakcie badania uzyskujemy informacje o strukturze organizacyjnej w firmie Kandydata: </p>
				<ul>
					<li>Komu raportuje? </li>
					<li>Ile osób mu podlega? </li>
					<li>Jak jest zorganizowany jego dział?</li>
				</ul>

				<p>W ciągu 3 do 6 tygodni (w zależności od stopnia skomplikowania i wielkości badanej grupy) otrzymasz raport z wyników badań, wraz z analizą i wnioskami. </p>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_1.png" class= "img-box-image" alt="">
				</div>
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