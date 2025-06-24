<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include("config/config.php");
    include("page/sidebar.php");
    include("page/overlay.php");
    include("page/content.php");
    ?>
    <script src="javascript/script.js">
    </script>

    <!-- <script>
        console.log(1);
        const links = [...document.querySelectorAll("#sidebar a")];
        console.log(links);

        links.forEach(element => {
            element.addEventListener("click", function () {
                // Xóa class active-link ở tất cả thẻ a trước
                links.forEach(item => item.classList.remove('active-link'));

                // Thêm class active-link cho thằng vừa click
                element.className = 'active-link';
            })
        });
    </script> -->
</body>

</html>

<!-- -Sửa lại phần xóa, sửa, tìm kiếm = hiển thị toàn bộ bảng trước r mới hiển thị bảng cần
-Sửa lại thống kê: theo độ tuổi, theo giới tính = thêm nút chọn khoảng tuổi, giới tính để hiện ra bảng thông tin 
-Sửa lại thống kê: sau khi nhấn thống kê thì vẫn phải giữ option
-->