<?php
$title = 'Payment';
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
                    <h1>payment</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PAYMENT PAGE START
    ==============================-->
    <section class="fp__payment_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="fp__payment_area">
                        <div class="row">
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_5.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_6.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-duration="1s">
                                <a class="fp__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt_25 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__cart_list_footer_button">
                        <h6>total cart</h6>
                        <p>subtotal: <span>$124.00</span></p>
                        <p>delivery: <span>$00.00</span></p>
                        <p>discount: <span>$10.00</span></p>
                        <p class="total"><span>total:</span> <span>$134.00</span></p>
                        <form>
                            <input type="text" placeholder="Coupon Code">
                            <button type="submit">apply</button>
                        </form>
                        <a class=" common_btn" href=" #">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fp__payment_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="fp__pay_modal_info">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora cum optio
                                cumque rerum dolor impedit exercitationem? Eveniet suscipit repellat, quae natus hic
                                assumenda.</p>
                            <ul>
                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                <li>Dolor sit amet consectetur adipisicing elit tempora cum </li>
                            </ul>
                            <form>
                                <input type="text" placeholder="Enteer Something">
                                <textarea rows="4" placeholder="Enter Something"></textarea>
                                <select id="select_js3">
                                    <option value="">select country</option>
                                    <option value="">bangladesh</option>
                                    <option value="">nepal</option>
                                    <option value="">japan</option>
                                    <option value="">korea</option>
                                    <option value="">thailand</option>
                                </select>
                                <div class="fp__payment_btn_area">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        PAYMENT PAGE END
    ==============================-->


 <?php
require './layout/footer.php';
?>