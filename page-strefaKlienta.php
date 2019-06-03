<?php
/**
 * Template Name: Strefa Klienta
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
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/creative-business-people-working-on-business-NUVCFPK.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>Badamy referencje Kandydata na 4 poziomach</h2>
					<ul>
						<li>Przełożony</li>
						<li>Podwładny</li>
						<li>Współpracownicy</li>
						<li>Kontrahenci</li>
					</ul>
					<a href="<?php echo get_permalink(1918); ?>"> <button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-6 img-box-txt">
				<h2>Przedstawiamy poszerzone dossier, obejmujące: </h2>
				<ul>
						<li>profil psychologiczny</li>
						<li>przebieg kariery</li>
						<li>kompetencje</li>
						<li>kryteria wyboru nowej pracy</li>
						<li>powody zmiany</li>
						<li>oczekiwania finansowe</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_1.png" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt">
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/corporate-teamworking-colleagues-in-modern-office-3X4LGFE.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>Raportujemy Klientom na bieżąco</h2>
					<ul>
						<li>Co tydzień: raport </li>
						<li>Bieżący kontakt z konsultantem </li>
						<li>Feedback od kandydatów w ciągu 48h</li>
					</ul>
					<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
				</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-6 img-box-txt">
				<h2>Udzielamy gwarancji Klientom i Kandydatom </h2>
				<ul>
						<p>W ciągu pierwszych 6-ciu miesięcy od zatrudnienia Kandydata rekomendowanego przez HHG, Klient ma prawo zlecić nam bezpłatne przeprowadzenie ponownej rekrutacji na to stanowisko. Również Kandydatom gwarantujemy, że jeśli z przyczyn niezależnych od nich samych rozwiążą współpracę z Klientem w okresie gwarancji, pomożemy im znaleźć nowe zatrudnienie. </p>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej  <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/550-x-720_1.png" class= "img-box-image" alt="">
				</div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row mt">
			<div class="col-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/attractive-girl-with-a-notepad-PEY4PFG.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-6 img-box-txt">
					<h2>Dbamy o jakość Candidates Experience</h2>
					<ul>
						<li>Wszyscy kandydaci otrzymują informację zwrotn</li>
						<li>Wybrani kandydaci są informowani o statusie projektu co kilka dni </li>
						<li>Dbamy o jakość prezentacji firmy Klienta wśród kandydatów </li>
					</ul>
					<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
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