<?php get_header(); ?>
    <!-- Contenido -->
    <div class="container my-5">
        <div class="row">
            <!-- Articulo -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class=" col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                <!-- card-img-top img-fluid -->
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid')); 
                            } 
                        ?>
                    </a>
                    <div class="card-block">
                        <a href="<?php the_permalink(); ?>"><h5 class="card-title my-3"><?php the_title(); ?></h5></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        <small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></small>
                    </div>
                </div>
            <!-- Fin Articulo -->
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
    <!-- Fin Contenido -->

    <?php get_footer(); ?>