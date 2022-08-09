<?php 
// Template Name: Programs
 ?>

<?php get_header(); ?>

<div class="card text-bg-dark inner-hero-section border-0">
    <img src="<?php the_field('program_hero_image' ,40); ?>" class="card-img inner-hero-img" alt="...">
    <div class="inner-hero-img-overlay"></div>
    <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
        <p class="inner-sub-text">Programs</p>
        <p class="inner-main-text">Reality | Comedy | News</p>
    </div>
</div>


<!-- programs cards -->

<div class="container inner-program-container my-5 py-5">

    <div class="row py-4 g-5 ">

                <?php $args = array('post_type'=>'programs', 'post_status'=>'publish', 'showposts'=>6); 
                $i = 0; 
                $result = new WP_Query($args); 
                while ($result -> have_posts() ) : $result -> the_post(); 
                if($i++<7):
                ?>

        <div class="col-sm-4">
            <div class="card border-bottom single-program-card">
                <!-- <div class="card-img-top single-program-image"> -->
                    <?php the_post_thumbnail(); ?>
                <!-- </div> -->

                <div class="card-body">
                    <h5 class="card-title single-program-title"><?php the_title(); ?></h5>
                    <div class="row mb-3">
                        <div class="col">
                            <p class="card-text"><small class="text-muted"><i
                                        class="fa-solid fa-clock"></i><?php the_field('program_date'); ?></small></p>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="card-text"><small class="text-muted"><i
                                        class="fa-solid fa-tag"></i>Category</small>
                            </div>
                        </div> -->
                    </div>
                    <p class="card-text single-program-content"><?php echo wp_trim_words(get_the_excerpt(), 15, '');?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn single-program-button rounded-0 px-3 mt-3 mb-2">View
                        Details</a>
                </div>
            </div>
            
        </div>

        <?php endif; endwhile;  wp_reset_postdata(); ?>

    </div>



</div>




<?php get_footer(); ?>