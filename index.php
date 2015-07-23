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
						<a href="#nowhere">
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
								<li><a href="#nowhere">О компании</a></li>
								<li><a href="#nowhere">Покупателям</a></li>
								<li><a href="#nowhere">Рецепты</a></li>
								<li><a href="#nowhere">Партнерам</a></li>
								<li><a href="#nowhere">Контакты</a></li>
							</ul>
						</nav>	
				</div>
			</div>
		</header>

		<div class="content">
			<div class="home">								
				<div class="fotorama" data-arrows="false" data-height="845/465" data-autoplay="true" data-loop="true">											
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">				
				</div>
				<div class="home__baner">					
					<div class="home__baner__link">
						<h2>“Рецепты”</h2>
						<a href="#nowhere"><span>Перейти в раздел <i></i></span> </a>
					</div>
					<div class="home__baner__tomato"></div>
			 	</div>			 	
			</div>
			<div class="botmenu">
			 		<div class="botmenu__rbg"></div>
			 		<div class="contain">
			 			<div class="botmenu__content">
			 				<div class="botmenu__content__bird">
			 					<a href="#nowhere"><i></i><span>Птица</span></a>
			 				</div>
			 				<div class="botmenu__content__soup">
			 					<a href="#nowhere"><i></i><span>Суповые наборы</span></a>
			 				</div>
			 				<div class="botmenu__content__meat">
			 					<a href="#nowhere"><i></i><span>Мясо</span></a>
			 				</div>
			 			</div>
			 		</div>
			</div>
		</div>

		<footer class="footer">
			<div class="contain">
				<div class="footer__copyr">
					<p>1999—2015 © baron-moscow.ru</p>
				</div>
				<div class="footer__soc">
					<p>Следите за нами в социальных сетях - </p>
					<div class="soc">			
						<a href="#nowhere"><i class="soc__fb"></i></a>
						<a href="#nowhere"><i class="soc__vk"></i></a>
						<a href="#nowhere"><i class="soc__tw"></i></a>
						<a href="#nowhere"><i class="soc__ok"></i></a>
						<a href="#nowhere"><i class="soc__yt"></i></a>
					</div>
				</div>
				<div class="footer__dev">
					<p>Разработка и поддержка сайта - Турбосайт</p>
				</div>
			</div>
		</footer>
	</div>
    
<?php wp_footer(); ?>
</body>
</html>