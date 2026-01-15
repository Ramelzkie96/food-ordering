<nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="<?= $base_url ?>/index.php">
                <img src="<?= $base_url ?>/images/logo.png" alt="FoodPark" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= $base_url ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>/about.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>/menu.php">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>/chefs.php">chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="<?= $base_url ?>/menu_details.php">menu details</a></li>
                            <li><a href="<?= $base_url ?>/blog_details.php">blog details</a></li>
                            <li><a href="<?= $base_url ?>/cart_view.php">cart view</a></li>
                            <li><a href="<?= $base_url ?>/check_out.php">checkout</a></li>
                            <li><a href="<?= $base_url ?>/payment.php">payment</a></li>
                            <li><a href="<?= $base_url ?>/testimonial.php">testimonial</a></li>
                            <li><a href="<?= $base_url ?>/search_menu.php">search result</a></li>
                            <li><a href="<?= $base_url ?>/404.php">404/Error</a></li>
                            <li><a href="<?= $base_url ?>/faq.php">FAQs</a></li>
                            <li><a href="<?= $base_url ?>/sign_in.php">sign in</a></li>
                            <li><a href="<?= $base_url ?>/sign_up.php">sign up</a></li>
                            <li><a href="<?= $base_url ?>/forgot_password.php">forgot password</a></li>
                            <li><a href="<?= $base_url ?>/privacy_policy.php">privacy policy</a></li>
                            <li><a href="<?= $base_url ?>/terms_condition.php">terms and condition</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact</a>
                    </li>
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    <li>
                        <a href="#" class="menu_search"><i class="far fa-search"></i></a>
                        <div class="fp__search_form">
                            <form>
                                <span class="close_search"><i class="far fa-times"></i></span>
                                <input type="text" placeholder="Search . . .">
                                <button type="submit">search</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a class="cart_icon"><i class="fas fa-shopping-basket"></i> <span>5</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>/dashboard.php"><i class="fas fa-user"></i></a>
                    </li>
                    <li>
                        <a class="common_btn" href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>