<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php 
            while ( have_posts() ) : the_post(); ?>

            
                <div class="post-entry">
                    <h1> <?php the_title(); ?></h1>


            <div class="post-meta">
                <div class="row">
                    <div class="col-md-4">
                    On: <?php the_date(); ?>
                    </div>
                    <div class="col-md-2">
                    By: <?php the_author(); ?>
                    </div>
                </div>
            </div>
            <hr>

                    <?php the_post_thumbnail(); ?>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="comment">
                    <?php get_template_part('comments') ?>
                </div>

                <?php endwhile;?>


<!-- Related posts -->
                <?php get_template_part('related'); ?>



        </div>
        
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>




</div>
    
<?php get_footer(); ?> 