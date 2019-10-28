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
						<div class="timeline-content pl">
							<h3 class="title">Brief</h3>
							<ul class="description">
									<li>Spotkanie z klientem </li>
									<li>Przygotowanie strategii rekrutacji </li>
									<li>Potwierdzenie kierunku poszukiwań z klientem  </li>
									<li>Administracja projektowa  </li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Brief</h3>
							<ul class="description">
									<li>Brief, meeting with the Client</li>
									<li>Preparing a recruitment strategy</li>
									<li>Confirming the search angles with the Client </li>
									<li>+ Project Administration  </li>
							</ul>
						</div>

						<div class="etap-col">
							<span class="etap pl">Etap 1</span>
							<span class="etap en">Stage 1</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap pl">Etap 2</span>
							<span class="etap en">Stage 2</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content pl">
							<h3 class="title">Klub poleceń</h3>
							<ul class="description">
									<li>Kontakt z kandydatami z klubu poleceń </li>
									<li>Werifikacja kandydatów w aktywnych bazach HHG</li>
									<li>Sprawdzanie firm z search listy  </li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Recommendation Club</h3>
							<ul class="description">
									<li>Contacting the Candidates from Recommendation Club </li>
									<li>Verifying the Candidates in HHG active databases</li>
									<li>Checking the Companies from the search list</li>
							</ul>
						</div>

					</div>
				</div>

				
				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content pl">
							<h3 class="title">Weryfikacja</h3>
							<ul class="description">
									<li>Weryfikacja aplikacji  napływających z ogłoszenia ze strony i Linkedin</li>
									<li>Ofertowanie kandydatów, przedstawienie  ofert pracy kandydatom wyszukanym z użyciem direct search </li>
									<li>Wstępna weryfikacja kandydatur, potwierdzenie kompetencji i doświadczeń kandydatów</li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Verification</h3>
							<ul class="description">
									<li>Verifying the applications submitted in response to the advertisements on the website and Linkedin</li>
									<li>Contacting the candidates, presenting the job offer to candidates found using direct search</li>
									<li>Preliminary Candidates Verification, confirming candidates’ competences and experience</li>
							</ul>
						</div>

						<div class="etap-col">
							<span class="etap pl">Etap 3</span>
							<span class="etap en">Stage 3</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap pl">Etap 4</span>
							<span class="etap en">Stage 4</span>
						</div>
						<span class="timeline-icon"></span>
						<div class="timeline-content pl">
							<h3 class="title">Interviews</h3>
							<ul class="description">
									<li>Interviews z wybranymi kandydatami </li>
									<li>Tworzenie dossier kandydatów </li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Interviews</h3>
							<ul class="description">
									<li>Interviews with selected candidates </li>
									<li>Creating Candidates’ files </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content pl">
							<h3 class="title">Rekomendacja</h3>
							<ul class="description">
								<li>Testy umiejętności i kompetencji  </li>
								<li>Case study</li>
								<li>Weryfikacja referencji</li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Recommendations </h3>
							<ul class="description">
								<li>Skills and competences test </li>
								<li>Case Study</li>
								<li>Verifying the references</li>
							</ul>
						</div>

						<div class="etap-col">
							<span class="etap pl">Etap 5</span>
							<span class="etap en">Stage 5</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap pl">Etap 6</span>
							<span class="etap en">Stage 6</span>
						</div>
						<span class="timeline-icon"></span>

						<div class="timeline-content pl">
							<h3 class="title">Interview u klienta</h3>
							<ul class="description">
									<li>Wymiana feedbacków pomiędzy klientem a kandydatem po spotkaniach </li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Interview at the Clients office</h3>
							<ul class="description">
									<li>Feedback exchange between the Client and the Candidate </li>
							</ul>
						</div>

					</div>
				</div>

				<div class="timeline-animate">
					<div class="timeline">
						<span class="timeline-icon"></span>
						<div class="timeline-content pl">
							<h3 class="title">Podpisanie umowy z kandydatem </h3>
							<ul class="description">
									<li>Negocjacje warunków zatrudnienia i podpisanie umowy z kandydatem </li>
							</ul>
						</div>

						<div class="timeline-content en">
							<h3 class="title">Signing a contract with the Candidate</h3>
							<ul class="description">
									<li>Negotiations terms of employment and signing a contract with the candidate </li>
							</ul>
						</div>

						<div class="etap-col">
							<span class="etap pl">Etap 7</span>
							<span class="etap en">Stage 7</span>
						</div>
					</div>
				</div>

				<div class="timeline-animate offset-1 col-10">
					<div class="timeline">
						<div class="etap-col">
							<span class="etap pl">Etap 8</span>
							<span class="etap en">Stage 8</span>
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

<?php get_footer(); ?>