  <?php if (!is_page('referencje') || 'referencje'!=get_post_type() ) { ?><div class="hr" style="margin:0 auto; width: 940px"></div></div><!--.container-->
 
  <div class="polski"><div class="container_12 clearfix" style="text-align: center; margin-bottom: -18px;">
  <?php if ( 'ogloszenia'==get_post_type() ) { ?><div class="hr" style="margin-top: 0; margin-bottom: 0; "></div> <?php } ?>
   <?php if ( 'referencje'!=get_post_type() ) { ?>
    <h3 style="text-align: left; margin-left: 10px; margin-top: 20px">Nasi Klienci:</h3><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/03/loga_pod_usp.gif" alt="" style="width: 650px; height: 67px; margin-top: -64px"/><?php } ?>
	</div></div>

<div class="angielski"><div class="container_12 clearfix" style="text-align: center; margin-bottom: -18px;">
  <?php if ( 'ogloszenia'==get_post_type() ) { ?><div class="hr" style="margin-top: 0; margin-bottom: 0; "></div> <?php } ?>
   <?php if ( 'referencje'!=get_post_type() ) { ?>
    <h3 style="text-align: left; margin-left: 10px; margin-top: 20px">Our Clients:</h3><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/03/loga_pod_usp.gif" alt="" style="width: 650px; height: 67px; margin-top: -64px"/><?php } ?>
	</div></div>


	<?php } ?>
	<footer id="footer">
		<div class="container_12 clearfix">
				<?php if ( 'referencje'!=get_post_type() ) { ?><div class="hr"></div><?php } ?>
				<div class="grid_6" style="width: 190px">
					<div id="copyright">
					
					   <?php if(of_get_option('logo_type') == 'text_logo'){?>
					   	
						<div class="wrapper">
							<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name clearfix"><img src="<?php bloginfo('template_url'); ?>/images/logo-img-footer.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"><br />
<?php bloginfo('name'); ?></a>
						</div>
						
					   <?php } else { ?>
					   	
							<div class="footer-img-logo"><?php if(of_get_option('logo_url') != ''){ ?>
								<a href="<?php bloginfo('url'); ?>/"><img src="<?php echo of_get_option('logo_url', "" ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
							  <?php } else { ?>
								<a href="<?php bloginfo('url'); ?>/"><img width="185" height="81" src="<?php bloginfo('template_url'); ?>/images/logo_main.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>" style="margin: -10px 0 0 -10px"></a>
							  <?php } ?></div>
						
					   <?php } ?>	
					   
					   
					   							
					   <div class="text">
					   	<?php $myfooter_text = of_get_option('footer_text'); ?>
						
								<?php if($myfooter_text){?>
						<?php echo of_get_option('footer_text'); ?>
					   <?php } else { ?>
						<?php /* &copy; <?php echo date('Y'); ?>   <a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a> */ ?>
					   <?php } ?>
					   <?php if( is_front_page() ) { ?>
					   <!-- More <a rel="nofollow" href="http://www.templatemonster.com/category/business-wordpress-templates/" target="_blank">Business WordPress Templates at TemplateMonster.com</a>-->
					   <?php } ?>
					   </div>
					</div>
				</div>

				<div class="polski"><div id="widget-footer" style="float: left; width: 420px; margin-left: 70px;">
					<?php /*if ( ! dynamic_sidebar( 'Footer' ) ) :*/ ?>
					<!--Widgetized Footer-->
				   <?php /*endif;*/ ?>
					<a href="<?php bloginfo('url'); ?>/rozwiazania/rozwiazania">Rozwiązania</a> | <a href="<?php bloginfo('url'); ?>/innowacje/innowacje">Innowacje</a> | <a href="<?php bloginfo('url'); ?>/referencje">Referencje</a> | <a href="<?php bloginfo('url'); ?>/o-nas/o-nas/">O nas</a> | <a href="<?php bloginfo('url'); ?>/praca-ogloszenia">Oferty pracy</a> | <a href="<?php bloginfo('url'); ?>/kontakt">Kontakt</a>
				 </div></div>

<div class="angielski"><div id="widget-footer" style="float: left; width: 420px; margin-left: 70px;">
					<?php /*if ( ! dynamic_sidebar( 'Footer' ) ) :*/ ?>
					<!--Widgetized Footer-->
				   <?php /*endif;*/ ?>
					<a href="<?php bloginfo('url'); ?>/rozwiazania/rozwiazania">Solutions</a> | <a href="<?php bloginfo('url'); ?>/innowacje/innowacje">Innovations</a> | <a href="<?php bloginfo('url'); ?>/referencje">References</a> | <a href="<?php bloginfo('url'); ?>/o-nas/o-nas/">About us</a> | <a href="<?php bloginfo('url'); ?>/praca-ogloszenia">Job offers</a> | <a href="<?php bloginfo('url'); ?>/kontakt">Contact</a>
				 </div></div>

				 <div class="polski"><div id="widget-footer" style="float: left; height: 120px; width: 250px">
					<?php /*<strong>HEADHUNTERS GROUP</strong><br/>sales & marketing recruitment<br/>
					adres: ul. Szajnochy 5/3, 01-637 Warszawa<br/><br/>
					email: <a href="mailto:info@hhg.pl">info@hhg.pl</a><br/>
					tel./fax: 022 839 88 75 | tel: 022 839 89 42<br/> */ ?>
					<h3 style="text-align: right">
					<a href="<?php bloginfo('url'); ?>/rekrutacja-on-line/">
					<a href="http://www.hhg.pl/rekrutacja-on-line/"  title="">&raquo; Zostaw swoje CV</a>
					</a></h3>
					<div id="zostawCV" style="display: none">
					<?php 
					$page_id=1045;
					$page_data=get_page($page_id);
					echo apply_filters('the_content', $page_data->post_content); 
					?>
					</div>
					<?php /*
					$page_id=684;
					$page_data=get_page($page_id);
					echo apply_filters('the_content', $page_data->post_content); */
					?>
					
				 </div></div>
 <div class="angielski"><div id="widget-footer" style="float: left; height: 120px; width: 250px">
					<?php /*<strong>HEADHUNTERS GROUP</strong><br/>sales & marketing recruitment<br/>
					adres: ul. Szajnochy 5/3, 01-637 Warsaw<br/><br/>
					email: <a href="mailto:info@hhg.pl">info@hhg.pl</a><br/>
					tel./fax: 022 839 88 75 | tel: 022 839 89 42<br/> */ ?>
					<h3 style="text-align: right">
					<a href="<?php bloginfo('url'); ?>/rekrutacja-on-line/">
					<a href="http://www.hhg.pl/rekrutacja-on-line/"  title="">&raquo; Leave your CV</a>
					</a></h3>
					<div id="zostawCV" style="display: none">
					<?php 
					$page_id=1045;
					$page_data=get_page($page_id);
					echo apply_filters('the_content', $page_data->post_content); 
					?>
					</div>
					<?php /*
					$page_id=684;
					$page_data=get_page($page_id);
					echo apply_filters('the_content', $page_data->post_content); */
					?>
					
				 </div>

		</div><!--.container-->
	</footer>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>