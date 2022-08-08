<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?> <?php if(is_front_page()) {echo "|" ; bloginfo('description');} ?>  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assests\css\style.css ?>"> -->
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- optional for gadget of techkagaj -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awesome Cdn-->
    <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
            integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---Owl Carousel Cdn--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>

    <style>
        
        /* .nav{
            justify-content: space-between;
            margin-top: 1rem;
        }

        ul li a{
            text-decoration: none;
        }
        body{
            background-color: #d9d9d9;
        }

        .team::before { 
            content: ".";
            color: red;
            font-size: 60px;
            font-weight: bold;
        }

        .detail-program::before { 
            content: ".";
            color: red;
            font-size: 60px;
            font-weight: bold;
        }

        .host-program::before { 
            content: ".";
            color: red;
            font-size: 60px;
            font-weight: bold;
        }

        .current-menu-item a{
            color: red;
            border-bottom: 1px solid red;
        }

        a{
            text-decoration: none;
        }

        .view-details::after { 
            content: ">>";
            color: red;
            font-size: 14px;
            font-weight: bold;
        }


        .overlay{
            height: 100%;
            width: 100%;
            background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 2%, rgba(0,0,0,0) 50%);
            position: absolute;
            top: 0;
            left: 0;
        }

        /* herp */

       /* .hero-image {
            background-image: linear-gradient(180deg, rgba(27, 32, 43, 0.3), #1B202B), url("https://www.nepalitelecom.com/wp-content/uploads/2021/03/Galaxy-TV-4K-Nepal.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        } */




        @import url('https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');

        body {
            font-family: poppins;
            background: #d9d9d9;
        }

        .dark-background{
            background: #1B202B;
        }
        li a {
            font-family: poppins;
            color: #ffffff;
            text-decoration: none;
        }

        .nav-link,
        span {
            color: rgba(255,255,255,0.8);
            font-weight:, 500;
            font-size: 16px;
            text-align: center;
            transition: 1s ease-in-out;
        }

        .nav-link:hover,
        span:hover{
            color: #ffffff;
            font-weight: 500;
            font-size: 16px;
            text-align: center;
        }

        i {
            margin-right: 10px;
            color: #ffffff;
        }

        .fa-bars {
            font-size: 50px;
        }

        @media (max-width: 768px) {
            .nav-fill {
                margin: auto;
            }

            .btn-nav {
                flex-direction: row;
                margin-left: 25% !important;
            }

            #navbarSupportedContent {
                padding-bottom: 20px;
            }
        }

.main-hero-img{
    height:90vh;
    object-fit: cover;
}


.hero-overlay-text{
    transform: translate(-50%,-20%);
}

.hero-main-text{
    font-size: 60px;
    font-weight: 600;

}
.hero-sub-text{
    font-size: 40px;
    font-weight: 400;

}
.main-hero-img-overlay{
    height: 100%;
      width: 100%;
      background: linear-gradient(180deg, rgba(27, 32, 43, 0.3) 0%, rgba(27, 32, 43, 1) 90%);
      position: absolute;
      top: 0;
      left: 0;

}
.inner-hero-section{
    height: 72vh;

}

.inner-hero-img{
    height: 100%;
    object-fit: cover;
}
.inner-overlay-text{
    left: 40%;
    top: 65%;
    transform: translate(-50%,-20%);
}

.inner-main-text{
    font-size: 50px;
    font-weight: 500;
    margin-top: -20px;

}
.inner-sub-text{
    font-size: 30px;
    font-weight: 400;
}
.inner-hero-img-overlay{
    height: 100%;
      width: 100%;
      background: linear-gradient(180deg, rgba(27, 32, 43, 0.3) 0%, rgba(27, 32, 43, 1) 90%);
      position: absolute;
      top: 0;
      left: 0;

}


.network{
    background: url(http://localhost/galaxy/wp-content/uploads/2022/08/bg.jpg), #D9D9D9;
    background-position: center center;
    background-size: cover;
}
.network-card{
    height:180px;
    width: 180px;
    border: 4px solid #e11e29;
    border-radius: 10px;
    background: rgb(245,245,245);
    box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.10);
    transition: 0.5s all ease-out;
}
.network-card:hover{
    background: rgb(255,255,255);
    box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.15);
}

.network-logo{
    height: 100px;
    width: 100px;
}

