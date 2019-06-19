<?php get_header(); ?>
<p>&nbsp;</p>
<div id="content" class="grid_8 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header>
          <h2 style="text-align:right; color: #9F6233 !important"><?php the_title(); ?></h2>
        </header>
        <?php $single_image_size = of_get_option('single_image_size'); ?>
				<?php if($single_image_size=='' || $single_image_size=='normal'){ ?>
          <?php if(has_post_thumbnail()) {
            echo '<figure class="featured-thumbnail"><span class="img-wrap">'; the_post_thumbnail(); echo '</span></figure>';
            }
          ?>
        <?php } else { ?>
          <?php if(has_post_thumbnail()) {
            echo '<figure class="featured-thumbnail large"><span class="img-wrap"><span class="f-thumb-wrap">'; the_post_thumbnail('post-thumbnail-xl'); echo '</span></span></figure>';
            }
          ?>
        <?php } ?>
        <div class="post-content">
          <?php the_content(); ?>
          <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
        </div><!--.post-content-->
		<!--szczegoly oferty-->
		
		<?php 
		
		function check_comp($a) {
			if($a==1)
				echo '<td valign="top"  style="background: #F7DDC9"></td><td valign="top"  style="background: #F7DDC9"></td><td valign="top"  style="background: #F7DDC9"></td><td valign="top"  style="background: #F7DDC9"></td><td valign="middle"  style="text-align:center; background: #F7DDC9"">&#10004;</td></tr>';
			else if($a==2)
				echo '<td valign="top" ></td><td valign="top" ></td><td valign="top" ></td><td valign="middle"  style="text-align:center; background: #F7DDC9">&#10004;</td><td valign="top" ></td></tr>';
			else if($a==3)
				echo '<td valign="top" ></td><td valign="top" ></td><td valign="middle"  style="text-align:center; background: #F7DDC9">&#10004;</td><td valign="top" ></td><td valign="top" ></td></tr>';
			else if($a==4)
				echo '<td valign="top" ></td><td valign="middle"  style="text-align:center; background: #F7DDC9">&#10004;</td><td valign="top" ></td><td valign="top" ></td><td valign="top" ></td></tr>';
			else if($a==5)
				echo '<td valign="middle"  style="text-align:center; background: #F7DDC9">&#10004;</td><td valign="top" ></td><td valign="top" ></td><td valign="top" ></td><td valign="top" ></td></tr>';
		}
		
		$nrref = get_post_meta( get_the_ID(), 'nr_ref', true ); 
		$compdesc = get_post_meta( get_the_ID(), 'firma_info', true ); 
		$celstanowiska = get_post_meta( get_the_ID(), 'cel_stanowiska', true );
		$dzial = get_post_meta( get_the_ID(), 'dzial', true );
		$zakresodp = get_post_meta( get_the_ID(), 'glowny_zakres_odpowiedzialnosci', true );
		$zakresodparray = preg_split('/$\R?^/m', $zakresodp);
		$kraj = get_post_meta( get_the_ID(), 'kraj', true );
		$lokalizacja = get_post_meta( get_the_ID(), 'lokalizacja', true );
		$podleglyzespol = get_post_meta( get_the_ID(), 'podlegly_zespol', true );
		$raportujedo = get_post_meta( get_the_ID(), 'raportuje_do', true );
		$stanowisko = get_post_meta( get_the_ID(), 'stanowisko', true );
		$owiw = get_post_meta( get_the_ID(), 'oczekiwane_wyniki_wskazniki', true );
		$owiwarray = preg_split('/$\R?^/m', $owiw);
		$wykniez = get_post_meta( get_the_ID(), 'wyksztalcenie_niezbedne', true );
		$wykpoz = get_post_meta( get_the_ID(), 'wyksztalcenie_pozadane', true );
		$dosniez = get_post_meta( get_the_ID(), 'doswiadczenie_niezbedne', true );
		$dospoz = get_post_meta( get_the_ID(), 'doswiadczenie_pozadane', true );
		$ilosckompetencji = get_post_meta( get_the_ID(), 'ilosc_kompetencji', true );
		for($i=1;$i<=$ilosckompetencji;$i++)
		{
		$zmienna1 = 'kompetencje_'.$i;
		$zmienna2 = 'kompetencje_'.$i.'_ocena';
		$kompetencja[$i] = get_post_meta( get_the_ID(), $zmienna1, true );
		$kompetencjaocena[$i] = get_post_meta( get_the_ID(), $zmienna2, true );
		}
		$iloscwarunkow = get_post_meta( get_the_ID(), 'ilosc_warunkow', true );
		for($j=1;$j<=$iloscwarunkow;$j++)
		{
		$zmienna3 = 'warunki_'.$j;
		$zmienna4 = 'warunki_'.$j.'_taknie';
		$warunek[$j] = get_post_meta( get_the_ID(), $zmienna3, true );
		$warunekwynik[$j] = get_post_meta( get_the_ID(), $zmienna4, true );
		}
		/*$komp1 = get_post_meta( get_the_ID(), 'kompetencje_1', true );
		$komp1ocena = get_post_meta( get_the_ID(), 'kompetencje_1_ocena', true );
		$komp2 = get_post_meta( get_the_ID(), 'kompetencje_2', true );
		$komp2ocena = get_post_meta( get_the_ID(), 'kompetencje_2_ocena', true );
		$komp3 = get_post_meta( get_the_ID(), 'kompetencje_3', true );
		$komp3ocena = get_post_meta( get_the_ID(), 'kompetencje_3_ocena', true );
		$komp4 = get_post_meta( get_the_ID(), 'kompetencje_4', true );
		$komp4ocena = get_post_meta( get_the_ID(), 'kompetencje_4_ocena', true );
		$komp5 = get_post_meta( get_the_ID(), 'kompetencje_5', true );
		$komp5ocena = get_post_meta( get_the_ID(), 'kompetencje_5_ocena', true );*/
		
		echo '<p style="text-align:right; margin-top:-15px; color:gray; margin-bottom: 6px">Nr Ref. '.$nrref.'</p>';
		echo '<h3 style="color: #9F6233">Informacje podstawowe dotyczące firmy:</h3>'.$compdesc.'<div class="hr" style="margin: 7px"></div>';
		echo '<table>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Nazwa stanowiska:</strong></td><td valign="top" ><strong>'.$stanowisko.'</td></tr>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Dział:</strong></td><td valign="top" ><strong>'.$dzial.'</strong></td></tr>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Raportuje do:</strong></td><td valign="top" ><strong>'.$raportujedo.'</strong></td></tr>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Podległy zespół:</strong></td><td valign="top" ><strong>'.$podleglyzespol.'</strong></td></tr>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Lokalizacja:</strong></td><td valign="top" ><strong>'.$lokalizacja.'</strong></td></tr>';
		echo '<tr><td valign="top"  style="width: 167px; color: #9F6233"><strong>Kraj:</strong></td><td valign="top" ><strong>'.$kraj.'</strong></td></tr>';
		echo '</table><div class="hr" style="margin: 7px"></div>';
		echo '<h3 style="color: #9F6233">Cel stanowiska:</h3>'.$celstanowiska;
		echo '<br/><br/><h3 style="color: #9F6233">Główny zakres odpowiedzialności:</h3>';
		echo '<ul>';
		foreach ($zakresodparray as $zakrodp)
		{
			echo '<li>'.$zakrodp.'</li>';
		}
		echo '</ul>';
		echo '<h3 style="color: #9F6233">Oczekiwane wyniki i główne wskaźniki efektywności</h3>';
		echo '<ul>';
		if(count($owiwarray)<=1) echo $owiw; else {
		foreach ($owiwarray as $ow)
		{
			echo '<li>'.$ow.'</li>';
		}
		}
		echo '</ul>';
		echo '<h3 style="color: #9F6233">Informacje uzupełniające</h3>';
		echo '<table cellpadding=5 style="width: 100%"><tr style="border-bottom: 1px solid #9F6233"><td valign="top"  style="width:161px; border-right: 1px solid #9F6233"><strong>Doświadczenie zawodowe</strong></td><td valign="top" ><strong>Niezbędne:</strong></td><td valign="top" ><strong>Pożądane:</strong></td></tr>';
		echo '<tr><td valign="top"  style="border-right: 1px solid #9F6233"></td><td valign="top"  style="width:250px" valign="top">'.$dosniez.'</td><td valign="top" >'.$dospoz.'</td></tr>';
		echo '</table><br/><br/>';
		echo '<table cellpadding=5 style="width: 100%"><tr style="border-bottom: 1px solid #9F6233"><td valign="top"  style="width:161px; border-right: 1px solid #9F6233"><strong>Wykształcenie</strong></td><td valign="top" ><strong>Niezbędne:</strong></td><td valign="top" ><strong>Pożądane:</strong></td></tr>';
		echo '<tr><td valign="top"  style="border-right: 1px solid #9F6233"></td><td valign="top"  style="width:250px" valign="top">'.$wykniez.'</td><td valign="top" >'.$wykpoz.'</td></tr>';
		echo '</table><br/><br/>';
		echo'<h3 style="color: #9F6233">Kompetencje</h3>';
		echo '<table cellpadding=5><tr><td valign="top"></td><td valign="top"  class="top-offer">Wybitny (5)</td><td valign="top"  class="top-offer">Doskonały (4)</td><td valign="top"  class="top-offer">Dobry (3)</td><td valign="top"  class="top-offer">Uczący się (2)</td><td valign="top"  class="top-offer">Brak (1)</td></tr>';
		for($k=1;$k<=$ilosckompetencji;$k++) {
		echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$kompetencja[$k].'</td>';
		check_comp($kompetencjaocena[$k]);
		}
		/*echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$komp1.'</td>';
		check_comp($komp1ocena);
		echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$komp2.'</td>';
		check_comp($komp2ocena);
		echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$komp3.'</td>';
		check_comp($komp3ocena);
		echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$komp4.'</td>';
		check_comp($komp4ocena);
		echo '<tr style="border-bottom: 1px solid #9F6233"><td valign="top" >'.$komp5.'</td>';
		check_comp($komp5ocena);*/
		echo '</table><br/><br/>';
		echo'<h3 style="color: #9F6233">Warunki zatrudnienia</h3>';
		echo '<table cellpadding=5>';
		for($l=1; $l<=$iloscwarunkow; $l++)
		echo '<tr><td valign="top"  style="width:157px"><strong>'.$warunek[$l].'</strong></td><td valign="top"  style="padding-left: 20px">'.$warunekwynik[$l].'</td></tr>';
		echo '</table>';
		?>
		
		<div class="hr" style="margin: 7px"></div>
		
		
		
		
		
		<style type="text/css">
