<div class="cat-title sub-heading-red mt-5 pt-4"><h4>Related Topics</h4></div>
<div class="row related mt-4 mb-5 pb-5">
<?php

  $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
  if( $related ) foreach( $related as $post ) {
  setup_postdata($post); 
?>

  <div class="col-md-4">
    <div class="card h-100">
      <?php the_post_thumbnail();?>
      <div class="card-body">
        <h5 class="card-title "><a  class="related-heading-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h5>
      </div>
    </div>
  </div>

    <?php } wp_reset_postdata();?>
</div>