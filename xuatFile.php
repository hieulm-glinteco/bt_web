
<?php
include 'C:\xampp\htdocs\web23\config\config.php';

$filename = "khachhang.csv";

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=' . $filename);

$output = fopen('php://output', 'w');

// Ghi tiêu đề cột
fputcsv($output, ['Mã KH', 'Họ tên', 'Ngày sinh', 'Giới tính', 'Địa chỉ', 'Số điện thoại', 'Email']);

// Lấy dữ liệu từ database
$sql = 'SELECT * FROM tbl_khachhang';
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['maKH'],
        $row['hoTen'],
        $row['ngaySinh'],
        ($row['gioiTinh'] == 1) ? 'Nam' : 'Nữ',
        $row['diaChi'],
        $row['soDienThoai'],
        $row['email']
    ]);
}

fclose($output);
exit;
?>
