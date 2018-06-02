<?php
/**
 * The sidebar containing the off canvas widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinate
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
 	return;
}
?>
		 <!-- Pushy Sidebar -->
        <nav class="pushy pushy-left">
            <div class="pushy-content">
                <div class="widget-area" role="complementary">					
                
                
						<?php
                            $socialheader = get_theme_mod('marinate_social_ed', '0');
                            $fb = get_theme_mod('marinate_button_url_fb');
                            $tw = get_theme_mod('marinate_button_url_tw');
                            $pin = get_theme_mod('marinate_button_url_pin');
                            $insta = get_theme_mod('marinate_button_url_ins');
                            $gplus = get_theme_mod('marinate_button_url_gp');
                            if ($socialheader) {
                            ?>
	                		<aside class="widget widget_social_menu hidden-md hidden-lg">                            
                            <ul class="social-networks">
                                <?php if ($fb) { ?><li><a class="facebook" href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                <?php if ($tw) { ?><li><a class="twitter" href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                <?php if ($pin) { ?><li><a class="pinterest" href="<?php echo esc_url($pin); ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
                                <?php if ($insta) { ?><li><a class="instagram" href="<?php echo esc_url($insta); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
                                <?php if ($gplus) { ?><li><a class="google-plus" href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                            </ul>
	                        </aside>                            
                            <?php
                            }
                        ?>
                                                        
                		<aside class="widget widget_primary_menu hidden-md hidden-lg">
						  <?php
                            wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => '',
								'container'      => 'ul',
								'fallback_cb'    => 'wp_page_menu',
								'menu_class'     => '',
								'item_wrap'      => '<ul class="%2$s">%3s</ul>',						  
                            ) );
                          ?>                         
                        </aside>
                
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            </div>
        </nav>