<?php
$sql = "SELECT * FROM tbl_khachhang";
$result = mysqli_query($conn, $sql);
?>

<p>Thông tin toàn bộ khách hàng</p>

<table>
    <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Mã khách hàng</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++; ?>
            <tr>
                <td data-label="STT:"><?php echo $i; ?></td>
                <td data-label="Mã KH:"><?php echo $row['maKH']; ?></td>
                <td data-label="Họ tên:"><?php echo $row['hoTen']; ?></td>
                <td data-label="Ngày sinh:"><?php echo $row['ngaySinh']; ?></td>
                <td data-label="Giới tính:"><?php echo $row['gioiTinh']; ?></td>
                <td data-label="Địa chỉ:"><?php echo $row['diaChi']; ?></td>
                <td data-label="Số điện thoại"><?php echo $row['soDienThoai']; ?></td>
                <td data-label="Email:"><?php echo $row['email']; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    thead {
        background-color: #343a40;
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
        table{
            background-color: #f8f9fa;
            box-shadow: none;
        }
        table, thead, tbody, th, td, tr {
            display: block;
        }

        thead {
            display: none;
        }

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
