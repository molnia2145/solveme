<?php
	# need login
	if($need_login && !is_login()){
		include(__DIR__.'/login.php');
		die;
	}

	if(__IS_HTML_PACK__){
		ob_start();
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta property="description" content="<?php echo secure_escape(__SITE__['description']); ?>">
		<meta name="keywords" content="<?php echo secure_escape(__SITE__['keyword']); ?>">
		<meta name="author" content="molnia2145">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="<?php echo secure_escape($title); ?>">
		<meta property="og:site_name" content="<?php echo secure_escape(__SITE__['title']); ?>">
		<meta property="og:url" content="<?php echo get_url(); ?>">
		<meta property="og:image" content="<?php echo get_new_cache_link('/assets/img/thumb.png'); ?>">
		<meta property="og:description" content="<?php echo secure_escape(__SITE__['description']); ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php echo secure_escape($title); ?>">
		<meta name="twitter:site" content="<?php echo secure_escape(__SITE__['title']); ?>">
		<meta name="twitter:url" content="<?php echo get_url(); ?>">
		<meta name="twitter:image" content="<?php echo get_new_cache_link('/assets/img/thumb.png'); ?>">
		<meta name="twitter:description" content="<?php echo secure_escape(__SITE__['description']); ?>"/>
		<link rel="icon" href="<?php echo get_new_cache_link('/assets/img/favicon.png'); ?>">
		<link rel="apple-touch-icon" href="<?php echo get_new_cache_link('/assets/img/favicon.png'); ?>">
		<title><?php echo secure_escape($title); ?></title>
		<!--[if lt IE 9]>
			<script src="/assets/js/html5shiv.js?v=3.7.0"></script>
		<![endif]-->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=3.3.7">
		<link rel="stylesheet" href="<?php echo get_new_cache_link('/assets/css/common.css'); ?>">
<?php
	# import css files
	for($i = 0; isset($css_files[$i]); ++$i){
?>
		<link rel="stylesheet" href="<?php echo get_new_cache_link($css_files[$i]); ?>">
<?php
	}
?>
		<script src="/assets/js/jquery.min.js?v=3.1.1"></script>
		<script src="/assets/js/bootstrap.min.js?v=3.3.7"></script>
		<script src="<?php echo get_new_cache_link('/assets/js/common.js'); ?>"></script>
<?php
	# import js files
	for($i = 0; isset($js_files[$i]); ++$i){
?>
		<script src="<?php echo get_new_cache_link($js_files[$i]); ?>"></script>
<?php
	}
?>
	</head>
	<body>
		<div class="container-fluid v-center">
			<div class="row">
				<div class="col-sm-6 col-md-5 h-center">
				

					<header class="text-center">
					<p>
						 <img class="logo-icon" src="<?php echo get_new_cache_link('/assets/img/temo.png'); ?>" alt="">
						 <img class="logo-icon" src="<?php echo get_new_cache_link('/assets/img/mtm.jpg'); ?>" alt="">
						 <img class="logo-icon" src="<?php echo get_new_cache_link('/assets/img/Cisco.png'); ?>" alt="">
						 <img class="logo-icon" src="<?php echo get_new_cache_link('/assets/img/geccon.png'); ?>" alt="">
						<img class="logo-icon" src="<?php echo get_new_cache_link('/assets/img/kait.png'); ?>" alt="ГБПОУ КАИТ №20">
					</p>
						<a class="text-black clear-decoration" href="/">
							<img class="logo-mark" src="<?php echo get_new_cache_link('/assets/img/mark.png'); ?>" style="font-size:32px" alt="">
							<span class="logo-major"><?php echo __SITE__['title']; ?></span>
						</a>
						
						<p class="text-muted"><?php echo __SITE__['description']; ?></p>
					</header>
<?php
	if($show_category){
?>
					<nav class="text-center mt-10 main-menu">
						<ul class="list-inline m-0">
							<li>|    </li>
							<li>
								<a href="/">Главная</a>
							</li>
							<li>   |   </li>
							<li>
								<a href="/chall">Задания</a>
							</li>
							<li>   |   </li>
							<li>
								<a href="/rank">Рейтинг</a>
							</li>
							<li>    |</li>
						</ul>
					</nav>
					
					<div style="font-size: 140%; margin: 20px 0px; text-align: justify">CTF – соревнования по информационной безопасности, целью которой является совершенствование навыков в области компьютерной безопасности. </div>
					

<?
	}
?>