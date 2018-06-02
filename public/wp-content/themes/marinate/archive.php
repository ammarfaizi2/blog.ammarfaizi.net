<?php
/**
 * The template for displaying post archives
 *
 * @package marinate
 */

get_header(); 

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
 	$marinate_col_class = "col-lg-12 col-md-12 col-xs-12 col-sm-12";
}
else {
 	$marinate_col_class = "col-lg-9 col-md-9 col-xs-12 col-sm-12";
}
?>
       
        <section class="blog-section">
            <div class="container">
	            <div class="<?php echo esc_attr($marinate_col_class); ?>">            
                    <div class="row">
                    
          <?php if( have_posts() ) : ?>
						<div class="archive-title">
							<?php
							the_archive_title('<h2>', '</h2>');
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</div>
          <?php
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
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <?php get_sidebar(); ?>
            </div>                
            </div>
        </section>
        
<?php  get_footer(); ?>