.auto-style1 {
	text-align: left;
}
.auto-style2 {
	text-align: center;
}
</style>



<p class="auto-style1">Kandydatów zainteresowanych ofertą prosimy o przesłanie życiorysu  wraz z listem motywacyjnym z zaznaczeniem numeru referencyjnego, na adres:</p>
<p class="auto-style2">HEADHUNTERS GROUP<br>
  sales &amp; marketing recruitment<br>
  ul. Karola Szajnochy 5/3<br>
  01-637 Warszawa<br>
  e-mail:&nbsp;<a href="mailto:biuro@hhg.pl?subject=CDAPMgr_01/2018">biuro@hhg.pl</a><br>
  <a href="http://www.hhg.pl/">www.hhg.pl</a> </p>
<p class="auto-style1"><strong><span style="color:red">Zanim zgłosisz swój udział w rekrutacji,  pamiętaj! </span></strong></p>
<p><strong>W dokumentach aplikacyjnych, które zechcesz  nam przekazać w odpowiedzi na to ogłoszenie, znajdują się Twoje dane osobowe.  Abyśmy mogli z tych informacji skorzystać i rozważyć Twoją kandydaturę na tę  ofertę zatrudnienia potrzebujemy Twojej zgody na przetwarzanie danych osobowych. </strong></p>
<p><strong><u>Zgodę tę możesz w każdej chwili wycofać, co  nie wpłynie na zgodność z prawem przetwarzania, jakiego dokonaliśmy na jej  podstawie zanim ją wycofałeś.  </u></strong></p>
<p>Zgodę  należy zamieścić w każdym przesyłanym do nas dokumencie aplikacyjnym (tj.  zarówno w CV, jak i w Liście motywacyjnym oraz w każdym innym dokumencie, który  zechcesz nam przekazać w odpowiedzi na to ogłoszenie o pracę). Treść zgody: </p>
<p><em>&bdquo;Wyrażam zgodę na przetwarzanie moich danych  osobowych zawartych w moich dokumentach aplikacyjnych przez Ewę Barańską –  Chodkowską prowadzącą działalność gospodarczą pod firmą &bdquo;HEADHUNTERS GROUP Ewa  Barańska – Chodkowska&rdquo; z siedzibą w Warszawie (&bdquo;HHG&rdquo;) dla potrzeb związanych z  prowadzonym przez HHG procesem rekrutacyjnym.&rdquo;  </em></p>
<p><strong>Możesz </strong>także zgodzić się na przetwarzanie Twoich  danych osobowych <strong>dla potrzeb przyszłych  procesów rekrutacyjnych prowadzonych przez HHG.</strong> Jeżeli chcesz, abyśmy  zachowali Twoje dokumenty aplikacyjne na przyszłość i korzystali z nich na  potrzeby innych rekrutacji, <u>wyraź także poniższą zgodę:</u></p>
<p><em> &bdquo;Wyrażam  zgodę na przetwarzanie moich danych osobowych zawartych w moich dokumentach  aplikacyjnych przez Ewę Barańską – Chodkowską prowadzącą działalność  gospodarczą pod firmą &bdquo;HEADHUNTERS GROUP Ewa Barańska – Chodkowska&rdquo; z siedzibą  w Warszawie dla potrzeb związanych z prowadzonymi w przyszłości przez HHG  procesami rekrutacyjnymi.&rdquo; </em></p>
<p><strong>Zgodę na przetwarzanie danych osobowych na  potrzeby przyszłych procesów rekrutacyjnych także możesz wycofać w każdym  czasie, co nie wpłynie na zgodność z prawem przetwarzania, jakiego HHG dokonała  przed jej wycofaniem. </strong></p>
<p><strong><u><span style="color:red">Zanim wyślesz</u></strong><strong> CV przeczytaj ważne informacje o przetwarzaniu Twoich danych osobowych! </span></strong><strong>Udostępniając swoje dane osobowe zawsze podejmuj decyzje świadomie. </strong></p>
<p>&nbsp;</p>
<ol>
	<li><strong>Administrator danych osobowych – kto to taki?</strong></li>
