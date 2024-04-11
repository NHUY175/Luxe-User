<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
        rel="stylesheet" />
    <!-- FONT AWESOME - THƯ VIỆN ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- GG Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prata:wght@400&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />
    <!-- Boxicon CSS -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <!-- swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/danhmuc.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />

    <!-- Scripts -->
    <script src="./js/danhmuc.js"></script>
</head>

<body>
    <!-- Header -->
    <?php
    require_once "db_module.php";
    include "header.php";
    ?>
    <!-----------------Phần trang chủ/sản phẩm-------------->
    <div class="prod-longest-line"></div>
    <div class="container-main">
        <!------------------- Product Wrap --------------------------->
        <div class="container">
            <h2 class="container__title-page-product">SẢN PHẨM</h2>
            <div class="container__product-wrap">
                <ul class="product-wrap--nav-links">
                    <li class="center"><a href="danhmuc.php?iddm=tatca">TẤT CẢ</a></li>
                    <li class="center"><a href="danhmuc.php?iddm=1">NHẪN</a></li>
                    <li class="center"><a href="danhmuc.php?iddm=2">DÂY CHUYỀN</a></li>
                    <li class="center"><a href="danhmuc.php?iddm=3">VÒNG TAY</a></li>
                    <li class="center"><a href="danhmuc.php?iddm=4">BÔNG TAI</a></li>
                </ul>
            </div>
            <div class="prod-second-line"></div>
        </div>

        <!---------------------- BỘ LỌC SẢN PHẨM --------------------------------->
        <article id="article-products">
            <div class="toolbar toolbar-products">
                <div class="filter-wrapper pull-left">
                    <div class="filter-custom trigger-filter">
                        <span>Bộ lọc</span>
                        <div class="groupFilterNew">
                            <div class="contentFilter clearfix">
                                <div class="collection-filter-price collection-item">
                                    <div class="sidebar-sort">
                                        <div class="sort_title">
                                            <span>Khoảng giá</span> <i class="fa fa-sort-down"></i>
                                        </div>
                                        <ul class="no-bullets filter-price clearfix sidebar-content">
                                            <li class="hide custom-filter-input" data-filter1="0-max">
                                                <label>
                                                    <input type="checkbox" name="price-filter" data-price="0:max"
                                                        data-value="0-max" value="((price:product>=0))" />
                                                    <span>Tất cả</span>
                                                </label>
                                            </li>
                                            <li class="custom-filter-input" data-filter1="0-1-000-000">
                                                <label>
                                                    <input type="checkbox" name="price-filter" data-price="0:1,000,000"
                                                        data-value="0-1-000-000" value="((price:product<1,000,000))" />
                                                    <span>Nhỏ hơn 1.000.000₫</span>
                                                </label>
                                            </li>
                                            <li class="custom-filter-input" data-filter1="1-000-000-3-000-000">
                                                <label>
                                                    <input type="checkbox" name="price-filter"
                                                        data-price="1,000,000:3,000,000"
                                                        data-value="1-000-000-3-000-000"
                                                        value="((price:product>=1,000,000)&amp;&amp;(price:product<3,000,000))" />
                                                    <span>Từ 1.000.000₫ - 3.000.000₫</span>
                                                </label>
                                            </li>
                                            <li class="custom-filter-input" data-filter1="3-000-000-5-000-000">
                                                <label>
                                                    <input type="checkbox" name="price-filter"
                                                        data-price="3,000,000:5,000,000"
                                                        data-value="3-000-000-5-000-000"
                                                        value="((price:product>=3,000,000)&amp;&amp;(price:product<5,000,000))" />
                                                    <span>Từ 3.000.000₫ - 5.000.000₫</span>
                                                </label>
                                            </li>
                                            <li class="custom-filter-input" data-filter1="5-000-000-7-000-000">
                                                <label>
                                                    <input type="checkbox" name="price-filter"
                                                        data-price="5,000,000:7,000,000"
                                                        data-value="5-000-000-7-000-000"
                                                        value="((price:product>=5,000,000)&amp;&amp;(price:product<7,000,000))" />
                                                    <span>Từ 5.000.000₫ - 7.000.000₫</span>
                                                </label>
                                            </li>
                                            <li class="custom-filter-input" data-filter1="7-000-000-10-000-000">
                                                <label>
                                                    <input type="checkbox" name="price-filter"
                                                        data-price="7,000,000:10,000,000"
                                                        data-value="7-000-000-10-000-000"
                                                        value="((price:product>=7,000,000)&amp;&amp;(price:product<10,000,000))" />
                                                    <span>Từ 7.000.000₫ - 10.000.000₫</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="collection-filter-color collection-item">
                                    <div class="sidebar-sort">
                                        <div class="sort_title">
                                            <span>Chất Liệu</span> <i class="fa fa-sort-down"></i>
                                        </div>
                                        <ul class="mg-left-0 no-bullets filter-variant filter-color clearfix">
                                            <li class="pd-left-0">
                                                <label data-filter="Vàng" data-filter1="vang"
                                                    class="filter-vendor__item custom-filter-input vang">
                                                    <input class="" type="checkbox" value="(variant:product=Vàng)"
                                                        data-value="vang" />
                                                    <span>Vàng</span>
                                                </label>
                                            </li>

                                            <li class="pd-left-0">
                                                <label data-filter="Bạc" data-filter1="bac"
                                                    class="filter-vendor__item custom-filter-input bac">
                                                    <input class="" type="checkbox" value="(variant:product=Bạc)"
                                                        data-value="bac" />
                                                    <span>Bạc</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="collection-filter-tag2 collection-item">
                                    <div class="sidebar-sort">
                                        <div class="sort_title">
                                            <span>Loại Đá</span> <i class="fa fa-sort-down"></i>
                                        </div>
                                        <ul class="grid mg-left-0 no-bullets filter-variant filter-size clearfix">
                                            <li
                                                class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                                                <label data-filter="Đá Xà cừ " data-filter1="da-xa-cu"
                                                    class="filter-vendor__item custom-filter-input da-xa-cu">
                                                    <input type="checkbox" value="(tag:product= Đá Xà cừ )"
                                                        data-value="da-xa-cu" />
                                                    <span> Đá Xà cừ </span>
                                                </label>
                                            </li>

                                            <li
                                                class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                                                <label data-filter="Đá Cubic Zirconia" data-filter1="da-cubic-zirconia"
                                                    class="filter-vendor__item custom-filter-input da-cubic-zirconia">
                                                    <input type="checkbox" value="(tag:product=Đá Cubic Zirconia)"
                                                        data-value="da-cubic-zirconia" />
                                                    <span>Đá Cubic Zirconia</span>
                                                </label>
                                            </li>

                                            <li
                                                class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                                                <label data-filter="Đá Zirconia" data-filter1="da-Zirconia"
                                                    class="filter-vendor__item custom-filter-input da-Zirconia">
                                                    <input type="checkbox" value="(tag:product=Đá Zirconia)"
                                                        data-value="da-Zirconia" />
                                                    <span>Đá Zirconia</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Các phần tử filter -->
                            <div class="header_filter_chosen">
                                <span class="filter_chosen price" data-value="0:max">0 : max <a><span></span></a></span>
                                <span class="filter_chosen price" data-value="0-1-000-000">0 : 1.000.000đ
                                    <a><span></span></a></span>
                                <span class="filter_chosen price" data-value="1-000-000-3-000-000">1.000.000đ :
                                    3.000.000đ <a><span></span></a></span>
                                <span class="filter_chosen price" data-value="3-000-000-5-000-000">3,000.000đ :
                                    5.000.000đ <a><span></span></a></span>
                                <span class="filter_chosen price" data-value="5-000-000-7-000-000">5.000.000đ :
                                    7.000.000đ <a><span></span></a></span>
                                <span class="filter_chosen price" data-value="7-000-000-10-000-000">7.000.000đ :
                                    10.000.000đ <a><span></span></a></span>

                                <span class="filter_chosen" data-value="vang">Vàng<a><span></span></a></span>

                                <span class="filter_chosen" data-value="bac">Bạc<a><span></span></a></span>

                                <span class="filter_chosen" data-value="da-xa-cu">
                                    Đá Xà cừ <a><span></span></a></span>

                                <span class="filter_chosen" data-value="da-cubic-zirconia">Đá Cubic Zirconia
                                    <a><span></span></a></span>

                                <span class="filter_chosen" data-value="da-Zirconia">Đá Zirconia
                                    <a><span></span></a></span>
                                <span class="clear_all"><a href="javascript:void(0)">Bỏ lọc</a></span>
                            </div>
                            <div class="bottom-filter">
                                <button class="btn-custom-filter">ÁP DỤNG</button>
                                <button class="cancel-filter">HỦY</button>
                            </div>
                        </div>
                    </div>
                    <!-- bỏ qua file js riêng ko sài được -->
                    <!-- bao gồm thư viện jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $(".custom-filter-input input").click(function () {
                                // lấy giá trị của thuộc tính data-value của ô lựa chọn đã được nhấp vào và lưu trữ vào biến value
                                var value = $(this).attr("data-value");
                                console.log(value);
                                $(
                                    //hiển thị giá trị đã chọn trong bộ lọc
                                    ".header_filter_chosen .filter_chosen[data-value=" +
                                    value +
                                    "]"
                                ).toggleClass("show_tag");

                                var check_filter = false;
                                $(".filter_chosen").each(function () {
                                    if ($(this).hasClass("show_tag")) {
                                        check_filter = true;
                                    }
                                });
                                if (check_filter) {
                                    $(".clear_all").addClass("show_btn");
                                } else {
                                    $(".clear_all").removeClass("show_btn");
                                }
                            });

                            $(".clear_all a").click(function () {
                                $(".filter_chosen.show_tag a").trigger("click");
                            });

                            $(".filter-color label").click(function () {
                                $(this).toggleClass("active");
                            });

                            $(".header_filter_chosen .filter_chosen > a").click(
                                function () {
                                    var $parent = $(this).parent();
                                    //      $(this).parent('.filter_chosen').removeClass('show_tag');

                                    var val = $parent.attr("data-value");
                                    $(".custom-filter-input[data-filter1=" + val + "]")
                                        .find("input")
                                        .trigger("click");
                                }
                            );
                            $(".header_filter_chosen .filter_chosen.price > a").click(
                                function () {
                                    var $parent = $(this).parent();
                                    var val = $parent.attr("data-value");
                                    $(".custom-filter-input[data-filter1=0-max]")
                                        .find("input")
                                        .trigger("click");
                                }
                            );
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            $(".filter-custom > span").click(function () {
                                $(".groupFilterNew").toggle("fast");
                            });
                            $(".btn-custom-filter").click(function () {
                                $(".groupFilterNew").hide();
                            });
                            $(".cancel-filter").click(function () {
                                $(".clear_all > a").trigger("click");
                            });
                        });
                    </script>
                    <!------------- Hiện thị số lượng sản phẩm---------------- -->
                    <h3 class="trigger-filter--separator">|</h3>
                    <!-- Hiển thị sản phẩm -->
                    <?php
                    // Kiểm tra xem có tham số danh mục được truyền không
                    if (isset($_GET['iddm'])) {
                        $iddm = $_GET['iddm'];

                        // Kiểm tra nếu danh mục là "TẤT CẢ"
                        if ($iddm === 'tatca') {
                            // Hiển thị tất cả sản phẩm
                            $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                            FROM tbl_sanpham sp
                            LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                            LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                            GROUP BY sp.ma_san_pham
                            ORDER BY RAND()
                            ";
                        } else {
                            // Hiển thị sản phẩm theo danh mục cụ thể
                            $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                            FROM tbl_sanpham sp
                            LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                            LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                            WHERE sp.ma_danh_muc IN (SELECT ma_danh_muc FROM tbl_danhmuc WHERE ma_danh_muc = $iddm)
                            GROUP BY sp.ma_san_pham
                            ORDER BY RAND()
                            ";
                        }
                    } else {
                        // Hiển thị tất cả sản phẩm nếu không có tham số danh mục
                        $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                        FROM tbl_sanpham sp
                        LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                        LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                        GROUP BY sp.ma_san_pham
                        ORDER BY RAND()
                        ";
                    }
                    $link = null;
                    taoKetNoi($link);
                    $result = chayTruyVanTraVeDL($link, $query_list_products);
                    // Đếm số lượng sản phẩm được trả về                 
                    $total_products_displayed = mysqli_num_rows($result);
                    giaiPhongBoNho($link, $result);
                    ?>
                    <div class="toolbar-amount" id="toolbar-amount">
                        <!-- Hiển thị: -->
                        <span class="toolbar-number"><?php echo $total_products_displayed; ?></span>
                        sản phẩm
                    </div>
                </div>
                <!----------- DROPDOWN ------------>
                <!-- Phần HTML -->
                <div class="prod-dropdown">
                    <label class="prod-dropdown--left">
                        <i class="fa-solid fa-arrow-up-wide-short"></i> Sắp xếp:
                    </label>
                    <div class="prod-dropdown--right">
                        <div class="prod-dropdown__input-box"></div>
                        <div class="prod-dropdown__list">
                            <input type="radio" name="drop1" id="id1" class="radio" <?php if (!isset($_GET['sort']) || $_GET['sort'] === 'default')
                                echo 'checked'; ?> />
                            <label for="id1">
                                <a href="danhmuc.php?sort=default" class="name">Mặc định</a>
                            </label>

                            <input type="radio" name="drop1" id="id2" class="radio" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'low_to_high')
                                echo 'checked'; ?> />
                            <label for="id2">
                                <a href="danhmuc.php?sort=low_to_high" class="name">Giá từ thấp tới cao</a>
                            </label>

                            <input type="radio" name="drop1" id="id3" class="radio" <?php if (isset($_GET['sort']) && $_GET['sort'] === 'high_to_low')
                                echo 'checked'; ?> />
                            <label for="id3">
                                <a href="danhmuc.php?sort=high_to_low" class="name">Giá từ cao tới thấp</a>
                            </label>
                        </div>
                    </div>
                </div>
                <?php
                // Kiểm tra xem người dùng đã chọn một tùy chọn trong dropdown chưa
                if (isset($_GET['sort'])) {
                    $sortOption = $_GET['sort'];

                    // Kiểm tra giá trị của $sortOption để xác định cách sắp xếp
                    switch ($sortOption) {
                        case 'default':
                            // Sắp xếp theo mặc định
                            $orderBy = "ORDER BY sp.ma_san_pham ASC";
                            break;
                        case 'low_to_high':
                            // Sắp xếp theo giá từ thấp đến cao
                            $orderBy = "ORDER BY sp.gia_goc ASC";
                            break;
                        case 'high_to_low':
                            // Sắp xếp theo giá từ cao đến thấp
                            $orderBy = "ORDER BY sp.gia_goc DESC";
                            break;
                        default:
                            // Trường hợp không hợp lệ, sắp xếp theo mặc định
                            $orderBy = "ORDER BY sp.ma_san_pham ASC";
                            break;
                    }
                } else {
                    // Mặc định sắp xếp theo mặc định
                    $orderBy = "ORDER BY sp.ma_san_pham ASC";
                }

                $link = null;
                taoKetNoi($link);
                // if (isset($_POST)) {
                //     $_gia_goc = $_POST["gia_goc"];
                // }
                // Tiếp tục sử dụng $orderBy trong truy vấn để sắp xếp kết quả
                $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                        FROM tbl_sanpham sp
                        LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                        LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                        GROUP BY sp.ma_san_pham
                        $orderBy";
                ?>

                <!-- <div class="prod-dropdown">
                    <label class="prod-dropdown--left">
                        <i class="fa-solid fa-arrow-up-wide-short"></i> Sắp xếp:
                    </label>
                    <div class="prod-dropdown--right">
                        <div class="prod-dropdown__input-box"></div>
                        <div class="prod-dropdown__list">
                            <input type="radio" name="drop1" id="id1" class="radio" />
                            <label for="id1">
                                <span class="name">Mặc định</span>
                            </label>

                            <input type="radio" name="drop1" id="id2" class="radio" />
                            <label for="id2">
                                <span class="name">Giá từ thấp tới cao</span>
                            </label>

                            <input type="radio" name="drop1" id="id3" class="radio" />
                            <label for="id3">
                                <span class="name">Giá từ cao tới thấp</span>
                            </label>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- jvs DROPDOWN -->
            <script>
                var input = document.querySelector(".prod-dropdown__input-box");
                input.onclick = function () {
                    this.classList.toggle("open");
                    let list = this.nextElementSibling;
                    if (list.style.maxHeight) {
                        list.style.maxHeight = null;
                        list.style.boxShadow = null;
                    } else {
                        list.style.maxHeight = list.scrollHeight + "px";
                        list.style.boxShadow =
                            "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
                    }
                };

                var rad = document.querySelectorAll(".radio");
                rad.forEach((item) => {
                    item.addEventListener("change", () => {
                        input.innerHTML = item.nextElementSibling.innerHTML;
                        input.click();
                    });
                });
            </script>

            <!--------------- Tổng hợp các sản phẩm-------------->
            <div>
                <div class="prod-list">
                    <div class="prod-list__grid">
                        <!-- Hiển thị sản phẩm -->
                        <?php
                        // Thực hiện truy vấn SQL để lấy sản phẩm
                        $link = null;
                        taoKetNoi($link);
                        // Kiểm tra xem có tham số danh mục được truyền không
                        if (isset($_GET['iddm'])) {
                            $iddm = $_GET['iddm'];

                            // Kiểm tra nếu danh mục là "TẤT CẢ"
                            if ($iddm === 'tatca') {
                                // Hiển thị tất cả sản phẩm
                                $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                            FROM tbl_sanpham sp
                            LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                            LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                            GROUP BY sp.ma_san_pham
                            ORDER BY RAND()
                            ";
                            } else {
                                // Hiển thị sản phẩm theo danh mục cụ thể
                                $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                            FROM tbl_sanpham sp
                            LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                            LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                            WHERE sp.ma_danh_muc IN (SELECT ma_danh_muc FROM tbl_danhmuc WHERE ma_danh_muc = $iddm)
                            GROUP BY sp.ma_san_pham
                            ORDER BY RAND()
                            ";
                            }
                        } else {
                            // Hiển thị tất cả sản phẩm nếu không có tham số danh mục
                            $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                        FROM tbl_sanpham sp
                        LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                        LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                        GROUP BY sp.ma_san_pham
                        ORDER BY RAND()
                        ";
                        }
                        $link = null;
                        taoKetNoi($link);
                        // Đếm số lượng sản phẩm
                        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) AS so_luong_san_pham FROM ($query_list_products) AS subquery");
                        $so_luong_san_pham = mysqli_fetch_assoc($result)["so_luong_san_pham"];

                        // Xác định trang hiện tại
                        $trang_hien_tai = isset($_GET["trang"]) ? $_GET["trang"] : 1;
                        $productsPerPage = 12;

                        // Tính vị trí bắt đầu của sản phẩm trên trang hiện tại
                        $start = ($trang_hien_tai - 1) * $productsPerPage;

                        // Thêm điều kiện LIMIT vào câu truy vấn để chỉ lấy số lượng sản phẩm mong muốn
                        $query_list_products .= " LIMIT $start, $productsPerPage";

                        // Thực hiện truy vấn SQL để lấy sản phẩm
                        $result = chayTruyVanTraVeDL($link, $query_list_products);

                        // Tính số trang
                        $so_trang = ceil($so_luong_san_pham / $productsPerPage);


                        // Xử lý dữ liệu trả về
                        // Hiển thị danh sách sản phẩm
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_price = $row["gia_giam"];
                            $product_sale_price = $row["gia_goc"];
                            $avg_rating = $row["avg_rating"];
                            ?>
                            <section class="prod-list__item">
                                <div class="prod-list__item__image">
                                    <a href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'>
                                        <img class="prod-list__item__img1" loading="lazy"
                                            src="./img/<?php echo $row["hinh_anh_1"]; ?>" />
                                    </a>
                                    <!-- Hover heart and cart -->
                                    <div class="button-heart-cart-hover">
                                        <a href="">
                                            <img src="./icon/index-heart.svg" class="prod-list__item__image--heart-hover" />
                                        </a>
                                        <a href="">
                                            <img src="./icon/index-cart.svg" class="prod-list__item__image--cart-hover" />
                                        </a>
                                    </div>
                                </div>
                                <div class="prod-list__item__inner">
                                    <div class="prod-list__item__inner--child">
                                        <div class="prod-list__item__info">
                                            <div class="prod-list__item__info--title">
                                                <a
                                                    href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'><?php echo $row["ten_san_pham"]; ?></a>
                                            </div>
                                            <div class="prod-list__item__info--masp"><?php echo $row["ten_danh_muc"]; ?>
                                            </div>
                                        </div>
                                        <div class="prod-list__item__info--price-fb">
                                            <div class="prod-list__item--price">
                                                <?php
                                                if ($product_price != 0) {
                                                    echo '<span class="prod-list__item__info--price">' . number_format($product_price, 0, ',', '.') . ' VNĐ </span>';
                                                    echo '<span class="prod-list__item__info--price-sales">' . number_format($product_sale_price, 0, ',', '.') . ' VNĐ </span>';
                                                } else {
                                                    echo '<span class="prod-list__item__info--price">' . number_format($product_sale_price, 0, ',', '.') . ' VNĐ </span>';
                                                }
                                                ?>
                                            </div>
                                            <div class="prod-list__item__info--star-icon">
                                                <img src="./icon/index-star.svg" alt="" class="info--star-icon" />
                                                <div class="prod-list__item__info--fb">
                                                    <?php echo number_format($avg_rating, 1, '.'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php
                        }
                        giaiPhongBoNho($link, $result);
                        ?>
                    </div>
                </div>

                <!---------------------- PAGINATION PHÍA DƯỚI CÁC SẢN PHẨM --------------------------------->
                <!-- Phân trang -->
                <div class="prod-list__pagination">
                    <div class="list-number"> <?php $trang_truoc = 0;
                    $trang_sau = 0;
                    $trang_hien_tai = isset($_GET["trang"]) ? $_GET["trang"] : 1;
                    if ($trang_hien_tai == 1) {
                        $trang_truoc = 1;
                    } else
                        ($trang_truoc = $trang_hien_tai - 1);
                    if ($trang_hien_tai == $so_trang) {
                        $trang_sau = $so_trang;
                    } else
                        ($trang_sau = $trang_hien_tai + 1); ?>
                        <button> <?php echo "<a href='./danhmuc.php?trang=" . $trang_truoc . "'>&lt &lt</a>" ?>
                        </button>
                        <?php for ($i = 1; $i <= $so_trang; $i = $i + 1) {
                            echo "<button><a href='./danhmuc.php?trang=" . $i . "'>$i</a></button>";
                        } ?>
                        <button> <?php echo "<a href='./danhmuc.php?trang=" . $trang_sau . "'>&gt &gt</a>" ?>
                        </button>
                    </div>
                </div>
                <div class="prod-third-line"></div>
        </article>

        <!------------------ GỢI Ý SẢN PHẨM----------------------->
        <div class="suggest-prod">
            <h2 class="suggest-prod--text">GỢI Ý CHO BẠN</h2>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <!-- Hiển thị 10 sp -->
                    <?php
                    $link = null;
                    taoKetNoi($link);

                    // Kết nối và lấy dữ liệu từ CSDL
                    $query_list_products = "SELECT sp.*, dm.ten_danh_muc, AVG(rv.so_sao) AS avg_rating
                    FROM tbl_sanpham sp
                    LEFT JOIN tbl_review rv ON sp.ma_san_pham = rv.ma_san_pham
                    LEFT JOIN tbl_danhmuc dm ON sp.ma_danh_muc = dm.ma_danh_muc
                    WHERE sp.ma_danh_muc IN (SELECT ma_danh_muc FROM tbl_danhmuc)
                    GROUP BY sp.ma_san_pham
                    ORDER BY RAND() Limit 12";

                    $result = chayTruyVanTraVeDL($link, $query_list_products);
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Hiển thị sản phẩm
                        $product_price = $row["gia_giam"];
                        $product_sale_price = $row["gia_goc"];
                        $avg_rating = $row["avg_rating"];
                        ?>
                        <div class="card swiper-slide">
                            <!-- <section class="prod-list__item"> -->
                            <div class="prod-list__item__image">
                                <a href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'>
                                    <img class="prod-list__item__img1" loading="lazy"
                                        src="./img/<?php echo $row["hinh_anh_1"]; ?>" />
                                </a>
                                <span class="product-sale-tag">
                                    <span> HOT!</span>
                                </span>
                                <!-- Hover heart and cart -->
                                <div class="button-heart-cart-hover">
                                    <a href="">
                                        <img src="./icon/index-heart.svg" class="prod-list__item__image--heart-hover" />
                                    </a>
                                    <a href="">
                                        <img src="./icon/index-cart.svg" class="prod-list__item__image--cart-hover" />
                                    </a>
                                </div>
                            </div>
                            <div class="prod-list__item__inner">
                                <div class="prod-list__item__inner--child">
                                    <div class="prod-list__item__info">
                                        <div class="prod-list__item__info--title">
                                            <a
                                                href='./sanpham.php?id=<?php echo $row["ma_san_pham"]; ?>'><?php echo $row["ten_san_pham"]; ?></a>
                                        </div>
                                        <div class="prod-list__item__info--masp"><?php echo $row["ten_danh_muc"]; ?>
                                        </div>
                                    </div>
                                    <div class="prod-list__item__info--price-fb">
                                        <div class="prod-list__item--price">
                                            <?php
                                            if ($product_price != 0) {
                                                echo '<span class="prod-list__item__info--price">' . number_format($product_price, 0, ',', '.') . ' VNĐ </span>';
                                                echo '<span class="prod-list__item__info--price-sales">' . number_format($product_sale_price, 0, ',', '.') . ' VNĐ </span>';
                                            } else {
                                                echo '<span class="prod-list__item__info--price">' . number_format($product_sale_price, 0, ',', '.') . ' VNĐ </span>';
                                            }
                                            ?>
                                        </div>
                                        <div class="prod-list__item__info--star-icon">
                                            <img src="./icon/index-star.svg" alt="" class="info--star-icon" />
                                            <div class="prod-list__item__info--fb">
                                                <?php echo number_format($avg_rating, 1, '.'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    giaiPhongBoNho($link, $result);
                    ?>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper JS -->
        <script src="js/swiper-bundle.min.js"></script>
        <!-- card-sider -->
        <script>
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide: "true",
                fade: "true",
                grabCursor: "true",
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    },
                    1000: {
                        slidesPerView: 4,
                    },
                },
            });
        </script>
        <!-------------- DANH MỤC ƯA CHUỘNG -------------->
        <div class="third-line"></div>
        <div class="explore-dm">
            <h2 class="explore-dm--text">DANH MỤC ƯA CHUỘNG</h2>
            <div class="explore-dm--content" style="width: 70%; display: inline-block">
                <p>
                    Với sự sáng tạo không ngừng, chúng tôi tin rằng mỗi sản phẩm sẽ góp
                    phần tạo nên phong cách của riêng bạn và là điểm nhấn nhá tuyệt vời
                    mỗi khi bạn xuất hiện
                </p>
            </div>
            <div class="container-listing">
                <!-- ALL -->
                <div class="listing-title">
                    <a href="" class="listing-tile__link">
                        <figure class="listing-tile__image">
                            <img class="" src="./img/danhmuc-ShopAll1.jpeg" />
                        </figure>
                        <div class="listing-tile__content">
                            <p class="listing-tile__title" id="TatCa">TẤT CẢ</p>
                        </div>
                    </a>
                </div>
                <!-- Day chuyen -->
                <div class="listing-title">
                    <a href="" class="listing-tile__link">
                        <figure class="listing-tile__image">
                            <img class="" src="./img/day-chuyen.webp" />
                        </figure>
                        <div class="listing-tile__content">
                            <p class="listing-tile__title">DÂY CHUYỀN</p>
                        </div>
                    </a>
                </div>
                <!-- Bong tai -->
                <div class="listing-title">
                    <a href="" class="listing-tile__link">
                        <figure class="listing-tile__image">
                            <img class="" src="./img/bong-tai.jpg" />
                        </figure>
                        <div class="listing-tile__content">
                            <p class="listing-tile__title">BÔNG TAI</p>
                        </div>
                    </a>
                </div>
                <!-- nhan -->
                <div class="listing-title">
                    <a href="" class="listing-tile__link">
                        <figure class="listing-tile__image">
                            <img class="" src="./img/nhan.webp" />
                        </figure>
                        <div class="listing-tile__content">
                            <p class="listing-tile__title">NHẪN</p>
                        </div>
                    </a>
                </div>
                <!-- lắc tay -->
                <div class="listing-title">
                    <a href="" class="listing-tile__link">
                        <figure class="listing-tile__image">
                            <img class="" src="./img/lac-tay.webp" />
                        </figure>
                        <div class="listing-tile__content">
                            <p class="listing-tile__title">VÒNG TAY</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter -->
    <section id="newsletter">
        <div class="container">
            <div class="news">
                <p class="news-content">
                    Đăng ký bản tin của LUXE để cập nhật thông tin mới nhất về chương
                    trình giảm giá và sản phẩm!
                </p>
                <form class="news-register">
                    <input type="text" name="dangKy" id="dangKy" placeholder="Nhập Email của bạn" class="text-reg" />
                    <button class="btn register">Đăng ký</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>