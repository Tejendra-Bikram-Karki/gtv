<section class="about_area section-padding mh-100-vh dots-bg d-md-flex align-items-md-center dark-background">
    <div class="container pt-0 pb-5">
        <div class="row align-items-center pt-2 pb-5">
            <div class="col-lg-5">
                <div class="about_thumb d-none d-md-block align-start">
                    <img src="<?php the_field('home_about_image',23); ?>" class="about-img center" alt=""
                        style="width: 280px; height: 280px;">
                    <!-- <img src="/img/logo-dark.svg" alt=""> -->
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-lg-6">
                <div class="about_info px-lg-5">
                    <div class="section_title">
                        <p class="sub-heading-light mb-0">Welcome To</p>
                        <h3 class="header-text-light mt-0">Galaxy 4K TV</h3>
                    </div>
                    <p class="section-content-light py-4"><?php the_field('about_intro_text',23); ?></p>
                    <a href="/about" class="btn-text-light"><button type="button" class="btn button-light rounded-0 px-3 py-2 mt-3 mb-2">Know More</button></a>
                </div>
            </div>
        </div>
    </div>
</section>