</ol>
<p>Administratorem  Twoich danych osobowych  oraz podmiotem,  do którego przesyłasz swoje dokumenty aplikacyjne, jest Ewa Barańska –  Chodkowska, która prowadzi działalność gospodarczą pod firmą &bdquo;HEADHUNTERS GROUP  Ewa Barańska – Chodkowska&rdquo;, adres prowadzonej działalności gospodarczej: ul.  Karola Szajnochy 5 lok. 3, 01-637 Warszawa, e-mail: <a href="mailto:biuro@hhg.pl">biuro@hhg.pl</a>, dalej jako:  &bdquo;HHG&rdquo;.</p>
<ol>
	<li value="2"><strong>Cel  przetwarzania Twoich danych osobowych oraz podstawa prawna przetwarzania</strong></li>
</ol>
<p>Twoje dane osobowe będą przetwarzane przez HHG w celu przeprowadzenia  rekrutacji na stanowisko, na które aplikujesz. Jeżeli wyraziłeś na to zgodę w  przesłanych do HHG dokumentach aplikacyjnych, wówczas Twoje dane osobowe będą  przetwarzane także dla potrzeb przyszłych rekrutacji prowadzonych przez HHG. </p>
<p>W obu przypadkach, tj. zarówno gdy przetwarzamy Twoje dane osobowe w celu  rozważenia Twojej kandydatury na to konkretne stanowisko pracy, jak również  kiedy przetwarzać będziemy Twoje dane osobowe w ramach przyszłych procesów  rekrutacyjnych, <strong>podstawą prawną takiego  przetwarzania jest wyrażona przez Ciebie zgoda, a zatem przepis art. 6 ust.1  lit. a) </strong>Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia  27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z  przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych  oraz uchylenia dyrektywy 95/46/WE (&bdquo;RODO&rdquo;). </p>
<ol>
	<li value="3"><strong>Komu możemy ujawnić Twoje dane osobowe?</strong></li>
