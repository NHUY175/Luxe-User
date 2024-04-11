<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- Font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/dangnhap.css" />  
    <link rel="stylesheet" href="css/footer.css" />
     <!-- JS -->
     <script src="./js/header.js"></script>
</head>
<body>
    <!-- Kết nối vào CSDL -->
    <?php
        require_once "db_module.php";
        session_start();

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $link = null;
            taoKetNoi($link);
            if ($link === false) {
                die("connection error");
            }

            $sql="select * from tbl_khachhang where ten_dang_nhap='".$username."' AND mat_khau='".$pass."' ";
            $result=mysqli_query($link,$sql);

            // Kiểm tra số dòng kết quả trả về
            $num_rows = mysqli_num_rows($result);
            if ($num_rows == 1) 
            {
                $_SESSION['username']=$username;
                echo '<script>alert("Đăng nhập thành công");</script>';
                header("location:index.php");
                exit(); // Kết thúc kịch bản sau khi chuyển hướng
            } else {
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng");</script>';
            }
            // Giải phóng tài nguyên
            mysqli_close($link);
        }
    ?>
  <header class="header">
    <!--Logo-left-->
    <a href="index.html">
      <div class="logo-left">
        <img class="logo1" alt="" src="./icon/Logo.svg"/>
        <h1 class="logo1-text">Luxe</h1>    
    </div>
    </a>
    <!--Info-Right-->
    <div class="frame-right">
        <div class="asking">Bạn chưa có tài khoản?</div>
        <a href="dangky.php">
          <button class="btn-signup">
            <b class="btn-signup-text">Đăng ký</b>
          </button>
        </a>
            <button class="dark" onclick="darkFunction()">
              <img class="moon-icon" alt="" src="./icon/moon-light.svg" alt="" />
            </button>
    </div>
</header>
<div class="line1"></div>

<main class="main">
    <div class="main-inner">
    <!--ads-left--> 
    <!--  Slider section -->
      <div class="ads-left">
        <div class="slider">
          <div class="list">
              <div class="item">
                  <img src="./img/dangnhap-img1.png" alt="" />
              </div>
              <div class="item">
                  <img src="./img/dangnhap-img2.png" alt="" />
              </div>
              <div class="item">
                  <img src="./img/dangnhap-img3.png" alt="" />
              </div>
          </div>
          <!--button prev and next-->
            <div class="buttons">
              <button id="prev"><</button>
              <button id="next">></button>
          </div>
          <!--dots-->
          <ul class="dots">
              <li class="active"></li>
              <li class="active"></li>
              <li class="active"></li>
          </ul>
      </div>
       <!-- Scripts -->
       <script src="./js/dangnhap.js"></script>
      </div>        
    <!--signin-right-->
        <form class="signin-info" method="post">
            <h1 class="signin-title">Đăng nhập</h1>
          <div class="signin-input">
            <!--Email-->
            <div class="username-container">
              <b>
                <span class="username-text">Tên đăng nhập</span>
                <span class="span"> *</span>
              </b>
              <input class="username-box" name="username" type="text" required/>
            </div>
            <!--Pass-->
            <div class="password-container">
                <b>
                  <span class="pass-text">Mật khẩu</span>
                  <span class="span"> *</span>
                </b>
                  <input class="password-box" name="pass" type="password" required/>
              <div class="forget-pass">
                <a href="http://">Quên mật khẩu</a>
            </div>
            </div>
          </div>
          <div class="button">
            <button name="login" type="submit" class="button-signin">
              <b class="button-signin-text">Đăng nhập</b>
            <button name="login" class="button-signin">
              <a href="./thongtincanhan.php">
                <b class="button-signin-text">Đăng nhập</b>
              </a>
            </button>
        </form>
    </div>
</main>
<div class="line2"></div>
<!-- Footer -->
<footer class="footer" id="footer"></footer>
<script>
  load("#footer", "./template/footer.html");
</script>
</body>
</html>