<?php
/**
 * Template Name: Contacts template
 */
?>

<? get_header() ?>
<div class="content">
    <div class="navline">
        <div class="contain">
            <div class="navline__bg"></div>
            <div class="navline__contain">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' &#8594; '); ?>
            </div>
        </div>
    </div>
    <div class="contain">
		<section class="contacts">
			<div class="contacts__text">
				<h2>Контакты</h2>
				<h4>Адрес:</h4>
				<p>
					143080, Московская область,<br>
					Одинцовский район,<br>
					п. Лесной городок,<br>
					ул. Школьная, д.1. <br>
					Торгово-деловой комплекс «Город» <br>
				</p>
				<h4>Телефоны:</h4>
				<p>
					+7 495 509 30 46 <br>
					+7 495 585 78 80
				</p>
				<h4>E-mail:</h4>
				<p>info@ecokrov.com</p>

				<h4>Skype:</h4>
				<p>ecokrov</p>
			</div>

			<div class="contacts__map">
				<div id="map_canvas"></div>
			</div>
		</section>
    </div>
</div>	
<? get_footer()?>