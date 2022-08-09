<section class="footer_area section-padding mh-100-vh dots-bg d-md-flex align-items-md-center py-3 bg-dark text-white ">
    <div class="container footer-container">

        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 pb-3 text-white d-flex justify-content-between">
            
            <div class="col-md-2 mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="http://localhost/galaxy/wp-content/uploads/2022/08/footer-logo.png" class="footer-logo" alt="">
                </a>
            </div>

            <!-- <div class="col-md-1"></div> -->

            <div class="col-md-4 mb-3">
                <h5>Registration No. 2511-077/078</h5>
                <div class=" contact-details">
              
              <div class="contact-item contactlocation">
              <img src="http://localhost/galaxy/wp-content/uploads/2022/08/pin.png" alt="">
              <p class="ps-4 pt-3 footer-detail-text">Kathmandu Metropolitan City -03 <br> Baluwatar, Kathmandu</p>
              </div>

              <div class="contact-item contact-phone">
              <img src="http://localhost/galaxy/wp-content/uploads/2022/08/phone.png" alt="">
              <p class="ps-4 pt-3 footer-detail-text">+977-15970177 <br> info@g4ktv.com</p>
              </div>
             
          </div>
            </div>



            <!-- <div class="col-md-1"></div> -->

            <div class="col-md-3 mb-3">
                <h5>Quick Links</h5>
                <ul class="nav flex-column mt-4">

                    <li class="nav-item mb-3"><a href="http://localhost/galaxy/program-detail/" class="footer-detail-text"><i class="fa-solid fa-chevron-right" style="color: #ef4136;"></i>Programs</a></li>
                    <li class="nav-item mb-3"><a href="http://localhost/galaxy/advertisement/" class="footer-detail-text"><i class="fa-solid fa-chevron-right"style="color: #ef4136;"></i>Advertise with Us</a></li>
                    <li class="nav-item mb-3"><a href="#" class="footer-detail-text"><i class="fa-solid fa-chevron-right"style="color: #ef4136;"></i>Privacy Policy</a></li>
                    <li class="nav-item mb-3"><a href="#" class="footer-detail-text"><i class="fa-solid fa-chevron-right"style="color: #ef4136;"></i>Send Feedback</a></li>
                </ul>
            </div>

            <div class=" footer-social d-flex justify-content-end mb-5">
                <div class="col mb-3">
                    <h5>Social Profiles</h5>
                    <ul class="nav flex-column d-flex mt-4">
                        <li class="nav-item mb-2"><a href="#" class="footer-detail-text">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/facebook.png" alt="">    
                        <span class="ps-3">Facebook</span></a></li>

                        <li class="nav-item mb-2"><a href="#" class="footer-detail-text">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/Twitter.png" alt="">    
                        <span class="ps-3">Twitter</span></a></li>

                        <li class="nav-item mb-2"><a href="#" class="footer-detail-text">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/yt.png" alt="">    
                        <span class="ps-3">Youtube</span></a></li>

                        <li class="nav-item mb-2"><a href="#" class="footer-detail-text">
                        <img src="http://localhost/galaxy/wp-content/uploads/2022/08/Linkedin.png" alt="">    
                        <span class="ps-3">Linkedin</span></a></li>

                    </ul>
                </div>
            </div>

        </footer>

        <div class="copyrighgt text-center  py-4">
            <p class="copyright-text">&copy;2022 Galaxy 4K TV | All Rights Reserved. Powered by <a href="https://kantipurtech.com"
                    class="text-decoration-none">Kantipur
                    Infotech</a></p>
        </div>
    </div>

</section>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assests\js\script.js"></script>

<script>
        $('#link').click(function() {
        var src = 'http://www.youtube.com/v/FSi2fJALDyQ&amp;autoplay=1';
        $('#myModal').modal('show');
        $('#myModal iframe').attr('src', src);
    });
    
    $('#myModal button').click(function() {
        $('#myModal iframe').removeAttr('src');
    });
    
    
    //Playlist Video Carousel
    $(document).ready(function() {
    $('.slide').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        lazyLoad: false,
        autoplayHoverPause: true,
        autoplay: 1, // time for slides changes
        smartSpeed: 1000, // duration of change of 1 slide
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('.minislide').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        dots: true,
        lazyLoad: false,
        autoplayHoverPause: true,
        autoplay: 1, // time for slides changes
        smartSpeed: 1000, // duration of change of 1 slide
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    })
    $(".owl-next").html('<i class="fa-solid fa-circle-chevron-right"></i>');
    $(".owl-prev").html('<i class="fa-solid fa-circle-chevron-left"></i>');
    });
</script>

</body>

</html>