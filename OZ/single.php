<?php get_header(); ?>

	<header class="header">
		<div class="header__container">

			<ul class="header__nav page"  id="menu">
				<li data-menuanchor="firstPage"><a href="<?php echo get_home_url(); ?>/#firstPage">Главная</a></li>
				<li data-menuanchor="secondPage"><a href="<?php echo get_home_url(); ?>/#threePage">Каталог</a></li>
				<li data-menuanchor="lastPage"><a href="<?php echo get_home_url(); ?>/#fourPage">Контакты</a></li>
			</ul>

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			</a>

			<div class="header__info">
				<a href="<?php echo get_home_url(); ?>/#fourPage" class="header__info_call">Обратный звонок</a>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__info_tel"><?php the_field('tel', 'option'); ?></a>
			</div>

		</div>
	</header>

	<div class="work section" id="section0">

		<div class="container work__header">
			<div>
				<h2>Каталог</h2>
				<span></span>
				<b><?php the_title(); ?></b>
			</div>

			<div>
				<div class="work__prev"></div>
				<div class="work__next"></div>
			</div>
		</div>

		<div class="container work__container">
		
			<div class="work__gallery gallery-thumbs swiper-container">
				<div class="swiper-wrapper">
					<?php if( have_rows('work') ): ?>
						<?php while( have_rows('work') ): the_row(); 
							$img = get_sub_field('img');
							$description = get_sub_field('description');
						?>
							<div class="swiper-slide">
								<img src="<?php echo $img; ?>" class="swiper-lazy" alt="">
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="work__top gallery-top swiper-container">
				<div class="swiper-wrapper">
					<?php if( have_rows('work') ): ?>

						<?php while( have_rows('work') ): the_row(); 
							$description = get_sub_field('description');
							$img = get_sub_field('img');
						?>

							<div class="work__top_content swiper-slide">
								<a href="<?php echo $img; ?>" data-fancybox="images">
									<img src="<?php echo $img; ?>" alt="">
									<span></span>
								</a>
								<div class="">
									<?php echo $description; ?>
								</div>
							</div>
							
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>


		</div>
		<div class="work__pagination swiper-pagination"></div>
		<div class="why__footer">
			<p>© 2020, Stekoz</p>
			<p><a href="http://flex-design.net/" target="_blank">made by flexdesign</a></p>
		</div>
	</div>


<?php get_footer(); ?>