.dm-img-box{
    width: 316px;
    height: 450px;

}
.dm-image{
    height: 100%;
    object-fit: cover;  
    border-radius: 10px;
}
.dm-background-element{
    position: absolute;
    height: 219px;
    width: 227px;
    bottom: 8%;
    right: 0;
}
.fa-circle{
    font-size: 30px;
    color: #E11E29;
}

.overlay-small{
        height: 100%;
        width: 100%;
        background: rgba(0,0,0,0.5);
        position: absolute;
        border-radius: 6px;
    }

.single-program{
    border: none; 
    border-radius:6px;
    box-shadow: 0px 10px 30px rgba(27, 32, 43, 0.3)
}
.card-img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.program-text-content{
    position: absolute;
    top: 70%;
}
.program-card-title{
    font-size: 20px;
    font-weight: 600;
}
.program-category{
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}
.title{
    display: flex;
    align-items: center;
}
.title-icon {
    font-size: 18px;
    padding-right: 10px;
}


.accordion-header button{
    font-size: 19px;
    font-weight: 500;
}
.accordion-button{
    background: rgba(255,255,255,0.6)!important;
    color: #1B202B!important;
}
button.accordion-button::after{
    background-image: var(--bs-accordion-btn-icon)!important;
    color: #1B202B!important;
}
.accordion-body{
    background: rgba(217, 217, 217, 0.3);

}


.single-program-card,
.single-csr-card{
    box-shadow: 0px 4px 50px rgba(27, 32, 43, 0.2);
    border: none;
}
.single-program-image{
    height: 240px;
    object-fit: cover;
}
.single-program-title{
    font-size: 20px;
    font-weight: 600;
}

.fa-clock, .fa-tag{
    color: rgba(27, 32, 43,0.5);
}
.single-program-button,
.single-csr-button{
    background: #E11E29;
    color: #ffffff;
    border: 1px soilid #E11E29;
    transition: 0.2s all ease-in-out;
}
.form-submit-button{
    background: #E11E29;
    color: #ffffff;
    border: 1px soilid #E11E29;
    padding: 10px 28px;
    border-radius: 0px;
    transition: 0.2s all ease-in-out;
}
.single-program-button:hover,
.single-csr-button:hover,
.form-submit-button:hover{
    background: #E11E29;
    color: #ffffff;
    border: 1px soilid #E11E29;
    transform: scale(0.9);
}

.single-news-image{
    height: 240px;
    overflow: hidden;
}
.single-news-image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 6px 6px 0 0;
}
.news-read-more, .fa-angles-right, .fa-chevron-down{
    font-size: 14px;
    font-weight: 600;
    color: #E11E29;
    text-decoration: none;
}
.news-read-more:hover{
    color: #E11E29;
    text-decoration: none;
}
.single-news-title a,
.single-csr-title a{
    font-size: 18px;
    font-weight: 600;
    color: #1B202B;
    text-decoration: none;
}

.single-csr-image{
    height: 308px;
    overflow: hidden;
}
.single-csr-image img{
    height: 308px;
    width: 100%;
    object-fit: cover;
}

.team-image{
    height: 340px;
    width: 270px;
    border-radius: 10px;
    object-fit: cover;
}

.team-member-name{
    font-size: 22px;
    color: #1B202B;
    font-weight: 600;
}
.team-member-post{
    font-size: 16px;
    font-weight: 500;
    color: #1b202b;
}

.office-name{
    font-size: 30px;
    font-weight: 600;
    color: #1b202b;
}
.office-type{
    font-size: 20px;
    font-weight: 500;
    color: #1b202b;
    opacity: 80%;
}
.contact-item {
    display: flex;
    align-items: center;
    align-content: center;
    margin-bottom: 10px;
}

.contact-detail-text{
    font-size: 18px;
    font-weight: 500;
}
.form-label{
    font-size: 18px;
    font-weight: 500;
    color: #1b202b;
    opacity: 80%;
}
.form-control,
option{
    height: 60px;
    border-radius: 2px;
    color: #1b202b;
    font-size: 16px;
    font-weight: 400;
}
.form-message{
    height: 170px;
}
.form-control:focus{
    border: 0px !important;
    box-shadow: 0px 4px 50px rgba(27, 32, 43, 0.1);
}
.form-control:focus-visible{
    border: 0px !important;
    box-shadow: 0px 4px 50px rgba(27, 32, 43, 0.1);
}
.footer-logo{
    margin-top: -30px;
    transform: scale(0.9);
    transition: all 0.2s ease-in-out;
}
.footer-logo:hover{
    margin-top: -35px;
    transform: scale(1);
}
.footer-detail-text{
    font-size: 16px;
    font-weight: 400;
    color: rgba(255,255,255,0.8);
    text-decoration: none;
}
.footer-detail-text:hover{
    font-size: 16px;
    font-weight: 400;
    color: rgba(255,255,255,1);
    text-decoration: none;
}
.copyright-text{
    font-size: 14px;
    font-weight: 400;
    color: rgba(255,255,255,0.8);
}
.copyright-text a{
    font-size: 14px;
    font-weight: 400;
    color: rgba(255,255,255,0.8);
    text-decoration: none;
}


