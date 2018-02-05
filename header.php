<!doctype HTML>
<html>
	<head>
		<title>Lonoke Baptist Church</title>
		<style id="mainCss"><?php require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/lonokebaptistchurch/style.css'); ?></style>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="logo-holder">
					<a href="/"><svg class="logo"><use xlink:href="#logo"></use></svg></a>
				</div>
				<nav>
<?php $navItems = wp_get_nav_menu_items('Main Menu'); 
foreach($navItems as $item) { ?>
					<div class="nav-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></div>
<?php 
} ?>
					<svg id="mobile-nav-trigger"><use xlink:href="#bars"></use></svg>
				</nav>
			</div>
		</header>
		<content>