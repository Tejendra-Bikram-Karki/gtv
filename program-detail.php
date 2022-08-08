<?php
// Template Name: Program-Detail 
?>

<?php get_header(); ?>

<div class="card text-bg-dark inner-hero-section border-0">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">Advertise</p>
    <p class="inner-main-text">Advertise with us</p>
  </div>
</div>

<div class="container program-detail-container mt-57">

    <div class="row pt-5">
        <div class="col-md-12">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="small-heading-dark">Program Information</p>
            </div>
        </div>
    </div>

    <p class="ms-4 ps-3 mt-3 section-content-dark">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet
        dignissimos rerum veniam quod totam
        quibusdam quos est molestias veritatis pariatur recusandae perferendis commodi optio eius quaerat facere,
        cupiditate architecto labore magnam. Aut dignissimos quisquam neque voluptatibus similique perferendis
        blanditiis delectus! Reiciendis cum vero maxime, dolorum repudiandae velit temporibus unde doloribus ratione
        adipisci ipsum aperiam perspiciatis error aliquid quas, beatae deleniti, autem itaque. Soluta reprehenderit
        quaerat eligendi sint vel, dolorum illum, dolorem quibusdam sed at voluptatum, perferendis in voluptas deleniti
        commodi aliquam mollitia error ex modi? Voluptatum neque vel, ipsum enim, culpa aspernatur sed, suscipit
        assumenda architecto quis et eos. Eius molestiae dolorum corporis, praesentium eligendi eum quod ea perspiciatis
        minima omnis. Consectetur asperiores dolor, illo maiores architecto nam, qui quaerat corrupti ipsa quia autem.
        Aspernatur obcaecati itaque culpa sapiente similique amet voluptatibus adipisci rem! Perspiciatis iure ea
        repudiandae quis excepturi, modi omnis dolor sequi illo harum, reiciendis, fugiat libero atque!</p>

    <section class="host-section py-3">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="title">
                    <p><i class="fa-solid fa-circle title-icon"></i></p>
                    <p class="small-heading-dark">Host/Presenter</p>
                </div>
            </div>
        </div>


        <div class="row align-items-center ms-4">
            <!-- <div class="col-lg-1"></div> -->
            <div class="col-lg-3 py-5">
                <div class="col-lg-3 text-center px-5">
                    <img src="<?php bloginfo('template_directory'); ?>/assests\img\Galaxy-TV-4K-Nepal.jpg"
                        class="bd-placeholder-img team-image" alt="">
                </div>
                <!-- <img src="/img/logo-dark.svg" alt=""> -->
            </div>
       <div class="col-md-1"></div>
        <div class="col-lg-8">
            <div class="about_info px-lg-5">
                <div class="section_title">
                    <h2 class="host-name">Yubaraj Kandel</h2>
                    <p class="host-post">Presentor | Sidha Kura</p>
                </div>
                <p class="section-content-dark pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eaque,
                    accusamus explicabo sed eius
                    mollitia nobis maxime nulla, non velit eveniet, soluta accusantium veniam. Iusto, voluptatem
                    vitae deleniti tempora temporibus ex alias eos numquam officia, labore, assumenda quae omnis
                    culpa quod. Deserunt at in magnam expedita? Hic adipisci, odit quos delectus sit, minima autem
                    fugiat doloribus id mollitia dolores dolorum cupiditate aliquam animi voluptatibus eligendi
                    reiciendis explicabo a reprehenderit?
                </p>
                <div class="host-detail mt-5">
                    <h4 class="host-name">Know More</h4>
                    <div class="col-md-3 pt-2 d-flex justify-content-between">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/facebook.png" alt="">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/Twitter.png" alt="">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/Linkedin.png" alt="">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/yt.png" alt="">
                    </div>
                </div>



            </div>
        </div>
</div>
</section>


<section class="watch-now mb-5">
    <div class="row pt-5 mb-5">
        <div class="col-md-12 ">
            <div class="title">
                <p><i class="fa-solid fa-circle title-icon"></i></p>
                <p class="small-heading-dark">Watch Now</p>
            </div>
        </div>
    </div>


    <?php get_template_part('playlist');?>

</section>





<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>





</div>

<?php get_footer(); ?>