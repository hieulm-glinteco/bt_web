<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/uistyle.css">
</head>

<body class="position-relative">
    <div class="header">
        <ul>
            <li class="header-logo">
                <a href="#">
                    <img src="image/Leaf_logo_organic_generated.jpg" alt="logo website">
                </a>
            </li>
            <li class="header-menu">
                <a href="" class="home">Trang chủ</a>
            </li>
            <li class="header-menu">
                <a href="#contact" class="contact">Liên hệ</a>
            </li>
            <li class="header-menu">
                <a href="#cart-detail" class="cart">
                    <i class="fa-solid fa-cart-shopping position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">0</span>
                    </i>
                    <span>Giỏ hàng</span>
                </a>
            </li>
            <li class="header-menu">
                <a href="http://localhost/web23/login.php">Đăng nhập</a>
            </li>
            
        </ul>
        <!-- <div class="header-logo">
            <a href="#">
                <img src="image/Leaf_logo_organic_generated.jpg" alt="logo website">
            </a>
        </div>

        <div class="header-menu">
            <a href="" class="home">Trang chủ</a>

            <a href="" class="contact">Liên hệ</a>

            <span class="hotline">HOTLINE: 1900 6750</span>

            <a href="" class="cart">
                <i class="fa-solid fa-cart-shopping position-relative">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">0</span>
                </i>
                <span>Giỏ hàng</span>
            </a>

            <a href="http://127.0.0.1:5500/signIn.html">Đăng nhập</a>
        </div> -->
    </div>

    <div class="section-one">
        <img src="image/Free Photo _ Top view of healthy fruits with copy space.jfif" alt="">
    </div>

    <div class="section-two">
        <div class="box">
            <div class="box-icon">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div class="box-content">
                <h3>Freeship</h3>
                <span>Miễn phí vận chuyển</span>
            </div>
        </div>
        <div class="box">
            <div class="box-icon">
                <i class="fa-solid fa-right-left"></i>
            </div>
            <div class="box-content">
                <h3>Hoàn trả</h3>
                <span>Trong 30 ngày miễn phí</span>
            </div>
        </div>
        <div class="box">
            <div class="box-icon">
                <i class="fa-brands fa-cc-visa"></i>
            </div>
            <div class="box-content">
                <h3>Thanh toán</h3>
                <span>Hỗ trợ nhiều hình thức</span>
            </div>
        </div>
        <div class="box">
            <div class="box-icon">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="box-content">
                <h3>Hỗ trợ</h3>
                <span>24/7</span>
            </div>
        </div>
    </div>

    <div class="section-three">
        <h2 class="st-title">Sản phẩm hot</h2>
        <div class="st-display d-flex justify-content-between">
            <div class="product">
                <div class="img-wrapper position-relative">
                    <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                    <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#ordersuccess">Mua ngay</button>
                    <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                </div>
                <h3 class="product-name">Táo Mỹ</h3>
                <span class="product-price">100.000đ</span>
            </div>
            <div class="product">
                <div class="img-wrapper position-relative">
                    <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                    <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#ordersuccess">Mua ngay</button>
                    <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                </div>
                <h3 class="product-name">Táo Mỹ</h3>
                <span class="product-price">100.000đ</span>
            </div>
            <div class="product">
                <div class="img-wrapper position-relative">
                    <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                    <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#ordersuccess">Mua ngay</button>
                    <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                </div>
                <h3 class="product-name">Táo Mỹ</h3>
                <span class="product-price">100.000đ</span>
            </div>
            <div class="product">
                <div class="img-wrapper position-relative">
                    <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                    <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#ordersuccess">Mua ngay</button>
                    <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                </div>
                <h3 class="product-name">Táo Mỹ</h3>
                <span class="product-price">100.000đ</span>
            </div>
        </div>
    </div>

    <div class="section-four">
        <div class="img-wrapper">
            <img src="image/2banner_1.webp" alt="">
        </div>
        <div class="img-wrapper">
            <img src="image/2banner_2.webp" alt="">
        </div>
    </div>

    <div class="section-five d-flex flex-column align-items-center">
        <h2 class="sf-title">Danh sách sản phẩm</h2>
        <div class="menu-product">
            <button class="btn rounded-pill all">Tất cả</button>
            <button class="btn rounded-pill">Hoa quả</button>
            <button class="btn rounded-pill">Ngũ cốc</button>
            <button class="btn rounded-pill">Rau</button>
            <button class="btn rounded-pill">Thịt</button>
        </div>
        <div class="display-products d-flex flex-column">
            <div class="row d-flex justify-content-between">
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
                <div class="product">
                    <div class="img-wrapper position-relative">
                        <img src="image/tao-do-8.jpg" alt="" class="product-img position-relative">
                        <button class="buy-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#ordersuccess">Mua ngay</button>
                        <button class="watch-now position-absolute rounded-pill" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" type="button">Xem ngay</button>
                    </div>
                    <h3 class="product-name">Táo Mỹ</h3>
                    <span class="product-price">100.000đ</span>
                </div>
            </div>
        </div>
        <button class="more-products rounded-pill">
            Xem thêm
        </button>
    </div>

    <div class="footer d-flex justify-content-between flex-row">
        <div class="footer-left">
            <img src="image/Leaf_logo_organic_generated-removebg-preview.png" alt="">
            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Tầng 12A tòa nhà Discovery, ga Chùa Hà, Cầu Giấy, Hà Nội</span>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
                <span>1900 6750</span>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>support@gmail.com</span>
            </div>
        </div>
        <div class="footer-right" id="contact">
            <form action="" method="post">
                <div>
                    <input type="text" placeholder="Họ tên" class="name">
                    <input type="email" placeholder="Email" class="email">
                </div>
                <input type="text" placeholder="Nội dụng" class="content">
                <input type="submit" class="btn send" name="send"></button>
            </form> 
        </div>
    </div>

    <div class="offcanvas" id="offcanvas" tabindex="-1">
        <div class="offcanvas-body d-flex justify-content-between">
            <div class="off-left">
                <img src="/image/hinh-anh-qua-tao.jpg" alt="">
            </div>
            <div class="off-right">
                <div>
                    <h2 class="product-name">Táo Mỹ</h2>
                    <button class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="quantity d-flex justify-content-evenly">
                    <button><i class="fa-solid fa-minus"></i></button>
                    <span>1</span>
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h3>100.000đ</h3>
                    <button class="rounded-pill buy">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Mua ngay
                    </button>
                </div>
                <p>Nguồn gốc: Mỹ</p>
                <p>Khối lượng: 1kg/hộp</p>
                <p>Táo Mỹ là loại trái cây nhập khẩu cao cấp, nổi bật với vị giòn ngọt tự nhiên, giàu dinh dưỡng
                    và an
                    toàn cho sức khỏe. Được trồng theo tiêu chuẩn khắt khe, táo Mỹ cung cấp nhiều vitamin, chất
                    xơ và
                    chất chống oxy hóa, tốt cho tim mạch và hệ tiêu hóa. Các loại phổ biến như táo Envy, Gala,
                    Fuji hay
                    Granny Smith đều có hương vị đặc trưng, phù hợp để ăn trực tiếp hoặc chế biến món ăn.</p>
            </div>
        </div>
    </div>

    <div class="offcanvas" id="ordersuccess">
        <div class="offcanvas-body d-flex justify-content-center align-items-center flex-column">
            <h2>Cảm ơn bạn!</h2>
            <p>Sản phẩm đã được thêm vào giỏ hàng thành công</p>
            <button class="btn" data-bs-dismiss="offcanvas">OK</button>
        </div>
    </div>

    <div class="cart-detail d-flex position-fixed flex-column" id="cart-detail">
        <div class="cart-title">
            <i class="fa-solid fa-cart-shopping position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">0</span>
            </i>
            <i class="fa-solid fa-chevron-up"></i>
        </div>

    </div>

    <script src="/javascript/script.js"></script>
</body>

</html>