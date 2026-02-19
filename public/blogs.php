<?php
$title = 'Blogs';
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
                    <h1>Our Latest Food Blogs</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blogs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        BLOG PAGE START
    ==============================-->
    <section class="fp__blog_page fp__blog2 mt_120 xs_mt_65 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_2.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_3.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_4.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_5.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_6.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_7.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_8.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
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
    <!--=============================
        BLOG PAGE END
    ==============================-->


<?php
require './layout/footer.php';
?>