<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo sdt_show_theme_image("logo.JPG") ?>" class="logo"></a></div>
							
							<div class="header_extra ml-auto">
								<nav class="main_nav">
								<ul>
									<li>
										<a href="<?php echo home_url(); ?>">Home</a>
									</li>
									<li class="hassubs">
										<a href="categories.html">Spare Parts</a>
										<ul>
											<li><a href="<?php echo site_url('pdtcat/automotive') ?>">Automotive</a></li>
											<li><a href="<?php echo site_url('pdtcat/heavy-equipment') ?>">Heavy Equipment</a></li>
											<li><a href="<?php echo site_url('pdtcat/refrigeration') ?>">Refrigeration</a></li>
										</ul>
									</li>
									<li><a href="<?php echo site_url("about")?>">About</a></li>
									<li><a href="<?php echo site_url("career")?>">Career</a></li>
									<li><a href="<?php echo site_url("contact")?>">Contact</a></li>
								</ul>
							</nav>
								
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item menu_mm">
						<a href="<?php echo home_url(); ?>">Home</a>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Spare Parts<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="<?php echo site_url('pdtcat/automotive') ?>">Automotive<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo site_url('pdtcat/heavy-equipment') ?>">Heavy Equipment<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo site_url('pdtcat/refrigeration') ?>">Refrigeration<i class="fa fa-angle-down"></i></a></li>
							
						</ul>
					</li>

					
					
					<li class="page_menu_item menu_mm">
						<a href="<?php echo site_url("about")?>">About</a>
					</li>
					<li class="page_menu_item menu_mm">
						<a href="<?php echo site_url("career")?>">Career</a>
					</li>
					<li class="page_menu_item menu_mm">
						<a href="<?php echo site_url("contact")?>">Contact</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	

