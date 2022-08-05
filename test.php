<<<<<<< HEAD
<?php
// Template Name: Test
?>

<?php get_header(); ?>

<div class="hero-about" style="margin-top: -50px;">
    <img src="<?php bloginfo('template_directory'); ?>/assests\img\Galaxy-TV-4K-Nepal.jpg" class="img-fluid"
        width="100%" height="60%" alt="">
</div>

<section class="2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row mb-5">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <?php $args = array('cat'=>array($allcats),'showposts'=>3); 
                                $i = 0; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i++<3):
                                ?>

                            <?php if($i==1): echo'<div class="carousel-item active" data-bs-interval="2000">'; else: echo'<div class="carousel-item" data-bs-interval="2000">';
                                
                                endif;?>


                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="overlay"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 200, '');?></p>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>


                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

            </div>


            <div class="row">

                <?php $args = array('showposts'=>6); 
                                $i = 6; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i--<=2):
                                ?>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; endwhile; wp_reset_postdata(); ?>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            <?php $args = array('showposts'=>5); 
                                $i = 0; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i++<1):
                                ?>

            <div class="card text-bg-dark h-100 ">

                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="overlay"></div>
                <div class="card-img-overlay text-white" style="position: absolute; top: 80%;">
                    <p class="card-text"><?php echo get_the_date(); ?></p>
                    <h5 class="card-title"><?php the_title(); ?></h5>
                </div>
            </div>
            <?php endif; endwhile; wp_reset_postdata(); ?>
        </div>

    </div>

</section>






=======
<?php
// Template Name: Test
?>

<?php get_header(); ?>

<div class="hero-about" style="margin-top: -50px;">
    <img src="<?php bloginfo('template_directory'); ?>/assests\img\Galaxy-TV-4K-Nepal.jpg" class="img-fluid"
        width="100%" height="60%" alt="">
</div>

<section class="2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row mb-5">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <?php $args = array('cat'=>array($allcats),'showposts'=>3); 
                                $i = 0; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i++<3):
                                ?>

                            <?php if($i==1): echo'<div class="carousel-item active" data-bs-interval="2000">'; else: echo'<div class="carousel-item" data-bs-interval="2000">';
                                
                                endif;?>


                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="overlay"></div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 200, '');?></p>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>


                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

            </div>


            <div class="row">

                <?php $args = array('showposts'=>6); 
                                $i = 6; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i--<=2):
                                ?>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; endwhile; wp_reset_postdata(); ?>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            <?php $args = array('showposts'=>5); 
                                $i = 0; 
                                $result = new WP_Query($args); 
                                while ($result -> have_posts() ) : $result -> the_post(); 
                                if($i++<1):
                                ?>

            <div class="card text-bg-dark h-100 ">

                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="overlay"></div>
                <div class="card-img-overlay text-white" style="position: absolute; top: 80%;">
                    <p class="card-text"><?php echo get_the_date(); ?></p>
                    <h5 class="card-title"><?php the_title(); ?></h5>
                </div>
            </div>
            <?php endif; endwhile; wp_reset_postdata(); ?>
        </div>

    </div>

</section>






>>>>>>> 1ba9df08f5a3515275867fffd881fcbc17498118
<?php get_footer(); ?>