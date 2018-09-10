<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
								<?php // HERO AREA / MAIN CONTENT ?>
								<?php if ( has_post_thumbnail() ) : ?>
								<div class="featured-image <?php if( get_field('wave_type') ) { echo get_field('wave_type'); } ?>">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<?php endif; ?>
								
								<?php
								if( get_the_content() ) {
									echo '<section class="main-content '. get_field('wave_type') .'" itemprop="articleBody">
											<div class="entry-content wrap cf">';
											the_content();
									echo '</div>
										</section>';
								}
								?>
								
								
								<?php // RETAILERS ?>
								<?php if( have_rows('retailer') ): ?>
									<section class="retailers wrap cf">
									<?php while( have_rows('retailer') ): the_row(); ?>
									
										<div class="col-6">
											<img src="<?php the_sub_field('image'); ?>" alt="<?php get_sub_field('name'); ?>">
											<?php if( get_sub_field('link') ) : ?>
												<h3><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('name'); ?></a></h3>
											<?php else : ?>
												<h3><?php the_sub_field('name'); ?></h3>
											<?php endif; ?>
										</div>
									
									<?php endwhile; ?>
									</section>
								<?php endif; ?>
								
								
								<?php // GRADIENT PANELS ?>
								<?php if( have_rows('gradient_panels') ): ?>
									<section class="grad-row cf">
									<?php while( have_rows('gradient_panels') ): the_row(); ?>
									
										<div class="col-6 grad-panel <?php echo get_sub_field('colour'); ?>">
											<?php the_sub_field('panel'); ?>
										</div>
									
									<?php endwhile; ?>
									</section>
								<?php endif; ?>
								
								
								<?php // COLUMNS CONTENT ?>
								<?php if( have_rows('columns_content') ): while( have_rows('columns_content') ): the_row(); ?>
									<section class="row wrap cf">
										<?php if( have_rows('column') ): while( have_rows('column') ): the_row(); ?>
											<div class="col-6">
												<?php if( get_sub_field('title') ) echo '<h2 class="title blue">'.get_sub_field('title').'</h2>'; ?>
												<?php echo the_sub_field('content'); ?>
											</div>
										<?php endwhile; endif; ?>
									</section>
								<?php endwhile; endif; ?>
								
								
								<?php // PRE-FOOTER ?>
								<?php if( get_field('pre_footer') ) : ?>
									<section class="pre-footer cf">
										<?php the_field('pre_footer'); ?>
									</section>
								<?php endif; ?>

							</article>

							<?php endwhile; endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
