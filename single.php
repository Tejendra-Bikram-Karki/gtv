<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img single-page-hero" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">News</p>
    <p class="inner-main-text">Latest News Updates</p>
  </div>
</div>

<div class="container mt-5">
    <div class="row">

        <div class="col-md-1">

        </div>

        <div class="col-md-10">
            <?php 
            while ( have_posts() ) : the_post(); ?>


            <div class="post-entry">

                <div class="row">
                    <div class="col-md-8">
                        <h1> <?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-4 mt-3 d-flex justify-content-end">
                        <!-- ShareThis BEGIN -->
                        <div class="sharethis-inline-share-buttons"></div>
                        <!-- ShareThis END dfhdgfgh -->
                    </div>
                </div>



                <div class="post-meta  mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="card-text"><small class="text-muted"><i
                                        class="fa-solid fa-clock"></i><?php echo get_the_date(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="single-thumbnail" style="width: 100%;">
                    <?php the_post_thumbnail(); ?>
                </div>
                <p class="text-center"><?php the_content(); ?></p>
            </div>

            <?php endwhile;?>


            <!-- Related posts -->
            <div class="single-related my-5">
                <?php get_template_part('template-parts/related'); ?>
                </div>




        </div>

        <div class="col-md-1"></div>

    </div>




</div>

<?php get_footer(); ?>