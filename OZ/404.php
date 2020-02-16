<?php
get_header();
?>


	<section class="error-404" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/product--hero.jpg">
		<div class="container">
			<h2 class="page-title"><?php esc_html_e( 'К сожалению! Эта страница не может быть найдена.', 'schoolstudy' ); ?></h2>
			<a href="<?php echo get_home_url(); ?>" class="btn hero__btn">Вернутся на главную</a>
		</div>
	</section>


<?php
get_footer();
