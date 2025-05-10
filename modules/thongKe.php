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

<h2>Thống kê khách hàng</h2>
<form method="POST">
    <label>Thống kê theo:</label>
    <select name="kieuThongKe">
        <option value="tuoi">Tuổi</option>
        <option value="gioitinh">Giới tính</option>
        <option value="diachi">Địa chỉ</option>
    </select>
    <button type="submit" name="thongke">Thống kê</button>
</form>
<?php
include(__DIR__ . '/../config/config.php');

if (isset($_POST['thongke'])) {
    $kieuThongKe = $_POST['kieuThongKe'];

    if ($kieuThongKe == 'tuoi') {
        $sql = "SELECT YEAR(CURDATE()) - YEAR(ngaySinh) AS tuoi, COUNT(*) AS soLuong 
                FROM tbl_khachhang
                GROUP BY tuoi
                ORDER BY tuoi";
    } elseif ($kieuThongKe == 'gioitinh') {
        $sql = "SELECT gioiTinh, COUNT(*) AS soLuong 
                FROM tbl_khachhang
                GROUP BY gioiTinh";
    } elseif ($kieuThongKe == 'diachi') {
        $sql = "SELECT diaChi, COUNT(*) AS soLuong 
                FROM tbl_khachhang
                GROUP BY diaChi";
    }

    $result = mysqli_query($conn, $sql);

    echo "<h3>Kết quả thống kê:</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    if ($kieuThongKe == 'tuoi') {
        echo "<tr><th>Tuổi</th><th>Số lượng</th></tr>";
    } elseif ($kieuThongKe == 'gioitinh') {
        echo "<tr><th>Giới tính</th><th>Số lượng</th></tr>";
    } elseif ($kieuThongKe == 'diachi') {
        echo "<tr><th>Địa chỉ</th><th>Số lượng</th></tr>";
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
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