<div id="main-content" class="content">
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
            <button class="btn btn-dark" id="toggleSidebar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <span class="navbar-brand ms-3">Welcome Admin</span>
        </div>
    </nav>

    <!-- <h2>Dashboard nội dung</h2>
    <p>Nội dung quản lý hiển thị tại đây...</p> -->
    <?php
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
    } else {
        $query = '';
    }
    switch ($query) {
        case 'hienThi':
            include 'modules/hienThi.php';
            break;
        case 'them':
            include 'modules/them.php';
            break;
        case 'sua':
            include 'modules/sua.php';
            break;
        case 'xoa':
            include 'modules/xoa.php';
            break;
        case 'timKiem':
            include 'modules/timKiem.php';
            break;
        case 'thongKe':
            include 'modules/thongKe.php';
            break;
        default:
            echo "<h3 class='home-title text-center mt-3'>Chào mừng đến với trang quản lý khách hàng</h3>";
    }
    ?>
</div>