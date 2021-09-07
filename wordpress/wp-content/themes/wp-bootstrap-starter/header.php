<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<!-- Linear Icons -->
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

        <nav id="mainNav" class="navbar navbar-custom navbar-fixed-top <?php if(!is_front_page()) {echo 'inavbar';}?>">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars" style="font-size:22px;"></i>
                    </button>
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                    <a id="logo" class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo get_theme_mod( 'wp_bootstrap_starter_logo' ); ?>" alt="BlowFish Cloud" />
                    </a>
                    <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- In Home use Menu ID 3, rest of site ID 5 -->
                <?php if (is_front_page()) {
                    function add_menuclass($ulclass) {
                       return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
                    }
                    add_filter('wp_nav_menu','add_menuclass');

                    wp_nav_menu(array(
                        'menu'            => 3,
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'nav navbar-nav navbar-right',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                } else {
                    wp_nav_menu(array(
                        'menu'            => 5,
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'nav navbar-nav navbar-right',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                    } ?>
            </div>
        </nav>
    
    
    <?php if (is_front_page()) { ?>
    <header id="hheader" class="m-b-sm" role="banner">
    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-thumbnail"><img id="pet" src="/wp-content/themes/wp-bootstrap-starter/inc/assets/img/bicho-big.svg" alt="BlowFish Cloud" /></div>
                    <div class="intro-heading">La reacci&oacute;n natural a la demanda</div>
                    <div class="intro-lead-in">Una plataforma inteligente capaz de ejecutar cambios de arquitectura digital de forma dinámica y al ritmo de la demanda de tu negocio</div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <a href="#services" class="page-scroll btn btn-lg btn-link">Ver Más</a>
                </div>
            </div>
    <?php }?>
    <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-thumbnail"><img id="pet" src="/wp-content/themes/wp-bootstrap-starter/inc/assets/img/bicho-big.svg" alt="BlowFish Cloud" /></div>
                    <div class="intro-heading">The natural reaction to demand</div>
                    <div class="intro-lead-in">An intelligent platform that dynamically executes changes in your digital architecture, adapted to the pulse of your business' demand.</div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <a href="#services" class="page-scroll btn btn-lg btn-link">Read more</a>
                </div>
            </div>
    <?php }?>
    </header><!-- #masthead -->
    <?php } else { ?>
    <!-- Custom Inside Header -->
    <header id="iheader" class="m-b-sm" role="banner">
    
    </header><!-- #Inside Header -->
    
    <?php } ?>
    
    <?php if(is_home() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo get_bloginfo('name');
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="">
			<div class="">
                <?php endif; ?>
