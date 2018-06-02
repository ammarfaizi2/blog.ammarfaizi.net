<?php
/**
 * The template for displaying 404 error pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marinate
 */
get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">

					<section class="error-404 not-found">
					
                    		<h1 class="page-title"><?php esc_html_e( '404', 'marinate' ); ?></h1>
							<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'marinate' ); ?></h2>
							<p><?php esc_html_e( 'Go back to the homepage.', 'marinate' ); ?></p>
                            <a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Homepage', 'marinate' ); ?></a>  
					</section><!-- .error-404 -->		    
        
    	</div><!-- .row -->
  </div><!-- .container -->
</div><!-- #content -->

        
<?php  get_footer(); ?>