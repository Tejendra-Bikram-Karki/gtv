<?php
// Template Name: csr
?>

<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
    <img src="<?php the_field('csr_hero_image' ,109); ?>" class="card-img inner-hero-img" alt="...">
    <div class="inner-hero-img-overlay"></div>
    <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
        <p class="inner-sub-text">CSR</p>
        <p class="inner-main-text">Corporate Social Responsibility</p>
    </div>
</div>

<div class="container my-5 pt-5">
    <?php $args = array('post_type'=>'csr', 'post_status'=>'publish', 'showposts'=>4); 
    // post_type and post_status for custom post types
  $i = 0; 
  $result = new WP_Query($args); 
  while ($result -> have_posts() ) : $result -> the_post(); 
  if($i++<4):
  ?>
    <ul class="list-group my-3 list-group-flush">

        <div class="card bg-white border-none mb-3 single-csr-card  rounded-0">
            <div class="row g-0">
                <div class="col-md-5 ">
                    <div class="single-csr-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="col-md-7 ps-4 py-3">
                    <div class="card-body">
                        <h5 class="card-title single-csr-title"><a href="<?php the_permalink(); ?>"
                                style="text-decoration: none;">
                                <?php the_title(); ?></a></h5>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p class="card-text"><small class="text-muted"><i
                                            class="fa-solid fa-clock"></i><?php echo get_the_date(); ?></small></p>
                            </div>
                            <div class="col-md-2">
                                <div class="card-text"><small class="text-muted"><i
                                            class="fa-solid fa-tag"></i>Category</small>
                                </div>
                            </div>
                        </div>
                        <p class="card-text single-csr-content"><?php echo wp_trim_words(get_the_excerpt(), 30, '');?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn single-csr-button rounded-0 px-3 mt-3">View Details</a>

                    </div>
                </div>
            </div>
        </div>
    </ul>
    <?php endif; endwhile;  wp_reset_postdata(); ?>


</div>


<?php get_footer(); ?>