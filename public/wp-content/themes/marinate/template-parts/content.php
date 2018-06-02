<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marinate
 */
?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                            <div class="col-md-4 col-sm-4 col-xs-12">
								<?php
                                if ( is_sticky() ) { 
                                ?>                            
									<div class="ribbon"><span><?php echo esc_html('STICKY', 'marinate'); ?></span></div>                            
                                <?php } ?>                                                                
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                    <?php the_post_thumbnail('marinate-featured', array('class' => 'img-responsive')); ?>
                                </a>
                                <header class="entry-header">
									<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="entry-meta">
                                        <span>
										<?php            
                                            $categories = get_the_category();
                                            if ( !empty( $categories ) ) { ?>
                                            <span><a href="<?php echo esc_url(get_category_link( $categories[0]->term_id )); ?>"><?php echo esc_html( $categories[0]->name ); ?></a></span>
                                        <?php } ?>                                        
                                        <span class="separator"><?php echo esc_html('|', 'marinate'); ?></span>
                                        <span class="date"><?php echo get_the_date(get_option( 'date-format' ) ); ?></span>
                                    </div>
                                </header>
                            </div>
						</article><!-- #post-<?php the_ID(); ?> -->                                                