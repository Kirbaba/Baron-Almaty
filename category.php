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

                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            $url = explode("/", $url);
                            if(empty($url[2])){ ?>
                                <section class="category">
                                     <?php do_shortcode('[cat]');?>
                                 </section>
                            <?php
                            }

         else{
                                    if ( have_posts() ) : ?>
                                        <!-- Цикл вывода постов -->
                                        <?php while (have_posts()): the_post(); ?>
                                            <?php if ( has_post_thumbnail() ): ?>
                                        <section class="single">


                                            <div class="single__thumb">
                                                <?php { echo get_the_post_thumbnail( $id, '100%', array('class' => 'alignleft') ); }?>
                                                <span><?php the_title(); ?></span>
                                            </div>
                                            <div class="single__content">

                                                <?php the_content(); ?>

                                            </div>
                                        </section>
                                            <?php  endif;?>
                                        <?php endwhile; ?>

                                        <div style="text-align:right; width: 100%; padding-left: 60px">
                                            <?php my_pagenavi() ?>
                                        </div>


                                    <?php endif;
                                }

                            ?>




    </div>
</div>
<?php get_footer(); ?>