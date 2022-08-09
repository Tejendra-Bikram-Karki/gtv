<?php
// Template Name: program Detail
?>

<?php get_header(); ?>

<div class="card text-bg-dark inner-hero-section border-0">
    <img src="<?php the_field('program_hero_image',59 ); ?>" class="card-img inner-hero-img" alt="...">
    <div class="inner-hero-img-overlay"></div>
    <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
        <p class="inner-sub-text">Advertise</p>
        <p class="inner-main-text">Advertise with us</p>
    </div>
</div>

<div class="container program-detail-container mt-57">

    <div class="row pt-5">
        <div class="col-md-12">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="small-heading-dark">Program Information</p>
            </div>
        </div>
    </div>

    <?php 
            while ( have_posts() ) : the_post(); ?>

    <p class="ms-4 ps-3 mt-3 section-content-dark"><?php the_field('program_information'); ?></p>

    <?php endwhile; ?>

    <section class="host-section py-3">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="title">
                    <p><i class="fa-solid fa-circle title-icon"></i></p>
                    <p class="small-heading-dark">Host/Presenter</p>
                </div>
            </div>
        </div>


        <div class="row align-items-center ms-4">
            <!-- <div class="col-lg-1"></div> -->

            <?php if(have_rows('host_detail')):
            while(have_rows('host_detail')): the_row();
            ?> 

            <div class="col-lg-3 py-5">
                <div class="col-lg-3 text-center px-5">
                    <img src="<?php the_sub_field('host_image'); ?>"
                        class="bd-placeholder-img team-image" alt="">
                </div>
                <!-- <img src="/img/logo-dark.svg" alt=""> -->
            </div>
            <div class="col-md-1"></div>
            <div class="col-lg-8">
                <div class="about_info px-lg-5">

                    <div class="section_title">
                        <h2 class="host-name"><?php the_sub_field('host_name'); ?></h2>
                        <p class="host-post"><?php the_sub_field('host_designation'); ?> | <?php the_sub_field('program_name'); ?></p>
                    </div>

                    <p class="section-content-dark pt-3"><?php the_sub_field('host_intro'); ?></p>

                    <div class="host-detail mt-5">
                        <h4 class="host-name">Know More</h4>
                        <div class="col-md-3 pt-2 d-flex justify-content-between">
                           <a href="<?php the_sub_field('facebook_link'); ?>"> <img src="http://localhost/galaxy/wp-content/uploads/2022/08/facebook.png" alt=""></a>
                            <a href="<?php the_sub_field('twitter_link'); ?>"><img src="http://localhost/galaxy/wp-content/uploads/2022/08/Twitter.png" alt=""></a>
                            <a href="<?php the_sub_field('linkedin_link'); ?>"><img src="http://localhost/galaxy/wp-content/uploads/2022/08/Linkedin.png" alt=""></a>
                            <a href="<?php the_sub_field('instagram_link'); ?>"><img src="http://localhost/galaxy/wp-content/uploads/2022/08/yt.png" alt=""></a>
                        </div>
                    </div>



                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </section>


    <section class="watch-now mb-5">
        <div class="row pt-5 mb-5">
            <div class="col-md-12 ">
                <div class="title">
                    <p><i class="fa-solid fa-circle title-icon"></i></p>
                    <p class="small-heading-dark">Watch Now</p>
                </div>
            </div>
        </div>


        <?php get_template_part('playlist');?>

    </section>





    <div class="owl-carousel owl-theme">
        <div class="item">
            <h4>1</h4>
        </div>
        <div class="item">
            <h4>2</h4>
        </div>
        <div class="item">
            <h4>3</h4>
        </div>
        <div class="item">
            <h4>4</h4>
        </div>
        <div class="item">
            <h4>5</h4>
        </div>
        <div class="item">
            <h4>6</h4>
        </div>
        <div class="item">
            <h4>7</h4>
        </div>
        <div class="item">
            <h4>8</h4>
        </div>
        <div class="item">
            <h4>9</h4>
        </div>
        <div class="item">
            <h4>10</h4>
        </div>
        <div class="item">
            <h4>11</h4>
        </div>
        <div class="item">
            <h4>12</h4>
        </div>
    </div>





</div>

<?php get_footer(); ?>