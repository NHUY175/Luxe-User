<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="./css/quanlymatkhau.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/quanlymatkhau.js"></script>
    <script src="./js/header.js"></script>
</head>
<body>
    <!-- Header -->
    <header id="header"></header>
    <script>
      load("#header", "./template/header.html");
    </script>
    <!-- BODY -->
    <main class="main-inner">
        <!--left-section -->
            <div class="side-bar">
              <a href="index.html">
                <div class="arrow">
                    <img class="arrow-icon" src="./icon/QLmatkhau-arrowleft.svg"/>
                    <div class="account-text">Quản lý tài khoản</div>
                </div>
              </a>
              <a href="quanlymatkhau.php">
                <button class="wrapper-1">
                  <img class="pass-manage" src="./icon/QLmatkhau-iconpass.svg"/>
                  <div class="bar-text">Quản lý mật khẩu</div>
              </button>
              </a>
              <a href="thongtincanhan.php">
                <button class="wrapper-2">
                  <img class="personal-info" src="./icon/QLmatkhau-iconpersonalinfo.svg"/>
                  <div class="bar-text">Thông tin cá nhân</div>
              </button>
              </a>
              <a href="dangnhap.php">
                <button class="wrapper-2">
                  <img class="personal-info" src="./icon/ttcn-closecircle.svg"/>
                  <div class="bar-text">Đăng xuất</div>
              </button>
              </a>
            </div>
        <!--signin-right-->
        <div class="right-bar">
            <form class="pass-info">
                <h1 class="title">Quản lý mật khẩu</h1>
              <div class="input">
                <!--Pass-->
                <div class="input-box">
                  <b>
                    <span class="text">Mật khẩu hiện tại</span>
                    <span class="span"> *</span>
                  </b>
                  <input type="password" minlength="6" required/>
                </div>
                <!--New-Pass-->
                <div class="input-box">
                    <b>
                      <span class="text">Mật khẩu mới</span>
                      <span class="span"> *</span>
                    </b>
                      <input id="password" type="password" minlength="6" required/>
                </div>
                <!--NEW-PASS-CONFIRM-->
                <div class="input-box">
                    <b>
                    <span class="text">Xác nhận mật khẩu</span>
                    <span class="span"> *</span>
                    </b>
                    <input id="confirmPassword" type="password" minlength="6" required/>
                    <div id="passwordMatchMessage" style="display: none; color: red;">Mật khẩu không khớp</div>
                </div>
                <script>
                  const passwordInput = document.getElementById('password');
                  const confirmPasswordInput = document.getElementById('confirmPassword');
                  const passwordMatchMessage = document.getElementById('passwordMatchMessage');

                  function checkPasswordMatch() {
                      if (passwordInput.value !== confirmPasswordInput.value) {
                          passwordMatchMessage.style.display = 'block';
                      } else {
                          passwordMatchMessage.style.display = 'none';
                      }
                  }
                  passwordInput.addEventListener('input', checkPasswordMatch);
                  confirmPasswordInput.addEventListener('input', checkPasswordMatch);
                </script>
              </div>
              <div class="button">
                <button class="button-save">
                  <b class="button-save-text">Lưu</b>
                </button>
                <!--<div class="divider">
                    <div class="divider-1"></div>
                    <div class="or">Hoặc</div>
                    <div class="divider2"></div>
                </div>-->
                <!--<div class="forget-pass">
                    <a href="http://">Quên mật khẩu</a>
                </div>-->
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer" id="footer"></footer>
    <script>
      load("#footer", "./template/footer.html");
    </script>
</body>
</html>