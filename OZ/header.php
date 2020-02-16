<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">

	<meta name="theme-color" content="#000">
	<meta property="og:image" content="<?php the_field('preview', 'option'); ?>">

</head>

	<?php wp_head(); ?>

<body>

	<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
			</div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
	</div>

	<div class="soc">
		<ul>
			<li>
				<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/soc__1.png" alt="">
				</a>
			</li>
			<li>
				<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/soc__2.png" alt="">
				</a>
			</li>
			<li>
				<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/soc__3.png" alt="">
				</a>
			</li>
			<li>
				<a href="<?php the_field('in', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/soc__4.png" alt="">
				</a>
			</li>
		</ul>
	</div>

	<div class="navigation page">
		<ul>
			<li><a href="#firstPage" class="navigation__active" data-menuanchor="firstPage">01</a></li>
			<li><a href="#twoPage" data-menuanchor="twoPage">02</a></li>
			<li><a href="#threePage" data-menuanchor="threePage">03</a></li>
			<li><a href="#fourPage" data-menuanchor="fourPage">04</a></li>
		</ul>
	</div>

