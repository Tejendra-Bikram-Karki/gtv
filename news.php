<?php
// Template Name: News
?>

<?php get_header(); ?>

<!-- hero section -->
<section>
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">I am John Doe</h1>
            <p>And I'm a Photographer</p>
        </div>
    </div>
</section>



<!-- programs cards -->

<div class="container news-container my-5 py-5">



    <div class="row py-4 g-5 ">
        <?php $args = array('cat'=>10, 'showposts'=>4); 
            $i = 0; 
            $result = new WP_Query($args); 
            while ($result -> have_posts() ) : $result -> the_post(); 
            if($i++<4):
            ?>

        <div class="col-md-4">
            <div class="card border-bottom">
                <?php the_post_thumbnail(); ?>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                        </div>
                    </div>
                    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 200, '');?></p>
                    <a href="#" class="view-details" style="color: red;">View Details</a>
                </div>
            </div>
        </div>

        <?php endif; endwhile; basic_paging();  wp_reset_postdata(); ?>

    </div>



</div>


<?php get_footer(); ?>