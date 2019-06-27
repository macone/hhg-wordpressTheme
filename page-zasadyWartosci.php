<?php
/**
 * Template Name: Zasady i Wartości
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
<div class="container">
	<div class="row parent-hhg-icon pl">
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/12-business-card-hand-business-office-job-corporation.png" alt="">
			<p>Dostęp do bieżących informacji o rekrutacji</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/8-notebook-contact-details-business-office-corporation-job.png" alt="">
			<p>Bezpieczeństwo Kandydata </p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/36-job-interview-employee-table-business-office-job.png" alt="">
			<p>Opieka nad Kandydatem w trakcie rekrutacji i po zakończeniu</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/5-project-manager-team-people-business-office-corporation.png" alt="">
			<p>Wsparcie dla kandydatów, u których decyzja o zmianie okazuje się nietrafiona</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/9-satisfied-customer-like-client-business-office-corporation.png" alt="">
			<p>Wspólna ocena współpracy </p>
		</div>
	</div>

	<div class="row parent-hhg-icon en">
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/12-business-card-hand-business-office-job-corporation.png" alt="">
			<p>Access to current recruitment information</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/8-notebook-contact-details-business-office-corporation-job.png" alt="">
			<p>Candidate Safety </p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/36-job-interview-employee-table-business-office-job.png" alt="">
			<p>Helping the Candidate during the recruitment process as well as after its completion</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/5-project-manager-team-people-business-office-corporation.png" alt="">
			<p>Supporting candidates, whose decision to change jobs was not the best choice</p>
		</div>
		<div class="col-2 hhg-icon">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/9-satisfied-customer-like-client-business-office-corporation.png" alt="">
			<p>Joint cooperation assessment </p>
		</div>
	</div>


</div>
<div class="container">
	<div class="row mt-4 rules-head pl">
		<h2>
			Od 2001 roku badamy oczekiwania naszych Kandydatów i Klientów.
		</h2>
		<p>
			Lista ich potrzeb i wymagań jest długa, dlatego stale doskonalimy standardy działania: 
		</p>
		<ul>
			<li>Stworzyliśmy innowacyjny model komunikacji pomiędzy wszystkimi uczestnikami procesu rekrutacyjnego. Dzięki temu jesteś zawsze na bieżąco, bez zbędnego stresu.</li>
			<li>Wypracowaliśmy metodologię, która minimalizuje ryzyko błędu. Uzyskujemy maksimum informacji o Twojej nowej pracy, ale także – o Tobie. Ty i Twój nowy pracodawca podejmujecie decyzję świadomie</li>
			<li>Jeżeli mimo to okaże się, że Twoja decyzja o zmianie pracy była nietrafiona, pozostaniesz pod naszą opieką - pomożemy Ci znaleźć tę wymarzoną. </li>
		</ul>
		<h4>Jak to wygląda w praktyce? 
		</h4>
	</div>

	<div class="row mt-4 rules-head en">
		<h2>
		Since 2001 we have been studying the expectations of our Clients and Candidates.
		</h2>
		<p>
		The list of their needs and requirements is long, therefore we constantly refine our standards:
		</p>
		<ul>
			<li>We have created a unique model of communication between all parties involved in the recruitment process. This way you are constantly up-to-date, without any unnecessary stress. </li>
			<li>We have created a methodology minimizing the risk of error. We receive as much information as possible about your new job – as well as about yourself. You and your new employer make an informed and conscious decision. </li>
			<li>However if despite all of the information your decision to change your job proves to be a mistake, you will still remain under our protection – we will help you find the job of your dreams.  </li>
		</ul>
		<h4>How does it work in practice?
		</h4>
	</div>

</div>



<section>
	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/creative-business-people-working-on-business-NUVCFPK.resized.jpg" class= "img-box-image" alt="">
				</div>
			</div>
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Feedback</h2>
				<p>Każdy Kandydat, który wyśle swoją aplikację, otrzyma od nas informację zwrotną. Wszyscy Kandydaci, którzy biorą udział w projekcie, otrzymują informację o jego statusie co najmniej raz na 7 dni. 
				</p>
			</div>

			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>Feedback</h2>
				<p>Every candidate who sends their application will receive feedback from us. All Candidates, who take part in the project, are informed about its status at leas once every 7 days.  
				</p>
			</div>

		</div>
	</div>


	<div class="container">
		<div class="row mt">
			<div class="col-md-12 col-lg-6 img-box-txt pl">
				<h2>Gwarancja Bezpieczeństwa</h2>
				<p>	Gwarantujemy Kandydatom, że jeśli z przyczyn niezależnych od nich samych rozwiążą współpracę z Klientem w okresie gwarancji, pomożemy im znaleźć nowe zatrudnienie.</p>
			</div>

			<div class="col-md-12 col-lg-6 img-box-txt en">
				<h2>Guarantee of Safety</h2>
				<p>We also guarantee that the Candidates who, for a reason beyond their control, dissolve their employment contract with the Client during the guarantee period, we will help them find new employer.</p>
			</div>

			<div class="col-md-12 col-lg-6">
				<div class="img-box">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/05/smiling-mature-corporate-executive-wearing-a-8SYVTPQ.resized.jpg" class= "img-box-image" alt="">
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