<!-- PC Header -->
<header class="fixed-header">
  <div class="container">
    <div class="top-bar">
      <!-- Mobile menu -->
      <button class="hamburger-menu" onclick="burgerFunction()">
        <img src="./icon/index-burger.svg" alt="" />
      </button>
      <!-- Logo -->
      <a href="./" class="logo-nav">
        <img src="./icon/index-Logo.svg" alt="Luxe" />
        <h1 class="logo-title">Luxe</h1>
      </a>
      <!-- Search button -->
      <div class="top-act-group mobile">
        <button class="top-act-btn">
          <img src="./icon/index-search.svg" name="search-btn" class="searchBtn" onclick="search()" />
        </button>
      </div>
      <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
      <!-- Navigation -->
      <nav class="navbar">
        <ul id="PC_nav">
          <li><a href="./index.php">TRANG CHỦ</a></li>
          <li><a href="#!" onclick="megaFunction()">SẢN PHẨM</a></li>
          <li><a href="./vechungtoi.php">VỀ CHÚNG TÔI</a></li>
          <li><a href="./hotro.php">HỖ TRỢ</a></li>
          <li><a href="./lienhe.php">LIÊN HỆ</a></li>
        </ul>
      </nav>


      <!-- Action -->
      <div class="top-act">
        <div class="top-act-group">
          <button class="top-act-btn">
            <img src="./icon/index-search.svg" name="search-btn" class="searchBtn" onclick="search()" />
          </button>
        </div>
        <div class="top-act-group">
          <button class="top-act-btn">
            <a href="./yeuthich.php"><img src="./icon/index-heart.svg" alt="" /></a>
            <span class="top-act-title"> 03 </span>
          </button>
          <div class="top-act-separate"></div>
          <button class="top-act-btn">
            <a href="./giohang.php"><img src="./icon/index-cart.svg" alt="" /></a>
            <span class="top-act-title"> 03 </span>
          </button>
          <div class="top-act-separate"></div>
          <button class="top-act-btn user">
            <a href="dangky.php"><img src="./icon/index-user.svg" alt="" /></a>
          </button>
          <div class="top-act-separate"></div>
          <button class="top-act-btn mode" onclick='darkFunction()'>
            <img src="./icon/index-mode.svg" alt="" />
          </button>
        </div>
      </div>
    </div>
    <div class="search-box">
      <input type="text" placeholder="Tìm kiếm sản phẩm...">
      <img src="./icon/index-delete.svg" name="close-btn" class="closeBtn" onclick="closeSearch()" />
    </div>
  </div>
</header>
<!-- Mobile Header -->
<header class="mobile-header">
  <div class="menu-overlay" onclick="burgerFunction()"></div>
  <!-- Menu-content -->
  <div class="menu-drawer">
    <button class="navbar-close" onclick="burgerFunction()">
      <img src="./icon/index-arrow-left.svg" alt="" />
    </button>
    <hr>
    <nav class="navbar-mobile">
      <ul id="mobile_nav">
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
        <img src="./icon/index-heart.svg" alt="" />
        <span class="top-act-title"> 03 </span>
      </button>
      <button class="top-act-btn">
        <img src="./icon/index-cart.svg" alt="" />
        <span class="top-act-title"> 03 </span>
      </button>
      <button class="top-act-btn">
        <img src="./icon/index-user.svg" alt="" />
      </button>
      <button class="top-act-btn mode" onclick="darkFunction()">
        <img src="./icon/index-mode.svg" alt="" />
      </button>
    </div>
  </div>
</header>
<!-- Mega menu cho danh mục sản phẩm -->
<div class="mega-menu">
  <ul>
    <?php
    $link = null;
    taoKetNoi($link);
    //Kết nối và lấy dữ liệu từ CSDL
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_danhmuc");
    // Xử lý dữ liệu trả về
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>";
      echo "<a href='./danhmuc.php?iddm=" . $row['ma_danh_muc'] . "'>";
      echo "<img src='./img/" . $row['hinh_anh_danh_muc'] . "'>";
      echo $row['ten_danh_muc'];
      echo "</a>";
      echo "</li>";
    }
    ?>
  </ul>
</div>