</ol>
<p><strong>&nbsp;</strong>Odbiorcami Twoich danych osobowych, a zatem podmiotami, którym możemy je  ujawnić w związku z prowadzoną przez nas rekrutacją na stanowisko, na które  aplikujesz, są potencjalni pracodawcy, co do których uznamy, że spełniasz  oczekiwania określone przez te podmioty na stanowisko, którego dotyczy  niniejsze ogłoszenie o pracę. <strong>Nie martw  się – nic nie będzie się odbywać bez Twojej wiedzy i zgody!</strong></p>
<p>Dodatkowo, odbiorcami Twoich danych osobowych są następujące podmioty: (i) dostawca  serwera poczty elektronicznej, za pomocą której przekazujesz nam swoje  dokumenty aplikacyjne, i za pomocą której będziemy się z Tobą kontaktować w  toku rekrutacji, (ii) dostawca hostingu strony <a href="http://www.hhg.pl">www.hhg.pl</a>, za pomocą  której przesyłasz swoje dokumenty aplikacyjne, a także (iii)  nasi pracownicy zaangażowani w przeprowadzenie procesu rekrutacyjnego. </p>
<ol>
	<li value="4"><strong>Jak długo będziemy przetwarzać Twoje dane osobowe?</strong></li>
</ol>
<p>Twoje dane osobowe będziemy przetwarzać przez okres niezbędny do  przeprowadzenia procesu rekrutacyjnego na stanowisko, na które aplikujesz. Po  zakończeniu procesu rekrutacji usuniemy Twoje dane osobowe z naszej bazy kandydatów,  chyba że wcześniej wycofasz zgodę na ich przetwarzanie – w takiej sytuacji  usuniemy Twoje dane osobowe przed zakończeniem procesu rekrutacji i wcześniej  zaprzestaniemy ich przetwarzania. </p>
<p>Jeżeli wyrazisz zgodę na przetwarzanie Twoich danych osobowych na potrzeby  przyszłych procesów rekrutacyjnych, wówczas będziemy je przetwarzać przez okres  2 lat od dnia otrzymania Twojej zgody. Jeżeli zgodę tę wycofasz przed upływem  tego okresu, wówczas usuniemy Twoje dane osobowe i wcześniej zaprzestaniemy ich  przetwarzania. </p>
<ol>
	<li value="5"><strong>Masz prawo do …</strong></li>
