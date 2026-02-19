<?php
$title = 'Search Menu';
require './layout/header.php';
require './layout/topbar.php';
require './layout/navbar.php';
?>

    <div class="fp__menu_cart_area">
        <div class="fp__menu_cart_boody">
            <div class="fp__menu_cart_header">
                <h5>total item (05)</h5>
                <span class="close_cart"><i class="fal fa-times"></i></span>
            </div>
            <ul>
                <li>
                    <div class="menu_cart_img">
                        <img src="images/menu8.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_cart_text">
                        <a class="title" href="#">Hyderabadi Biryani </a>
                        <p class="size">small</p>
                        <span class="extra">coca-cola</span>
                        <span class="extra">7up</span>
                        <p class="price">$99.00 <del>$110.00</del></p>
                    </div>
                    <span class="del_icon"><i class="fal fa-times"></i></span>
                </li>
                <li>
                    <div class="menu_cart_img">
                        <img src="images/menu4.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_cart_text">
                        <a class="title" href="#">Chicken Masalas</a>
                        <p class="size">medium</p>
                        <span class="extra">7up</span>
                        <p class="price">$70.00</p>
                    </div>
                    <span class="del_icon"><i class="fal fa-times"></i></span>
                </li>
                <li>
                    <div class="menu_cart_img">
                        <img src="images/menu5.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_cart_text">
                        <a class="title" href="#">Competently Supply Customized Initiatives</a>
                        <p class="size">large</p>
                        <span class="extra">coca-cola</span>
                        <span class="extra">7up</span>
                        <p class="price">$120.00 <del>$150.00</del></p>
                    </div>
                    <span class="del_icon"><i class="fal fa-times"></i></span>
                </li>
                <li>
                    <div class="menu_cart_img">
                        <img src="images/menu6.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_cart_text">
                        <a class="title" href="#">Hyderabadi Biryani</a>
                        <p class="size">small</p>
                        <span class="extra">7up</span>
                        <p class="price">$59.00</p>
                    </div>
                    <span class="del_icon"><i class="fal fa-times"></i></span>
                </li>
                <li>
                    <div class="menu_cart_img">
                        <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_cart_text">
                        <a class="title" href="#">Competently Supply</a>
                        <p class="size">medium</p>
                        <span class="extra">coca-cola</span>
                        <span class="extra">7up</span>
                        <p class="price">$99.00 <del>$110.00</del></p>
                    </div>
                    <span class="del_icon"><i class="fal fa-times"></i></span>
                </li>
            </ul>
            <p class="subtotal">sub total <span>$1220.00</span></p>
            <a class="cart_view" href="cart_view.html"> view cart</a>
            <a class="checkout" href="check_out.html">checkout</a>
        </div>
    </div>

    <div class="fp__reservation">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Book a Table</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="fp__reservation_form">
                            <input class="reservation_input" type="text" placeholder="Name">
                            <input class="reservation_input" type="text" placeholder="Phone">
                            <input class="reservation_input" type="date">
                            <select class="reservation_input" id="select_js">
                                <option value="">select time</option>
                                <option value="">08.00 am to 09.00 am</option>
                                <option value="">10.00 am to 11.00 am</option>
                                <option value="">12.00 pm to 01.00 pm</option>
                                <option value="">02.00 pm to 03.00 pm</option>
                                <option value="">04.00 pm to 05.00 pm</option>
                            </select>
                            <select class="reservation_input" id="select_js2">
                                <option value="">select person</option>
                                <option value="">1 person</option>
                                <option value="">2 person</option>
                                <option value="">3 person</option>
                                <option value="">4 person</option>
                                <option value="">5 person</option>
                            </select>
                            <button type="submit">book table</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>search result</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">search result</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        SEARCH MENU START
    ==============================-->
    <section class="fp__search_menu mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <form class="fp__search_menu_form">
                <div class="row">
                    <div class="col-xl-6 col-md-5">
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <select id="select_js3">
                            <option value="">select country</option>
                            <option value="">bangladesh</option>
                            <option value="">nepal</option>
                            <option value="">japan</option>
                            <option value="">korea</option>
                            <option value="">thailand</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <button type="submit" class="common_btn">search</button>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">Biryani</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>10</span>
                            </p>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <h5 class="price">$70.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>145</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">grill</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>54</span>
                            </p>
                            <a class="title" href="menu_details.html">daria shevtsova</a>
                            <h5 class="price">$99.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>74</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>120</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">Biryani</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>514</span>
                            </p>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <h5 class="price">$70.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">grill</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>25</span>
                            </p>
                            <a class="title" href="menu_details.html">daria shevtsova</a>
                            <h5 class="price">$99.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>324</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fp__pagination mt_35">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="fp__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="fp__cart_popup_img">
                            <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="fp__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        SEARCH MENU END
    ==============================-->
<?php
require './layout/footer.php';
?>