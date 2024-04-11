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
    <link rel="stylesheet" href="css/sanpham.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/sanpham.js"></script>
  </head>
<body>
  <?php
    require_once "db_module.php";
    include "header.php"
  ?>
    <div class="cross-bar"></div>
    <?php
     $link = null;
     taoKetNoi($link); 
     $product = chayTruyVanTraVeDL($link,"SELECT sp.*, dm.ten_danh_muc
                                  FROM tbl_sanpham sp
                                  JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                  WHERE sp.ma_san_pham = " .$_GET['id']);
     $row = mysqli_fetch_assoc($product);
    ?>
    <!-- Product detail -->
    <div class="product-detail">
      <div class="product-inf">

        <!-- Show hình ảnh sản phẩm -->
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

        <!-- Thông tin sản phẩm -->
        <div class="product-inf__word">
          <p class="product-card__collection"> <?php echo $row['ten_danh_muc']; ?> </p>
          <?php
            echo '<p class="product-inf__title">' .$row['ten_san_pham']. '</p>';
          ?>
          <div class="product-inf__star">
            <?php
              $link = null;
              taoKetNoi($link);

              $query = "SELECT COUNT(ma_review) AS total_reviews, AVG(so_sao) AS average_rating
              FROM tbl_sanpham sp
              LEFT JOIN tbl_review dg ON sp.ma_san_pham = dg.ma_san_pham
              WHERE sp.ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row_star = mysqli_fetch_assoc($result);
            ?>
            <img src="./icon/sanpham-star.svg" alt="" />
            <?php  echo '<p style="color: var(--product-detail-text-color-dark);">' . number_format($row_star['average_rating'], 1) . ' (' . $row_star['total_reviews'] . ')</p>'; ?>
          </div>
          <div class="product-price">
            <?php
              if ($row['gia_giam'] != 0){
                echo '<span class="product-inf__price">' .number_format($row['gia_giam'], 0, ',', '.'). ' VNĐ </span>';
                echo '<span class="product-inf__price-sales">' .number_format($row['gia_goc'], 0, ',', '.'). ' VNĐ</span>';
              } else{
              echo '<span class="product-inf__price">' .number_format($row['gia_goc'], 0, ',', '.'). ' VNĐ</span>';
              }
            ?>
          </div>
          <p class="product-inf__text">
            Giá tham khảo, có thể thay đổi theo trọng lượng, size tay và giá vàng theo thời điểm
          </p>
          <div class="underline"></div>

          <!-- Hướng dẫn chọn size -->
          <p class="product-inf__text1" onclick="openModal()">Hướng dẫn chọn size</p>  
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
                <img src="./icon/sanpham-delivery.svg" alt="" class="img-return"/>
                <p class="return__text"> Miễn phí giao hàng toàn quốc </p>
              </div>
            </div>
          </div>

          <!-- Chức năng chọn size -->
          <div class="size">
            <p id="selected-option"></p>
            <p style="color: var(--product-detail-text-color-dark);" onclick="document.getElementById('form-size').submit();">Size: </p>
            <form id="form-size" action="" method = "POST">
            <input type="hidden" name="formType" value="size-form">
            <?php
              $link = null;
              taoKetNoi($link);

              $query_size = "SELECT ten_bien_the FROM tbl_bienthe WHERE ma_san_pham = " .$_GET['id'];
              $result_size = chayTruyVanTraVeDL($link, $query_size); 
            ?> 
            <select class="size-dropdown" id="select-size" name="size" >
            <?php
              while ($row_size = $result_size->fetch_assoc()) {
                echo "<option value='" . $row_size["ten_bien_the"] . "'";
                if(isset($_POST['size']) && $_POST['size'] === $row_size["ten_bien_the"]) {
                  echo " selected";
                }
                echo ">" . $row_size["ten_bien_the"] . "</option>";
            }
            ?>
            </select>

            <!-- Cho từng form trong trang chạy độc lập với nhau -->
              <?php 
                if (isset($_POST['formType'])) {
                  if ($_POST['formType'] == 'size-form') {

                      // Xử lý dữ liệu cho Form chọn size
                      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        // Lấy dữ liệu từ biểu mẫu
                        $size = $_POST['size'];

                        $link = null;
                        taoKetNoi($link);
                        $query = "SELECT * 
                                  FROM tbl_sanpham sp 
                                  INNER JOIN tbl_bienthe bt ON sp.ma_san_pham = bt.ma_san_pham 
                                  WHERE ten_bien_the = '".$size."' AND sp.ma_san_pham = " .$_GET['id'];
                        $result = chayTruyVanTraVeDL($link, $query);
                        $rows = mysqli_fetch_assoc($result);

                      }
                  } else if ($_POST['formType'] == 'review-form') {

                      // Xử lý dữ liệu cho Form viết review
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST['reviewTitle']) && isset($_POST['reviewDetails']) && isset($_POST['reviewStar'])) {
                            
                          // Lấy dữ liệu từ biểu mẫu
                           $reviewStar = $_POST['reviewStar'];
                            $reviewTitle = $_POST['reviewTitle'];
                            $reviewDetails = $_POST['reviewDetails'];

                            $link = null;
                            taoKetNoi($link);
                            $sql = "INSERT INTO tbl_review (so_sao, tieu_de_review, noi_dung, ma_san_pham) VALUES ('$reviewStar', '$reviewTitle', '$reviewDetails'," .$_GET['id'].")";
                            $abc = chayTruyVanTraVeDL($link, $sql);
                        }
                      }
                    } else if ($_POST['formType'] == 'insert-form') {

                      // Xử lý dữ liệu cho Form Insert vào bảng tbl_chitiet_giohang
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST['ma_san_pham']) && isset($_POST['ma_bien_the']) && isset($_POST['soluong']) && isset($_POST['giatri'])) {
                            
                            // Lấy dữ liệu từ biểu mẫu
                            $ma_san_pham = $_POST['ma_san_pham'];
                            $ma_bien_the = $_POST['ma_bien_the'];
                            $soluong = $_POST['soluong'];
                            $giatri = $_POST['giatri'];

                            $link = null;
                            taoKetNoi($link);
                            $query_test = "SELECT * FROM tbl_chitiet_giohang WHERE ma_gio_hang = 1 AND ma_san_pham = $ma_san_pham";
                            $result_test = chayTruyVanTraVeDL($link, $query_test);

                            if (mysqli_num_rows($result_test) > 0) {

                              $link = null;
                              taoKetNoi($link);
                              // Nếu có bản ghi trong cơ sở dữ liệu, thực hiện câu lệnh UPDATE
                              $query_update = "UPDATE tbl_chitiet_giohang SET so_luong = so_luong + $soluong, gia_tri = gia_tri + $giatri WHERE ma_gio_hang = 1 AND ma_san_pham = $ma_san_pham";
                              chayTruyVanTraVeDL($link, $query_update);
                            } else {
                              $link = null;
                              taoKetNoi($link);
                              // Nếu không có bản ghi trong cơ sở dữ liệu, thực hiện câu lệnh INSERT
                              $query_insert = "INSERT INTO tbl_chitiet_giohang (ma_san_pham, so_luong, gia_tri, ma_bien_the, ma_gio_hang) VALUES ('$ma_san_pham', $soluong, $giatri, $ma_san_pham, 1)";
                              chayTruyVanTraVeDL($link, $query_insert);
                            }
                        }
                      }
                    }
                }         
              ?>
            </form>            
          </div>
          <!-- Tăng giảm số lượng -->
          <div class="quantity">
              <table class="table">
                <tr>
                  <td class ="dec-ins" onclick="updateCount('decrease')">-</td>
                  <td id="count" class="dec-ins count">1</td>
                  <td class ="dec-ins" onclick="updateCount('increase')">+</td>
                </tr>
              </table>
              <script src="./js/scripts.js"></script>

            <!-- Button THÊM VÀO GIỎ HÀNG -->
            <form action="" method="POST" id="form-insert">
              <?php
                $masanpham = $_GET['id'];
                if (isset($rows)) {
                  $mabienthe = $rows['ma_bien_the'];
                } 
              ?>
              <input type="hidden" name="formType" value="insert-form">
              <input type="hidden" name="ma_san_pham" value="<?php echo $masanpham?>">
              <input type="hidden" name="ma_bien_the" value="<?php echo $mabienthe?>">
              <input type="hidden" name="soluong" id="soluong">
              <input type="hidden" name="giatri" id="giatri">
              <button class="btn them" id="giohang" onclick = "Themgiohang()">THÊM VÀO GIỎ HÀNG</button>
            </form>
            
            <script>
              // Đặt biến cho các câu lệnh dưới thực hiện
              var giatri = 0;
              var finalCount = 0;
              var size = '<?php echo $size; ?>';
              var so_luong = <?php echo $rows['so_luong'] ?>;    // Lấy so_luong để ràng buộc dữ liệu tăng giảm

               // Function tăng giảm số lượng 
                function updateCount(action) {

                  var count = parseInt(document.getElementById("count").innerHTML);
                  if (action === "decrease" && count > 0) {
                    count--;
                  } else if (action === "increase" && count < so_luong) {
                    count++;
                  } else if (action === "increase") {
                      alert("Bạn đã chọn vượt quá số lượng tối đa!");
                  }
                  document.getElementById("count").innerHTML = count;
                  finalCount = count;  // Lấy biến finalCount để truyền vào fucntion Themgiohang()
                }
              function Themgiohang(){
  
                // Gán giá trị finalCount vào trường input hidden trong form
                document.getElementById("soluong").value = finalCount;

                // Tính giá trị để Insert vào bảng chi tiết giỏ hàng
                if (<?php echo $row['gia_giam']?> != 0){
                  giatri = finalCount * <?php echo $row['gia_giam']?>;
                } else {
                  giatri = finalCount * <?php echo $row['gia_goc']?>;
                }

                // Gán giá trị giatri vào trường input hidden trong form
                document.getElementById("giatri").value = giatri;

                // Gửi form
                document.getElementById("form-insert").submit();

                alert("Thêm giỏ hàng thành công");
              }
            </script> 
          </div>
        </div>
      </div>
    </div>

    <!-- Chi tiết sản phẩm -->
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

    <!-- Đánh giá -->
    <?php
      $link = null;
      taoKetNoi($link);
      $query = "SELECT COUNT(ma_review) AS total_reviews, AVG(so_sao) AS average_rating
                FROM tbl_sanpham sp
                LEFT JOIN tbl_review dg ON sp.ma_san_pham = dg.ma_san_pham
                WHERE sp.ma_san_pham = " .$_GET['id'];
      $result = chayTruyVanTraVeDL($link, $query);
      $rows = mysqli_fetch_assoc($result);  
    ?>
    <div class="review">
      <div class="review-read">

        <!-- Hiển thị tổng quát đánh giá của sản phẩm -->
        <div class="review-statistics">
          <p class="customer-review">Đánh giá sản phẩm</p>
          <p class="review-quantity"><?php echo $rows['total_reviews'] . ' lượt đánh giá'; ?></p>
          <div class="product-inf__star">
            <img src="./icon/sanpham-star.svg" alt="" /> 
            <p style="color: var(--product-detail-text-color-dark);"> <?php echo number_format($rows['average_rating'], 1); ?> </p>
          </div>

          <!-- 5 sao -->
          <div class="star">
            <p class="star-quality">5 sao</p>
            <?php
              $link = null;
              taoKetNoi($link);

              $query = "SELECT COUNT(ma_review) AS total_5_star
                        FROM tbl_review
                        WHERE  so_sao = 5 AND ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row = mysqli_fetch_assoc($result);
              if ($rows['total_reviews'] == 0)
              { 
                $percentage = 0;
              } else {
              $percentage = ($row['total_5_star'] / $rows['total_reviews']) * 100; }
            ?>
            <div class="cross-bar__star"><div class="cross-quantity1" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_5_star']; ?></p>
          </div>

          <!-- 4 sao -->
          <div class="star">
            <p class="star-quality">4 sao</p>
            <?php

              $link = null;
              taoKetNoi($link);
              $query = "SELECT COUNT(ma_review) AS total_4_star
                               FROM tbl_review
                               WHERE  so_sao = 4 AND ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row = mysqli_fetch_assoc($result);
              if ($rows['total_reviews'] == 0)
              { 
                $percentage = 0;
              } else {
              $percentage = ($row['total_4_star'] / $rows['total_reviews']) * 100; }
            ?>
            <div class="cross-bar__star"><div class="cross-quantity2" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_4_star']; ?></p>
          </div>

          <!-- 3 sao -->
          <div class="star">
            <p class="star-quality">3 sao</p>
            <?php
              $link = null;
              taoKetNoi($link);
              $query = "SELECT COUNT(ma_review) AS total_3_star
                               FROM tbl_review
                               WHERE  so_sao = 3 AND ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row = mysqli_fetch_assoc($result);
              if ($rows['total_reviews'] == 0)
              { 
                $percentage = 0;
              } else {
              $percentage = ($row['total_3_star'] / $rows['total_reviews']) * 100; }
            ?>
            <div class="cross-bar__star"><div class="cross-quantity3" style="width: <?php echo $percentage; ?>%;"></div></div>  
            <p class="star-quality"> <?php echo $row['total_3_star']; ?></p>
          </div>

          <!-- 2 sao -->
          <div class="star">
            <p class="star-quality">2 sao</p>
            <?php
              $link = null;
              taoKetNoi($link);
              $query = "SELECT COUNT(ma_review) AS total_2_star
                               FROM tbl_review
                               WHERE  so_sao = 2 AND ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row = mysqli_fetch_assoc($result);
              if ($rows['total_reviews'] == 0)
              { 
                $percentage = 0;
              } else {
              $percentage = ($row['total_2_star'] / $rows['total_reviews']) * 100; }
            ?>
            <div class="cross-bar__star"><div class="cross-quantity4" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_2_star']; ?></p>
          </div>

          <!-- 1 sao -->
          <div class="star">
            <p class="star-quality">1 sao</p>
            <?php
              $link = null;
              taoKetNoi($link);
              $query = "SELECT COUNT(ma_review) AS total_1_star
                               FROM tbl_review
                               WHERE  so_sao = 1 AND ma_san_pham = " .$_GET['id'];
              $result = chayTruyVanTraVeDL($link, $query);
              $row = mysqli_fetch_assoc($result);
              if ($rows['total_reviews'] == 0)
              { 
                $percentage = 0;
              } else {
              $percentage = ($row['total_1_star'] / $rows['total_reviews']) * 100; }
            ?>
            <div class="cross-bar__star"><div class="cross-quantity5" style="width: <?php echo $percentage; ?>%;"></div></div>
            <p class="star-quality"> <?php echo $row['total_1_star']; ?></p>
          </div>
        </div>

        <!-- Viết đánh giá cho sản phẩm -->
        <div class="review-writing">
          <p class="customer-review">Đánh giá của bạn về sản phẩm này</p>
          <img src="./icon/sanpham-5star.svg" alt="" class="img-star" />
          <form id="reviewForm" method = "POST">
          <input type="hidden" name="formType" value="review-form">
            <div class="review-form">

              <!-- Điền số sao -->
              <div class="form-group">
                  <label for="reviewStar">Số sao (Điền từ 1 đến 5)</label> <br>
                  <input class="write-star" type="number" id="reviewStar" name="reviewStar" onblur="validateStar()"><br>
                  <span id="starError" style="color: red;"></span> <!-- Thông báo lỗi -->
              </div>

              <!-- Điền tiêu đề đánh giá -->
              <div class="form-group">
                  <label for="reviewTitle">Tiêu đề</label> <br>
                  <input class="write-headline" type="text" id="reviewTitle" name="reviewTitle">
              </div>

              <!-- Điền nội dung đánh giá -->
              <div class="form-group">
                  <label for="reviewDetails">Đánh giá chi tiết</label> <br>
                  <textarea class="write-detail" id="reviewDetails" name="reviewDetails" rows="4"></textarea>
              </div>
            </div>

            <!-- Nút gửi -->
            <button style="border: none; margin-top: 15px;" class="btn submit" type="submit">Gửi</button>  
          </form>  
        </div>
      </div>
    </div>

      <!-- Hiển thị những khách hàng đánh giá -->
    <div class="container">
        <div class="review-customer">
          <?php
            $link = null;
            taoKetNoi($link);

            // Truy vấn đánh giá sản phẩm
            $query_reviews = "SELECT tbl_khachhang.ho_ten, tbl_review.so_sao, tbl_review.tieu_de_review, tbl_review.noi_dung 
                              FROM tbl_review 
                              INNER JOIN tbl_khachhang ON tbl_review.ma_khach_hang = tbl_khachhang.ma_khach_hang 
                              WHERE tbl_review.ma_san_pham = " .$_GET['id']. " LIMIT 3";

            $result_reviews = chayTruyVanTraVeDL($link, $query_reviews);

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

        <!-- Hiển thị đánh giá khi ấn button xem thêm -->
        <div class="review-customer">
          <?php
            $link = null;
            taoKetNoi($link);
            // Truy vấn đánh giá sản phẩm
            $query_reviews = "SELECT tbl_khachhang.ho_ten, tbl_review.so_sao, tbl_review.tieu_de_review, tbl_review.noi_dung 
                              FROM tbl_review 
                              INNER JOIN tbl_khachhang ON tbl_review.ma_khach_hang = tbl_khachhang.ma_khach_hang 
                              WHERE tbl_review.ma_san_pham = " .$_GET['id']. " LIMIT 3 OFFSET 3";

            $result_reviews = chayTruyVanTraVeDL($link, $query_reviews);

            // Hiển thị dữ liệu đánh giá
            while ($row_review = mysqli_fetch_assoc($result_reviews)){
                $ho_ten = $row_review["ho_ten"];
                $so_sao = $row_review["so_sao"];
                $tieu_de_review = $row_review["tieu_de_review"];
                $noi_dung = $row_review["noi_dung"];
          ?>

          <div class="customer1">
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
        <!-- Button Xem thêm -->
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

    <!-- Sản phẩm tương tự -->
    <div class="container">
      <p class="product-inf__title__1">Sản phẩm tương tự</p>
      <div class="product-home">
        <?php
        $link = null;
        taoKetNoi($link);
        // Truy vấn danh sách sản phẩm tương tự
        $query_similar_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                   FROM tbl_sanpham sp
                                   INNER JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                   LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                   WHERE sp.ma_danh_muc = (SELECT ma_danh_muc FROM tbl_sanpham WHERE ma_san_pham = " .$_GET['id']. " )
                                   AND sp.ma_san_pham <> ".$_GET['id']. " 
                                   GROUP BY sp.ma_san_pham
                                   LIMIT 4";
        $result_similar_products = chayTruyVanTraVeDL($link, $query_similar_products);

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
              <!-- Hover tim và thêm vào giỏ hàng -->
              <div class="button-heart-cart-hover">
                <a href="">
                  <img
                    src="./icon/sanpham-heart.svg"
                    alt=""
                    class="prod-list__item__image--heart-hover"
                  />
                </a>
                <a href="">
                  <img
                    src="./icon/sanpham-cart.svg"
                    alt=""
                    class="prod-list__item__image--cart-hover"
                  />
                </a>
              </div>
            </div>
            <div class="prod-list__item__inner">
              <h3 class="product-card__title">
                <a href="./product-detail.html"><?php echo $product_name; ?></a>
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
                <div class="prod-list__item__info--star-icon">
                  <img src="./icon/sanpham-star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score"><?php echo number_format($avg_rating, 1,'.'); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
      <!-- Hiển thị sản phẩm tương tự khi ấn button xem thêm -->
      <div class="product-home1">
        <?php
          $link = null;
          taoKetNoi($link);
          // Truy vấn danh sách sản phẩm tương tự
          $query_similar_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                                    FROM tbl_sanpham sp
                                    INNER JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                                    LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                                    WHERE sp.ma_danh_muc = (SELECT ma_danh_muc FROM tbl_sanpham WHERE ma_san_pham = " .$_GET['id']. " )
                                    AND sp.ma_san_pham <> " .$_GET['id']. " 
                                    GROUP BY sp.ma_san_pham
                                    LIMIT 20 OFFSET 3";
          $result_similar_products = chayTruyVanTraVeDL($link, $query_similar_products);

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
              <div class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <?php echo '<img src="img/'.$product_image.'" alt="" class="product-card__thumb" />'; ?>
                </a>
                <div class="button-heart-cart-hover">
                  <a href="">
                    <img
                      src="./icon/sanpham-heart.svg"
                      alt=""
                      class="prod-list__item__image--heart-hover"
                    />
                  </a>
                  <a href="">
                    <img
                      src="./icon/sanpham-cart.svg"
                      alt=""
                      class="prod-list__item__image--cart-hover"
                    />
                  </a>
                </div>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html"><?php echo $product_name; ?></a>
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
                <div class="prod-list__item__info--star-icon">
                  <img src="./icon/sanpham-star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score"><?php echo number_format($avg_rating, 1,'.'); ?></span>
                </div>
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
  <?php
      include "footer.php";
    ?>
</body>

