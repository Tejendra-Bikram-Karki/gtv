
 <?php 
 $args = array('showposts'=>7); 
  $result = new WP_Query($args); 
  while ($result -> have_posts() ) : $result -> the_post(); 
?>

   
<div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <a href="<?php the_permalink(); ?>" style = "text-decoration: none; "><?php the_title(); ?></a></li>
  </ul>
</div>



<?php endwhile; wp_reset_postdata(); ?>






