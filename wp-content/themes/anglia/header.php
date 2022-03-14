<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anglia
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
	<head>        
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/inc_files/images/favicon.png"/>	
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/inc_files/images/apple-touch-icon.png"/> 
		
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="application-name" content="Anglia Prostate"/>		
		
		<!--styles-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/lightslider/src/css/lightslider.css"/>
		<link rel="stylesheet" type="text/css" href="style.css?=1.00"/>	

		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc_files/fonts/font-awesome/css/font-awesome.min.css"/>
		
		<!--link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
		
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
		<div id="main-wrapper">				
			<div id="header-wrapper">				
					<div class="page-width">
						<div id="header-contact-details"><span>All enquiries:</span><a href="tel:<?php the_field('company_telephone_number','option')?>"><?php the_field('company_telephone_number','option')?></a> <label>|</label> <a href="mailto:<?php the_field('company_email','option')?>"><?php the_field('company_email','option')?></a></div>
						
						<a href="#" id="main-logo"><img src="<?php the_field('company_logo','option')?>" alt="" width="" height=""/></a>
						<div class="menu-holder">						
							<a href="#" id="menu-button">MENU</a>					
							<div id="menu-wrapper">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'main-menu',
									)
								);
								?>
							</div>
						</div>
					</div>
			</div><!--header wrapper end-->

