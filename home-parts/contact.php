<?php 
// Template Name: Contact
?>

<?php get_header(); ?>


<!-- hero section -->
<div class="card text-bg-dark inner-hero-section">
  <img src="http://localhost/galaxy/wp-content/uploads/2022/08/1.jpg" class="card-img inner-hero-img" alt="...">
  <div class="inner-hero-img-overlay"></div>
  <div class="card-img-overlay inner-overlay-text position-absolute  text-left">
    <p class="inner-sub-text">Contact</p>
    <p class="inner-main-text">Communicate with us</p>
  </div>
</div>




<div class="container my-5">
    <div class="row py-5">
        <div class="col-md-6">
            <h2>Galaxy 4K Television</h2>
            <p>Head Office, Baluwatar Kathmandu</p>
            <div class="contact-details">
                <p>Kathmandu Metropolitan City -03 <br> Baluwatar, Kathmandu</p>
                <p>+977-15970177</p>
                <p>info@g4ktv.com</p>
            </div>
        </div>
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Subject</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>