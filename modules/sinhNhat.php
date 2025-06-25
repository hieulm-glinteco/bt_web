<?php
; // chứa biến $conn kết nối DB

// Lấy ngày sinh gồm tháng và ngày hôm nay
$today_md = date('m-d');

// Câu SQL chỉ chọn khách sinh nhật hôm nay
$sql = "
  SELECT maKH, hoTen, ngaySinh, gioiTinh, diaChi, soDienThoai, email
  FROM tbl_khachhang
  WHERE DATE_FORMAT(ngaySinh, '%m-%d') = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $today_md);
$stmt->execute();
$result = $stmt->get_result();
?>

<p class="text-white hienThi-title">Khách hàng sinh nhật hôm nay (<?php echo $today_md; ?>)</p>

<table class="hienThi">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã KH</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows === 0) {
            echo '<tr><td colspan="8">Không có khách hàng nào sinh nhật hôm nay.</td></tr>';
        } else {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo '<tr>';
                echo '<td data-label="STT">' . $i . '</td>';
                echo '<td data-label="Mã KH">' . htmlspecialchars($row['maKH']) . '</td>';
                echo '<td data-label="Họ tên">' . htmlspecialchars($row['hoTen']) . '</td>';
                echo '<td data-label="Ngày sinh">' . date('d-m-Y', strtotime($row['ngaySinh'])) . '</td>';
                echo '<td data-label="Giới tính">' . htmlspecialchars($row['gioiTinh']) . '</td>';
                echo '<td data-label="Địa chỉ">' . htmlspecialchars($row['diaChi']) . '</td>';
                echo '<td data-label="Điện thoại">' . htmlspecialchars($row['soDienThoai']) . '</td>';
                echo '<td data-label="Email">' . htmlspecialchars($row['email']) . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

<style>
/* CSS giữ nguyên giống từ code bạn dùng */
.hienThi {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
thead {
    background-color: #007bff;
    color: #fff;
}
th, td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
tbody tr:hover {
    background-color: #f1f1f1;
}
/* Responsive */
@media (max-width: 768px) {
    .hienThi, thead, tbody, th, td, tr { display: block; }
    thead { display: none; }
    tbody tr {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
    }
    td {
        text-align: right;
        position: relative;
        padding-left: 50%;
    }
    td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        width: 45%;
        padding-right: 10px;
white-space: nowrap;
        text-align: left;
        font-weight: bold;
        color: #333;
    }
}
</style>