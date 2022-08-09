<?php
// Template Name: Teams
?>

<?php get_header(); ?>

<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
  <img src="<?php the_field('team_hero_image' ,44); ?>" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">Team</p>
    <p class="inner-main-text">Galaxy 4K Team</p>
  </div>
</div>

<!-- Team section -->

<div class="container team-container my-5 py-5">

    <!-- Management Team -->
    <div class="management-team">
        <div class="row pb-3">
                <div class="col-md-12">
                <div class="title">
            <p><i class="fa-solid fa-circle title-icon"></i></p>
            <p class="small-heading-dark">Management Team</p>
            </div>
                </div>
        </div>


        <!-- Team Members -->
        <div class="row mt-3 gx-5 d-flex">

            <?php if( have_rows('management_team' ,44) ):
            while( have_rows('management_team' ,44) ): the_row(); 
            ?>

            <div class="col-lg-3 text-center px-5">
                <img src="<?php the_sub_field('member_image' ,44); ?>"
                    class="bd-placeholder-img team-image" alt="">
                <h2 class="team-member-name pt-4"><?php the_sub_field('member_name' ,44); ?></h2>
                <p class="team-member-post"><?php the_sub_field('member_designation' ,44); ?><br> <?php the_sub_field('member_phone' ,44); ?></p>
            </div>

            <?php endwhile; endif; ?>

        </div>

    </div>
    <!-- management Team end -->


    <div class="television-team mt-5">
        <div class="row pb-3">
            <div class="col-md-12">
            <div class="title">
        <p><i class="fa-solid fa-circle title-icon"></i></p>
        <p class="small-heading-dark">Galaxy 4K Television</p>
        </div>
            </div>
        </div>


        <!-- Team Members -->
        <div class="row mt-3 gx-5 d-flex">

            <?php if( have_rows('galaxy_4k_television' ,44) ):
            while( have_rows('galaxy_4k_television' ,44) ): the_row(); 
            ?>

            <div class="col-lg-3 text-center px-5">
                <img src="<?php the_sub_field('member_image' ,44); ?>"
                    class="bd-placeholder-img team-image" alt="">
                <h2 class="team-member-name pt-4"><?php the_sub_field('member_name' ,44); ?></h2>
                <p class="team-member-post"><?php the_sub_field('member_designation' ,44); ?><br><?php the_sub_field('member_phone' ,44); ?></p>
            </div>
                <?php endwhile; endif; ?>
            

        </div>

    </div>

    <!-- television team end -->


    <div class="radio-team mt-5">
        <div class="row pb-3">
            <div class="col-md-12">
            <div class="title">
        <p><i class="fa-solid fa-circle title-icon"></i></p>
        <p class="small-heading-dark">Galaxy 4K Radio Team</p>
        </div>
            </div>
        </div>


        <!-- Team Members -->
        <div class="row mt-3 gx-5 d-flex">

                <?php if(have_rows('galaxy_4k_radio' ,44)):
                while(have_rows('galaxy_4k_radio' ,44)): the_row();
                ?>

            <div class="col-lg-3 text-center px-5">
                <img src="<?php the_sub_field('member_image' ,44) ?>"
                    class="bd-placeholder-img team-image" alt="">
                <h2 class="team-member-name pt-4"><?php the_sub_field('member_name' ,44); ?></h2>
                <p class="team-member-post"><?php the_sub_field('member_designation' ,44); ?><br><?php the_sub_field('member_phone' ,44); ?></p>
            </div>

         <?php endwhile; endif; ?>

        </div>

    </div>

</div>


<?php get_footer(); ?>