<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img single-page-hero" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">News</p>
    <p class="inner-main-text">Corporate Social Responsibility</p>
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


                <div  class="single-thumbnail" style="width: 100%;">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="csr-title my-5 text-center">
                    <h3><?php the_title(); ?></h3>
                </div>
                <p class="text-center"><?php the_content(); ?></p>
            </div>

            <?php endwhile;?>


        </div>

        <div class="col-md-1"></div>

    </div>




</div>

<?php get_footer(); ?>