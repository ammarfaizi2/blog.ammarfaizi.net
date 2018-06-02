<?php
/**
 * The template for displaying search results
 *
 * @package marinate
 */

get_header(); ?>

        
        <section class="blog-section">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                    <div class="row">
                    
		<div class="search-heading">
		<?php /* translators: %s: search term */ ?>
		<h1 class="search-title"><?php printf( esc_html( 'Search Results for: %s', 'marinate' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>                    
		</div>                    
                    
          <?php if( have_posts() ) : ?>
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
            </div>
        </section>
        
<?php  get_footer(); ?>