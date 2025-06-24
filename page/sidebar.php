<nav id="sidebar" class="sidebar">
    <a href="index.php"><i class="fa-solid fa-house me-2"></i>Trang chủ</a>
    <a href="index.php?query=hienThi"><i class="fa-solid fa-users me-2"></i>Hiển thị</a>
    <a href="index.php?query=them"><i class="fa-solid fa-user-plus me-2"></i>Thêm</a>
    <a href="index.php?query=sua"><i class="fa-solid fa-user-pen me-2"></i>Sửa</a>
    <a href="index.php?query=xoa"><i class="fa-solid fa-user-minus me-2"></i>Xóa</a>
    <a href="index.php?query=timKiem"><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</a>
    <a href="index.php?query=thongKe"><i class="fa-solid fa-chart-bar me-2"></i>Thống kê</a>
</nav>

<script>
    const links = [...document.querySelectorAll('#sidebar a')];
    console.log(links);
    links.forEach(element => {
        element.addEventListener("click", function(){
            links.forEach(item => item.classList.remove('link-active'));
            element.classList.add('link-active');
        })
        
    })
</script>