
<!-- <div class="row">
    <div class="col-md-2">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                    ?>
    </div>
    <div class="col-md-8 nav-menus">
        <?php wp_nav_menu(
            array(
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav'
            )
            ); 
            ?>
    </div>
    <div class="col-md-2"></div>

</div> -->


<nav class="navbar dark-background navbar-expand-lg sticky-top">
        <div class="container-fluid mx-5">
            <ul class="navbar-nav">
                <li class="nav-item"> <a href="http://localhost/galaxy"><img src="http://localhost/galaxy/wp-content/uploads/2022/08/logo.png" height="70px" width="70px" alt=""></a></li>
            </ul>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="outline: 0px;">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 nav-fill  px-5" style="margin-left:auto; width: 40%;">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="http://localhost/galaxy/about/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/galaxy/programs/">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/galaxy/news/">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">CSR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav btn-nav" style="margin-left:auto;">
                    <button class="btn-danger btn-sm mx-2" style="border: none; outline:none; border-radius:0px;"><i
                            class="fa-solid fa-tv"></i><span class="ml-2">Live TV </span></button>
                    <button class="btn-danger btn-sm mx-2" style="border: none; outline:none; border-radius:0px;"><i
                            class="fa-solid fa-radio"></i><span class="ml-2">Live FM </span></button>
                </ul>
            </div>
        </div>
    </nav>