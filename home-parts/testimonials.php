<div class="container program-container mt-5">
    <div class="row pt-5">
        <div class="col-md-12">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="small-heading-dark">Testimonials</p>
            </div>
        </div>
    </div>
</div>


<div class="testi-hero mb-5">



    <div class="testimonial-container">

        <div class="indicator">
            <span class="testi-btn active"></span>
            <span class="testi-btn"></span>
            <span class="testi-btn"></span>
            <span class="testi-btn"></span>

        </div>

        <div class="testimonial">

            <div class="slide-row" id="slide">

                <?php if( have_rows('testimonial_section' ,23) ):
                while( have_rows('testimonial_section' ,23) ): the_row(); 
                ?>

                <div class="slide-col">
                    <div class="user-img">
                    <img src="<?php the_sub_field('user_image' ,23); ?>" alt=""> 
                    </div>
                    <div class="user-text">
                        <p><?php the_sub_field('testimonial' ,23); ?></p>
                        <h3><?php the_sub_field('user_name' ,23); ?></h3>
                        <p class="testi-position"><?php the_sub_field('user_designation' ,23); ?> | <?php the_sub_field('user_company' ,23); ?> </p>
                    </div>
                </div>

                <?php endwhile; endif; ?>
  

            </div>

        </div>
    </div>



</div>



