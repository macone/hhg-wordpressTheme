<?php
// =============================== My Recent Posts (News widget) ======================================
class MY_PostWidget extends WP_Widget {
    /** constructor */
    function MY_PostWidget() {
        parent::WP_Widget(false, $name = 'My - Recent Posts');	
    }

  /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$category = apply_filters('widget_category', $instance['category']);
				$linktext = apply_filters('widget_linktext', $instance['linktext']);
				$linkurl = apply_filters('widget_linkurl', $instance['linkurl']);
				$count = apply_filters('widget_count', $instance['count']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php  $temp = $wp_query;
									 $wp_query= null;
									 $wp_query = new WP_Query();  ?>
						
								<ul class="latestpost">
																<li>
								<div class="polski"><h3>Dla pracowników</h3></div>
								<div class="angielski"><h3>For employees</h3></div>
								<div class="excerpt">
								<div id="oglhome">
								<?php 
								global $post;
								$AllQuery = array(
									'numberposts' => 99,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => array('sprzedaz','marketing','inne')
								);
								$myposts = get_posts($AllQuery);
								$licznik = 0;
								foreach( $myposts as $post ) :	setup_postdata($post); 
								$wypis = get_post_meta( get_the_ID(), 'excerpt', true ); 
								$data = get_post_meta( get_the_ID(), 'datastart', true );
								?>
								
								<div id="oglhome<?php echo $licznik; ?>" style="display: none">
								<a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a> <span class="ref-nr"></span>
								<p><?php echo $wypis; ?></p>
								
								<p style="text-align: right">
								<div class="polski"><a href="<?php the_permalink(); ?>" rel="bookmark" class="button"><?php _e('Przejdź do ogłoszenia', 'theme1407');?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hhg/praca-ogloszenia/" rel="bookmark" class="button"><?php _e('Więcej ogłoszeń', 'theme1407');?></a></div>
								<div class="angielski"><a href="<?php the_permalink(); ?>" rel="bookmark" class="button"><?php _e('Go to offer', 'theme1407');?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hhg/praca-ogloszenia/" rel="bookmark" class="button"><?php _e('More offers', 'theme1407');?></a></div>
								
								</p>
								</div>
								
								<?php $licznik++; endforeach; ?>
								</div>
								</div>
								</li>
								<?php $querycat = $category; $i=1; ?>
								
								<?php $wp_query->query("showposts=". $count ."&category_name=". $querycat); ?>
								
								<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
								<?php if (($i%4)==0) { $addclass = 'no-margin'; } ?>
								<li class="<?php echo $addclass; ?>">
								<?php $odnosnik = get_post_meta(get_the_ID(), 'link', true); ?>
								<?php if ( has_post_thumbnail()) { ?>
									 <?php echo '<div class="featured-thumbnail no-hover"><a href="'.$odnosnik.'">'; the_post_thumbnail('medium-post-thumbnail'); echo '</a></div>'; ?>
								<?php } ?>
								
								
								<h3><a href="<?php echo $odnosnik; ?>"><?php the_title(); ?></a></h3>
								<div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,50);?></div>
								<p style="text-align: right">
								<div class="polski"><a href="<?php echo $odnosnik; ?>" rel="bookmark" title="<?php _e('Bezpośredni link do', 'theme1407');?> <?php the_title_attribute(); ?>" class="button"><?php _e('Więcej', 'theme1407');?></a></div>
								
								<div class="angielski"><a href="<?php echo $odnosnik; ?>" rel="bookmark" title="<?php _e('Direct link to', 'theme1407');?> <?php the_title_attribute(); ?>" class="button"><?php _e('More', 'theme1407');?></a></div>
								
								</p>
								</li>
								<?php $addclass=""; $i++; endwhile; ?>

								</ul>
								<?php endif; ?>
								
								<?php $wp_query = null; $wp_query = $temp;?>
								
								
								<!-- Link under post cycle -->
								<?php if($linkurl !=""){?>
									<a href="<?php echo $linkurl; ?>" class="button"><?php echo $linktext; ?></a>
								<?php } ?>

								
              <?php echo $after_widget; ?>
			 
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
      $title = esc_attr($instance['title']);
			$category = esc_attr($instance['category']);
			$linktext = esc_attr($instance['linktext']);
			$linkurl = esc_attr($instance['linkurl']);
			$count = esc_attr($instance['count']);
        ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1407'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category Slug:', 'theme1407'); ?> <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo $category; ?>" /></label></p>
      
      <p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Posts per page:'); ?><input class="widefat" style="width:30px; display:block; text-align:center" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" /></label></p>
			
			 <p><label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Link Text:', 'theme1407'); ?> <input class="widefat" id="<?php echo $this->get_field_id('linktext'); ?>" name="<?php echo $this->get_field_name('linktext'); ?>" type="text" value="<?php echo $linktext; ?>" /></label></p>
			 
			 <p><label for="<?php echo $this->get_field_id('linkurl'); ?>"><?php _e('Link Url:', 'theme1407'); ?> <input class="widefat" id="<?php echo $this->get_field_id('linkurl'); ?>" name="<?php echo $this->get_field_name('linkurl'); ?>" type="text" value="<?php echo $linkurl; ?>" /></label></p>
        <?php 
    }

} // class  Widget
?>