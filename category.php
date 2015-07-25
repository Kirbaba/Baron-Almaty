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
                        <section class="category">
                                <!-- Имеются ли посты для отображения? -->
                                <?php if ( have_posts() ) : ?>
                                <!-- Цикл вывода постов -->
                            
                                        <?php while ( have_posts() ) : the_post(); ?>
                                    
                                    
                                                <div class="category__block">
                                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>">
                                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class'=>'new-img-pr'));; } ?>
                                                        <span><?php the_title(); ?></span> 
                                                    </a>
                                                   
                                                                   
                                            
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