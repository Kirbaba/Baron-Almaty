<?php get_header(); ?>
<?php get_header();
$post_id = get_the_ID();
?>
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
        <section class="single">

            <?php while (have_posts()): the_post(); ?>
            <?php if ( has_post_thumbnail() ): ?>
                <div class="recipes__block__thumb__single">
                    <?php { echo get_the_post_thumbnail( $id, '100%', array('class' => 'alignleft') ); }?>
                </div>
            <?php  endif;?>
            <div class="recipes__block__content__single">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="recipes__block__content__info">
                    <p>
                        <i class="recipesTime"></i>
                        <small>Время приготовления:</small>
                        <?php
                            $time = get_post_custom_values( 'time', $post_id );
                            echo $time[0];
                        ?>
                    </p>
                    <p>
                        <i class="recipesPers"></i>
                        <small>Рецепт на:</small>
                        <?php
                            $kol = get_post_custom_values( 'kol', $post_id );
                             echo $kol[0];
                        ?>
                       человек
                    </p>
                </div>

            </div>
            <div class="recipes__text">
                <article>
                    <?php the_content(); ?>
                    <div class="soc__repost">
                        <h2>Понравился рецепт? Расскажи друзьям</h2>
                        <a href="#nowhere" class="soc__repost__fb">73</a>
                        <a href="#nowhere" class="soc__repost__vk">671</a>
                        <a href="#nowhere" class="soc__repost__tw">75</a>
                        <a href="#nowhere" class="soc__repost__gp">0</a>
                        <a href="#nowhere" class="soc__repost__ok">122</a>
                    </div>
                </article>
                <aside>
                    <h3>Ингридиенты:</h3>

                    <?php

                        $ing = get_post_meta($post_id, $key = '', $single = false);
                    foreach($ing as $key=>$v){
                        if (($key =='_edit_lock') or ($key == '_edit_last') or ($key == 'time') or ($key == 'kol') or ($key == '_thumbnail_id'))
                        {}
                        else{
                        ?>
                        <p> <?php echo $key;?> <span class="right"><?php echo $v[0]; ?></span></p>

                        <?php
                        }
                    }
                   //prn($ing);
                    ?>
                   <!-- <p> Спагетти <span class="right">250 г</span></p>
                    <p>Масло сливочное<span class="right">20 г</span></p>
                    <p>Чеснок	<span class="right">2 зубчика</span></p>
                    <p>Лук красный<span class="right">1 головка</span></p>
                    <p>Бекон<span class="right">50 г</span></p>
                    <p>Сливки 20%-ные<span class="right"> 200 мл</span></p>
                    <p>Сыр пармезан тертый	 <span class="right">50 г</span></p>
                    <p>Яйцо куриное	<span class="right">4 штуки</span></p>
                    <p>Соль	  <span class="right">  по вкусу</span></p>
                    <p>Перец черный молотый<span class="right">  по вкусу</span></p>-->
                </aside>
                <?php endwhile; ?>
            </div>
        </section>





    <?php get_footer(); ?>
