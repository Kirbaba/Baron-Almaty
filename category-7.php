<?php get_header();?>


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
        <section class="recipes">
            <!-- Имеются ли посты для отображения? -->
            <?php if ( have_posts() ) : ?>
                <!-- Цикл вывода постов -->
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="recipes__block">
                    <div class="recipes__block__thumb">
                        
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class'=>'new-img-pr'));; } ?>
                    </div>
                    <div class="recipes__block__content">
                        <h2>
                            <?php the_title(); ?>
                        </h2>                          
                        <a href="#nowhere" class="soc__repost__fb">73</a>
                        <a href="#nowhere" class="soc__repost__vk">671</a>
                        <a href="#nowhere" class="soc__repost__tw">75</a>

                        <a href="<?php the_permalink() ?>" class="toRecipe">Перейти к рецепту</a>

                        <div class="recipes__block__content__info">
                            <p>
                                <i class="recipesTime"></i>
                                <small>Время приготовления:</small>
                                 3 ч. 30 мин.
                            </p>
                            <p>
                                <i class="recipesPers"></i>
                                <small>Рецепт на:</small>
                                 5 человек
                            </p>
                        </div>
                    </div>
                        
                 
                </div>
            <?php endwhile; // конец цикла?>
            <div style="text-align:right; width: 100%; padding-left: 60px">
                <?php my_pagenavi() ?>
            </div>


<?php endif; ?>
        </section>  
    </div>
</div>


<?php get_footer(); ?>