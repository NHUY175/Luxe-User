<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/dangky.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- JS -->
    <script src="./js/header.js"></script>
    <script src="./js/dangky.js"></script>
  </head>
  <body>
    <header class="header">
      <!--Logo-left-->
      <a href="index.php">
        <div class="logo-left">
          <img class="logo1" alt="" src="./icon/Logo.svg"/>
          <h1 class="logo1-text">Luxe</h1>    
      </div>
      </a>
      <!--Info-Right-->
      <div class="frame-right">
        <div class="asking">Bạn đã có tài khoản?</div>
        <a href="dangnhap.php">
          <button class="btn-signin">
            <b class="btn-signin-text">Đăng nhập</b>
          </button>
        </a>
        <button class="dark" onclick="darkFunction()">
          <img class="moon-icon" alt="" src="./icon/dangky-moonlight.svg" alt="" />
        </button>
      </div>
      <script src="./js/dangky.js"></script>
    </header>
    <div class="line1"></div>

    <!--BODY-->
    <!-- Bắt PT POST khi đăng ký -->
    <?php
            require_once "db_module.php";
            $link = null;
            taoKetNoi($link);
            if(isset($_POST["submit"])){
              $_ho_ten = mysqli_real_escape_string($link, $_POST["name"]);
              $_email = mysqli_real_escape_string($link, $_POST["email"]);
              $_gioi_tinh = mysqli_real_escape_string($link, $_POST["gender"]);
              $_so_dien_thoai = mysqli_real_escape_string($link, $_POST["tele-number"]);
              $_ngay_sinh = mysqli_real_escape_string($link, $_POST["date"]);
              $_mat_khau = mysqli_real_escape_string($link, ($_POST["password"]));
              $_ten_dang_nhap = mysqli_real_escape_string($link, $_POST["username"]);
              $c_mat_khau = mysqli_real_escape_string($link, ($_POST["c-password"]));

            $sql_check_email = mysqli_query($link, "SELECT * FROM tbl_khachhang WHERE email = '$_email'") or die('query failed');
            $sql_check_username = mysqli_query($link, "SELECT * FROM tbl_khachhang WHERE ten_dang_nhap = '$_ten_dang_nhap'") or die('query failed');

            if(mysqli_num_rows($sql_check_email) > 0){
                echo "<script>alert('Email đã tồn tại!');</script>";
            } elseif(mysqli_num_rows($sql_check_username) > 0) {
                echo "<script>alert('Tên đăng nhập đã tồn tại!');</script>";
            } else {
              mysqli_query($link, "INSERT INTO tbl_khachhang (ho_ten, gioi_tinh, ngay_sinh, email, so_dien_thoai, ten_dang_nhap, mat_khau) 
                                  VALUES('$_ho_ten', '$_gioi_tinh', '$_ngay_sinh', '$_email', '$_so_dien_thoai', '$_ten_dang_nhap', '$_mat_khau')") or die('query failed');
              echo '<script>alert("Đăng ký thành công"); 
              window.location.href = "dangnhap.php";</script>';
                exit(); // Kết thúc kịch bản sau khi chuyển hướng    
            }
            }
          ?>
    <main class="main">
      <div class="main-inner">
        <!--left-->
        <div class="ads-left"><img src="./img/dangky-anhBG.png" alt="" /></div>
        <!--Right-->
        <div class="container-right">
          <div class="title">Đăng ký</div>
          <form action="#" method="post">
            <div class="user-details">
              <!--NAME-->
              <div class="input-box">
                <b>
                  <span class="text">Họ tên</span>
                  <span class="span"> *</span>
                </b>
                <input class="box" type="text" name ="name" required />
              </div>
              <!--EMAIL-->
              <div class="input-box">
                <b>
                  <span class="text">Email</span>
                  <span class="span"> *</span>
                </b>
                <input class="box" type="email" name ="email"/>
              </div>
              <!--GENDER-->
              <div class="input-box">
                <b>
                  <span class="text">Giới tính</span>
                  <span class="span"> *</span>
                </b>
                <select class="box" name ="gender" required>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </div>
              <!--NUMBER-->
              <div class="input-box">
                <b>
                  <span class="text">Số điện thoại</span>
                  <span class="span"> *</span>
                </b>
                <input
                  class="box"
                  type="text"
                  name ="tele-number"
                  pattern="[0-9]{10}"
                  title="Vui lòng nhập đủ 10 số"
                  required
                />
              </div>
              <!--DOB-->
              <div class="input-box">
                <b>
                  <span class="text">Ngày sinh</span>
                  <span class="span"> *</span>
                </b>
                <input type="date" name ="date" required />
              </div>
              <!--PASS-->
              <div class="input-box">
                <b>
                  <span class="text">Mật khẩu</span>
                  <span class="span"> *</span>
                </b>
                <input id="password" name ="password" type="password" minlength="6" required />
              </div>
              <!--username-->
              <div class="input-box">
                <b>
                  <span class="text">Tên đăng nhập</span>
                  <span class="span"> *</span>
                </b>
                <input type="text" name ="username" required/>
              </div>
              <!--PASS-CONFIRM-->
              <div class="input-box">
                <b>
                  <span class="text">Xác nhận mật khẩu</span>
                  <span class="span"> *</span>
                </b>
                <input
                  id="confirmPassword"
                  type="password"
                  name="c-password"
                  minlength="6"
                  required
                />
                <div
                  id="passwordMatchMessage"
                  style="display: none; color: red"
                >
                  Mật khẩu không khớp
                </div>
              </div>
              <script>
                const passwordInput = document.getElementById("password");
                const confirmPasswordInput =
                  document.getElementById("confirmPassword");
                const passwordMatchMessage = document.getElementById(
                  "passwordMatchMessage"
                );

                function checkPasswordMatch() {
                  if (passwordInput.value !== confirmPasswordInput.value) {
                    passwordMatchMessage.style.display = "block";
                  } else {
                    passwordMatchMessage.style.display = "none";
                  }
                }
                passwordInput.addEventListener("input", checkPasswordMatch);
                confirmPasswordInput.addEventListener(
                  "input",
                  checkPasswordMatch
                );
              </script>
              <!--CHECK-BOX-->
              <div class="check-box">
                <input class="checkbox" type="checkbox" required />
                <span class="text"
                  >Tôi đồng ý với <b style="color: #ef9059">Luxe</b> về Điều
                  khoản dịch vụ và Chính sách</span
                >
                <span class="span"> *</span>
              </div>
              <!--BUTTONS-->
              <div class="button">
                <button class="button-signup" type="submit" name="submit">
                  <b  class="button-text">Đăng ký</b>
                </button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </main>
    <div class="line2"></div>
    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
  </body>
</html>