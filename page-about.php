<?php
/**
 * Template Name: About
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
		<section class="about">
			<div class="about__container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <?php the_content(); ?>
               
                <?php endwhile; ?>
            <?php endif; ?>

            	<div class="soc__repost">
            		<h2>Понравился рецепт? Расскажи друзьям</h2>
            		<a href="#nowhere" class="soc__repost__fb">73</a>
            		<a href="#nowhere" class="soc__repost__vk">671</a>
            		<a href="#nowhere" class="soc__repost__tw">75</a>
            		<a href="#nowhere" class="soc__repost__gp">0</a>
            		<a href="#nowhere" class="soc__repost__ok">122</a>
            	</div>
			</div>
		</section>
	</div>
</div>
<? get_footer() ?>