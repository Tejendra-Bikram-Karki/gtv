<?php
// Template Name: CSR
?>

<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">CSR</p>
    <p class="inner-main-text">Corporate Social Responsibility</p>
  </div>
</div>

<div class="container my-5 pt-5">
    <?php $args = array('cat'=>10, 'showposts'=>4); 
  $i = 0; 
  $result = new WP_Query($args); 
  while ($result -> have_posts() ) : $result -> the_post(); 
  if($i++<4):
  ?>
    <ul class="list-group my-3 list-group-flush">

        <div class="card bg-white border-none mb-3 single-csr-card  rounded-0">
            <div class="row g-0">
            <div class="col-md-5 single-csr-image">
                <?php the_post_thumbnail(); ?>
            </div>
                <div class="col-md-7 ps-4 py-3">
                    <div class="card-body">
                        <h5 class="card-title single-csr-title"><a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                <?php the_title(); ?></a></h5>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p class="card-text"><small class="text-muted"><i class="fa-solid fa-clock"></i><?php echo get_the_date(); ?></small></p>
                            </div>
                            <div class="col-md-2">
                                <div class="card-text"><small class="text-muted"><i class="fa-solid fa-tag"></i>Category</small>
                                </div>
                            </div>
                        </div>
                        <p class="card-text single-csr-content"><?php echo wp_trim_words(get_the_excerpt(), 200, '');?></p>
                        <a href="#" class="btn single-csr-button rounded-0 px-3 mt-3">View Details</a>

                    </div>
                </div>
            </div>
        </div>
    </ul>
    <?php endif; endwhile;  wp_reset_postdata(); ?>


</div>


<?php get_footer(); ?>