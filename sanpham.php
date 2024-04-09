<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/sanpham-logo.svg" rel="shortcut icon" />
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
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Scripts -->
    <script src="./js/scripts.js"></script>
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
            <img src="./icon/sanpham-burger.svg" alt="" />
          </button>
          <script src="./js/scripts.js"></script>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/sanpham-logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul>
              <li><a href="#!">Trang chủ</a></li>
              <li><a href="#!">Sản phẩm</a></li>
              <li><a href="#!">Về chúng tôi</a></li>
              <li><a href="#!">Hỗ trợ</a></li>
              <li><a href="#!">Liên hệ</a></li>
            </ul>
          </nav>

          <!-- Action -->
          <div class="top-act">
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/sanpham-search.svg" alt="" />
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/sanpham-heart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/sanpham-cart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/sanpham-user.svg" alt="" />
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn" onclick="darkFunction()">
                <img src="./icon/sanpham-moon.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="cross-bar"></div>
    <?php
    $product =mysqli_query($link, "SELECT sp.*, dm.ten_danh_muc
                                   FROM tbl_sanpham sp
                                   JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                   WHERE sp.ma_san_pham = 1");
    $row = mysqli_fetch_assoc($product);
    ?>
    <!-- Product detail -->
    <div class="product-detail">
      <div class="product-inf">

        <!-- Product image -->
        <div class="product-inf__image">
        <div class="frame-img">
          <?php echo '<img src="img/'.$row["hinh_anh_1"].'" alt="" class="product-inf__image1" />'; ?>
        </div>
        <div class="img-pro">
          <?php
          $smallImages = array(
            'img/'.$row["hinh_anh_1"],
            'img/'.$row["hinh_anh_2"],
            'img/'.$row["hinh_anh_3"],
          );
          ?>
          <?php foreach ($smallImages as $smallImage) { ?>
            <img src="<?php echo $smallImage; ?>" alt="" class="product-inf__image3" onclick="showLargeImage('<?php echo $smallImage; ?>')" />
          <?php } ?>
        </div>
      </div>
      <script>
          function showLargeImage(image) {
            var largeImage = document.querySelector('.product-inf__image1');
            largeImage.src = image;
          }
      </script>

        <!-- Product information -->
        <div class="product-inf__word">
          <p class="product-card__collection"> <?php echo $row['ten_danh_muc']; ?> </p>
          <?php
            echo '<p class="product-inf__title">' .$row['ten_san_pham']. '</p>';
          ?>
          <div class="product-inf__star">
            <?php
              $query = "SELECT COUNT(ma_review) AS total_reviews, AVG(so_sao) AS average_rating
                        FROM tbl_sanpham sp
                        LEFT JOIN tbl_review dg ON sp.ma_san_pham = dg.ma_san_pham
                        WHERE sp.ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row_star = mysqli_fetch_assoc($result);
            ?>
            <img src="./icon/sanpham-star.svg" alt="" />
            <?php  echo '<p style="color: var(--product-detail-text-color-dark);">' . number_format($row_star['average_rating'], 1) . ' (' . $row_star['total_reviews'] . ')</p>'; ?>
          </div>
          <div class="product-price">
            <?php
              if ($row['gia_giam'] != 0){
                echo '<span class="product-inf__price">' .number_format($row['gia_giam'], 0, ',', '.'). ' VNĐ </span>';
              }         
              echo '<span class="product-inf__price-sales">' .number_format($row['gia_goc'], 0, ',', '.'). ' VNĐ</span>';
            ?>
          </div>
          <p class="product-inf__text">
            Giá tham khảo, có thể thay đổi theo trọng lượng, size tay và giá vàng theo thời điểm
          </p>
          <div class="underline"></div>
          <p class="product-inf__text1" onclick="openModal()">Hướng dẫn chọn size</p>
          <!-- Cửa sổ modal -->
          <div id="myModal" class="modal">
            <div class="modal-content">
              <h2 style="font-weight: bold; text-align: center; font-size: 22px;">Cách đo size nhẫn</h2><br>
              <p>1. Dùng chỉ hoặc giấy bản nhỏ đo quấn quanh khớp tay, đánh dấu vị trí cắt nhau</p><br>
              <p>2. Dùng thước đo chiều dài đoạn dây vừa đo được (đơn vị cm)</p><br>
              <p>3. Từ 4.6cm đến 5.6cm: size S</p>
              <p style="margin-left: 15px;">Từ 5.6cm đến 6.4cm: size M</p><br>
              <button onclick="closeModal()">Đóng</button>
            </div>
          </div>
          <div class="sales-promotion">
            <div class="sales-promotion1">
              <div class="return">
                <img src="./icon/sanpham-return.svg" alt="" class="img-return" />
                <p class="return__text"> Đổi trả miễn phí trong 72 giờ </p>
              </div>
              <div class="payment">
                <img src="./icon/sanpham-payment.svg" alt="" class="img-return" />
                <p class="return__text"> Trả góp 0% </p>
              </div>
            </div>
            <div class="sales-promotion1">
              <div class="guarantee">
                <img src="./icon/sanpham-guarantee.svg" alt="" class="img-return" />
                <p class="return__text"> Bảo hành trọn đời </p>
              </div>
              <div class="delivery">
                <img src="./icon/sanpham-delivery.svg" alt="" class="img-return" onclick = "hi()"/>
                <p class="return__text"> Miễn phí giao hàng toàn quốc </p>
              </div>
            </div>
          </div>
          <div class="size">
            <p id="selected-option"></p>
            <p style="color: var(--product-detail-text-color-dark);" onclick="document.getElementById('form-size').submit();">Size: </p>
            <form id="form-size" action="" method = "POST">
            <input type="hidden" name="formType" value="size-form">
            <?php
              $query_size = "SELECT ten_bien_the FROM tbl_bienthe WHERE ma_san_pham = 1";
              $result_size = mysqli_query($link, $query_size);
            ?> 
            <select class="size-dropdown" id="select-size" name="size" >
            <?php
              while ($row_size = $result_size->fetch_assoc()) {
                echo "<option value='" . $row_size["ten_bien_the"] . "'>" . $row_size["ten_bien_the"] . "</option>";
            }
            ?>
            </select>
              <?php 
                if (isset($_POST['formType'])) {
                  if ($_POST['formType'] == 'size-form') {
                      // Xử lý dữ liệu cho Form 1
                      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Lấy dữ liệu từ biểu mẫu
                        $size = $_POST['size'];
                        $query = "SELECT * 
                                  FROM tbl_sanpham sp 
                                  INNER JOIN tbl_bienthe bt ON sp.ma_san_pham = bt.ma_san_pham 
                                  WHERE ten_bien_the = '".$size."' AND sp.ma_san_pham = 1";
                        $result = mysqli_query($link, $query);
                        $rows = mysqli_fetch_assoc($result);
                      }
                  } else if ($_POST['formType'] == 'review-form') {
                      // Xử lý dữ liệu cho Form 2
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST['reviewTitle']) && isset($_POST['reviewDetails']) && isset($_POST['reviewStar'])) {
                            // Lấy dữ liệu từ biểu mẫu
                            $reviewStar = $_POST['reviewStar'];
                            $reviewTitle = $_POST['reviewTitle'];
                            $reviewDetails = $_POST['reviewDetails'];
                            
                            $sql = "INSERT INTO tbl_review (so_sao, tieu_de_review, noi_dung, ma_san_pham) VALUES ('$reviewStar', '$reviewTitle', '$reviewDetails', 1)";
                            $abc = mysqli_query($link, $sql);
                        }
                      }
                    }
                }         
              ?>
            </form>            
          </div>
          <!-- Decrease or Increase quantity -->
          <div class="quantity">
              <table class="table">
                <tr>
                  <td class ="dec-ins" onclick="updateCount('decrease')">-</td>
                  <td id="count" class="dec-ins count">1</td>
                  <td class ="dec-ins" onclick="updateCount('increase')">+</td>
                </tr>
              </table>
              <script>  
                // Click "-"
                
              </script>
              <script src="./js/scripts.js"></script>
            <!-- Button THÊM VÀO GIỎ HÀNG -->
            <a href="" class="btn them" id="giohang" onclick = "Themgiohang()">THÊM VÀO GIỎ HÀNG</a>   
            <script>
              var finalCount = 0;
              var size = '<?php echo $size; ?>';
              var so_luong = <?php echo $rows['so_luong'] ?>; 
                function updateCount(action) {
                  var count = parseInt(document.getElementById("count").innerHTML);
                  if (action === "decrease" && count > 0) {
                    count--;
                  } else if (action === "increase" && count < so_luong) {
                    count++;
                  } else {
                    if (action === "increase") {
                      alert("Bạn đã chọn vượt quá số lượng hiện có!");
                    }
                    return;
                  }
                  document.getElementById("count").innerHTML = count;
                  finalCount = count;
                }
              function Themgiohang(){
              var tenSanPham = '<?php echo $row['ten_san_pham']; ?>';
              var tenDanhMuc = '<?php echo $row['ten_danh_muc']; ?>';
              var averating_rating = '<?php echo $row_star['average_rating']; ?>';
              var total_reviews = '<?php echo $row_star['total_reviews']?>';
              var giagiam = '<?php echo $row['gia_giam']?>';
              var giagoc = '<?php echo $row['gia_goc']?>';                        
              var soluong = finalCount;
              var Size = size;

              // Lấy đường dẫn qua trang giỏ hàng
              var gioHangUrl = 'giohang.php';
              gioHangUrl += '?tenSanPham=' + encodeURIComponent(tenSanPham);
              gioHangUrl += '&tenDanhMuc=' + encodeURIComponent(tenDanhMuc);
              gioHangUrl += '&averating_rating=' + encodeURIComponent(averating_rating);
              gioHangUrl += '&total_reviews=' + encodeURIComponent(total_reviews);
              gioHangUrl += '&giagiam=' + encodeURIComponent(giagiam);
              gioHangUrl += '&giagoc=' + encodeURIComponent(giagoc);
              gioHangUrl += '&soluong=' + encodeURIComponent(soluong);
              gioHangUrl += '&Size=' + encodeURIComponent(Size);
                                                            
              // Thay đổi giá trị href của thẻ <a>
              var giohangLink = document.getElementById('giohang');
              giohangLink.href = gioHangUrl;

              // Chuyển hướng đến trang giỏ hàng
              window.location.href = giohangLink.href;
              }
            </script> 
          </div>
        </div>
      </div>
    </div>

    <!-- Product description -->
    <p class="product-text"> Chi tiết sản phẩm</p>
    <div class="product-description">
      <p class="text-ring">Nhẫn</p>
      <div class="product-des">
        <div class="product-des__img">
          <?php echo '<img src="img/'.$row["hinh_anh_1"].'" alt="" class="img-product" />'; ?>
        </div>
        <div class="product-des__text">
          <div class="frame">
            <div class="inf-text">Thông tin</div>  
            <div class="des-text">
              Chất liệu:
              <br />
              Trọng lượng:
              <br />
              Loại đá:
              <br />
              Kích thước đá:
            </div>
            <?php
            echo '<div class="des-text">'
              .$row['chat_lieu'].
              "<br>"
              .$row['khoi_luong'].
              "<br>"
              .$row['loai_da'].
              "<br>"
              .$row['kich_thuoc_da'].
            '</div>'
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Review -->
    <?php
      $query = "SELECT COUNT(ma_review) AS total_reviews, AVG(so_sao) AS average_rating
                FROM tbl_sanpham sp
                LEFT JOIN tbl_review dg ON sp.ma_san_pham = dg.ma_san_pham
                WHERE sp.ma_san_pham = 1";
      $result = mysqli_query($link, $query);
      $rows = mysqli_fetch_assoc($result);
    ?>
    <div class="review">
      <div class="review-read">

        <!-- Review statistics -->
        <div class="review-statistics">
          <p class="customer-review">Đánh giá sản phẩm</p>
          <p class="review-quantity"><?php echo $rows['total_reviews'] . ' lượt đánh giá'; ?></p>
          <div class="product-inf__star">
            <img src="./icon/sanpham-star.svg" alt="" /> 
            <p style="color: var(--product-detail-text-color-dark);"> <?php echo number_format($rows['average_rating'], 1); ?> </p>
          </div>
          <div class="star">
            <p class="star-quality">5 sao</p>
            <?php
              $query = "SELECT COUNT(ma_review) AS total_5_star
                               FROM tbl_review
                               WHERE  so_sao = 5 AND ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              $percentage = ($row['total_5_star'] / $rows['total_reviews']) * 100;
            ?>
            <div class="cross-bar__star"><div class="cross-quantity1" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_5_star']; ?></p>
          </div>
          <div class="star">
            <p class="star-quality">4 sao</p>
            <?php
              $query = "SELECT COUNT(ma_review) AS total_4_star
                               FROM tbl_review
                               WHERE  so_sao = 4 AND ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              $percentage = ($row['total_4_star'] / $rows['total_reviews']) * 100;
            ?>
            <div class="cross-bar__star"><div class="cross-quantity2" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_4_star']; ?></p>
          </div>
          <div class="star">
            <p class="star-quality">3 sao</p>
            <?php
              $query = "SELECT COUNT(ma_review) AS total_3_star
                               FROM tbl_review
                               WHERE  so_sao = 3 AND ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              $percentage = ($row['total_3_star'] / $rows['total_reviews']) * 100;
            ?>
            <div class="cross-bar__star"><div class="cross-quantity3" style="width: <?php echo $percentage; ?>%;"></div></div>  
            <p class="star-quality"> <?php echo $row['total_3_star']; ?></p>
          </div>
          <div class="star">
            <p class="star-quality">2 sao</p>
            <?php
              $query = "SELECT COUNT(ma_review) AS total_2_star
                               FROM tbl_review
                               WHERE  so_sao = 2 AND ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              $percentage = ($row['total_2_star'] / $rows['total_reviews']) * 100;
            ?>
            <div class="cross-bar__star"><div class="cross-quantity4" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_2_star']; ?></p>
          </div>
          <div class="star">
            <p class="star-quality">1 sao</p>
            <?php
              $query = "SELECT COUNT(ma_review) AS total_1_star
                               FROM tbl_review
                               WHERE  so_sao = 1 AND ma_san_pham = 1";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);
              $percentage = ($row['total_1_star'] / $rows['total_reviews']) * 100;
            ?>
            <div class="cross-bar__star"><div class="cross-quantity5" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_1_star']; ?></p>
          </div>
        </div>

        <!-- Writing review -->
        <div class="review-writing">
          <p class="customer-review">Đánh giá của bạn về sản phẩm này</p>
          <img src="./icon/sanpham-5star.svg" alt="" class="img-star" />
          <form id="reviewForm" method = "POST">
          <input type="hidden" name="formType" value="review-form">
            <div class="review-form">
              <div class="form-group">
                  <label for="reviewStar">Số sao (Điền từ 1 đến 5)</label> <br>
                  <input class="write-star" type="number" id="reviewStar" name="reviewStar" onblur="validateStar()"><br>
                  <span id="starError" style="color: red;"></span> <!-- Thông báo lỗi -->
              </div>
              <div class="form-group">
                  <label for="reviewTitle">Tiêu đề</label> <br>
                  <input class="write-headline" type="text" id="reviewTitle" name="reviewTitle">
              </div>
              <div class="form-group">
                  <label for="reviewDetails">Đánh giá chi tiết</label> <br>
                  <textarea class="write-detail" id="reviewDetails" name="reviewDetails" rows="4"></textarea>
              </div>
            </div>
            <button style="border: none; margin-top: 15px;" class="btn submit" type="submit">Gửi</button>  
          </form>  
        </div>
      </div>
    </div>

      <!-- Customer review -->
    <div class="container">
        <div class="review-customer">
          <?php
            // Truy vấn đánh giá sản phẩm
            $query_reviews = "SELECT tbl_khachhang.ho_ten, tbl_review.so_sao, tbl_review.tieu_de_review, tbl_review.noi_dung 
                              FROM tbl_review 
                              INNER JOIN tbl_khachhang ON tbl_review.ma_khach_hang = tbl_khachhang.ma_khach_hang 
                              WHERE tbl_review.ma_san_pham = 1
                              LIMIT 3";

            $result_reviews = mysqli_query($link, $query_reviews);

            // Hiển thị dữ liệu đánh giá
            while ($row_review = mysqli_fetch_assoc($result_reviews)){
                $ho_ten = $row_review["ho_ten"];
                $so_sao = $row_review["so_sao"];
                $tieu_de_review = $row_review["tieu_de_review"];
                $noi_dung = $row_review["noi_dung"];
          ?>

          <div class="customer">
            <img src="./icon/sanpham-logo.svg" alt="" class="ava-img" />
            <p class="review-tittle"> <?php echo $ho_ten;?> </p>
            <div class="product-inf__star">
              <p style="color: var(--text-color-dark);"> <?php echo $so_sao;?> </p>
              <img src="./icon/sanpham-star.svg" alt="" />
            </div>
            <p class="review-tittle"> <?php echo $tieu_de_review;?> </p>
            <p class="review-detail"> <?php echo $noi_dung;?> </p>
          </div>
              
          <?php
            }
          ?>
        </div>

        <div class="review-customer">
          <?php
            // Truy vấn đánh giá sản phẩm
            $query_reviews = "SELECT tbl_khachhang.ho_ten, tbl_review.so_sao, tbl_review.tieu_de_review, tbl_review.noi_dung 
                              FROM tbl_review 
                              INNER JOIN tbl_khachhang ON tbl_review.ma_khach_hang = tbl_khachhang.ma_khach_hang 
                              WHERE tbl_review.ma_san_pham = 1
                              LIMIT 3 OFFSET 3";

            $result_reviews = mysqli_query($link, $query_reviews);

            // Hiển thị dữ liệu đánh giá
            while ($row_review = mysqli_fetch_assoc($result_reviews)){
                $ho_ten = $row_review["ho_ten"];
                $so_sao = $row_review["so_sao"];
                $tieu_de_review = $row_review["tieu_de_review"];
                $noi_dung = $row_review["noi_dung"];
          ?>

          <div class="customer1">
            <img src="./icon/sanpham-logo.svg" alt="" class="ava-img1" />
            <p class="review-tittle1"> <?php echo $ho_ten;?> </p>
            <div class="product-inf__star">
              <p style="color: var(--text-color-dark);"> <?php echo $so_sao;?> </p>
              <img src="./icon/sanpham-star.svg" alt="" />
            </div>
            <p class="review-tittle1"> <?php echo $tieu_de_review;?> </p>
            <p class="review-detail1"> <?php echo $noi_dung;?> </p>
          </div>    
          <?php
            }
          ?>
        </div>
        <!-- Button Load more -->
        <a href="#!" class="btn home-product__Load">Xem thêm</a>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Lấy nút "Xem thêm"
              const toggleButton = document.querySelector('.btn.home-product__Load');

              // Lấy tất cả các sản phẩm
              const products = document.querySelectorAll('.customer1');
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

    <!-- Similar products -->
    <div class="container">
      <p class="product-inf__title__1">SẢN PHẨM TƯƠNG TỰ, THAM KHẢO NGAY!</p>
      <div class="product-home">
        <?php
        // Truy vấn danh sách sản phẩm tương tự
        $query_similar_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                   FROM tbl_sanpham sp
                                   INNER JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                   LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                   WHERE sp.ma_danh_muc = (SELECT ma_danh_muc FROM tbl_sanpham WHERE ma_san_pham = 1)
                                   AND sp.ma_san_pham <> 1
                                   GROUP BY sp.ma_san_pham
                                   LIMIT 4";
        $result_similar_products = mysqli_query($link, $query_similar_products);

        // Hiển thị danh sách sản phẩm tương tự
        while ($row_product = mysqli_fetch_assoc($result_similar_products)){
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
              <a href="./product-detail.html"><?php echo $product_name; ?></a>
            </h3>
            <p class="product-card__collection"><?php echo $product_category; ?></p>
            <div class="product-card__row">
            <?php
              if ($product_price != 0){
                  echo '<span class="product-card__price">' .number_format($product_price, 0, ',', '.'). ' đ </span>';
                  echo '<span class="product-card__price-sales">' .number_format($product_sale_price, 0, ',', '.'). ' đ </span>';
                } else {
                  echo '<span class="product-card__price">' .number_format($product_sale_price, 0, ',', '.'). ' đ </span>';
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
      <div class="product-home">
        <?php
          // Truy vấn danh sách sản phẩm tương tự
          $query_similar_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                    FROM tbl_sanpham sp
                                    INNER JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                    LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                    WHERE sp.ma_danh_muc = (SELECT ma_danh_muc FROM tbl_sanpham WHERE ma_san_pham = 1)
                                    AND sp.ma_san_pham <> 1
                                    GROUP BY sp.ma_san_pham
                                    LIMIT 20 OFFSET 3";
          $result_similar_products = mysqli_query($link, $query_similar_products);

          // Hiển thị danh sách sản phẩm tương tự
          while ($row_product = mysqli_fetch_assoc($result_similar_products)){
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
                  <?php echo '<img src="img/'.$product_image.'" alt="" class="product-card__thumb1" />'; ?>
                </a>
                <button class="like-btn">
                  <img src="./icon/sanpham-heart.svg" alt="" class="like-icon icon1" />
                </button>
              </div>
              <h3 class="product-card__title1">
                <a href="./product-detail.html"><?php echo $product_name; ?></a>
              </h3>
              <p class="product-card__collection1"><?php echo $product_category; ?></p>
              <div class="product-card__row1">
              <?php
                if ($product_price != 0){
                    echo '<span class="product-card__price1">' .number_format($product_price, 0, ',', '.'). ' đ </span>';
                    echo '<span class="product-card__price-sales1">' .number_format($product_sale_price, 0, ',', '.'). ' đ </span>';
                  } else {
                    echo '<span class="product-card__price1">' .number_format($product_sale_price, 0, ',', '.'). ' đ </span>';
                  }
              ?>
                <img src="./icon/sanpham-star.svg" alt="" class="product-card__star1" />
                <span class="product-card__score"><?php echo number_format($avg_rating, 1,'.'); ?></span>
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
              <img src="./icon/sanpham-logo.svg" alt="Luxe" />
              <h1 class="logo-title">Luxe</h1>
            </a>
            
            <!-- Download app -->
            <div class="download-container">
              <p class="download-title">
                Tải ngay Luxe app
              </p>
              <div class="download-method">
                <a href="https://play.google.com/store/apps" class="ch-store">
                <img src="./icon/sanpham-ggplay.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/sanpham-appstore.svg" alt="" />
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
                    <img src="./icon/sanpham-facebook.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/sanpham-insta.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/sanpham-twitter.svg" alt="">
                </a>
            </div>
          </div>
        </div>
      </div>

    <div class="footer-copyright">
        <div class="container">
          <div class="payment-method">
            <img src="./icon/sanpham-paypal.svg" alt="">
            <img src="./icon/sanpham-visa.svg" alt="">
            <img src="./icon/sanpham-master-card.svg" alt="">
          </div>
          <p class="footer__copyright-text">
            Copyright © 2023 UIHUT All Rights Reserved
          </p>
        </div>
    </div>
    </footer>
</body>

