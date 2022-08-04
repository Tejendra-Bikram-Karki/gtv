<?php get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-8">
<div class="page-title"><?php the_title(); ?></div>
<?php 
$args = array('cat'=>2, 'showposts'=>4); 
  $i = 0; 
  $result = new WP_Query($args); 
  while ($result -> have_posts() ) : $result -> the_post(); 
  if($i++<1):
  ?>


<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 40, '');?></p>
        <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
      </div>
    </div>
  </div>
</div>


<?php endif; endwhile; wp_reset_postdata(); ?>
</div>

<div class="col-md-4">
  <?php get_template_part('sidebar'); ?>
</div>
</div>
</div>

<?php get_footer(); ?> 