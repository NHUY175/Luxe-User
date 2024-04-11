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
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/yeuthich.js"></script>
    <script src="./js/header.js"></script>
  </head>
  <body>
  <?php
    require_once "db_module.php";
    include "header.php";
  ?>
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
                <img src="./img/3H0-1.webp" alt="Product image" />
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
                <img src="./img/3H0-1.webp" alt="Product image" />
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
                <img src="./img/3H0-1.webp" alt="Product image" />
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
                <img src="./img/3H0-1.webp" alt="Product image" />
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
    <?php
    include "footer.php";
    ?>
  </body>
</html>