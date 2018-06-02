<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marinate
 */

?>

                                <header class="entry-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
                                    <div class="entry-meta">
                                        <span>
												<?php the_category( '&nbsp;&bull;&nbsp;' ); ?>
										</span>                                       
                                        <span class="separator"><?php echo esc_html('|', 'marinate'); ?></span>
                                        <span class="date"><?php echo get_the_date(get_option( 'date-format' ) ); ?></span>
                                    </div>
                                </header>
                                <div class="entry-content">
                                <?php 
								the_content(); 
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marinate' ),
									'after'  => '</div>',
								) );
								
								?>
                                </div>
								<?php the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>		                                
