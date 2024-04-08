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
    <link rel="stylesheet" href="css/hotro.css" />
    <!-- Scripts -->
    <script src="./js/hotro.js"></script>
  </head>
  <body>
    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Mobile menu -->
          <button class="hamburger-menu" onclick="burgerFunction()">
            <img src="./icon/index-burger.svg" alt="" />
          </button>
          <script src="./js/hotro.js"></script>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul>
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
                <img src="./icon/search.svg" alt="" />
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/heart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/cart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/user.svg" alt="" />
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn mode" onclick="darkFunction()">
                <img src="./icon/mode.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Mobile Header -->
    <header class="mobile-header">
      <div class="menu-overlay" onclick="burgerFunction()"></div>
      <!-- Menu-content -->
      <div class="menu-drawer">
        <button class="navbar-close" onclick="burgerFunction()">
          <img src="./icon/arrow-left.svg" alt="" />
        </button>
        <hr>
        <nav class="navbar-mobile">
          <ul>
            <li><a href="#!">TRANG CHỦ</a></li>
            <li><a href="#!">SẢN PHẨM</a></li>
            <li><a href="#!">VỀ CHÚNG TÔI</a></li>
            <li><a href="#!">HỖ TRỢ</a></li>
            <li><a href="#!">LIÊN HỆ</a></li>
          </ul>
        </nav>
        <hr>
        <!-- Action -->
        <div class="top-act">
            <button class="top-act-btn">
              <img src="./icon/search.svg" alt="" />
            </button>
            <button class="top-act-btn">
              <img src="./icon/heart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/cart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/user.svg" alt="" />
            </button>
            <button class="top-act-btn mode" onclick="darkFunction()">
              <img src="./icon/mode.svg" alt="" />
            </button>
        </div>
      </div>
    </header>
    <!-- Slider Section -->
    <section class="faq-section">
        <h2 class="faq-title">Câu hỏi thường gặp</h2>
        <!-- Câu hỏi 1 -->
        <div class="faq-item">
            <div class="faq-question"> 
              <p>1. Làm cách nào để nhận được mã giảm giá từ LUXE?</p>
              <img src="./icon/hotro-add.svg" alt="" class="faq-icon"/>
            </div>
            <div class="faq-answer">
              <p>Để nhận được mã giảm giá từ Luxe, hãy thực hiện các bước sau:</p>
              <p><strong>1. Trở thành thành viên của Luxe:</strong> Điền thông tin của bạn tại mục "Đăng kí thành viên" ở cuối trang, sau đó nhấn nút "Đăng kí".</p>
              <p><strong>2. Chờ đợi thông báo từ chúng tôi:</strong> Mã giảm giá sẽ được đính kèm tại các sự kiện giảm giá tiếp theo và Luxe sẽ email thông báo đến bạn.</p>
            </div>
        </div>
        
        <!-- Câu hỏi 2 -->
        <div class="faq-item">
          <div class="faq-question"> 
            <p>2. Tôi có thể đưa ý tưởng thiết kế sản phẩm theo ý của mình hay không?</p>
            <img src="./icon/hotro-add.svg" alt="" class="faq-icon"/>
          </div>
          <div class="faq-answer">
            Bạn có thể đưa thiết kế theo ý tưởng thiết kế cho nhân viên của chúng tôi tại cửa hàng hoặc liên hệ qua phần liên hệ của cửa hàng!
          </div>
        </div>
        <!-- Câu hỏi 3 -->
        <div class="faq-item">
          <div class="faq-question"> 
            <p>3. Phí vận chuyển được tính như thế nào?</p>
            <img src="./icon/hotro-add.svg" alt="" class="faq-icon"/>
          </div>
          <div class="faq-answer">
            Phí vận chuyển sẽ được tính tùy theo đơn hàng, vị trí và mã giảm giá của bạn nhé.
          </div>
        </div>
        <!-- Câu hỏi 4 -->
        <div class="faq-item">
          <div class="faq-question"> 
            <p>4. Nếu không vừa ý, tôi có thể đổi trả hay không?</p>
            <img src="./icon/hotro-add.svg" alt="" class="faq-icon"/>
          </div>
          <div class="faq-answer">
            Bạn có thể đổi trả trong vòng 7 ngày sau khi giao hàng nhé!
          </div>
        </div>
        <!-- Câu hỏi 5 -->
        <div class="faq-item">
          <div class="faq-question"> 
            <p>5. Xuất hoá đơn điện tử/ hoá đơn VAT như thế nào?</p>
            <img src="./icon/hotro-add.svg" alt="" class="faq-icon"/>
          </div>
          <div class="faq-answer">
            Bạn liên hệ nhân viên của Luxe tại cửa hàng hoặc thông qua các kênh liên lạc qua facebook/instagram của Luxe kèm theo hoá đơn để được hỗ trợ nhé!
          </div>
        </div>
        <!-- Ẩn hiện nội dung-->
        <script src="./js/scripts.js" defer></script>
    </section>
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
                <img src="./icon/ch-play.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/app-store.svg" alt="" />
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