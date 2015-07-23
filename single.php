<?php get_header(); ?>
            <div class="contain">               
                <div class="page-content">
                    <section>
                        <?php while (have_posts()): the_post(); ?>
                        <?php if ( has_post_thumbnail() ): ?>
                        <div class="col-lg-5 col-ms-5 col-sm-12 col-xs-12 thumb_marg">
                            <?php { echo get_the_post_thumbnail( $id, '100%', array('class' => 'alignleft') ); }?>
                        </div>
                            <?php  endif;?>
                            <h1 class="post-name"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </section>
                </div>
                </div>
          
        </div>
<?php get_footer(); ?>