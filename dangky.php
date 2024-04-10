<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
  </head>
  <body>
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
        <div class="asking">Bạn đã có tài khoản?</div>
        <a href="dangnhap.html">
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
    <main class="main">
      <div class="main-inner">
        <!--left-->
        <div class="ads-left"><img src="./img/dangky-anhBG.png" alt="" /></div>
        <!--Right-->
        <div class="container-right">
          <div class="title">Đăng ký</div>
          <form action="#">
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
                <select class="box" name ="gioitinh" required>
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
                  name ="sodienthoai"
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
              <!--ADDRESS-->
              <div class="input-box">
                <b>
                  <span class="text">Địa chỉ</span>
                </b>
                <input type="text" name ="diachi"/>
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
          <!-- Bắt PT POST khi đăng ký -->
          <?php
            require_once "db_module.php";
            $link = null;
            taoKetNoi($link);
            if(isset($_POST["submit"])){
              $_ho_ten = $_POST["name"];
              $_gioi_tinh = $_POST["gioitinh"];
              $_ngay_sinh = $_POST["date"];
              $_so_dien_thoai = $_POST["sodienthoai"];
              $_email = $_POST["email"];
              $_dia_chi = $_POST["diachi"];
              $_mat_khau = $_POST["password"];
            //Tạo câu lệnh SQL thêm vào bảng tbl_khachhang
            $sql_dangky = "INSERT INTO tbl_khachhang (ho_ten, gioi_tinh, ngay_sinh, email, so_dien_thoai,  dia_chi, mat_khau) VALUES ('$_ho_ten','$_gioi_tinh', '$_ngay_sinh', '$_email', '$_so_dien_thoai',  '$_dia_chi', '$_mat_khau')";
            //Kiểm tra biến có dữ liệu hay không
            if($_ho_ten !== ""){
              $rs_dangky = chayTruyVanKhongTraVeDL($link, $sql_dangky);
              // Kiểm tra insert
              if($rs_dangky){
                  echo "<script>alert('Đăng ký thành công');</script>";
              } else {
                  echo "<script>alert('Đăng ký thất bại');</script>";
              }
              giaiPhongBoNho($link,$rs_dangky);
              }          
            }
          ?>
        </div>
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