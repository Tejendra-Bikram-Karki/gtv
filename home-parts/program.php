<div class="container program-container my-5">
    <div class="row pb-4 pt-5">
        <div class="col-md-10">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="who-we-are small-heading-dark">Programs</p>
            </div>
            <!-- <p class="programs small-heading-dark"><i class="fa-solid fa-circle"></i>Programs</p> -->
        </div>
        <div class="col-md-2 d-flex flex-row-reverse ">
            <a href="/programs"><button type="button" class="btn button-dark rounded-0  px-4">View
                    All</button></a>
        </div>
    </div>



    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-5 py-5">

        <?php if( have_rows('program_section' ,23) ):
            while( have_rows('program_section' ,23) ): the_row(); 
            ?>

        <div class="col">
            <div class="card text-bg-dark h-100 single-program">
                <img src="<?php the_sub_field('program_image', 23); ?>" class="card-img" alt="..." />
                <div class="overlay-small"></div>
                <div class="card-img-overlay text-white program-text-content">
                    <h5 class="program-card-title">
                        <?php the_sub_field('program_name', 23); ?>
                    </h5>
                    <p class="program-category"><?php the_sub_field('program_category', 23); ?></p>
                </div>
            </div>
        </div>

        <?php endwhile; endif; ?>

    </div>




    <!-- from program posts -->
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-5 py-5">

            <?php 
            $term =  get_queried_object();
            $args = array(
                'post_type'=>'programs', 
                'post_status'=>'publish', 
                'showposts'=>4
                
            );
            // post_type and post_status for custom post types
            $i = 0; 
            $result = new WP_Query($args); 
            while ($result -> have_posts() ) : $result -> the_post(); 
            if($i++<4):
            ?>

        <div class="col">
            <div class="card text-bg-dark h-100 single-program">
                <?php the_post_thumbnail(); ?>
                <div class="overlay-small"></div>
                <div class="card-img-overlay text-white program-text-content">
                    <h5 class="program-card-title">
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                    </h5>
                    <p class="program-category"><?php echo $term->name; ?></p>
                </div>
            </div>
        </div>

             <?php  endif; endwhile;  wp_reset_postdata(); ?>

    </div>




</div>