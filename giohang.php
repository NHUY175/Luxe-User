<?php
  // Kiểm tra xem có dữ liệu được gửi từ trang chi tiết sản phẩm hay không
  if (isset($_GET['tenSanPham']) && isset($_GET['tenDanhMuc']) && isset($_GET['averating_rating']) && isset($_GET['giagiam']) && isset($_GET['giagoc']) && isset($_GET['giagoc']) && isset($_GET['soluong']) && isset($_GET['Size'])) {
    $tenSanPham = $_GET['tenSanPham'];
    $tenDanhMuc = $_GET['tenDanhMuc'];
    $averating_rating = $_GET['averating_rating'];
    $total_reviews = $_GET['total_reviews'];
    $giagiam = $_GET['giagiam'];
    $giagoc = $_GET['giagoc'];
    $soluong = $_GET['soluong'];
    $Size = $_GET['Size'];

    // Thực hiện các thao tác lưu thông tin sản phẩm vào giỏ hàng, ví dụ: lưu vào cơ sở dữ liệu hoặc biến session.
    // Ở đây, chúng ta chỉ hiển thị thông tin sản phẩm ra màn hình để minh họa
    echo 'Tên sản phẩm: ' . $tenSanPham . '<br>';
    echo 'Tên danh mục: ' . $tenDanhMuc . '<br>';
    echo 'Số sao trung bình: ' . $averating_rating . '<br>';
    echo 'Tổng lượt đánh giá: ' . $total_reviews . '<br>';
    echo 'Giá giảm: ' . $giagiam . '<br>';
    echo 'Giá gốc: ' . $giagoc . '<br>';
    echo 'Số lượng: ' . $soluong . '<br>';
    echo 'Size: ' . $Size . '<br>';
  }
?>