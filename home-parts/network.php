<div class="container-fluid network">
<div class="container">
    <div class="row py-5">
        <div class="col-md-4 py-5">
            <div class="network-text mt-5">
            <p class="sub-heading-dark mb-0">More About</p>
            <h3 class="header-text-dark mt-0">Galaxy 4K Network</h3>
            </div>

        </div>
        <div class="col-md-1  py-5"></div>
        <div class="col-md-7  py-5">
            <div class="row network-images">

                <?php if( have_rows('galaxy_network' ,23) ):
                while( have_rows('galaxy_network' ,23) ): the_row(); 
                ?>

                <div class="col-md-1"></div>
                <div class="col-md-3 mx-2">
                    <div class="network-card d-flex justify-content-center align-items-center">
                    <img src="<?php the_sub_field('network1',23);?>" alt="first image" class="network-logo">
                    </div>
                </div>
                <div class="col-md-3 mx-2">
                <div class="network-card d-flex justify-content-center align-items-center">
                    <img src="<?php the_sub_field('network2',23);?>" alt="first image" class="network-logo">
                    </div>
                </div>
                <div class="col-md-3 mx-2">
                <div class="network-card d-flex justify-content-center align-items-center">
                    <img src="<?php the_sub_field('network3',23);?>" alt="first image" class="network-logo">
                    </div>
                </div>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>




</div>
</div>