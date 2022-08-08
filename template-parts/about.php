<?php
// Template Name: About
?>

<?php get_header(); ?>

<div class="card text-bg-dark inner-hero-section border-0">
    <img src="<?php the_field('about_hero_image', 25); ?>" class="card-img inner-hero-img" alt="...">
    <div class="inner-hero-img-overlay"></div>
    <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
        <p class="inner-sub-text">About Us</p>
        <p class="inner-main-text">Galaxy 4K Television</p>
    </div>
</div>

<div class="container my-5 pb-5">

    <div class="about-info">

                <?php if( have_rows('about_info' ,25) ):
                while( have_rows('about_info' ,25) ): the_row(); 
                ?>

        <div class="row pb-5 pt-5">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="who-we-are small-heading-dark">Who We Are</p>
            </div>
            <p class="ms-4 ps-4 section-content-dark"><?php the_sub_field('who_we_are',25); ?></p>
        </div>

        <div class="row pb-5">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="who-we-are small-heading-dark">Vision</p>
            </div>
            <p class="ms-4 px-4 section-content-dark"><?php the_sub_field('vision',25); ?></p>
        </div>

        <div class="row pb-5">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="who-we-are small-heading-dark">Mission</p>
            </div>
            <p class="ms-4 px-4 section-content-dark"><?php the_sub_field('mission',25); ?></p>
        </div>
        <?php endwhile; endif; ?>

    </div>


    <!-- FAQs -->

    <div class="row pb-5">
        <div class="title">
            <p><i class="fa-solid fa-circle title-icon"></i></p>
            <p class="who-we-are small-heading-dark">Frequently Asked Questions</p>
        </div>
    </div>

                <?php if( have_rows('faq_section' ,25) ):
                while( have_rows('faq_section' ,25) ): the_row(); 
                ?>
    <div class="accordion ms-4 px-4" id="accordionExample">

            
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="question">
                    <?php the_sub_field('question' ,25); ?>
                    </div>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="answer">
                <?php the_sub_field('answer' ,25); ?>
                </div>
                </div>
            </div>
        </div>

        
    </div>
    <?php endwhile; endif; ?>

</div>



<?php get_footer(); ?>