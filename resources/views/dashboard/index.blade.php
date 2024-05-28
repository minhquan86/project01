@extends('layouts.app')

@section('title')
Trang chủ
@stop

@push('css')
<link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css'>
<link href="{{ asset('css/styles.css')}}" rel='stylesheet' type='text/css'>
@endpush

@section('contents')
<!-- 
        - #HERO
      -->

<section class="section hero">
  <div class="banner owl-carousel owl-theme">
    <div class="item"><img src="./images/banner-home.jpg" alt="banner"></div>
    <div class="item"><img src="./images/banner-home2.jpg" alt="banner"></div>
    <div class="item"><img src="./images/banner-home3.png" alt="banner"></div>
  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="about" aria-label="about">
  <div class="container">

    <h2 class="section-title">Bi Luxury</h2>

    <p class="section-text">
      Biluxury vẫn đang trên đà đạt được mục tiêu 300 showroom đến năm 2021. Với số lượng cửa hàng lớn nhất cả nước và hình ảnh thương hiệu quen thuộc với giới trẻ, nhãn hàng kỳ vọng trở thành một trong những cái tên thống lĩnh mảng thời trang nam trong nước. Từ nền tảng đó, Biluxury hứa hẹn sẽ là một trong số rất ít thương hiệu thời trang Việt từng bước tiến ra thế giới. </p>

    <div class="about-card">
      <figure class="card-banner img-holder" style="--width: 1170; --height: 450;">
        <video width="1170" height="450" autoplay muted controls loop>
          <source src="./images/video/BILUXURY X ƯNG HOÀNG PHÚC - ĐẠI SỨ THƯƠNG HIỆU BILUXURY 2021.mp4" type="video/mp4">
        </video>
      </figure>


    </div>

  </div>
</section>

<!-- #PRODUCTS -->

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
              <img src="https://img.mayflower.vn/2024/02/750k-shimmer-kemdau-thuy-chau-1-247x296.jpg" alt="ảnh 2" />
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
<section class="section hero">
  <div class="banner">
    <img src="./images/banner-home.jpg" alt="banner">
  </div>
</section>

@foreach ( $categories as $category)
<div class="title-product">
  <h3>{{ $category->name }}</h3>
</div>
<div class="container">
  <div class="tab-content tab-1 active">
    <div class="row row-js-new">
      @foreach ( $category->products as $product)
      <div class="col-12 col-sm-6 col-md-3">
        <div class="content">
          <a href="#">
            <img class="image" src={{$product->image}} alt={{$product->name}}>
          </a>
          <div class="content2">
            <div class="name-price">
              <div class="name">{{$product->name}}</div>
              <div class="price">{{$product->price}}</div>
            </div>
            <button id="product_id_" + {{$product->id}} class="cart"><i class="fa-solid fa-cart-plus"></i> Mua ngay</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endforeach
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
                <button href="#" class="btn-flat">Sản phẩm mới</button>

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
                <button href="#" class="btn-flat">Khám phá thêm</button>
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
            <img src="./images/KB1.jpg" width="374" height="243" loading="lazy" alt="Unique products that will impress your home in 2022." class="img-cover">

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
            <img src="./images/KB2.jpg" width="374" height="243" loading="lazy" alt="Navy Blue & White Striped Area Rugs" class="img-cover">

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
            <img src="./images/KB3.jpg" width="374" height="243" loading="lazy" alt="Woodex White Coated Staircase Floating" class="img-cover">

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
@stop