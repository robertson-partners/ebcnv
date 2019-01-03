<?php
/**
 * The template for displaying the header
 * This is the template that displays all of the <head> section
 */
?>
<!doctype html>

<html class="no-js"  <?php language_attributes(); ?>>

	<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N8W5CQV');</script>
    <!-- End Google Tag Manager -->

		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-POYwD7xcktv3gUeZO5s/9nUbRJG/WOmV6jfEGikMJu77LGYO8Rfs2X7URG822aum" crossorigin="anonymous">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>
			
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8W5CQV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

		<div class="off-canvas-wrapper <?php echo (is_page_template('template-full-width-es.php')) ? 'es-lang' : ''; ?>">			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header <?php echo (is_page_template('template-full-width.php') || is_page_template('template-full-width-es.php')) ? 'home' : 'other'; ?>" role="banner">
          <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
          <?php 
            if(is_page_template('template-full-width.php')){
              get_template_part( 'parts/content', 'marquee');
            } else if ( is_page_template('template-full-width-es.php')){
              get_template_part( 'parts/content', 'marquee-es');
            } else {
              get_template_part( 'parts/content', 'marquee_other');
            }
          ?>
				</header>