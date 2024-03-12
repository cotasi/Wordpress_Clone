<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="swiper" id="main">
			<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="textwrap">
							<h2>得心得世<span>[득심득세]</span></h2>
							<p>
							마음을 얻어야 세상을 얻는 것 처럼 <br />
							신뢰와 믿음으로 다가가는 <span>(주)대한F&B</span>가 되겠습니다.
							</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/main_visual01.jpg" alt="visual1">
					</div>
					<div class="swiper-slide">
					<div class="textwrap">
							<h2>得心得世<span>[득심득세]</span></h2>
							<p>
							마음을 얻어야 세상을 얻는 것 처럼 <br />
							신뢰와 믿음으로 다가가는 <span>(주)대한F&B</span>가 되겠습니다.
							</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/main_visual02.jpg" alt="visual2">
					</div>
					<div class="swiper-slide">
					<div class="textwrap">
							<h2>得心得世<span>[득심득세]</span></h2>
							<p>
							마음을 얻어야 세상을 얻는 것 처럼 <br />
							신뢰와 믿음으로 다가가는 <span>(주)대한F&B</span>가 되겠습니다.
							</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/main_visual03.jpg" alt="visual3">
					</div>
			</div>
			<div class="thumbline"></div>
			<div class="baseline">
				<div class="getinquery">
					<a href="#"><span>문의접수</span><span>Inquery</span></a>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
