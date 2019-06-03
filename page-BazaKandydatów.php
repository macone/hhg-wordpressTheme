<?php
/**
 * Template Name: Baza Kandydatów
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
		<div class="row">
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_referencje.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>Bazy HHG</h2>
						<p>W bazach HEADHUNTERS GROUP znajduje się ponad 16 000 ekspertów Sprzedaży i Marketingu. </p>
					<ul>
						<li>Skupiamy się wyłącznie na Kandydatach aktywnych zawodowo</li>
						<li>Nasi Kandydaci zajmują kluczowe stanowiska w obszarze Sprzedaży i Marketingu</li>
						<li>Monitorujemy kariery ponad 5000 topowych kandydató</li>
						<li>Stworzyliśmy Klub Poleceń HHG. Działa w nim kilka tysięcy ekspertów Sales&Marketing, którzy dystrybuują nasze oferty pracy w swojej sieci kontaktów zawodowych.</li>
					</ul>
				</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt" >
			<div class="col-6 img-box-txt">
				<h2>Aktualizujemy nasze bazy na bieżąco. </h2>
				<p>Wiemy, jacy Kandydaci są obecnie dostępni w sektorach:</p>
				<ul>
						<li>FMCG (Kandydaci z działów: Sprzedaży, Marketingu, Trade Marketingu)</li>
						<li>B2B (Kandydaci z Działu Sprzedaży: urządzeń i produktów technicznych, HVAC, automatyki, opakowań, usług)</li>
						<li>Budowa i nieruchomości </li>
						<li>E-Commerce</li>
				</ul>
			</div>
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/black-lady-recruitment.png" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="row bordered mt"> <h3>Kandydaci z naszych baz są aktywni zawodowo <br>i obecnie zajmują kluczowe stanowiska w obszarach: </h3> </div>

	<div class="container">
		<div class="row mt">
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/POST-6.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>SPRZEDAŻY</h2>
					<ul>
						<li>E-commerce Manager </li>
						<li>Sales Manager</li>
						<li>Industry Sales Manager</li>
						<li>Sales Engineer </li>
						<li>Sales Director</li>
						<li>Regional Sales Manager</li>
						<li>Key Account Manager</li>
						<li>Regional Sales Representative </li>
						<li>Area Sales Manager </li>
					</ul>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="">
			<div class="col-6 img-box-txt">
				<h2>MARKETINGU </h2>
				<ul>
						<li>Digital Marketing Manager  </li>
						<li>Brand Manager</li>
						<li>National Key Account Manager</li>
						<li>Trade Marketing Manager</li>
						<li>Category Manager</li>
						<li>Marketing Manager </li>
						<li>Marketing Director</li>
					</ul>
			</div>
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/Depositphotos_171926932_xl-2015-1.jpg" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row mt">
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720-rozwiązania-Headhunters-e1557095702737.png" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>ANALITYKI SPRZEDAŻY/MARKETINGU</h2>
					<ul>
						<li>Dyrektor Działu Analiz</li>
						<li>Analityk Sprzedaży</li>
						<li>Kierownik ds. Informacji Strategicznej i Prognoz Rynkowych </li>
					</ul>
				</div>
		</div>
	</div>

	<div class="row bordered mt"> <h3>Wykorzystanie baz HEADHUNTERS GROUP<br> to szybka (1 - 3 tygodnie) i ekonomiczna metoda rekrutacji.</h3> </div>

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

