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
		$lista_branz = get_post_meta( get_the_ID(), 'branza_dwa', true ); 
		$branza = get_post_meta( get_the_ID(), 'branza', true ); 
		$nrref = get_post_meta( get_the_ID(), 'nr_ref', true ); 
		$compdesc = get_post_meta( get_the_ID(), 'firmainfo', true ); 
		$celstanowiska = get_post_meta( get_the_ID(), 'celstanowiska', true );
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
		$wykniez = get_post_meta( get_the_ID(), 'wyksztalcenieniezbedne', true );
		$wykpoz = get_post_meta( get_the_ID(), 'wyksztalceniepozadane', true );
		$dosniez = get_post_meta( get_the_ID(), 'doswiadczenieniezbedne', true );
		$dospoz = get_post_meta( get_the_ID(), 'doswiadczeniepozadane', true );
		/*$ilosckompetencji = get_post_meta( get_the_ID(), 'ilosc_kompetencji', true );*/
		/*kompetencje*/
		$kompetencje = get_post_meta( get_the_ID(), 'kompetencje', true );
		$kompetencjearray = preg_split('/$\R?^/m', $kompetencje);
		$ilosckompetencji = count($kompetencjearray);
		$kompetencjeoceny = get_post_meta( get_the_ID(), 'kompetencje_oceny', true );
		$kompetencjeocenyarray = preg_split('/$\R?^/m', $kompetencjeoceny);
		/*kazda w nowym wierszu; zapisywane do tablicy; koniec*/
		for($i=0;$i<=$ilosckompetencji;$i++)
		{
		$kompetencja[$i] = $kompetencjearray[$i];
		$kompetencjaocena[$i] = $kompetencjeocenyarray[$i];
		}
		/*$iloscwarunkow = get_post_meta( get_the_ID(), 'ilosc_warunkow', true );*/
		/*warunki*/
		$warunki = get_post_meta( get_the_ID(), 'warunki_zatrudnienia', true );
		$warunkiarray = preg_split('/$\R?^/m', $warunki);
		$iloscwarunkow = count($warunkiarray);
		$warunkiuwagi = get_post_meta( get_the_ID(), 'warunki_uwagi', true );
		$warunkiuwagiarray = preg_split('/$\R?^/m', $warunkiuwagi);
		/*każdy w nowym wierszu; zapisywane do tablicy; koniec*/
		for($j=0;$j<=$iloscwarunkow;$j++)
		{
		$warunek[$j] = $warunkiarray[$j];
		$warunekuwaga[$j] = $warunkiuwagiarray[$j];
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
		
		echo '<p style="text-align:right; margin-top:-15px; color:gray; margin-bottom: 6px">'.$lista_branz.'Nr Ref. '.$nrref.'</p>';
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
		for($k=0;$k<$ilosckompetencji;$k++) {
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
		for($l=0; $l<$iloscwarunkow; $l++)
		echo '<tr><td valign="top"  style="width:157px"><strong>'.$warunek[$l].'</strong></td><td valign="top"  style="padding-left: 20px">'.$warunekuwaga[$l].'</td></tr>';
		echo '</table>';
		?>
		
		<div class="hr" style="margin: 7px"></div><p>Kandydatów zainteresowanych ofertą prosimy o przesłanie życiorysu wraz z listem motywacyjnym z zaznaczeniem numeru referencyjnego, na adres:</p>
 
<p style="text-align:center">HEADHUNTERS GROUP<br/>
sales & marketing recruitment<br/>
ul. Karola Szajnochy 5/3<br/>
01-637 Warszawa<br/>
e-mail: <a href="mailto:biuro@hhg.pl?subject=<?php echo $nrref; ?>">biuro@hhg.pl</a><br/>
<a href="http://www.hhg.pl">www.hhg.pl</a>
</p>
<p>HEADHUNTERS GROUP zapewnia w pełni dyskretny proces rekrutacji i weryfikacji każdej aplikacji.<br/>
<strong>Uprzejmie informujemy, że udzielimy odpowiedzi wszystkim Kandydatom, którzy odpowiedzą na ogłoszenie.</strong><br/>
Zainteresowane osoby prosimy o umieszczenie w dokumentach następującej klauzuli:<br/>
Wyrażam zgodę na przetwarzanie moich danych osobowych przez HEADHUNTERS GROUP, Ul. K. Szajnochy 5 lok 3, 01-637 Warszawa do celów związanych z procesem aktualnych i przyszłych rekrutacji, zgodnie z Ustawą z dnia 29 sierpnia 1997 r. o Ochronie Danych Osobowych (tekst jednolity: Dz. U. 2014 r. poz. 1182) . Wyrażam także zgodę na udostępnianie moich danych osobowych potencjalnym pracodawcom do celów związanych z procesem rekrutacji. Przysługuje mi prawo dostępu do moich danych i ich poprawiania.</p>
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