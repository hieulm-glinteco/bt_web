<form method="POST">
    <table>
        <thead>
            <th>Mã khách hàng</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
        </thead>

        <tbody>
            <tr>
                <td data-label="Mã KH"><input type="text" name="maKH" placeholder="Mã khách hàng"></td>
                <td data-label="Họ tên"><input type="text" name="hoTen" placeholder="Họ tên"></td>
                <td data-label="Ngày sinh"><input type="date" name="ngaySinh"></td>
                <td data-label="Giới tính"><input type="text" name="gioiTinh" placeholder="Giới tính"></td>
                <td data-label="Địa chỉ"><input type="text" name="diaChi" placeholder="Địa chỉ"></td>
                <td data-label="Số điện thoại"><input type="text" name="soDienThoai" placeholder="Số điện thoại"></td>
                <td data-label="Email"><input type="email" name="email" placeholder="Email"></td>
            </tr>
        </tbody>
    </table>

    <button type="submit" name="themKH" value="themKH">Thêm khách hàng</button>
    <button type="reset">Nhập lại</button>
</form>

<?php

include(__DIR__ . '/../config/config.php');


if (isset($_POST['themKH'])) {
    $maKH = $_POST['maKH'];
    $hoTen = $_POST['hoTen'];
    $ngaySinh = $_POST['ngaySinh'];
    $gioiTinh = $_POST['gioiTinh'];
    $diaChi = $_POST['diaChi'];
    $soDienThoai = $_POST['soDienThoai'];
    $email = $_POST['email'];

    // Kiểm tra xem mã khách hàng đã tồn tại chưa
    $sql_check = "SELECT * FROM tbl_khachhang WHERE maKH='$maKH'";
    $query_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($query_check) > 0) {
        echo "<script>alert('Mã khách hàng đã tồn tại!');window.history.back();</script>";
    } else {
        $sql_insert = "INSERT INTO tbl_khachhang(maKH, hoTen, ngaySinh, gioiTinh, diaChi, soDienThoai, email) 
                    VALUES('$maKH', '$hoTen', '$ngaySinh', '$gioiTinh', '$diaChi', '$soDienThoai', '$email')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "<script>alert('Thêm khách hàng thành công!');window.location.href='index.php';</script>";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
}
?>

<style>
    form {
        max-width: 1150px;
        margin: 30px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
    }

    thead {
        background-color: #343a40;
        color: #fff;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    input {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        margin-top: 15px;
        padding: 10px 20px;
        border: none;
        background-color: #343a40;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background-color: #495057;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    @media (max-width: 768px) {
        table thead {
            display: none;
        }

        table,
        tbody,
        tr,
        td {
            display: block;
            width: 100%;
        }

        tr {
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        td {
            text-align: right;
            position: relative;
            padding-left: 50%;
            overflow: scroll;
        }

        td::before {
            content: attr(data-label);
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
            text-align: left;
            color: #333;
        }
    }
</style>