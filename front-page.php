<?php
/**
 * Template Name: Home
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
<!--	<link rel="stylesheet" type="text/css" href="assets/libs/tooltipster/tooltipster.main.min.css">-->
<!--	<link rel="stylesheet" type="text/css" href="assets/css/my.css">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hidden">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="264.2 371 20.3 18.8" id="basket" xmlns="http://www.w3.org/2000/svg"><path class="st0" d="M283.7 378.2h-3.2l-3.4-6.8c-.2-.4-.6-.5-1-.3s-.5.6-.3 1l3.1 6.1h-9.1l3.1-6.1c.2-.4 0-.8-.3-1-.4-.2-.8 0-1 .3l-3.4 6.8H265c-.4 0-.8.3-.8.8 0 .4.3.8.8.8h.2l.9 3c-.2.1-.3.3-.3.6 0 .4.3.7.7.7l1.7 5.8h12.7l1.7-5.8c.4 0 .7-.3.7-.7 0-.2-.1-.5-.3-.6l.9-3h.2c.4 0 .8-.3.8-.8-.4-.5-.7-.8-1.2-.8zm-4.1 10.1h-10.4L268 384h12.9l-1.3 4.3zm1.6-5.8h-13.7l-.8-2.8H282l-.8 2.8z"/></symbol><symbol viewBox="0 0 404.258 404.258" id="right-arrow" xmlns="http://www.w3.org/2000/svg"><path d="M138.331 0l-24 18 138.096 184.129-138.096 184.129 24 18 151.596-202.129z"/></symbol><symbol viewBox="0 0 30.239 30.239" id="search" xmlns="http://www.w3.org/2000/svg"><path d="M20.194 3.46c-4.613-4.613-12.121-4.613-16.734 0-4.612 4.614-4.612 12.121 0 16.735 4.108 4.107 10.506 4.547 15.116 1.34.097.459.319.897.676 1.254l6.718 6.718a2.498 2.498 0 0 0 3.535 0 2.496 2.496 0 0 0 0-3.535l-6.718-6.72a2.5 2.5 0 0 0-1.253-.674c3.209-4.611 2.769-11.008-1.34-15.118zm-2.121 14.614c-3.444 3.444-9.049 3.444-12.492 0-3.442-3.444-3.442-9.048 0-12.492 3.443-3.443 9.048-3.443 12.492 0 3.444 3.444 3.444 9.048 0 12.492z"/></symbol></svg>
</div>
<div class="container">
	<header class="main-header">
		<div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/logo.png"></a></div>
		<div class="main-header__data">
			<ul class="main-header__links">
				<li><a href="http://www.brother.eu/">Europe</a></li>
				<li><a href="http://www.brother.com/brgnet/">Global Network</a></li>
			</ul>
			<div class="search-form" id="js-search-form">
				<input type="text" name="search">
			</div>
		</div>
	</header>
	<nav class="navbar">
		<div class="sandwitch">
			<div class="sandwitch__line sandwitch__line--top"></div>
			<div class="sandwitch__line sandwitch__line--middle"></div>
			<div class="sandwitch__line sandwitch__line--bottom"></div>
		</div>
		<ul class="main-menu" id="js-main-menu">
			<li><a href="products.html">Products</a></li>
			<li><a href="where-to-buy.html">Where to buy</a></li>
			<li><a href="spare-parts.html">Spare Parts</a></li>
			<li><a href="about-brother.html">About Brother</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<div class="language" id="js-language"><a class="language__title" href="#" id="js-language__title">Language</a>
			<ol class="language__list" id="js-language__list">
				<li class="active"><a href="nc/en.html">RO</a></li>
				<li><a href="nc/en.html">Ru</a></li>
				<li><a href="nc/en.html">EN</a></li>
			</ol>
		</div>
	</nav>
	<div class="slider-wrap">
		<div class="slider-buttons">
			<div class="slider-left">
				<svg class="right-arrow">
					<use xlink:href="#right-arrow"></use>
				</svg>
			</div>
			<div class="slider-right">
				<svg class="right-arrow">
					<use xlink:href="#right-arrow"></use>
				</svg>
			</div>
		</div>
		<div class="slider" id="js-slider"><a class="slider__item" href="https://www.brother-ism.com/about-brother/brother-support-app.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/1.jpg"></a><a class="slider__item" href="https://brothergtx.com/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/2.jpg"></a><a class="slider__item" href="https://www.facebook.com/brotherindustrialsewing/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/3.jpg"></a><a class="slider__item" href="https://www.brothergt.com/shoes/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/4.jpg"></a><a class="slider__item" href="https://www.brother-ism.com/products/industrial-sewing-machines.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/5.jpg"></a><a class="slider__item" href="https://www.brother-ism.com/products/industrial-sewing-machines.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/slider/6.jpg"></a></div>
	</div>
	<div class="blocks"><a class="blocks__item" href="industrial-sewing-machines.html">
			<div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/1.jpg')"></div>
			<div class="blocks__content">
				<header class="blocks__content-header"><img class="blocks__image_show" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png"><img class="blocks__image_hover" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
					<div class="blocsk__titles">
						<h4 class="blocks__brand-title">Industrial</h4>
						<h3 class="blocks__title">Sewing machines</h3>
					</div>
				</header>
				<div class="blocks__text">Whether straight stitch, buttonholer or bar tack, Brother has the right sewing machine for your production line.</div>
			</div></a><a class="blocks__item" href="https://www.brother-ism.com/products/industrial-garment-printers.html">
			<div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/2.jpg')"></div>
			<div class="blocks__content">
				<header class="blocks__content-header"><img class="blocks__image_show" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png"><img class="blocks__image_hover" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
					<div class="blocsk__titles">
						<h4 class="blocks__brand-title">Industrial</h4>
						<h3 class="blocks__title">Garment Printers</h3>
					</div>
				</header>
				<div class="blocks__text">Discover the Single Platen White ink <br> Direct-to-Garment Printer.</div>
			</div></a><a class="blocks__item" href="https://www.brother-ism.com/about-brother/newsletter.html">
			<div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/3.jpg')"></div>
			<div class="blocks__content">
				<header class="blocks__content-header"><img class="blocks__image_show" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png"><img class="blocks__image_hover" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
					<div class="blocsk__titles">
						<h4 class="blocks__brand-title">Brother Industrial</h4>
						<h3 class="blocks__title">Newsletter</h3>
					</div>
				</header>
				<div class="blocks__text">Industrial Garment Printers <br> Industrial Sewing Machines</div>
			</div></a></div>
	<div class="big-links"><a class="big-links__item" href="https://www.brother-ism.com/en/spare-parts.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/big-links/1.jpg" alt=""></a><a class="big-links__item" href="https://www.brother-ism.com/where-to-buy.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/big-links/2.jpg" alt=""></a><a class="big-links__item" href="https://www.brotherearth.com/en/top.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/big-links/3.jpg" alt=""></a></div>
	<div class="events">
		<div class="events__line"></div>
		<div class="events__body">
			<header class="events__header"><a class="tooltip events__link" title="X-Fair Wien" href="https://www.brother-ism.com/about-brother/events.html">Events</a></header>
			<div class="events__content">
				<div class="events__item"><a class="tooltip events__img" title="X-Fair Wien" href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/events/1.jpg" alt=""></a>
					<div class="events__text">
						<header class="events__item-header">
							<div class="events__time">08.10.2019 - 10.10.2019</div>
							<h4 class="events__title"><a class="tooltip" title="X-Fair Wien" href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html">X-Fair Wien</a></h4>
						</header>
						<div class="events__text">X-Fair is the international Print & Crossmedia Show for Austria and CEE.... <a title="X-Fair Wien" class="tooltip" href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html">Read more</a></div>
					</div>
				</div>
				<div class="events__item"><a class="tooltip events__img" title="Viscom Italia 2019" href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/events/2.jpg" alt=""></a>
					<div class="events__text">
						<header class="events__item-header">
							<div class="events__time">08.10.2019 - 10.10.2019</div>
							<h4 class="events__title"><a class="tooltip" title="Viscom Italia 2019" href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html">Viscom Italia 2019</a></h4>
						</header>
						<div class="events__text">Viscom Italia is here to best meet all your needs, actively listen to your.... <a title="Viscom Italia 2019" class="tooltip" href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html">Read more</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="events__line events__line--bottom"></div>
	</div>
	<div class="main-footer">
		<div class="main-footer__item">
			<ul class="main-footer__list main-footer__list--border-bottom">
				<li><a class="tooltip" title="Company Details" href="contact.html">Company Details</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="privacy-policy.html">Privacy Policy</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="term-of-use.html">Terms of use</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="sitemap.html">Sitemap</a></li>
				<li><a class="tooltip" title="Contact" href="https://www.brother-ism.com/privacy-policy.html">Contact</a></li>
			</ul>
			<ul class="main-footer__socials flex">
				<li><a class="tooltip" title="" href="https://www.youtube.com/user/Brotherindustrial"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/youtube.png" alt=""></a></li>
				<li><a class="tooltip" title="" href="https://www.instagram.com/brothergtseries/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/Instagram_Logo_square.png" alt=""></a></li>
			</ul>
			<ul class="main-footer__socials">
				<li><a class="tooltip" title="" href="https://www.facebook.com/brothergt/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/Facebook_Logo_square.png" alt=""><span>Industrial Printing</span></a></li>
				<li><a class="tooltip" title="" href="https://www.facebook.com/brotherindustrialsewing/"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/Facebook_Logo_square.png" alt=""><span>Industrial Sewing</span></a></li>
			</ul>
		</div>
		<div class="main-footer__item">
			<h3 class="main-footer__title">Products</h3>
			<ul class="main-footer__list">
				<li><a class="tooltip" title="Take a look at Brother´s wide range of industrial sewing machines." href="industrial-sewing-machines.html">Industrial Sewing Machines</a></li>
				<li><a class="tooltip" title="Brother´s GT-3 Garment Printer.
DTG printing on t-shirts, jeans, shoes e.g.!
Industrial sewing machines and garment printer made by Brother" href="industrial-garment-printers.html">Industrial Garment Printers</a></li>
			</ul>
			<h3 class="main-footer__title">Where to buy</h3>
			<ul class="main-footer__list">
				<li><a class="tooltip" title="Industrial sewing machines and garment printer made by Brother." href="where-to-buy-industrial.html">Industrial Sewing Machine</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and garment printer made by Brother." href="where-to-buy-industrial.html">Industrial Garment Printers</a></li>
			</ul>
		</div>
		<div class="main-footer__item">
			<h3 class="main-footer__title">Spare parts</h3>
			<ul class="main-footer__list">
				<li><a class="tooltip" title="Industrial Sewing Machines" href="https://partsbook.brother.co.jp/public/pub/index/index/en">Industrial Sewing Machines</a></li>
				<li><a class="tooltip" title="Industrial Garment Printers" href="https://partsbook.brother.co.jp/public/gt/index/index/en">Industrial Garment Printers</a></li>
			</ul>
		</div>
		<div class="main-footer__item">
			<h3 class="main-footer__title">About</h3>
			<ul class="main-footer__list">
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="anti-slavery-and-human-trafficking-statement.html">Anti-Slavery and Human</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="anti-slavery-and-human-trafficking-statement.html">Trafficking Statement</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="philosophy.html">Philosophy</a></li>
				<li><a class="tooltip" title="Environment" href="environment.html">Environment</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="press.html">Trafficking Statement</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="events.html">Events</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="career.html">Career</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="newsletter.html">Newsletter</a></li>
				<li><a class="tooltip" title="Industrial sewing machines and DTG garment printer made by Brother." href="brother-support-app.html">Brother Support App</a></li>
			</ul>
		</div>
		<div class="main-footer__item">
			<h3 class="main-footer__title">Links</h3>
			<ul class="main-footer__list">
				<li><a class="tooltip" title="solutions for office and home" href="http://www.brother.com/html/europe/index.htm">solutions for office and home</a></li>
			</ul>
		</div>
	</div>
	<div class="copyright">© 2019 Brother Internationale Industriemaschinen GmbH</div>
</div><!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/site/assets/libs/jquery-easy-scroll/jquery.easeScroll.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/site/assets/libs/tooltipster/tooltipster.main.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/site/assets/libs/slick/slick/slick.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/site/assets/js/main.min.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>

