<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swipering.js"></script>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>
		<div class="lang"><button><span>KOR</span></button></button>
		<ul class="lang-menu">
			<li><button>KOR</button></li>
			<li><button>ENG</button></li>
		</ul>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
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
			<div class="swiper-pagination"></div>
		</div>
		
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
