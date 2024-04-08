<?php
   define("HOST", "localhost");
   define("DB", "luxe_database");
   define("USER", "root");
   define("PASSWORD", "");

    $link = mysqli_connect(HOST,USER,PASSWORD,DB);
    if (mysqli_connect_errno()) {
        echo "Lỗi kết nối đến máy chủ: " . mysqli_connect_errno();
        exit();
    }