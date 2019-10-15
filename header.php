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
        <div class="logo"><?php the_custom_logo(); ?></div>
        <div class="main-header__data">
            <ul class="main-header__links">
                <li><a href="<?php echo carbon_get_theme_option('crb_header_search_europe_link'); ?>"><?php echo carbon_get_theme_option('crb_header_search_europe_title'.get_lang()); ?></a></li>
                <li><a href="<?php echo carbon_get_theme_option('crb_header_search_global_link'); ?>"><?php echo carbon_get_theme_option('crb_header_search_global_title'.get_lang()); ?></a></li>
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
            <?php if(!dynamic_sidebar('language')): ?>
                <p>Add language widget here</p>
            <?php endif; ?>
        </div>
    </nav>
