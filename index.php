﻿<? get_header() ?>
		<div class="content">
			<div class="home">								
				<div class="fotorama" data-arrows="false" data-height="845/465" data-autoplay="true" data-loop="true">											
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">
					<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">
					<?php echo do_shortcode('[index_channel]') ?>
				</div>
				<div class="home__baner">					
					<div class="home__baner__link">
						<h2>“Рецепты”</h2>
						<a href="<?php echo get_category_link(3); ?>"><span>Перейти в раздел <i></i></span> </a>
					</div>
					<div class="home__baner__tomato"></div>
			 	</div>			 	
			</div>
			<div class="botmenu">
			 		<div class="botmenu__rbg"></div>
			 		<div class="contain">
			 			<div class="botmenu__content">
			 				<div class="botmenu__content__bird">
			 					<a href="<?php echo '/customers/ptica/';?>"><i></i><span>Птица</span></a>
			 				</div>
			 				<div class="botmenu__content__soup">
			 					<a href="<?php echo'/customers/sypovie-nabori/';?>"><i></i><span>Суповые наборы</span></a>
			 				</div>
			 				<div class="botmenu__content__meat">
			 					<a href="<?php echo '/customers/maso/';?>"><i></i><span>Мясо</span></a>
			 				</div>
			 			</div>
			 		</div>
			</div>
		</div>

<? get_footer()?>

