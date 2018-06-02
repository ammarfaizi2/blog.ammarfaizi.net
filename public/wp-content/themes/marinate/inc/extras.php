<?php  
/**
 * Extra Functions for marinate.
 *
 * @package marinate
 */
if( ! function_exists( 'marinate_author_bio_cb' ) ) :
/**
 * Author Bio 
*/
function marinate_author_bio_cb(){ 
    if( get_the_author_meta( 'description' ) ){ ?>

      <div class="author-section">
                <h2 class="author-header"><?php esc_html_e('About The Author', 'marinate'); ?></h2>
                <hr>
                <div class="img-holder">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 134, '', '', array( 'class' => array('img-responsive', 'img-circle') ) ); ?>
                </div>
                <div class="text-holder">
                  <h3 class="author-name"><?php echo get_the_author(); ?></h3>
                  <?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?>
                </div>
              </div>
              <div class="clearfix"></div>
        
        
    <?php
    }
}
endif;
add_action( 'marinate_author_bio', 'marinate_author_bio_cb' );

/**
 * Footer Credits
*/
if ( ! function_exists( 'marinate_footer_credit' ) ) :

function marinate_footer_credit(){

    $text  = '<div class="copyright">';
	$text .= '<div class="left-text">';
    $text .=  esc_html__( 'Copyright &copy; ', 'marinate' ) . date_i18n( 'Y' );
    $text .= ' <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>. ';
    $text .= '</span><div class="right-text">';
    $text .= '<a href="' . esc_url( 'http://metricthemes.com/theme/marinate/' ) .'" rel="author" target="_blank">' . esc_html__( 'Marinate by MetricThemes', 'marinate' ) .'</a>. '; /* translators: %s: wordpress.org URL */ 
    $text .= sprintf( esc_html__( 'Powered by %s', 'marinate' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'marinate' ) ) .'" target="_blank">WordPress</a>.' );
    $text .= '</span></div>';

    echo apply_filters( 'marinate_footer_text', $text ); // WPCS: xss ok
}

add_action( 'marinate_footer', 'marinate_footer_credit' );

endif;

function marinate_header_title() {
	/*
	 * If header text is set to display, let's bail.
	 * hattip:  https://themetry.com/custom-header-text-display-option/
	 */
	if ( display_header_text() ) {
		return;
	}
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	</style>
	<?php	
}

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function marinate_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'marinate_pingback_header' );