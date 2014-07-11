<?php
/**
 * Template Name: Homepage
 *
 *
 * Custom template used for this theme's homepage display
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="home-content" class="site-content" role="main">
			<div id="home-wrap" class="clr container">
				
				<?php
				/**************************
				* Slider
				****************************/
				get_template_part( 'content','slides' );  ?>
				
				
				<div id="home-text">
					<?php the_content(); ?>
				</div>
				
				<?php
				/**************************
				* Features
				****************************/ ?>
				<?php $query_features_posts = new WP_Query(
					array(
						'post_type'			=> 'features',
						'posts_per_page'	=> -1,
						'no_found_rows'		=> true,
					)
				);
				if ( $query_features_posts->posts ) { ?>
					<div id="home-features">
						<div id="features-wrap" class="clr row clr">
							<?php $wpex_count=0; ?>
							<?php foreach( $query_features_posts->posts as $post ) : setup_postdata($post); ?>
								<?php $wpex_count++; ?>
									<?php get_template_part( 'content','features' ); ?>
								<?php if ( $wpex_count == 3 ) { ?>
									<?php $wpex_count=0; ?>
								<?php } ?>
							<?php endforeach; ?>
						</div><!-- #features-wrap -->
					</div><!-- #home-features -->
				<?php } ?>
				<?php wp_reset_postdata(); ?>
				
<!--
				<div id="home-text">
					<?php the_content(); ?>
				</div>
-->
				
			</div><!-- /home-wrap -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>