<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marinate
 */

get_header(); 
?>

<?php if ( get_header_image() ) : ?>
	<div class="custom-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
       
        <section class="blog-section">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    
          <?php

			if( have_posts() ) :
			$count = 1;
			 /* Start the Loop */
			 while ( have_posts() ) : the_post();
			 get_template_part( 'template-parts/content' );
			if ($count % 3 == 0) {
				echo "<div class='clearfix'></div>";
			}
			$count++;			 
			 endwhile;
			 
			echo "<div class='clearfix'></div>";			 
			 
			$post_args =  array(
				'screen_reader_text' => ' ',
				'prev_text' => __( '<div class="chevronne"><i class="fa fa-chevron-left"></i></div>', 'marinate' ),
				'next_text' => __( '<div class="chevronne"><i class="fa fa-chevron-right"></i></div>', 'marinate' ),
				);
	
				the_posts_pagination( $post_args );        
			 
			else :
			get_template_part( 'template-parts/content', 'none' );
			endif; 
		
		?>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        
<?php  get_footer(); ?>