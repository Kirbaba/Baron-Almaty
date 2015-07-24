<?php get_header(); ?>
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
                <div class="single__thumb">
                    <?php { echo get_the_post_thumbnail( $id, '100%', array('class' => 'alignleft') ); }?>
                    <span><?php the_title(); ?></span>
                </div>
                <div class="single__content">
                    <?php  endif;?>                            
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </section>
        </div>
    </div>
          
     
<?php get_footer(); ?>