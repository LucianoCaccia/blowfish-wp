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
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="ccol-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="row">

					<!-- Display Only in mobile -->
					<div class="row col-xs-12 visible-xs"><h1>Blowfish Blog</h1>
					</div>
					<div class="row col-xs-12 visible-xs">
						<?php the_widget( 'WP_Widget_Search', $instance, $args ); ?><hr>
					</div>
		
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
								</header>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content-list', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-sm-4">
					
						<?php get_sidebar(); ?>
					
				</div>

			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
