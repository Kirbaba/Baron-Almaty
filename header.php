<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>

	<div class="wrapper">
		<header class="header">
			<div class="header__topline"></div>
			<div class="contain">
				<div class="header__content">
					<div class="header__content__logo">
						<a href="<?php echo get_home_url();?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/LOGO_Vse-1.png" alt="placeholder+image">
						</a>
					</div>
					<div class="header__content__menuline">
						<div class="header__content__menuline__phone">
							<h3>+7 |7171| <span>789-89-87</span></h3>
							<p>Работаем с 9:00 до 18:00</p>
						</div>
						<div class="header__content__menuline__offline">
							<a href="#nowhere"><span>Offline консультант</span></a>
						</div>
						<div class="header__content__menuline__mailus">
							<a href="#nowhere"><span><i></i>Написать нам</span></a>
						</div>						
					</div>
					<nav class="navMenu">							
							<ul>
								<li><a href="<?php echo '/about-company'; ?>">О компании</a></li>
								<li><a href="<?php echo get_category_link(8);?>">Покупателям</a></li>
								<li><a href="<?php echo get_category_link(9); ?>">Рецепты</a></li>
								<li><a href="#nowhere">Партнерам</a></li>
								<li><a href="<?php echo get_permalink(27); ?>">Контакты</a></li>
							</ul>
						</nav>	
				</div>
			</div>
		</header>