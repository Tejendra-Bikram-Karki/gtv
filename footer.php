<section class="footer_area section-padding mh-100-vh dots-bg d-md-flex align-items-md-center py-3 bg-dark text-white ">
    <div class="container footer-container">

        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 pb-3 text-white d-flex justify-content-between">
            
            <div class="col-md-2 mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="<?php bloginfo('template_directory'); ?>/assests\img\logo.svg" alt="">
                </a>
            </div>

            <!-- <div class="col-md-1"></div> -->

            <div class="col-md-3 mb-3">
                <h5>Registration No. 2511-077/078</h5>
                <div class="details">
                    <div class="address"><i class="fa-solid fa-location-dot"></i>Kathmandu Metropolitan City-3
                        Baluwatar, Kathmandu Nepal</div>
                    <div class="phone"><i class="fa-solid fa-phone">
                            <p>+977-9845063081</p>
                            <p>+977-9845063082</p>
                        </i>
                    </div>
                </div>
            </div>



            <!-- <div class="col-md-1"></div> -->

            <div class="col-md-2 mb-3">
                <h5>Quick Links</h5>
                <ul class="nav flex-column">

                    <li class="nav-item mb-2"><a href="#" class="text-white p-0"><span class="me-2"
                                style="color: red; font-size:1rem;">></span>Programs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-white p-0"><span class="me-2"
                                style="color: red; font-size:1rem;">></span>ADvertise with Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-white p-0"><span class="me-2"
                                style="color: red; font-size:1rem;">></span>Privacy Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-white p-0"><span class="me-2"
                                style="color: red; font-size:1rem;">></span>Terma & Conditions</a></li>
                </ul>
            </div>

            <div class=" footer-social d-flex justify-content-end">
            <div class="col mb-3">
                <h5>Social Profiles</h5>
                <ul class="nav flex-column d-flex">
                    <li class="nav-item mb-2"><a href="#" class="p-0 text-white"><span
                                class="me-2 fa-brands fa-facebook"
                                style="color: red; font-size:1rem;"></span>Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="p-0 text-white"><span class="me-2 fa-brands fa-youtube"
                                style="color: red; font-size:1rem;"></span>YouTube</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="p-0 text-white"><span class="me-2 fa-brands fa-twitter"
                                style="color: red; font-size:1rem;"></span>Twitter</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="p-0 text-white"><span
                                class="me-2 fa-brands fa-linkedin"
                                style="color: red; font-size:1rem;"></span>LinkedIn</a></li>
                </ul>
            </div>
            </div>

        </footer>

        <div class="copyrighgt text-center text-white">
            <p>&copy;2022 Galaxy 4K TV | All Rights Reserved. Powered by: <a href="https://kantipurtech.com"
                    class="text-decoration-none">Kantipur
                    Infotech</a></p>
        </div>
    </div>





</section>

<script src="assests/js/bootstrap.bundle.min.js"></script>
<script src="assests/js/controls.js"></script>


// TEstimonials section script starts here

<script>
var btn = document.getElementsByClassName("testi-btn");
var slide = document.getElementById("slide");

btn[0].onclick = function(){
    slide.style.transform = "translateX(0px)";
}

btn[1].onclick = function(){
    slide.style.transform = "translateX(-1200px)";
}

btn[2].onclick = function(){
    slide.style.transform = "translateX(-2400px)";
}

btn[3].onclick = function(){
    slide.style.transform = "translateX(-3600px)";
}
</script>

// Testimonials section starts here






<!-- <script>
  const myCarousel = document.getElementById('myCarousel')
  myCarousel.addEventListener('slid.bs.carousel', function () {
    const activeItem = this.querySelector(".active");
    document.querySelector(".testi-img img").src = activeItem.getAttribute("data-img");
    document.querySelector(".testi-img .circle").style.backgroundColor = activeItem.getAttribute("data-color");
  })
</script> -->




<!-- optional for gadget of tech kagaj -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>





<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<!-- <script>
window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"></script>')
</script> -->

<script src="js/bootstrap.min.js"></script>
<script>
$('#link').click(function() {
    var src = 'http://www.youtube.com/v/FSi2fJALDyQ&amp;autoplay=1';
    $('#myModal').modal('show');
    $('#myModal iframe').attr('src', src);
});

$('#myModal button').click(function() {
    $('#myModal iframe').removeAttr('src');
});
</script>


<?php wp_footer(); ?>

</body>

</html>