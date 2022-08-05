<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?> <?php if(is_front_page()) {echo "|" ; bloginfo('description');} ?>  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assests\css\style.css ?>">
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



    </style>
    </head>

    <body>


    <?php get_template_part('nav'); ?>