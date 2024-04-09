<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/index-Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/index.css" />
    <!-- Scripts -->
    <script src="./js/index.js"></script>
  </head>
  <body>
    <?php
      require_once "db_module.php";
      include "header.php"
    ?>
    <!--  Slider section -->
    <section id="slider">  
         <!-- aspect-ratio-169 -->
      <div class="hero-slider">
          <!-- Slide 1 -->
          <div class="hero-slide--1">
            <a href="./danhmuc.html"><img src="./img/index-slider1.png" alt=""/></a>
          </div>
          <!-- Slide 2 -->
          <div class="hero-slide--2">
            <a href="./danhmuc.html"><img src="./img/index-Slider2.png" alt=""/></a>
          </div>
          <!-- Slide 3 -->
          <div class="hero-slide--3">
            <a href="./danhmuc.html"><img src="./img/index-Slider3.png" alt="" onload="loadImage()" /></a>
          </div>
        </div>
      </div>
      <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </section>
    <!-- marquee -->
    <marquee behavior="scroll" direction="left" class="mar">
      <img src="./img/index-marquee-light.png" alt="marquee">
    </marquee>
    <div class="main">
      <!-- List products sales-->
    <section id="product-sale">
      <div class="container">
        <h2>Ưu đãi tháng 4</h2>
        <div class="prod-list__grid">
          <!-- Dòng 1 -->
          <!-- SP 1 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/3H0-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> SALES!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>
            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Nhẫn NDINO 3H0</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      1.400.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      2.000.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 2 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/8D1-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> SALES!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Nhẫn NDINO 8D1</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      1.470.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      2.100.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 3 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/5N3-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> SALES!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>


            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Nhẫn NDINO 5N3</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.415.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.450.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 4 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/2N5-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> SALES!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>
            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Nhẫn NDINO 2N5</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      3.150.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      4.500.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- Button xem thêm -->
        <a href="./danhmuc.html" class="btn home-product">Xem thêm</a>
      </div>
    </section>
    <div class="line"></div>
    <!-- Collection -->
    <section id="collection-home">
      <div class="collection-infor">
        <h2 class="collection-title">Bộ sưu tập nhẫn cầu hôn</h2>
        <p class="collection-desc">
          Đánh thức trái tim với những viên kim cương rực rỡ, biểu tượng cho tình yêu bất diệt
        </p>
      </div>
      <div class="img-collection">
        <div class="banner-left">
          <img src="./img/index-banner-1.png" alt="">
        </div>
        <div class="banner-right">
          <img src="./img/index-banner-2.png" alt="">
          <img src="./img/index-banner-3.png" alt="">
        </div>
      </div>
      <!-- Button Khám phá bộ sưu tập -->
      <a href="./danhmuc.html" class="btn home-col">Khám phá bộ sưu tập</a>
    </section>
    <div class="line"></div>
    <!-- List products best-seller-->
    <section id="product-sale">
      <div class="container">
        <h2 class="best-seller">Sản phẩm bán chạy</h2>
        <div class="prod-list__grid">
          <!-- Dòng 1 -->
          <!-- SP 1 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/AND 01-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>
            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Dây chuyền LUXEMAND 01</a>
                  </div>
                  <div class="prod-list__item__info--masp">Dây chuyền</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      1.533.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      2.190.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 2 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/BCD 666-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Bông tai DTBCD 666</a>
                  </div>
                  <div class="prod-list__item__info--masp">Bông tai</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      3.493.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      4.990.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 3 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/TP 134-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>


            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Vòng tay LBTP 134</a>
                  </div>
                  <div class="prod-list__item__info--masp">Vòng tay</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      6.300.000 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      9.000.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 4 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img
                  class="prod-list__item__img1"
                  loading="lazy"
                  alt=""
                  src="./img/BCD 789-1.webp"
                />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/index-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/index-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>
            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="./sanpham.html">Bông tai DTBCD 789</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      4.899.300 VNĐ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      6.999.000 VNĐ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img
                      class="info--star-icon"
                      loading="lazy"
                      alt=""
                      src="./icon/index-star.svg"
                    />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- Button xem thêm -->
        <a href="./danhmuc.html" class="btn home-product">Xem thêm</a>
      </div>
    </section>
    <div class="line"></div>
    <!-- Testimonials -->
    <section id="home-reviews">
      <div class="review-main">
        <h2 class="review-title active">
          <span class="review-title-1">Khách Hàng</span>
          <span class="review-title-2">Đánh Giá</span>
        </h2>
        <p class="review-desc">
          KHÁCH HÀNG CHÚNG TÔI NÓI GÌ
        </p>
        <div class="review-container">
          <!-- Review 1 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/index-avatar-1.jpg" alt="" class="review-avt">
              <img src="./icon/index-review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Mình rất hài lòng với sản phẩm nhẫn bạc đính đá thương hiệu Luxe. Nhẫn được làm từ chất liệu bạc cao cấp, sáng bóng, không bị xỉn màu. Đá đính trên nhẫn có màu sắc tươi tắn, lấp lánh, tạo nên vẻ đẹp tinh tế và sang trọng."
              </p>
            </div>
          </div>
          <!-- Review 2 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/index-avatar-2.jpg" alt="" class="review-avt">
              <img src="./icon/index-review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Tôi đã mua đôi hoa tai kim cương từ Luxe làm quà tặng cho vợ và cô ấy rất thích. Thiết kế Luxe tinh tế và thanh lịch, chất lượng kim cương cũng rất tốt, sáng bóng và lấp lánh. Đây là món quà hoàn hảo cho những dịp đặc biệt."
              </p>
            </div>
          </div>
          <!-- Review 3 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/index-avatar-3.jpg" alt="" class="review-avt" onload="loadReview()">
              <img src="./icon/index-review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Chất liệu cao cấp và chế tác tinh xảo từ Luxe khiến tôi cảm thấy vô cùng sang trọng và đẳng cấp. Dịch vụ khách hàng của Luxe cũng rất chuyên nghiệp và chu đáo. Tôi thực sự hài lòng với sản phẩm này và highly recommend cho mọi người!"
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- 3 dots -->
      <div class="dot-container-review">
        <div class="dot-review active"></div>
        <div class="dot-review"></div>
        <div class="dot-review"></div>
      </div>
    </section>
    <!-- Newsletter -->
    <section id="newsletter">
      <div class="container">
        <div class="news">
          <p class="news-content">Đăng ký bản tin của LUXE để cập nhật thông tin mới nhất về chương trình giảm giá và sản phẩm!</p>
          <form class="news-register">
            <input type="text" name="dangKy" id="dangKy" placeholder="Nhập Email của bạn" class="text-reg">
            <button class="btn register">
              Đăng ký
            </button>
          </form>
        </div>
      </div>
    </section>
    </div>
    <!-- Footer -->
    <footer class="footer">
      <div class="footer-row">
        <div class="container">
          <div class="footer-column">
            <!-- Logo -->
            <a href="./" class="logo-foot">
              <img src="./icon/index-Logo.svg" alt="Luxe" />
              <h1 class="logo-title">Luxe</h1>
            </a>
            <!-- Download app -->
            <div class="download-container">
              <p class="download-title">
                Tải ngay Luxe app
              </p>
              <div class="download-method">
                <a href="https://play.google.com/store/apps" class="ch-store">
                <img src="./icon/index-ch-play.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/index-app-store.svg" alt="" />
              </a>
              </div>
            </div>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Danh mục</h3>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Trang chủ
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Sản phẩm
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link"> Về chúng tôi </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Hỗ trợ
                    </a>
                </li>
                <li class="footer__item">
                  <a href="#!" class="footer__link">
                    Liên hệ
                  </a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Thông tin liên hệ</h3>
            <ul class="footer__list">
                <li class="footer__item">
                  279 Nguyễn Tri Phương, Phường 5, Quận 10, TP.HCM
                </li>
                <li class="footer__item">
                  (+84) 046 990 809
                </li>
                <li class="footer__item">
                  info@example.com
                </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Theo dõi</h3>
            <div class="footer__social">
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/index-facebook.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/index-insta.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/index-twitter.svg" alt="">
                </a>
            </div>
          </div>
        </div>
    </div>


    <div class="footer-copyright">
        <div class="container">
          <div class="payment-method">
            <img src="./icon/footer-paypal.svg" alt="">
            <img src="./icon/footer-visa.svg" alt="">
            <img src="./icon/footer-master-card.svg" alt="">
          </div>
          <p class="footer__copyright-text">
            Copyright © 2023 UIHUT All Rights Reserved
          </p>
        </div>
    </div>
    </footer>
  </body>
</html>


