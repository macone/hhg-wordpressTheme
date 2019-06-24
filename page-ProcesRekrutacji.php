<?php
/**
 * Template Name: Proces Rekrutacji
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


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="main-timeline">

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Brief</h3>
							<ul class="description">
									<li>Spotkanie z klientem </li>
									<li>Przygotowanie strategii rekrutacji </li>
									<li>Potwierdzenie kierunku poszukiwań z klientem  </li>
									<li><b>Administracja projektowa</b>  </li>
							</ul>
						</div>
						<div class="etap-col">
							<span class="etap">Etap 1</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap">Etap 2</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Klub poleceń</h3>
							<ul class="description">
									<li>Kontakt z kandydatami z klubu poleceń </li>
									<li><b>Werifikacja kandydatów</b> w aktywnych bazach HHG</li>
									<li><b>Sprawdzanie firm</b> z search listy  </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Weryfikacja</h3>
							<ul class="description">
									<li><b>Weryfikacja aplikacji</b>  napływających z ogłoszenia ze strony i Linkedin</li>
									<li>Ofertowanie kandydatów, przedstwinie ofert pracy kandydatom wyszukanym z użyciem direct search </li>
									<li><b>Wstępna weryfikacja kandydatur</b>, potwierdzenie kompetencji i doświadczeń kandydatów</li>
							</ul>
						</div>
						<div class="etap-col">
							<span class="etap">Etap 3</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap">Etap 4</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Interviews</h3>
							<ul class="description">
									<li><b>Interviews</b> z wybranymi kandydatami </li>
									<li><b>Tworzenie dossier kandydatów</b> </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Rekomendacja</h3>
							<ul class="description">
								<li>Testy umiejętności i kompetencji  </li>
								<li>Case study</li>
								<li><b>Weryfikacja referencji</b></li>
							</ul>
						</div>
						<div class="etap-col">
							<span class="etap">Etap 5</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap">Etap 6</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Interview u klienta</h3>
							<ul class="description">
									<li><b>Wymiana feedbacków pomiędzy klientem a kandydatem po spotkaniach </b></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Podpisanie umowy z kandydatem </h3>
							<ul class="description">
									<li><b>Negocjacje warunków zatrudnienia i podpisanie umowy z kandydatem </b></li>
							</ul>
						</div>
						<div class="etap-col">
							<span class="etap">Etap 7</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap">Etap 8</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content">
							<h3 class="title">Placement FEEDBACK 3/6/12</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){ 
	let timeline = $('.timeline-animate');
	let i = 0
	setInterval(()=>
	{
		$(timeline[i]).fadeIn();
		i++
	}, 300);
});

</script>