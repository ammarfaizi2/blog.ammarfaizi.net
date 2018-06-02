<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinate
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>    
    
</head>

<body <?php body_class(); ?>>
<div class="site-overlay"></div>
    <div id="page" class="hfeed site">

        <header class="site-header" id="masthead">
        <div class="container">        
        
        	<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 pushmenu push">
				<a id="marinate-navbtn" class="menu-btn"><span></span></a>                
            </div>
            

        
             <div class="site-branding col-lg-7 col-md-7 col-sm-11 col-xs-11">
		             	   				 <?php the_custom_logo(); ?>
				    	                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <?php
                                            $description = get_bloginfo( 'description', 'display' );
                                            if ( $description || is_customize_preview() ) : ?>
                                                <p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                                        <?php endif; ?>
              </div>        
              
        	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">           
                
				<?php
                    $socialheader = get_theme_mod('marinate_social_ed', '0');
                    $fb = get_theme_mod('marinate_button_url_fb');
                    $tw = get_theme_mod('marinate_button_url_tw');
                    $pin = get_theme_mod('marinate_button_url_pin');
                    $insta = get_theme_mod('marinate_button_url_ins');
                    $gplus = get_theme_mod('marinate_button_url_gp');
                    if ($socialheader) {
                    ?>
                    <ul class="social-networks">
                        <?php if ($fb) { ?><li><a class="facebook" href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
                        <?php if ($tw) { ?><li><a class="twitter" href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
                        <?php if ($pin) { ?><li><a class="pinterest" href="<?php echo esc_url($pin); ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
                        <?php if ($insta) { ?><li><a class="instagram" href="<?php echo esc_url($insta); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
                        <?php if ($gplus) { ?><li><a class="google-plus" href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                    </ul>
                    <?php
                    }
                ?>
                
                
            </div>              
			</div>
			<div class="clearfix"></div>	
            <nav class="navbar navbar-default main-navigation hidden-xs hidden-sm" id="site-navigation">
		        <div class="container">                    

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo esc_html('Toggle navigation', 'marinate') ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">                                                                   
						  <?php
                            wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'      => 'ul',
								'fallback_cb'    => 'wp_page_menu',
								'menu_class'     => 'nav navbar-nav main-nav',
								'item_wrap'      => '<ul class="%2$s">%3s</ul>',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),							  
                            ) );
                          ?>                        
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
                <!-- /.container -->            
        </header>       