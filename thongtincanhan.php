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
    <link rel="stylesheet" href="./css/thongtincanhan.css" />
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
          <a href="index.php">
          <div class="arrow">
              <img class="arrow-icon" src="./icon/QLmatkhau-arrowleft.svg"/>
              <div class="account-text">Quản lý tài khoản</div>
          </div>
        </a>
        <a href="thongtincanhan.php">
          <button class="wrapper-2">
            <img class="personal-info" src="./icon/QLmatkhau-iconpersonalinfo.svg"/>
            <div class="bar-text">Thông tin cá nhân</div>
        </button>
        </a>
        <a href="dangnhap.php">
          <button class="wrapper-1">
            <img class="personal-info" src="./icon/ttcn-closecircle.svg"/>
            <div class="bar-text">Đăng xuất</div>
        </button>
        </a>
      </div>
        <!--Right-->
        <?php 
        require_once "db_module.php";
        if(isset($_GET["id"])){

          $ma_khach_hang = $_GET["id"];
          $link = null;
          taoKetNoi($link);

          $sql = "select * from tbl_khachhang WHERE ma_khach_hang =".$ma_khach_hang;
          $result = chayTruyVanTraVeDL($link,$sql);
          $row = mysqli_fetch_assoc($result);
        ?>
        <div class="right-bar">
            <div class="title">Thông tin cá nhân</div>
            <div class="right1">
                <div class="upload-container">
                        <img src="./img/ttcn-default-avatar.jpg" id="profile-pic">
                        <label for="image-upload"> <b>Tải lên ảnh của bạn</b></label>
                        <input type="file" id="image-upload" accept=".png, .jpg, .jpeg" />
                </div>
                <script>
                    let profilePic = document.getElementById("profile-pic");
                    let inputFile = document.getElementById("image-upload");
                    inputFile.onchange = function(){
                        profilePic.src = URL.createObjectURL(inputFile.files[0]);
                    }
                </script>
            </div>
            <div class="right2">
            <form action="" method ="POST">
                <div class="user-details">
                    <!--NAME-->
                    <div class="input-box">
                        <b>
                        <span class="text">Họ tên</span>
                        <span class="span"> *</span>
                        </b>
                      <input class="box" name="ho_ten" type="text" value = "<?php echo $row['ho_ten'] ?>" required/> 
                    </div>
                    <!--EMAIL-->
                    <div class="input-box">
                      <b>
                        <span class="text" >Email</span>
                        <span class="span"> *</span>
                        </b>
                      <input class="box" name="email" type="email" value = "<?php echo $row['email'] ?>"/>
                  </div>
                    <!--GENDER-->
                    <div class="input-box">
                        <b>
                        <span class="text">Giới tính</span>
                        <span class="span"> *</span>
                        </b>
                        <select class="box" name="gioi_tinh" required >
                        <?php
                          if ($row['gioi_tinh'] == 'Nữ') {
                              echo '<option value="' . $row['gioi_tinh'] . '">' . $row['gioi_tinh'] . '</option>';
                              echo '<option value="Nam">Nam</option>';
                          } else if ($row['gioi_tinh'] == 'Nam') {
                              echo '<option value="' . $row['gioi_tinh'] . '">' . $row['gioi_tinh'] . '</option>';
                              echo '<option value="Nữ">Nữ</option>';
                          } else {
                              echo '<option value="Nam">Nam</option>';
                              echo '<option value="Nữ">Nữ</option>';
                          }
                        ?>
                      </select>
                    </div>
                    <!--NUMBER-->
                    <div class="input-box">
                      <b>
                      <span class="text">Số điện thoại</span>
                      <span class="span"> *</span>
                      </b>
                    <input class="box" name="so_dien_thoai" type="text" pattern="[0-9]{10}" title="Vui lòng nhập đủ 10 số" value = "<?php echo $row['so_dien_thoai'] ?>" required/>
                  </div>
                  <!--DOB-->
                    <div class="input-box">
                      <b>
                      <span class="text">Ngày sinh</span>
                      <span class="span"> *</span>
                      </b>
                      <input type="date" name="ngay_sinh" value = "<?php echo $row['ngay_sinh'] ?>" required/>
                  </div>
                    <!--ADDRESS-->
                    <div class="input-box">
                      <b>
                          <span class="text">Địa chỉ</span>
                      </b>
                      <input type="text" name="dia_chi" value = "<?php echo $row['dia_chi'] ?>"/>
                  </div>
                  <!--USERNAME-->
                  <div class="input-box">
                      <b>
                      <span class="text">Tên đăng nhập</span>
                      <span class="span"> *</span>
                      </b>
                      <input type="text" name="ten_dang_nhap" value = "<?php echo $row['ten_dang_nhap'] ?>" required/>
                  </div>
                    <!--PASSWORD-->
                    <div class="input-box">
                    <b>
                      <span class="text">Mật khẩu</span>
                      <span class="span"> *</span>
                      </b>
                      <input type="password" name="mat_khau" value = "<?php echo $row['mat_khau'] ?>" required/>
                  </div>
                  <?php 
                    } 
                  ?>
              <div class="button">
                <button class="button-save" type="submit">
                  <b class="button-save-text">Lưu</b>
                </button>
            </form>
            <?php 
              $link = null;
              taoKetNoi($link);
              //Kiểm tra có phương thức POST gửi lên hay không
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["ho_ten"])) {
                    $ho_ten = $_POST["ho_ten"];
                }
                if (isset($_POST["gioi_tinh"])) {
                    $gioi_tinh = $_POST["gioi_tinh"];
                }
                if (isset($_POST["ngay_sinh"])) {
                    $ngay_sinh = $_POST["ngay_sinh"];
                }
                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                }
                if (isset($_POST["so_dien_thoai"])) {
                    $so_dien_thoai = $_POST["so_dien_thoai"];
                }
                if (isset($_POST["dia_chi"])) {
                    $dia_chi = $_POST["dia_chi"];
                }
                if (isset($_POST["ten_dang_nhap"])) {
                    $ten_dang_nhap = $_POST["ten_dang_nhap"];
                }
                if (isset($_POST["mat_khau"])) {
                    $mat_khau = $_POST["mat_khau"];
                }

                $sql_update = "UPDATE tbl_khachhang SET ho_ten='$ho_ten', gioi_tinh='$gioi_tinh', ngay_sinh='$ngay_sinh', email='$email', so_dien_thoai='$so_dien_thoai', dia_chi='$dia_chi', ten_dang_nhap='$ten_dang_nhap', mat_khau='$mat_khau' WHERE ma_khach_hang=".$ma_khach_hang;
                $rs = chayTruyVanKhongTraVeDL($link, $sql_update);
                echo $rs;
                if ($rs) {
                  echo "<script>alert('Cập nhật thành công');</script>";
                  echo "<script>window.location.href = 'index.php';</script>";
                } else {
                  echo "<script>alert('Cập nhật thất bại');</script>";
                  echo "<script>window.location.href = 'thongtincanhan.php';</script>";
                }
              }
            ?>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer" id="footer"></footer>
    <script>
      load("#footer", "./template/footer.html");
    </script>
</body>
</html>
