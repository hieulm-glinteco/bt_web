<?php
// include(__DIR__ . '/../config/config.php');

// $sql = "SELECT
//     CASE 
//         WHEN TIMESTAMPDIFF(YEAR, ngaySinh, CURDATE()) < 20 THEN 'Dưới 20 tuổi'
//         WHEN TIMESTAMPDIFF(YEAR, ngaySinh, CURDATE()) BETWEEN 20 AND 40 THEN '20 - 40 tuổi'
//         ELSE 'Trên 40 tuổi'
//     END AS nhomTuoi,
//     COUNT(*) AS soLuong
// FROM tbl_khachhang
// GROUP BY nhomTuoi";

// $result = mysqli_query($conn, $sql);
?>

<!-- <h2>Thống kê khách hàng theo độ tuổi</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nhóm tuổi</th>
        <th>Số lượng khách hàng</th>
    </tr>

    <?php
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>
    //             <td>".$row['nhomTuoi']."</td>
    //             <td>".$row['soLuong']."</td>
    //           </tr>";
    // }
    ?>
</table> -->

<!-- <h2 class="text-white">Thống kê khách hàng</h2>
<form method="POST">
    <label>Thống kê theo:</label>
    <select name="kieuThongKe">
        <option value="tuoi">Tuổi</option>
        <option value="gioitinh">Giới tính</option>
        <option value="diachi">Địa chỉ</option>
    </select>
    <button type="submit" name="thongke">Thống kê</button>
</form> -->
<?php
// include(__DIR__ . '/../config/config.php');

// if (isset($_POST['thongke'])) {
//     $kieuThongKe = $_POST['kieuThongKe'];

//     if ($kieuThongKe == 'tuoi') {
//         $sql = "SELECT YEAR(CURDATE()) - YEAR(ngaySinh) AS tuoi, COUNT(*) AS soLuong 
//                 FROM tbl_khachhang
//                 GROUP BY tuoi
//                 ORDER BY tuoi";
//     } elseif ($kieuThongKe == 'gioitinh') {
//         $sql = "SELECT gioiTinh, COUNT(*) AS soLuong 
//                 FROM tbl_khachhang
//                 GROUP BY gioiTinh";
//     } elseif ($kieuThongKe == 'diachi') {
//         $sql = "SELECT diaChi, COUNT(*) AS soLuong 
//                 FROM tbl_khachhang
//                 GROUP BY diaChi";
//     }

//     $result = mysqli_query($conn, $sql);

//     echo "<h3 class='text-white'>Kết quả thống kê:</h3>";
//     echo "<table border='1' cellpadding='10' cellspacing='0'>";

//     if ($kieuThongKe == 'tuoi') {
//         echo "<tr><th>Tuổi</th><th>Số lượng</th></tr>";
//     } elseif ($kieuThongKe == 'gioitinh') {
//         echo "<tr><th>Giới tính</th><th>Số lượng</th></tr>";
//     } elseif ($kieuThongKe == 'diachi') {
//         echo "<tr><th>Địa chỉ</th><th>Số lượng</th></tr>";
//     }

//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr>";
//         foreach ($row as $value) {
//             echo "<td>" . $value . "</td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table>";
// }
?>

<form method="POST">
    <label>Thống kê theo:</label>
    <select name="kieuThongKe" id="kieuThongKe" onchange="hienThiLuaChon()">
        <option value="" disabled selected>-- Chọn kiểu thống kê --</option>
        <option value="tuoi">Độ tuổi</option>
        <option value="gioitinh">Giới tính</option>
    </select>

    <div id="chonTuoi" style="display:none;">
        <label>Chọn độ tuổi:</label>
        <select name="khoangTuoi">
            <option value="0-19">0-19</option>
            <option value="20-29">20-29</option>
            <option value="30-39">30-39</option>
            <option value="40-49">40-49</option>
            <option value="50-59">50-59</option>
            <option value="60-69">60-69</option>
        </select>
    </div>

    <div id="chonGioiTinh" style="display:none;">
        <label>Chọn giới tính:</label>
        <select name="gioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
    </div>

    <button type="submit" name="thongke">Thống kê</button>
</form>

<script>
    function hienThiLuaChon() {
        var kieu = document.getElementById("kieuThongKe").value;
        document.getElementById("chonTuoi").style.display = (kieu == 'tuoi') ? 'block' : 'none';
        document.getElementById("chonGioiTinh").style.display = (kieu == 'gioitinh') ? 'block' : 'none';
    }
</script>

<!-- <script>
    const thongKe = document.querySelector("#kieuThongKe");
    thongKe.firstElementChild.nextElementSibling.setAttribute("selected", "true");
</script> -->

<?php
include(__DIR__ . '/../config/config.php');

if (isset($_POST['thongke'])) {
    $kieuThongKe = $_POST['kieuThongKe'];
    $sql = "";

    if ($kieuThongKe == 'tuoi') {
        echo '
            <script>
                const thongKe = document.querySelector("#kieuThongKe");
                thongKe.firstElementChild.nextElementSibling.setAttribute("selected", "true");
            </script>
        ';
        $khoangTuoi = explode("-", $_POST['khoangTuoi']);
        $tuoiTu = (int)$khoangTuoi[0];
        $tuoiDen = (int)$khoangTuoi[1];

        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(ngaySinh) AS tuoi 
                FROM tbl_khachhang
                HAVING tuoi BETWEEN $tuoiTu AND $tuoiDen";
        echo "<h3 class='text-white'>Số khách hàng trong độ tuổi từ $tuoiTu đến $tuoiDen: ".mysqli_num_rows(mysqli_query($conn, $sql))."</h3>";
    } elseif ($kieuThongKe == 'gioitinh') {
        echo '
            <script>
                const thongKe = document.querySelector("#kieuThongKe");
                thongKe.lastElementChild.setAttribute("selected", "true");
            </script>
        ';
        $gioiTinh = $_POST['gioiTinh'];

        $sql = "SELECT * 
                FROM tbl_khachhang
                WHERE gioiTinh = '$gioiTinh'";
        echo "<h3 class='text-white'>Số khách hàng giới tính ".strtolower($gioiTinh).": ".mysqli_num_rows(mysqli_query($conn, $sql))."</h3>";
    }

    $result = mysqli_query($conn, $sql);

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Họ tên</th><th>Ngày sinh</th><th>Giới tính</th><th>Địa chỉ</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['maKH']}</td>
            <td>{$row['hoTen']}</td>
            <td>{$row['ngaySinh']}</td>
            <td>{$row['gioiTinh']}</td>
            <td>{$row['diaChi']}</td>
        </tr>";
    }
    echo "</table>";
}
?>


<style>
    h2,
    h3 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 500px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
        font-size: 18px;
        display: block;
        margin-bottom: 10px;
        color: #555;
    }

    form select,
    form button {
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 15px;
        font-size: 16px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    table {
        width: 90%;
        margin: 20px auto;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    table th,
    table td {
        padding: 12px 15px;
        text-align: center;
    }

    table th {
        background-color: #007bff;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    @media (max-width: 768px) {

        form,
        table {
            width: 95%;
        }
    }
</style>