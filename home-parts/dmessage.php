<section class="director-message section-padding mh-100-vh dots-bg d-md-flex align-items-md-center dark-background py-5 position-relative">
    <div class="dm-background-element"><img src="http://localhost/galaxy/wp-content/uploads/2022/08/bg-light.png" alt=""></div>  
    <div class="container">
        <div class="row align-items-center">

                <?php if( have_rows('director_section' ,23) ):
                while( have_rows('director_section' ,23) ): the_row(); 
                ?>

            <div class="col-lg-1"></div>
            <div class="col-lg-3 p-5">
                <div class="about_thumb dm-img-box d-none d-md-block ">
                    <img src="<?php the_sub_field('director_image' ,23); ?>" class="dm-image" alt="" >
                    <!-- <img src="/img/logo-dark.svg" alt=""> -->
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-lg-7">
                <div class="about_info px-lg-5">
                    <div class="section_title">
                        <h2 class="header2 mb-5 mt-(-5) small-heading-light">Director's Message</h2>
                    </div>
                    <p class="section-content-light"><?php the_sub_field('director_message', 23); ?></p>
                    <div class="director-signature mt-5">
                        <h6 style="color: white; font-family: 'Pinyon Script', sans-serif;"><?php the_sub_field('director_signature', 23); ?></h6>
                        <h3 class="small-subheading-light"><?php the_sub_field('director_name', 23); ?></h3>
                        <!-- <h6 class="section-smallcontent-light">Managing Director</h6> -->
                    </div>



                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>