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
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/header.js"></script>
    <script src="./js/giohang.js"></script>
  </head>
  <body>
    <?php
      require_once "db_module.php";
      include "header.php";
    ?>
    <!-- Product detail -->
    <div class="product-container">
      <header style="font-size: 45px; font-weight: bold; padding-top: 25px; color: #f86624;">Giỏ hàng</header>
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
          <a href="./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>"><p class="product-inf__title"><?php echo $ten_san_pham; ?></p></a>
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
    </div>
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
        <a href="thanhtoan.php" class="btn them">MUA HÀNG</a>
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
                <img src="./icon/sanpham-heart.svg" alt="" class="like-icon icon" onclick="heart(this)"/>
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
      <!-- <div class="product-home1">
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
      </div> -->
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
</html>
