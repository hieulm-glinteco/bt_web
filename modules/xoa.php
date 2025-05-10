<form action="" method="POST">
    <input type="text" name="timKiem" placeholder="Nhập mã khách hàng hoặc tên khách hàng cần xóa" required>
    <button type="submit" name="timKH">Tìm kiếm</button>
</form>

<?php
    // Xử lý XÓA khách hàng
    if(isset($_POST['xoaKH'])){
        $maKH = $_POST['maKH'];
        $sql_delete = "DELETE FROM tbl_khachhang WHERE maKH='$maKH'";
        if(mysqli_query($conn, $sql_delete)){
            echo "<script>alert('Xóa khách hàng thành công!'); window.location.href='index.php';</script>";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }

    // Tìm kiếm khách hàng
    if(isset($_POST['timKH'])){
        $timKiem = $_POST['timKiem'];
        $sql = "SELECT * FROM tbl_khachhang WHERE maKH LIKE '%$timKiem%' OR hoTen LIKE '%$timKiem%'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            echo "<tr>
                    <th>Mã KH</th>
                    <th>Họ Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Thao Tác</th>
                  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td data-label='Mã KH'>".$row['maKH']."</td>
                        <td data-label='Họ tên'>".$row['hoTen']."</td>
                        <td data-label='Ngày sinh'>".$row['ngaySinh']."</td>
                        <td data-label='Giới tính'>".$row['gioiTinh']."</td>
                        <td data-label='Địa chỉ'>".$row['diaChi']."</td>
                        <td data-label='Số điện thoại'>".$row['soDienThoai']."</td>
                        <td data-label='Email'>".$row['email']."</td>
                        <td>
                            <form action='' method='POST' onsubmit=\"return confirm('Bạn có chắc muốn xóa khách hàng này không?');\">
                                <input type='hidden' name='maKH' value='".$row['maKH']."'>
                                <button type='submit' name='xoaKH'>Xóa</button>
                            </form>
                        </td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Không tìm thấy khách hàng nào!</p>";
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

  form input {
    width: 89%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    margin: 0 12px;
  }

  table {
    max-width: 1150px;
    margin: 20px auto;
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  table tr:first-child {
    background-color: #343a40;
    color: #fff;
  }

  th,
  td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }

  td input {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
  }

  button {
    margin-top: 10px;
    padding: 8px 15px;
    border: none;
    background-color: #343a40;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    font-size: 14px;
  }

  button:hover {
    background-color: #495057;
  }

  tbody tr:nth-child(n+2):hover {
    background-color: #f8f9fa;
  }

  p{
    margin: 20px 12px;
  }

  /* Responsive cho table mobile */
  @media (max-width: 768px) {

    table,
    tbody,
    th,
    td,
    tr {
      display: block;
      width: 100%;
    }

    table tr:first-child {
      display: none;
    }

    tr {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
    }

    td {
      text-align: left;
      padding-left: 50%;
      position: relative;
      overflow: scroll;
    }

    td::before {
      content: attr(data-label);
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-weight: bold;
      color: #333;
    }

    input,
    button {
      font-size: 13px;
    }

    form input{
      width: 74%;
      margin: 0;
    }
  }
</style>