</ol>
<p>Zgodnie z RODO oraz w przypadkach w RODO wskazanych, masz prawo do: (i)  żądania od nas dostępu do Twoich danych osobowych, a także (ii) ich  sprostowania, (iii) usunięcia lub (iv) ograniczenia przetwarzania lub (v) prawo  wniesienia sprzeciwu wobec przetwarzania, a także (vi) prawo do przenoszenia  danych. </p>
<p>Możesz także wycofać każdą z wyrażonych względem nas zgód na przetwarzanie  Twoich danych osobowych. </p>
<p>Wybrane żądanie skieruj na adres: <a href="mailto:biuro@hhg.pl">biuro@hhg.pl</a></p>
<ol>
	<li  value="6"><strong>Możesz złożyć skargę do organu nadzorczego</strong></li>
</ol>
<p>Organem nadzorczym do spraw ochrony danych osobowych jest Prezes Urzędu  Ochrony Danych Osobowych. </p>
<ol>
	<li  value="7"><strong>Dobrowolność podania danych osobowych</strong></li>
</ol>
<p>Przekazanie nam Twoich danych osobowych jest dobrowolne – to Ty decydujesz,  czy chcesz wziąć udział w prowadzonej przez nas rekrutacji. W celu jej  przeprowadzenia potrzebujemy jednak przetwarzać Twoje dane osobowe. </p>
<ol>
	<li  value="8"><strong>Automatyczne podejmowanie decyzji i profilowanie</strong></li>
</ol>
<p>Twoje dane osobowe nie będą podlegały automatycznemu podejmowaniu decyzji,  w tym profilowaniu. </p>





      </article>


        

			<?php /* If a user fills out their bio info, it's included here */ ?>
      

    </div><!-- #post-## -->
    
    
    <nav class="oldernewer">
      <div class="older">
        <?php previous_post_link('%link', '&laquo; Poprzednia oferta') ?>
      </div><!--.older-->
      <div class="newer">
        <?php next_post_link('%link', 'Następna oferta &raquo;') ?>
      </div><!--.newer-->
    </nav><!--.oldernewer-->


  <?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>