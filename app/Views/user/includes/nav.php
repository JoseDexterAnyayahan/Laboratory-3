<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="<?= base_url() ?>assets/img/logo.png"
                            alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>shop">Shop</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                        </div>
                        <?php
                        $session = session(); // Assuming you are using sessions to track user login status
                        if ($session->get('isLoggedIn')) {
                            // User is logged in, display "Logout" icon (power-off icon) with a red color
                            echo '<a class="text-danger" href="' . base_url('logout') . '" id="navbarDropdown3" role="button" 
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-power-off"></i></a>';
                        } else {
                            // User is not logged in, display "Login" icon (sign-in-alt icon) with a blue color
                            echo '<a class="text-primary" href="' . base_url('login') . '" id="navbarDropdown3" role="button" 
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i></a>';
                        }
                        ?>



                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>

</header>
<!-- Header part end-->