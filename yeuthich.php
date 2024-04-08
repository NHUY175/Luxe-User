<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/yeuthich.css" />
    <!-- Scripts -->
    <script src="./js/yeuthich.js"></script>
  </head>
  <body>
  <?php
    require_once "db_module.php";
  ?>
    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/yeuthich-logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul id="PC_nav">
              <li><a href="#!">TRANG CHỦ</a></li>
              <li><a href="#!">SẢN PHẨM</a></li>
              <li><a href="#!">VỀ CHÚNG TÔI</a></li>
              <li><a href="#!">HỖ TRỢ</a></li>
              <li><a href="#!">LIÊN HỆ</a></li>
            </ul>
          </nav>


          <!-- Action -->
          <div class="top-act">
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/yeuthich-search.svg" alt="" />
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/yeuthich-heart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/yeuthich-cart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/yeuthich-user.svg" alt="" />
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn mode" onclick="darkFunction()">
                <img src="./icon/yeuthich-mode.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Main -->
    <section class="favorites-list"> 
      <header class="favorites-header">
        <h1 class="favorites-title">Danh sách yêu thích</h1>
        <p class="favorites-count">0 sản phẩm trong danh sách yêu thích của bạn</p>
      </header>
      <div class="add-to-cart-container">
        <button class="add-to-cart-button" onclick="addToCart()">Thêm tất cả vào giỏ hàng</button> 
      </div>
    </section>

    <!-- Product -->
    <main class="product-list">
      <section class="product-grid">
        <article class="product-column">
          <div class="delete-icon">
            <img src="./icon/yeuthich-delete.svg" alt="Delete icon" />
            <span>Xóa</span>
          </div>
          <div class="product-card">
            <div class="product-image-wrapper">
              <figure class="product-image">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cef3639431bb38de9a1b69a05850f7b43811d66155b323c58eafb83c3b78c233?apiKey=7d95cecb2a0d4898b6712f9b139bd5f6&" alt="Product image" />
              </figure>
              <h3 class="product-name">Nhẫn Đá Cubic Zirconia cccccccccccccccccc</h3>
              <p class="product-DM">NLF 415</p>
              <div class="product-info">
                <span class="product-price">2,090,000 VNĐ</span>
                <div class="product-rating"> <span class="star-icon">★</span> 4.3</div>
              </div>
            </div>
            <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
          </div>
        </article>
        <article class="product-column">
          <div class="delete-icon">
            <img src="./icon/yeuthich-delete.svg" alt="Delete icon" />
            <span>Xóa</span>
          </div>
          <div class="product-card">
            <div class="product-image-wrapper">
              <figure class="product-image">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cef3639431bb38de9a1b69a05850f7b43811d66155b323c58eafb83c3b78c233?apiKey=7d95cecb2a0d4898b6712f9b139bd5f6&" alt="Product image" />
              </figure>
              <h3 class="product-name">Nhẫn Đá Cubic Zirconia cccccccccccccccccc</h3>
              <p class="product-DM">NLF 415</p>
              <div class="product-info">
                <span class="product-price">2,090,000 VNĐ</span>
                <div class="product-rating"> <span class="star-icon">★</span> 4.3</div>
              </div>
            </div>
            <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
          </div>
        </article>
        <article class="product-column">
          <div class="delete-icon">
            <img src="./icon/yeuthich-delete.svg" alt="Delete icon" />
            <span>Xóa</span>
          </div>
          <div class="product-card">
            <div class="product-image-wrapper">
              <figure class="product-image">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cef3639431bb38de9a1b69a05850f7b43811d66155b323c58eafb83c3b78c233?apiKey=7d95cecb2a0d4898b6712f9b139bd5f6&" alt="Product image" />
              </figure>
              <h3 class="product-name">Nhẫn Đá Cubic Zirconia cccccccccccccccccc</h3>
              <p class="product-DM">NLF 415</p>
              <div class="product-info">
                <span class="product-price">2,090,000 VNĐ</span>
                <div class="product-rating"> <span class="star-icon">★</span> 4.3</div>
              </div>
            </div>
            <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
          </div>
        </article>
        <article class="product-column">
          <div class="delete-icon">
            <img src="./icon/yeuthich-delete.svg" alt="Delete icon" />
            <span>Xóa</span>
          </div>
          <div class="product-card">
            <div class="product-image-wrapper">
              <figure class="product-image">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cef3639431bb38de9a1b69a05850f7b43811d66155b323c58eafb83c3b78c233?apiKey=7d95cecb2a0d4898b6712f9b139bd5f6&" alt="Product image" />
              </figure>
              <h3 class="product-name">Nhẫn Đá Cubic Zirconia cccccccccccccccccc</h3>
              <p class="product-DM">NLF 415</p>
              <div class="product-info">
                <span class="product-price">2,090,000 VNĐ</span>
                <div class="product-rating"> <span class="star-icon">★</span> 4.3</div>
              </div>
            </div>
            <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
          </div>
        </article>
      </section>
    </main>
    
    <!-- Action -->
    <div class="button-container">
      <button class="continue-shopping-btn">Tiếp tục mua hàng</button>
      <button class="view-more-btn">Xem thêm</button>
      <button class="clear-list-btn">Làm sạch danh sách</button>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-row">
        <div class="container">
          <div class="footer-column">
            <!-- Logo -->
            <a href="./" class="logo-foot">
              <img src="./icon/Logo.svg" alt="Luxe" />
              <h1 class="logo-title">Luxe</h1>
            </a>
            <!-- Download app -->
            <div class="download-container">
              <p class="download-title">
                Tải ngay Luxe app
              </p>
              <div class="download-method">
                <a href="https://play.google.com/store/apps" class="ch-store">
                <img src="./icon/ggplay.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/appstore.svg" alt="" />
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
                    <img src="./icon/facebook.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/insta.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/twitter.svg" alt="">
                </a>
            </div>
          </div>
        </div>
    </div>

    

    <div class="footer-copyright">
        <div class="container">
          <div class="payment-method">
            <img src="./icon/paypal.svg" alt="">
            <img src="./icon/visa.svg" alt="">
            <img src="./icon/master-card.svg" alt="">
          </div>
          <p class="footer__copyright-text">
            Copyright © 2023 UIHUT All Rights Reserved
          </p>
        </div>
    </div>
    </footer>
  </body>
</html>