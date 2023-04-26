<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo get_template_directory_uri();?>/images/favicon.ico" rel="icon">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/lightbox.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet">
	<?php wp_head(); ?>
	
</head>

<header>
	<div class="top-header clearfix">
		<div class="container clearfix">
			<div class="daily-headline clearfix">
			<?php
				$topbar = get_field('topbar','option');
			?>
			  <?php echo $topbar;?>
			</div>
			<div class="social-icon clearfix"> 
			<?php
				$twitter = get_field('twitter','option');
				$facebook = get_field('facebook','option');
				$pinterest = get_field('pinterest','option');
				$rss = get_field('rss','option');
				$instagram = get_field('instagram','option');
			?>
				<a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a> 
				<a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a>
				<a href="<?php echo $rss;?>"><i class="fa fa-rss"></i></a>  
				<a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="logo">
					<?php
						$header_logo = get_field('logo','option')['url'];
						$header_logo = empty($header_logo) ? get_stylesheet_directory_uri().'/assets/images/blog_theme.png' : $header_logo;
					?>
						<a href="<?php echo home_url('/');?>"><img src="<?php echo $header_logo;?>" alt="Logo"></a>
					</div>
					<div class="add">
						<?php
							$add_banner = get_field('add_banner','option');
						?>
						<?php echo $add_banner;?>
				</div>
		</div>
		<nav class="navbar navbar-default theme_bg">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="javascript:void(0);">NAVIGATION</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'container'         => 'ul',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'nav navbar-nav',
						
					) );
				?>	                                                              
				</div>
			</div>
		</nav>
	</div>
</header>
<body <?php body_class(); ?>>
