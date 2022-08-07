<?php 
// Template Name: Contact
?>

<?php get_header(); ?>


<!-- hero section -->
<div class="card text-bg-dark inner-hero-section border-0">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">Contact</p>
    <p class="inner-main-text">Communicate with us</p>
  </div>
</div>




<div class="container my-5">
    <div class="row py-5">
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="office-name">Galaxy 4K Television</h2>
            <p class="office-type">Head Office</p>
            <div class=" contact-details">
              
                <div class="contact-item contact-location">
                <img src="http://localhost/galaxy/wp-content/uploads/2022/08/pin.png" alt="">
                <p class="ps-4 pt-3 contact-detail-text">Kathmandu Metropolitan City -03 <br> Baluwatar, Kathmandu</p>
                </div>

                <div class="contact-item contact-location">
                <img src="http://localhost/galaxy/wp-content/uploads/2022/08/phone.png" alt="">
                <p class="ps-4 pt-3 contact-detail-text">+977-15970177</p>
                </div>

                <div class="contact-item contact-location">
                <img src="http://localhost/galaxy/wp-content/uploads/2022/08/mail.png" alt="">
                <p class="ps-4 pt-3 contact-detail-text">info@g4ktv.com</p>
                </div>
               
            </div>
        </div>
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Message</label>
                    <textarea type="textarea" class="form-control form-message" id="exampleInputPassword1"></textarea>
                </div>
                <button type="submit" class="btn form-submit-button mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>