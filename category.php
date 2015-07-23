<?php get_header();?>
<div class="container-fluid wrap">
    <div class="col-lg-12 whywebg whywe">
        <h1 class="archive-title"><?php single_cat_title(''); ?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <section id="primary" class="site-content pad">
                                <!-- Имеются ли посты для отображения? -->
                                <?php if ( have_posts() ) : ?>
                                <!-- Цикл вывода постов -->
                                    <div class="row">
                                        <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="row entry">
                                            <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 wrap post-previy ">
                                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 category_icon">
                                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
                                                </div>
                                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9 wrap" >
                                                    <h2 class="post-name"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                                    <h5><?php the_time('j.m.Y') ?></h5>
                                                    <div class="anons"><?php  the_excerpt(); ?></div>
                                                </div>
                                            </div>
                                            <p><?php comments_popup_link( 'Ни одного комментария', '1 комментарий',
                                                    '% комментариев', 'comments-link');?>
                                            </p>
                                        </div>

                                        <?php endwhile; // конец цикла?>
                                        <div style="text-align:right; width: 100%; padding-left: 60px">
                                            <?php my_pagenavi() ?>
                                        </div>
                                    </div>

                                <?php endif; ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>