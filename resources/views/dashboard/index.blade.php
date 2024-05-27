<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- 
    - primary meta tag
  -->
  <title>Trang chủ</title>

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
            <button class="purchase-btn">Thanh toán</button></a
          >
      
        
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

      <div class="logo" href="./index.html">
        <img src="./images/logo.png" alt="logo">
      </div>

      <div class="header-action">

        <button class="header-action-btn" aria-label="user">
          <a href="./log.html">
            <i class="fa-regular fa-user"></i>
          </a>
        </button>

        <div class="header-action-btn bag-main" >
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
        <a  class="contact-link">Hotline: 094.432.8989</a>
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

      <!-- 
        - #HERO
      -->

      <section class="section hero"  >
        <div class="banner owl-carousel owl-theme">
          <div class="item"><img src="./images/banner-home.jpg" alt="banner"></div>
          <div class="item"><img src="./images/banner-home2.jpg" alt="banner"></div>
          <div class="item"><img src="./images/banner-home3.png" alt="banner"></div>
      </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <h2 class="section-title">Bi Luxury</h2>

          <p class="section-text">
            Biluxury vẫn đang trên đà đạt được mục tiêu 300 showroom đến năm 2021. Với số lượng cửa hàng lớn nhất cả nước và hình ảnh thương hiệu quen thuộc với giới trẻ, nhãn hàng kỳ vọng trở thành một trong những cái tên thống lĩnh mảng thời trang nam trong nước. Từ nền tảng đó, Biluxury hứa hẹn sẽ là một trong số rất ít thương hiệu thời trang Việt từng bước tiến ra thế giới.          </p>

          <div class="about-card">
            <figure class="card-banner img-holder" style="--width: 1170; --height: 450;">
              <video width="1170" height="450" autoplay muted controls loop>
                <source src="./images/video/BILUXURY X ƯNG HOÀNG PHÚC - ĐẠI SỨ THƯƠNG HIỆU BILUXURY 2021.mp4" type="video/mp4">
              </video>
            </figure>

  
          </div>

        </div>
      </section>





      <!-- 
        - #PRODUCTS
      -->

           <!-- Listing product -->
           <div class="listing-product">
            <div class="title-product-1">
              <h1>Our Favorites</h1>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 btn-list">
                  <button class="btn-listing active">NEW ITEM</button>
                  <button class="btn-listing">SALE 70%</button>
                </div>
              </div>
    
              <div class="tab-content tab-1 active">
                <div class="row row-js-hot">
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="content">
                     <div class="box-a">
                      <img
                      src="https://img.mayflower.vn/2024/02/750k-shimmer-kemdau-thuy-chau-1-247x296.jpg"
                      alt="ảnh 2"
                    />
                    <div class="content2">
                      <div class="name-price">
                        <div class="name">Nhẹ nhàng</div>
                        <div class="price">350.000đ</div>
                      </div>
                      <button class="cart">
                        <i class="fa-solid fa-cart-plus"></i> Mua ngay
                      </button>
                    </div>
                     </div>
                    </div>
                  </div>
                  <!-- <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div> -->
                </div>
              </div>
    
              <div class="tab-content tab-2">
                <div class="row row-js-new">
                  <!-- <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="content"></div>
              </div> -->
                </div>
              </div>
            </div>
          </div>
          <section class="section hero"  >
          <div class="banner">
            <img src="./images/banner-home.jpg" alt="banner">
          </div>
          </section>

          @foreach ( $category as $categories)
            <div class="title-product">
              <h3>{{ $category->name }}</h3>
            </div>
          @endforeach
          <!-- product 1 -->
          <div class="title-product">
            <h3>ĐỒ CÔNG SỞ</h3>
          </div>
          <div class="product-sp">
            <div class="container">
              <div class="row row-js-ht">
                <!-- <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div> -->
              </div>
            </div>
          </div>
          <!-- product 2 -->
          <div class="title-product">
            <h3>ĐỒ THỂ THAO</h3>
          </div>
          <div class="product-sp">
            <div class="container">
              <div class="row row-js-hs">
                <!-- <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                          <div class="content"></div>
                        </div>
                      </div> -->
              </div>
            </div>
          </div>
          <!-- product 3-->
          <div class="title-product">
            <h3>ĐỒ HÈ</h3>
          </div>
          <div class="product-sp">
            <div class="container">
              <div class="row row-js-hsn">
                <!-- <div class="col-12 col-sm-6 col-md-3">
                            <div class="content"></div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="content"></div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="content"></div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="content"></div>
                          </div> -->
              </div>
            </div>
          </div>
          <section class="section hero"  >
          <div class="banner">
            <img src="./images/banner-home1.jpg" alt="banner">
          </div>
          </section>

      
          <!-- product 4-->
          <div class="title-product">
            <h3>THẮT LƯNG</h3>
          </div>
          <div class="product-sp">
            <div class="container">
              <div class="row row-js-hb">
                <!-- <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"> -->
              </div>
            </div>
          </div>
          <!-- product 5-->
          <div class="title-product">
            <h3>VÍ DA</h3>
          </div>
          <div class="product-sp">
            <div class="container">
              <div class="row row-js-hl">
                <!-- <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                              <div class="content"> -->
              </div>
            </div>
          </div>
        </div>
        <!-- thêm sản phẩm sau khi reset trang tại đây -->
        <div class="product-sp-menu">
          <div class="container">
            <div class="row row-js-menu">
              <!-- <div class="col-12 col-sm-6 col-md-3">
          <div class="content"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="content"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="content"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="content"> -->
            </div>
          </div>
        </div>


          <!-- <ul class="grid-list product-list" data-filter="all">

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./images/product-1.jpg" width="300" height="300" loading="lazy"
                    alt="Animi Dolor Pariatur" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <i class="fa-solid fa-cart-plus"></i>
                      </button>
                    </li>
                  </ul>

                  <ul class="badge-list">

                    <li>
                      <div class="badge orange">Sale</div>
                    </li>

                    <li>
                      <div class="badge cyan">-10%</div>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Animi Dolor Pariatur</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">$19.00</del>

                    <data class="price" value="10">$10.00</data>
                  </div>
                </div>

              </div>
            </li>
           
            </li>

          
          </ul> -->

        </div>
      </section>

       
    <!-- section 2 -->
    <section class="grid">
      
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 line-right">
            <div class="collection">
            </div>
          </div>

          <div class="col-md-12 col-lg-6 collection-right">
            <div class="row pl">
              <div class="col-12 line-bottom">
                <div class="right-1 position-relative">
                  <div class="collection-right-info">
                    <div class="collection-title">
                      <h2>BILUXURY</h2>
                    </div>
                    <p class="body2 mb-1">THAY ĐỔI ĐỂ THÀNH CÔNG</p>
                    <p class="body2 mb-4">TỦ ĐỒ CHO PHÁI MẠNH</p>
                    <button href="#" class="btn-flat"
                      >Sản phẩm mới</button>
                    
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="right-2 position-relative">
                                    <div class="collection-right-info">
                    <div class="collection-title">
                      <h2>𝐀𝐂𝐓𝐈𝐕𝐄-𝐒𝐓𝐑𝐄𝐓𝐂𝐇 𝐓𝐑𝐀𝐂𝐊𝐒𝐔𝐈𝐓</h2>
                    </div>
                    <p class="body2 mb-1">Xuống phố bảnh bao.</p>
                    <p class="body2 mb-4">Mang đến sự thoải mái và phong cách.</p>
                    <button href="#" class="btn-flat"
                      >Khám phá thêm</button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section 2 -->





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Khám phá</h2>

            <a href="#" class="btn-link">
              Xem tất cả
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./images/KB1.jpg" width="374" height="243" loading="lazy"
                    alt="Unique products that will impress your home in 2022." class="img-cover">

                    <a href="./blog.html" class="card-btn">
                      Đọc thêm
                    </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Tuần lễ Môi trường thế
                      giới - Rộn ràng quà tặng từ thiên nhiên.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                  
                      <time class="card-meta-text" datetime="2022-09-27">ĐĂNG LÚC: <strong>27-7-2022</strong></time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./images/KB2.jpg" width="374" height="243" loading="lazy"
                    alt="Navy Blue & White Striped Area Rugs" class="img-cover">

                    <a href="./blog.html" class="card-btn">
                      Đọc thêm
                    </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">MỪNG SINH NHẬT
                      BILUXURY 8 TUỔI - SALE UPTO 50% CÙNG QUÀ TẶNG KHỦNG</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-25">ĐĂNG LÚC: <strong>19-8-2023</strong></time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./images/KB3.jpg" width="374" height="243" loading="lazy"
                    alt="Woodex White Coated Staircase Floating" class="img-cover">

                  <a href="#" class="card-btn">
                    Đọc thêm
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Tuần lễ Môi trường thế
                      giới - Rộn ràng quà tặng từ thiên nhiên</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-18">ĐĂNG LÚC: <strong>10-7-2022</strong></time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Kết nối với chúng tôi</h2>

              <p class="section-text">
                Đăng ký để được giảm 50%
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </form>

          </div>

        </div>
      </section>

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





  <!-- 
    - #BACK TO TOP
  -->

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