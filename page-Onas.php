<?php
/**
 * Template Name: O Nas
 */

get_header(); ?>

<div class='bg-img'></div>
<section>
	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_referencje.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt">
					<div class="logo-img"><img src="<?php bloginfo('template_url'); ?>/images/logo_main.png"></div> 
					<ul>
						<li>Od 2001 r. prowadzimy rekrutacje <b>z obszaru Sales&Marketing</b></li>
						<li>Monitorujemy kariery ponad <b>5000 topowych kandydatów</b></li>
						<li>Posiadamy <b>referencje od najlepszych firm:</b> P&G, NIVEA, Tetley, Coty, Varta, Siemens, Otis, Colgate-Palmolive, Solvay Pharma i wielu innych</li>
						<li>Dysponujemy aktualnymi kandydatów aktywnych na rynku pracy </li>
						<li>Prowadzimy <b>Klub Poleceń HHG</b>, którego członkowie - eksperci sprzedaży i marketingu - polecają nasze oferty pracy w swojej sieci kontaktów</li>
					</ul>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt">
				<h2>HEADHUNTERS GROUP</h2>
				<p>Zrealizowaliśmy z sukcesem<b> ponad 750 projektów rekrutacyjnych.</b> Specjalizujemy się w rekrutacjach na kluczowe stanowiska z obszaru Sales & marketing, w branżach:</p>
				<ul>
						<li>B2B</li>
						<li>FMCG</li>
						<li>HVAC</li>
						<li>RTV/AGD</li>
						<li>Technical Products & Solutions</li>
						<li>Building & Construction</li>
						<li>Reklama&Media </li>
						<li>Farmacja</li>
						<li>Packaging</li>
				</ul>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/Depositphotos_194509606_m-2015.jpg" class= "img-box-image" alt="" style="transform:rotateY(180deg);">
				</div>
			</div>
		</div>
	</div>


</section>

<section>

<div class="container">
	<div class="row mt">
		<div class="card-deck">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Sprzedaż</h3>
					<ul>
						<li>Sales Director</li>
						<li>National Sales Manager </li>
						<li>Industry Sales Manager </li>
						<li>Key Account Manager </li>
						<li>Business Unit Manager </li>
						<li>Sales Engineer</li>
						<li>Account Manger </li>
						<li>Business Development </li>
						<li>Manager </li>
						<li>National Key Account </li>
						<li>Manager </li>
					</ul>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Marketing</h3>
					<ul>
						<li>Marketing Director </li>
						<li>Marketing Manager </li>
						<li>Senior Brand Manager</li>
						<li>Product Group Manager</li>
						<li>Brand Manager </li>
						<li>Junior Product Manager</li>
						<li>Marketing Specialist</li>
					</ul>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Digital & <br>e-commerce</h3>
					<ul>
						<li>E-commerce manager</li>
						<li>Digital Sales Manager</li>
						<li>E-Shop Manager</li>
						<li>Digital Media Manager</li>
						<li>Digital Marketing Manager</li>
						<li>Marketing Specialist E- Commerce </li>
						<li>Social Communication Manager </li>
					</ul>
				</div>
			</div>
			<!-- <div class="card">
				<div class="card-body">
					<h3 class="card-title">Analizy rynkowe</h3>
					<ul>
						<li>Kierownik ds. Informacji  Rynkowej </li>
						<li>Kierownik ds. Informacji Strategicznej i Prognoz Rynkowych</li>
						<li>Analityk Sprzedaży</li>
						<li>Business Analyst</li>
						<li>Reaserch Manage</li>
					</ul>
				</div>
			</div> -->



			<div class="card">
				<div class="card-body">
					<h3 class="card-title">General & Operations Management</h3>
					<ul>
						<li>Prezes Zarządu </li>
						<li>Dyrektor Zarządzający</li>
						<li>Dyrektor Operacyjny </li>
						<li>Dyrektor Sprzedaży i Marketingu </li>
						<li>Dyrektor Biznes Unit </li>
					</ul>
				</div>
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