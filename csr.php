<?php
// Template Name: CSR
?>

<?php get_header(); ?>

<div class="hero-about" style="margin-top: -50px;">
    <img src="<?php bloginfo('template_directory'); ?>/assests\img\Galaxy-TV-4K-Nepal.jpg" class="img-fluid"
        width="100%" height="60%" alt="">
</div>

<div class="container my-5">

 
    <?php $args = array('cat'=>10, 'showposts'=>4); 
  $i = 0; 
  $result = new WP_Query($args); 
  while ($result -> have_posts() ) : $result -> the_post(); 
  if($i++<4):
  ?>
    <ul class="list-group my-3 list-group-flush">

        <div class="card bg-white border-none mb-3">
            <div class="row g-0">
                <div class="col-md-5">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                <?php the_title(); ?></a></h5>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                            </div>
                            <div class="col-md-2">
                                <div class="card-text"><small class="text-muted"><?php single_cat_title(); ?></small>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 200, '');?></p>
                        <a href="/about"><button type="button" class="btn btn-outline-danger rounded-0 px-3 mt-3 mb-2"
                                style="color: black;">Read More</button></a>

                    </div>
                </div>
            </div>
        </div>
    </ul>
    <?php endif; endwhile;  wp_reset_postdata(); ?>


</div>


<?php get_footer(); ?>