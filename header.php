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

						<!--<div class="header__content__menuline__offline">
							<a id="jivo" data-toggle="modal" href="javascript:jivo_api.open();">
                                <span>Offline консультант</span>
                            </a>
						</div>-->

						<!-- <div class="header__content__menuline__offline">
							<a data-toggle="modal" href="#callme"><span>Offline консультант</span></a>
						</div> -->
                        <?php
                            $status = get_option( 'status_kons' );
                        if ($status == '1'){ ?>
                            <div class="header__content__menuline__online">
                                <a id="jivo" data-toggle="modal" href="javascript:jivo_api.open();"><span>Online консультант</span></a>
                            </div>
                       <?php } else { ?>
                            <div class="header__content__menuline__offline">
                                <a data-toggle="modal" href="javascript:jivo_api.open();"><span>Offline консультант</span></a>
                            </div>
                        <?php } ?>



						<div class="header__content__menuline__mailus" id = "napisat">
							<a data-toggle="modal" href="#callme"><span><i></i>Написать нам</span></a>
						</div>						
					</div>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'Header',
							'menu'            => 'Main Menu',
							'container'       => 'nav',
							'container_class' => 'navMenu',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0
						) );
					?>
<!--					<nav class="navMenu">							-->
<!--							<ul>-->
<!--								<li class="dropdown">-->
<!--                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#--><?php ////echo '/about-company'; ?><!--">О компании</a>-->
<!---->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href = "#">Меню номер раз</a></li>-->
<!--                                        <li><a href="#"> Меню один</a></li>-->
<!--                                        <li><a href = "#">меню</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--								<li><a href="--><?php //echo get_category_link(2);?><!--">Покупателям</a></li>-->
<!--								<li><a href="--><?php //echo get_category_link(3); ?><!--">Рецепты</a></li>-->
<!--								<li><a href="#nowhere">Партнерам</a></li>-->
<!--								<li><a href="--><?php //echo get_permalink(27); ?><!--">Контакты</a></li>-->
<!--							</ul>-->
<!--						</nav>	-->
				</div>
			</div>
		</header>