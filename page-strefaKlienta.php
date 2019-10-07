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
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/creative-business-people-working-on-business-NUVCFPK.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Badamy referencje Kandydata na 4 poziomach</h2>
				<ul>
					<li>Przełożony</li>
					<li>Podwładny</li>
					<li>Współpracownicy</li>
					<li>Kontrahenci</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"> <button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>We check each candidate’s references on four levels:</h2>
				<ul>
					<li>Superior</li>
					<li>Subordinate</li>
					<li>Co-workers</li>
					<li>Counterparties</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"> <button class="hhg-btn-outline">More <i class="fas fa-chevron-right"></i></button></a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Przedstawiamy poszerzone dossier, obejmujące: </h2>
				<ul>
					<li>Profil psychologiczny</li>
					<li>Przebieg kariery</li>
					<li>Kompetencje</li>
					<li>Kryteria wyboru nowej pracy</li>
					<li>Powody zmiany</li>
					<li>Oczekiwania finansowe</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>We present an extended file which includes:</h2>
				<ul>
					<li>Psychological profile</li>
					<li>Career course to date</li>
					<li>Competences</li>
					<li>Criteria for selecting new employer</li>
					<li>Reasons for the change</li>
					<li>Financial expectations</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">More <i class="fas fa-chevron-right"></i></button></a>
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
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Raportujemy Klientom na bieżąco</h2>
				<ul>
					<li>Co tydzień: raport </li>
					<li>Bieżący kontakt z konsultantem </li>
					<li>Feedback od kandydatów w ciągu 48h</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>We update our clients real-time:</h2>
				<ul>
					<li>Weekly reports</li>
					<li>Constant contact with a consultant</li>
					<li>Feedback from candidates in 48h</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">More <i class="fas fa-chevron-right"></i></button></a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt" style="margin-top:150px">
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Udzielamy gwarancji Klientom i Kandydatom </h2>
				<ul>
					<p>W ciągu pierwszych 6-ciu miesięcy od zatrudnienia Kandydata rekomendowanego przez HHG, Klient ma prawo zlecić nam bezpłatne przeprowadzenie ponownej rekrutacji na to stanowisko. Również Kandydatom gwarantujemy, że jeśli z przyczyn niezależnych od nich samych rozwiążą współpracę z Klientem w okresie gwarancji, pomożemy im znaleźć nowe zatrudnienie. </p>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej  <i class="fas fa-chevron-right"></i></button></a>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>We give guarantee to our Clients and Candidates</h2>
				<ul>
					<p>Within the first 6 months from the hiring of a candidate recommended by HHG, the customer has the right to request a new recruitment process to be conducted for the same position, free of charge. We also guarantee that the Candidates who, for a reason beyond their control, dissolve their employment contract with the Client during the guarantee period, will receive our help in finding a new job.</p>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">More <i class="fas fa-chevron-right"></i></button></a>
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
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/attractive-girl-with-a-notepad-PEY4PFG.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Dbamy o jakość Candidates Experience</h2>
				<ul>
					<li>Wszyscy kandydaci otrzymują informację zwrotną</li>
					<li>Wybrani kandydaci są informowani o statusie projektu co kilka dni </li>
					<li>Dbamy o jakość prezentacji firmy Klienta wśród kandydatów </li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">Więcej <i class="fas fa-chevron-right"></i></button></a>
			</div>

			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>We take care of the quality of Candidates’ Experience</h2>
				<ul>
					<li>All candidates receive feedback</li>
					<li>Selected candidates are informed about the project’s status ever couple of days </li>
					<li>We make sure that the Client’s company is properly presented to the candidates</li>
				</ul>
				<a href="<?php echo get_permalink(1918); ?>"><button class="hhg-btn-outline">More <i class="fas fa-chevron-right"></i></button></a>
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