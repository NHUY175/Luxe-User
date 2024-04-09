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
            <a href="./danhmuc.php?iddm=1"><img src="./img/index-slider1.png" alt=""/></a>
          </div>
          <!-- Slide 2 -->
          <div class="hero-slide--2">
            <a href="./danhmuc.php?iddm=1"><img src="./img/index-Slider2.png" alt=""/></a>
          </div>
          <!-- Slide 3 -->
          <div class="hero-slide--3">
            <a href="./danhmuc.php?iddm=1"><img src="./img/index-Slider3.png" alt="" onload="loadImage()" /></a>
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
          <!-- Hiển thị sản phẩm -->
          <?php
            $link = null;
            taoKetNoi($link); 
            //Kết nối và lấy dữ liệu từ CSDL
            $result = chayTruyVanTraVeDL($link,"SELECT * FROM tbl_sanpham AS sp, tbl_danhmuc AS dm WHERE gia_giam IS NOT NULL AND sp.ma_danh_muc = dm.ma_danh_muc ORDER BY RAND() LIMIT 4");
            // Xử lý dữ liệu trả về
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <section class="prod-list__item">
                  <div class="prod-list__item__image">
                    <a href="">
                      <img
                        class="prod-list__item__img1"
                        loading="lazy"
                        src="./img/<?php echo $row["hinh_anh_1"]; ?>"
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
                          class="prod-list__item__image--heart-hover"
                        />
                      </a>
                      <a href="">
                        <img
                          src="./icon/index-cart.svg"
                          class="prod-list__item__image--cart-hover"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="prod-list__item__inner">
                    <div class="prod-list__item__inner--child">
                      <div class="prod-list__item__info">
                        <div class="prod-list__item__info--title">
                          <a href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'><?php echo $row["ten_san_pham"]; ?></a>
                        </div>
                        <div class="prod-list__item__info--masp"><?php echo $row["ten_danh_muc"]; ?></div>
                      </div>
                      <div class="prod-list__item__info--price-fb">
                        <div class="prod-list__item--price">
                          <?php echo '<span class="prod-list__item__info--price">' .number_format($row['gia_giam'], 0, ',', '.'). ' VNĐ </span>'; ?>
                          <?php echo '<span class="prod-list__item__info--price-sales">' .number_format($row['gia_goc'], 0, ',', '.'). ' VNĐ </span>'; ?>
                        </div>
                        <div class="prod-list__item__info--star-icon">
                          <img
                            class="info--star-icon"
                            loading="lazy"
                            src="./icon/index-star.svg"
                          />
                          <div class="prod-list__item__info--fb">4.3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            <?php
            }
            giaiPhongBoNho($link,$result);
          ?>
          </div>
        <!-- Button xem thêm -->
        <a href="./danhmuc.php?iddm=1" class="btn home-product">Xem thêm</a>
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
      <a href="./danhmuc.php?iddm=1" class="btn home-col">Khám phá bộ sưu tập</a>
    </section>
    <div class="line"></div>
    <!-- List products best-seller-->
    <section id="product-sale">
      <div class="container">
        <h2 class="best-seller">Sản phẩm bán chạy</h2>
        <div class="prod-list__grid">
          <!-- Hiển thị sản phẩm -->
          <?php
            $link = null;
            taoKetNoi($link); 
            //Kết nối và lấy dữ liệu từ CSDL
            $result = chayTruyVanTraVeDL($link,"SELECT * FROM tbl_sanpham AS sp, tbl_danhmuc AS dm WHERE gia_giam IS NOT NULL AND sp.ma_danh_muc = dm.ma_danh_muc ORDER BY RAND() LIMIT 4");
            // Xử lý dữ liệu trả về
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <section class="prod-list__item">
                  <div class="prod-list__item__image">
                    <a href="">
                      <img
                        class="prod-list__item__img1"
                        loading="lazy"
                        src="./img/<?php echo $row["hinh_anh_1"]; ?>"
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
                          class="prod-list__item__image--heart-hover"
                        />
                      </a>
                      <a href="">
                        <img
                          src="./icon/index-cart.svg"
                          class="prod-list__item__image--cart-hover"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="prod-list__item__inner">
                    <div class="prod-list__item__inner--child">
                      <div class="prod-list__item__info">
                        <div class="prod-list__item__info--title">
                          <a href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'><?php echo $row["ten_san_pham"]; ?></a>
                        </div>
                        <div class="prod-list__item__info--masp"><?php echo $row["ten_danh_muc"]; ?></div>
                      </div>
                      <div class="prod-list__item__info--price-fb">
                        <div class="prod-list__item--price">
                          <?php echo '<span class="prod-list__item__info--price">' .number_format($row['gia_giam'], 0, ',', '.'). ' VNĐ </span>'; ?>
                          <?php echo '<span class="prod-list__item__info--price-sales">' .number_format($row['gia_goc'], 0, ',', '.'). ' VNĐ </span>'; ?>
                        </div>
                        <div class="prod-list__item__info--star-icon">
                          <img
                            class="info--star-icon"
                            loading="lazy"
                            src="./icon/index-star.svg"
                          />
                          <div class="prod-list__item__info--fb">4.3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            <?php
            }
            giaiPhongBoNho($link,$result);
          ?>
        </div>
        <!-- Button xem thêm -->
        <a href="./danhmuc.php?iddm=1" class="btn home-product">Xem thêm</a>
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
          <form class="news-register" method="POST">
            <input type="text" name="dangky" id="dangky" placeholder="Nhập Email của bạn" class="text-reg">
            <input type="submit" value="Đăng ký" class="btn register">
          </form>
          <!-- Bắt PT POST khi đăng ký email -->
          <?php
            $link = null;
            taoKetNoi($link);
            if(isset($_POST["dangky"])){
              $_email_dang_ky = $_POST["dangky"];
              //Tạo câu lệnh SQL thêm vào bảng sản phẩm
              $sql_dangky = "INSERT INTO tbl_email_bantin (email_dang_ky) values ('$_email_dang_ky')";
              //Kiểm tra biến có dữ liệu hay không
              if($_email_dang_ky != ""){
                $rs_dangky = chayTruyVanKhongTraVeDL($link, $sql_dangky);
                // Kiểm tra insert
                if($rs_dangky){
                  echo "<script>alert('Đăng ký thành công');</script>";
                }else{
                  echo "<script>alert('Đăng ký thất bại');</script>";
                }
                giaiPhongBoNho($link,$rs_dangky);
              }
            }
          ?>
        </div>
      </div>
    </section>
    </div>
    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
  </body>
</html>


