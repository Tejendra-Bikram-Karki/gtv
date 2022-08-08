<?php
// Template Name: News
?>

<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">News</p>
    <p class="inner-main-text">Latest News Updates</p>
  </div>
</div>



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
            <div class="card single-program-card">
                <div class="col-md-12 single-news-image">
                <?php the_post_thumbnail(); ?>
                    </div>
                <div class="card-body">
                    <h5 class="card-title single-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p class="card-text"><small class="text-muted"><i class="fa-solid fa-clock"></i><?php echo get_the_date(); ?></small></p>
                        </div>
                    </div>
                    <p class="card-text single-program-content"><?php echo wp_trim_words(get_the_excerpt(), 30, '');?></p>
                    <a href="<?php the_permalink(); ?>" class="news-read-more">Read More <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>

        <?php endif; endwhile; basic_paging();  wp_reset_postdata(); ?>

    </div>



</div>


<?php get_footer(); ?>