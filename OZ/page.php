<?php get_header(); ?>

	<header class="header">
		<div class="header__container">

			<ul class="header__nav page"  id="menu">
				<li data-menuanchor="firstPage"><a href="#firstPage">Главная</a></li>
				<li data-menuanchor="secondPage"><a href="#threePage">Каталог</a></li>
				<li data-menuanchor="lastPage"><a href="#fourPage">Контакты</a></li>
			</ul>

			<a href="#" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			</a>

			<div class="header__info">
				<a href="#" class="header__info_call open_order">Обратный звонок</a>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__info_tel">
					<?php the_field('tel', 'option'); ?>
				</a>
			</div>

		</div>
	</header>
	
	<div id="fullpage">

		<div class="hero section" id="section0">
			<div class="hero__slider swiper-container">
				<div class="swiper-wrapper">

					<?php if( have_rows('slider') ): ?>
						<?php while( have_rows('slider') ): the_row(); 
							$title = get_sub_field('title');
							$img = get_sub_field('img');
						?>
							
							<div class="hero__item swiper-slide">
								<img src="<?php echo $img; ?>" class="swiper-lazy" alt="">
								<div class="hero__container container">
									<div class="hero__content">
										<h1>
											<?php echo $title; ?>
										</h1>
									</div>
									<div class="hero__form">
										<?php echo do_shortcode('[contact-form-7 id="55" title="Консультация"]') ?>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				<div class="hero__pagination swiper-pagination"></div>
			</div>
			<div class="hero__footer">
				<div class="container hero__footer_list">
					<p>Гарантия 1 год</p>
					<p>Качество 100%</p>
					<p>Соблюдение сроков</p>
					<p>Честная цена</p>
				</div>
			</div>
		</div>

		<div class="why section" id="section1">
			<div class="container">
				<h2>Почему мы?</h2>
				<ul class="why__list">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/why__1.png" alt=""><b>Бесплатный выезд замерщика</b></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/why__2.png" alt=""><b>Соблюдение сроков</b></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/why__3.png" alt=""><b>Бесплатная доставка при монтаже</b></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/why__4.png" alt=""><b>Качество с гарантией</b></li>
				</ul>
			</div>

			<div class="why__footer">
				<p>© 2020, Stekoz</p>
				<p><a href="http://flex-design.net/" target="_blank">made by flexdesign</a></p>
			</div>
		</div>

		<div class="catalog section" id="section2">
			<div class="catalog__container container">
				<h2>Каталог</h2>
				<ul class="catalog__list">

					<?php if( have_rows('catalog') ): ?>
						<?php while( have_rows('catalog') ): the_row(); 
							$title = get_sub_field('title');
							$number = get_sub_field('number');
							$description = get_sub_field('description');
							$link = get_sub_field('link');
						?>

							<li>
								<a href="<?php echo $link; ?>">
									<?php echo $title; ?> <span><?php echo $number; ?></span>
								</a>
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info.png" alt="">
									<?php echo $description; ?>
								</div>
							</li>

						<?php endwhile; ?>
					<?php endif; ?>

				</ul>
			</div>

			<div class="why__footer">
				<p>© 2020, Stekoz</p>
				<p><a href="http://flex-design.net/" target="_blank">made by flexdesign</a></p>
			</div>
		</div>

		<div class="contacts section" id="section3">

			<div class="contacts__container container">
				<div class="contacts__wrap">
					<h2>Не можете сделать выбор?</h2>
					<div>
						<p>
							<span>Позвоните нам</span>
							<a href="tel:<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
						</p>
						<p>
							<span>Напишите нам</span>
							<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
						</p>
					</div>

				</div>
				<div class="contacts__info">
					<p>
						Оставьте свои данные <br>и мы свяжемся с Вами в ближайшее время
					</p>
					<?php echo do_shortcode('[contact-form-7 id="56" title="Обратный дзвонок"]') ?>
				</div>
			</div>

			<div class="why__footer">
				<p>© 2020, Stekoz</p>
				<p><a href="http://flex-design.net/" target="_blank">made by flexdesign</a></p>
			</div>
		</div>

	</div>

<?php get_footer(); ?>