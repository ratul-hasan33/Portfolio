<?php


/*
 * Template Name: Header
 */

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="header_area" class="header_area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="brand_logo d-flex justify-content-between align-items-center">
						<a href="<?php echo get_home_url(); ?>"><h1>ratulHasan<span>.</span></h1></a>
						<div class="menu_icn">
							<div class="menu_opn"><i class="fa-solid fa-bars"></i></div>
							<div class="menu_cl"><i class="fa-solid fa-xmark"></i></div>
						</div>
					</div>
				</div>
				<div class="main_menu col-md-9 d-flex align-items-center justify-content-center justify-content-md-end">
					<nav>
						<ul>
							<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
							<li><a href="#service_area">Services</a></li>
							<li><a href="blogs" target=”_blank”>Blogs</a></li>
							<button class="con_btn"><a href="contact" target=”_blank” >Contact Us</a></button>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
<div class="theme_mode">
	<i class="fa-solid fa-moon dark_mode" type="submit"></i>
	<i class="fa-regular fa-sun light_mode" type="submit"></i>
</div>
