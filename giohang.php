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
    <link rel="stylesheet" href="css/giohang.css" />
    <link rel="stylesheet" href="css/responsinve.css" />
    <!-- Scripts -->
    <script src="./js/giohang.js"></script>
  </head>
  <body>
    <?php
      require_once "db_module.php";
    ?>
    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Mobile menu -->
          <button class="hamburger-menu" onclick="burgerFunction()">
            <img src="./icon/burger.svg" alt="" />
          </button>
          <script src="./js/scripts.js"></script>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
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
          <ul id="mobile_nav" >
            <script>
              const pcNav = document.querySelector("#PC_nav");
              const mobileNav = document.querySelector("#mobile_nav");
              //Copy from PC nav to Mobile nav
              mobileNav.innerHTML = pcNav.innerHTML;
            </script>
            <!-- Dùng JS copy ul từ PC qua mobile -->
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

    <!-- Product detail -->
    <div class="product-container">
      <header style="font-size: 45px; font-weight: bold; padding-top: 25px; ">Giỏ hàng</header>
      <?php
        function view_gh(){

        $link = null;
        taoKetNoi($link); 
        $tong_gia_tri = 0;
        $query = "SELECT c.ma_san_pham,s.hinh_anh_1, c.so_luong, c.gia_tri, s.ten_san_pham, d.ten_danh_muc, b.ten_bien_the, COUNT(r.ma_review) AS tong_so_sao, AVG(r.so_sao) AS so_sao_trung_binh
                  FROM tbl_chitiet_giohang AS c
                  INNER JOIN tbl_sanpham AS s ON c.ma_san_pham = s.ma_san_pham
                  INNER JOIN tbl_danhmuc AS d ON s.ma_danh_muc = d.ma_danh_muc
                  INNER JOIN tbl_bienthe AS b ON c.ma_bien_the = b.ma_bien_the
                  LEFT JOIN tbl_review AS r ON c.ma_san_pham = r.ma_san_pham
                  WHERE c.ma_gio_hang = 1
                  GROUP BY c.ma_san_pham, s.ten_san_pham, d.ten_danh_muc, b.ten_bien_the";

        $product = chayTruyVanTraVeDL($link, $query);
        while ($row = mysqli_fetch_assoc($product)){
                $ten_danh_muc = $row["ten_danh_muc"];
                $ten_san_pham = $row["ten_san_pham"];
                $so_sao_trung_binh = $row["so_sao_trung_binh"];
                $tong_so_sao = $row["tong_so_sao"];
                $gia_tri = $row["gia_tri"];
                $ten_bien_the = $row["ten_bien_the"];
                $ten_hinh_anh = $row["hinh_anh_1"];
                $so_luong = $row["so_luong"];

                $tong_gia_tri += $gia_tri;
      ?>
    <!-- Product -->
      <div class="product-detail">
        <!-- Product image -->
        <div class="product-inf__image">
          <?php  echo "<a href='?opt=del_gh&id=" . $row["ma_san_pham"] . "' onclick='return confirm(\"Bạn có chắc chắn muốn xoá sản phẩm " . $row["ten_san_pham"] . "?\");'><img src='./icon/giohang-delete.svg' alt='Xóa' /></a>"; ?>
          <div class="frame-img">
            <?php echo '<img src="img/'.$row["hinh_anh_1"].'" alt="" class="product-inf__image1" />'; ?>
          </div>
        </div>
        <!-- Product information -->
        <div class="product-inf__word">
          <p class="product-card__collection" style="color: var(--text-color-3);"><?php echo $ten_danh_muc; ?></p>
          <p class="product-inf__title"><?php echo $ten_san_pham; ?></p>
          <div class="product-inf__star">
            <img src="./icon/giohang-star.svg" alt="" />
            <?php  echo '<p style="color: var(--text-color-dark);">' . number_format($so_sao_trung_binh, 1) . ' (' . $tong_so_sao . ')</p>'; ?>
          </div>
          <!--<p class="product-inf__price">2.549.000 VNĐ</p>-->
          <div class="product-price">
            <span class="product-inf__price"><?php echo number_format($gia_tri, 0, ',', '.'); ?> VNĐ</span>
          </div>
          <div class="underline"></div>
          <div class="size">
            <p style="color: var(--product-detail-text-color-dark);">Size: </p>
            <div class="size-dropdown">
              <div class="selected-size"><?php echo $ten_bien_the; ?></div>
            </div>           
          </div>
          <!-- Decrease or Increase quantity -->
          <div class="quantity">
            <table>
              <tr>
                <td class ="dec-ins">-</td>
                <td id="count" class="dec-ins count"><?php echo $so_luong; ?></td>
                <td class ="dec-ins">+</td>
              </tr>
            </table>
          </div>
        </div> 
      </div>
      <?php
          }
        ?>
    <!-- Total product-->
    <div class="total-line">
      <div>
        <form style="margin-left: 90px;">
          <label style="font-size: 20px; font-weight: bold; color: var(--text-color-dark);">
            <img src="./icon/giohang-delete.svg" alt="" />
            Tất cả
          </label>
        </form>
      </div>
      <div class="total-tong">
        <div class="total-tam">
          <p style="font-size: 20px; font-weight: bold; color: var(--text-color-dark);">Tạm tính: </p>
          <p style="font-size: 20px; font-weight: bold; color: coral;"><?php echo number_format($tong_gia_tri, 0, ',', '.'); ?> VNĐ</p>
        </div>
        <p style="color: var(--text-color-dark);">(Đã bao gồm thuế VAT)</p>
        <!-- Button MUA HÀNG -->
        <a href="#!" class="btn them">MUA HÀNG</a>
      </div>
    </div>
    <?php
      }
      function delete_gh()
      {

        $link = null;
        taoKetNoi($link);

        if (isset($_GET["id"])) {

          $_ma_san_pham = $_GET["id"];

          $sql = "DELETE from tbl_chitiet_giohang where ma_gio_hang = 1 AND ma_san_pham =" . $_ma_san_pham;
          $result = chayTruyVanKhongTraVeDL($link, $sql);
          if ($result) {
            echo "<script>alert('Xoá sản phẩm thành công!');</script>";
            echo "<script>window.location.href = 'giohang.php?opt=view_gh';</script>";
          } else {
            echo "<script>alert('Xoá sản phẩm thất bại!');</script>";
            echo "<script>window.location.href = 'giohang.php?opt=view_gh';</script>";
          }
        }
        giaiPhongBoNho($link, $result);
      }
      if (isset($_GET["opt"])) {
        $_opt = $_GET["opt"];
        switch ($_opt) {
          case "del_gh":
            delete_gh();
            break;
          default:
            view_gh();
        }
      } else {
        $_opt = view_gh();
      }
    ?>
        <!-- Similar products -->
        <div class="container">
      <p class="product-inf__title__1">CÓ THỂ BẠN CŨNG THÍCH</p>
      <div class="product-home">
        <?php
        $link = null;
        taoKetNoi($link);
        // Truy vấn danh sách sản phẩm tương tự
        $query_similar_products = "
                                  SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                  FROM tbl_sanpham sp
                                  INNER JOIN (
                                      SELECT ma_danh_muc
                                      FROM tbl_danhmuc
                                      ORDER BY RAND()
                                      LIMIT 1
                                  ) AS random_dm ON sp.ma_danh_muc = random_dm.ma_danh_muc
                                  LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                  LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                  GROUP BY sp.ma_san_pham
                                  LIMIT 4
                              ";
        $result_similar_products = chayTruyVanTraVeDL($link, $query_similar_products);
        // Hiển thị danh sách sản phẩm tương tự
        while ($row_product = mysqli_fetch_assoc($result_similar_products)){
            $ma_san_pham = $row_product["ma_san_pham"];
            $product_name = $row_product["ten_san_pham"];
            $product_image = $row_product["hinh_anh_1"];
            $product_price = $row_product["gia_giam"];
            $product_sale_price = $row_product["gia_goc"];
            $product_category = $row_product["ten_danh_muc"];
            $avg_rating = $row_product["avg_rating"];
            ?>

        <div class="product-item">
          <div class="product-card">
            <div class="product-card__img-wrap">
              <a href="./product-detail.html">
                <?php echo '<img src="img/'.$product_image.'" alt="" class="product-card__thumb" />'; ?>
              </a>
              <button class="like-btn">
                <img src="./icon/sanpham-heart.svg" alt="" class="like-icon icon" />
              </button>
            </div>
            <h3 class="product-card__title">
              <a href='./sanpham.php?id=<?php echo $ma_san_pham; ?>'><?php echo $product_name; ?></a>
            </h3>
            <p class="product-card__collection"><?php echo $product_category; ?></p>
            <div class="product-card__row">
            <?php
              if ($product_price != 0){
                  echo '<span class="product-card__price">' .number_format($product_price, 0, ',', '.'). ' VNĐ </span>';
                  echo '<span class="product-card__price-sales">' .number_format($product_sale_price, 0, ',', '.'). ' VNĐ </span>';
                } else {
                  echo '<span class="product-card__price">' .number_format($product_sale_price, 0, ',', '.'). ' VNĐ </span>';
                }
            ?>
              <img src="./icon/sanpham-star.svg" alt="" class="product-card__star" />
              <span class="product-card__score"><?php echo number_format($avg_rating, 1,'.'); ?></span>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
      <div class="product-home1">
        <?php
        $link = null;
        taoKetNoi($link);
        // Truy vấn danh sách sản phẩm tương tự
        $query_similar_products = "
                                  SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                  FROM tbl_sanpham sp
                                  INNER JOIN (
                                      SELECT ma_danh_muc
                                      FROM tbl_danhmuc
                                      ORDER BY RAND()
                                      LIMIT 1
                                  ) AS random_dm ON sp.ma_danh_muc = random_dm.ma_danh_muc
                                  LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                  LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                  GROUP BY sp.ma_san_pham
                                  LIMIT 20 OFFSET 4
                              ";
        $result_similar_products = chayTruyVanTraVeDL($link, $query_similar_products);
        // Hiển thị danh sách sản phẩm tương tự
        while ($row_product = mysqli_fetch_assoc($result_similar_products)){
            $ma_san_pham = $row_product["ma_san_pham"];
            $product_name = $row_product["ten_san_pham"];
            $product_image = $row_product["hinh_anh_1"];
            $product_price = $row_product["gia_giam"];
            $product_sale_price = $row_product["gia_goc"];
            $product_category = $row_product["ten_danh_muc"];
            $avg_rating = $row_product["avg_rating"];
            ?>

        <div class="product-item1">
          <div class="product-card1">
            <div class="product-card__img-wrap1">
              <a href="./product-detail.html">
                <?php echo '<img src="img/'.$product_image.'" alt="" class="product-card__thumb" />'; ?>
              </a>
              <button class="like-btn1">
                <img src="./icon/sanpham-heart.svg" alt="" class="like-icon icon" />
              </button>
            </div>
            <h3 class="product-card__title1">
              <a href='./sanpham.php?id=<?php echo $ma_san_pham; ?>'><?php echo $product_name; ?></a>
            </h3>
            <p class="product-card__collection1"><?php echo $product_category; ?></p>
            <div class="product-card__row1">
            <?php
              if ($product_price != 0){
                  echo '<span class="product-card__price1">' .number_format($product_price, 0, ',', '.'). ' VNĐ </span>';
                  echo '<span class="product-card__price-sales1">' .number_format($product_sale_price, 0, ',', '.'). ' VNĐ </span>';
                } else {
                  echo '<span class="product-card__price1">' .number_format($product_sale_price, 0, ',', '.'). ' VNĐ </span>';
                }
            ?>
              <img src="./icon/sanpham-star.svg" alt="" class="product-card__star" />
              <span class="product-card__score1"><?php echo number_format($avg_rating, 1,'.'); ?></span>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
      <!-- Button xem thêm -->
        <a href="#!" class="btn home-product">Xem thêm</a> 
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Lấy nút "Xem thêm"
              const toggleButton = document.querySelector('.btn.home-product');

              // Lấy tất cả các sản phẩm
              const products = document.querySelectorAll('.product-item1');
              // Thêm sự kiện click cho nút "Xem thêm"
              toggleButton.addEventListener('click', function() {
                  products.forEach(product => {
                      // Kiểm tra trạng thái hiện tại và ẩn/hiện tương ứng
                      if (product.style.display === 'none' || product.style.display === '') {
                          product.style.display = 'block'; // Hiện sản phẩm
                          toggleButton.textContent = 'Thu gọn';
                      } else {
                          product.style.display = 'none'; // Ẩn sản phẩm
                          toggleButton.textContent = 'Xem thêm'; 
                      }
                  });
              });
            });
        </script>
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



