<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('css')
    @stack('js')


    <!-- 
    - primary meta tag
  -->
    <title>@yield('title')</title>

<body>
    <!-- giỏ hàng -->
    <div class="cart-modal-overlay">
        <div class="cart-modal">
            <div class="cart-wraper">
                <div class="cart-tittle">
                    <strong>Giỏ hàng</strong>
                </div>
                <!-- <div class="cart-count">0</div> -->
            </div>
            <i id="close-btn" class="fas fa-times"></i>


            <div class="product-rows"></div>

            <div class="total">

                <div class="cart-total-price">
                    <div class="cart-total">TỔNG TIỀN:</div>
                    <span class="total-price">0 VND</span>
                </div>
                <a href="./pay.html">
                    <button class="purchase-btn">Thanh toán</button></a>


            </div>
        </div>
    </div>
    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="topbar-header">
            <div class="topbar-content">
                <p>
                    <strong>DIỆN ĐỒ BẢNH BAO, CÙNG NÀNG VUI LỄ </strong>
                </p>
            </div>
        </div>
        <div class="container">

            <a class="logo" href={{ route('dashboard.index') }}>
                <img src="./images/logo.png" alt="logo">
            </a>

            <div class="header-action">

                <button class="header-action-btn" aria-label="user">
                    <a href="./log.html">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </button>

                <div class="header-action-btn bag-main">
                    <div class="bag"><i class="fa-solid fa-cart-shopping"></i></div>
                    <div class="bag-product">0</div>
                    <!-- <span class="btn-badge">0</span> -->
                </div>




                <div class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <i class="fa-solid fa-bars"></i>
                </div>

            </div>

        </div>
    </header>





    <!-- 
    - #SIDEBAR
  -->

    <div class="sidebar" data-navbar>

        <div class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <i class="fa-regular fa-circle-xmark"></i>
        </div>

        <div class="wrapper">

            <ul class="sidebar-list">

                <li>
                    <p class="sidebar-list-title">Language</p>
                </li>

                <li>
                    <a href="#" class="sidebar-link">English</a>
                </li>

                <li>
                    <a href="#" class="sidebar-link">French</a>
                </li>

                <li>
                    <a href="#" class="sidebar-link">Arabric</a>
                </li>

            </ul>

            <ul class="sidebar-list">

                <li>
                    <p class="sidebar-list-title">Currency</p>
                </li>

                <li>
                    <a href="#" class="sidebar-link">USD - US Dollar</a>
                </li>

                <li>
                    <a href="#" class="sidebar-link">Euro</a>
                </li>

                <li>
                    <a href="#" class="sidebar-link">Pound</a>
                </li>

            </ul>

        </div>

        <nav class="navbar">
            <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="./index.html" class="navbar-link" data-nav-link>Trang chủ</a>
                </li>

                <li class="navbar-item">
                    <a href="./cart.html" class="navbar-link" data-nav-link>Sản phẩm</a>
                </li>

                <li class="navbar-item">
                    <a href="./about-us.html" class="navbar-link" data-nav-link>Thương hiệu</a>
                </li>

                <li class="navbar-item">
                    <a href="./blog.html" class="navbar-link" data-nav-link>Blogs</a>
                </li>

            </ul>
        </nav>

        <ul class="contact-list">

            <li>
                <p class="contact-list-title">BI LUXURY</p>
            </li>

            <li class="contact-item">
                <address class="address">
                    Địa chỉ: 505 Nguyễn Trãi, Phường Thanh Xuân Nam, Quận Thanh Xuân, Thành phố Hà Nội, Việt Nam

                </address>
            </li>

            <li class="contact-item">
                <a href="mailto:support.center@woodex.co" class="contact-link">support.center@Biluxury.com</a>
            </li>

            <li class="contact-item">
                <a class="contact-link">Hotline: 094.432.8989</a>
            </li>

        </ul>

        <div class="social-wrapper">

            <p class="social-list-title">Mạng xã hội:</p>

            <ul class="social-list">

                <li>
                    <a href="https://www.facebook.com/biluxury.vn" class="social-link">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/channel/UCiul7pLaT4npA1H7TLMQ4Qg" class="social-link">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/biluxury.vn/" class="social-link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>


            </ul>

        </div>

    </div>

    <div class="overlay" data-overlay data-nav-toggler></div>





    <main>
        <article>
            @yield('contents')
        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <div class="footer-top section">

                <div class="footer-brand">

                    <div href="#" class="logo-1">BI LUXURY</div>

                    <ul>

                        <li class="footer-list-item">
                            <i class="fa-solid fa-location-dot"></i>

                            <address class="address">
                                Địa chỉ: Quận Thanh Xuân, Thành phố Hà Nội
                            </address>
                        </li>

                        <li class="footer-list-item">
                            <i class="fa-solid fa-phone"></i>

                            <a href="tel:+1234567890" class="footer-link">Hotline: 094.432.8989</a>
                        </li>

                        <li>
                            <ul class="social-list">

                                <li>
                                    <a href="https://www.facebook.com/biluxury.vn" class="social-link">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/channel/UCiul7pLaT4npA1H7TLMQ4Qg" class="social-link">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/biluxury.vn/" class="social-link">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>


                            </ul>

                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">CHÍNH SÁCH</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Chính sách thanh toán</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Hướng dẫn mua hàng</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Chính sách đổi sản phẩm</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Chính sách đổi sản phẩm</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">LIÊN KẾT</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Thời trang nam Biluxury</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Áo polo nam</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Áo sơ mi nam</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Áo vest nam</a>
                    </li>
                </ul>
                <div class="footer-list">
                    <p class="footer-list-title">Kết nối</p>
                    <form action="" class="footer-form">
                        <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

                        <button type="submit" class="footer-form-btn">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- - #BACK TO TOP-->
    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <i class="fa-solid fa-arrow-up"></i>
    </a>
    <!-- Import Jquery -->
    <!-- <script src="./lib/jquery-3.7.1.min.js"></script> -->

    <!-- Import OWL JS -->
    <!-- <script src="./lib/OwlCarousel/owl.carousel.min.js"></script> -->
    <!-- Import SETUP OWL JS -->
    <!-- <script src="./assets/js/setup-owl.js"></script> -->

    <!-- custom js link-->
    <!-- <script src="./assets/js/script.js" ></script> -->
</body>

</html>