/* Light Color*/

.header-text-light{
    font-size: 40px;
    color: #ffffff;
    font-weight: 600;
}
.sub-heading-light{
    font-size: 22px;
    color: #ffffff;
    font-weight: 400;
}
.small-subheading-light{
    font-size: 20px;
    color: #ffffff;
    font-weight: 400;
}
.section-content-light{
    font-size:16px;
    color: #ffffff;
}
.section-smallcontent-light{
    font-size:14px;
    color: #ffffff;
}
.button-light{
    background: rgba(225, 30, 41, 0);
    border: 1px solid #ffffff;
    color: #ffffff;
    font-size: 16px;
    transition: 0.4s all ease-in-out;
}
.button-light:hover{
    background: rgba(225, 30, 41,1);
    border: 1px solid #E11E29;
    color: #ffffff;
    font-size: 16px;
}
.small-heading-light{
    color:#ffffff;
    font-size: 30px;
    font-weight: 500;
}

/* Dark Color*/

.header-text-dark{
    font-size: 40px;
    color: #1B202B;
    font-weight: 600;
}
.sub-heading-dark{
    font-size: 22px;
    color: #1B202B;
    font-weight: 400;
}
.section-content-dark{
    font-size:16px;
    color: #1B202B;
}
.button-dark{
    background: rgba(225, 30, 41, 0);
    border: 2px solid #E11E29;
    color: #1B202B;
    font-size: 16px;
    transition: 0.4s all ease-in-out;
}
.button-dark:hover{
    background: rgba(225, 30, 41,1);
    border: 2px solid #E11E29;
    color: #ffffff;
    font-size: 16px;
}
.small-heading-dark{
    color:#1B202B;
    font-size: 30px;
    font-weight: 500;
}
.host-name{
    font-size: 20px;
    font-weight: 600;
}
.host-post{
    font-size: 18px;
    font-weight: 400;
}



/* Testimonial Section CSS starts here */

.testi-hero{
 height: 58vh;
 width: 100%;
 position: relative;
}



.slide-row{
 display: flex;
 width: 4800px; 
 transition: all 0.5s ease-in-out;
}

.slide-col{
 width: 1200px;
 height: 400px;
 position: relative;
}

.user-img{
 position: absolute;
 top: 0;
 left: 5%;
 height: 100%;
}

.user-img img{
 width: 75%;
 height: 100%;
 border-radius: 10px;
 object-fit: cover;
}

.user-text{
 width: 720px;
 height: 350px;
 position: absolute;
 right: 0;
 top: 50%;
 transform: translateY(-50%);
 padding: 25px 45px;
 box-sizing: border-box;
}

.user-text p{
 font-size: 16px;
 font-weight: 500;
 color: rgba(27, 32, 43,0.8);
}

.user-text h3{
    font-size: 18px;
    font-weight: 600;
 margin: 35px 0 5px;

}
.user-text .testi-position{
    font-size: 16px;
    font-weight: 600;
}


.testimonial-container{
 width: 1200px;
 height: 400px;
 position: absolute;
 left: 50%;
 top: 50%;
 transform: translate(-50%, -50%);
}

.indicator{
 position: absolute;
 right: 0%;
 transform: translateX(-50%);
 bottom: 0%;
 z-index: 100;
}

.testi-btn{
 display: inline-block;
 height: 16px;
 width: 16px;
 margin: 5px;
 border: 3px solid rgba(225, 30, 41,0.4);
 border-radius: 50%;
 cursor: pointer;
 z-index: 100;
}
.testi-btn.active{
 display: inline-block;
 height: 16px;
 width: 16px;
 margin: 5px;
 border: 3px solid rgba(225, 30, 41,1);
 border-radius: 50%;
 cursor: pointer;
 z-index: 100;
}

.testimonial{
 width: 100%;
 height: 100%;
 overflow: hidden;
}


/* testimonials section css ends here */












    </style>
    </head>

    <body>


    <?php get_template_part('nav'); ?>