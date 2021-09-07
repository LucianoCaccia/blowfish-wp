<?php
/**
 * The template for displaying archive pages
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
							if ( have_posts() ) : ?>

								<header class="page-header">
									<?php
										echo ('<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>'); 
										//the_archive_title( '<h1 class="page-title">', '</h1>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
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
				<div class="ccol-xs-12 col-sm-12 col-md-4 col-lg-4">
					<?php get_sidebar(); ?>
				</div>				
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
