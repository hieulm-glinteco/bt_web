<!-- Form Tìm Kiếm Khách Hàng -->
<form action="" method="POST">
  <input type="text" name="timKiem" placeholder="Nhập mã khách hàng hoặc tên khách hàng cần sửa" required>
  <button type="submit">Tìm kiếm</button>
</form>

<?php
  include("hienThi.php");
?>

<?php
if (isset($_POST['timKiem'])) {
  echo "<script>
            document.querySelector('.hienThi').classList.add('d-none');
            document.querySelector('.hienThi-title').innerHTML = 'Thông tin của khách hàng cần sửa';
          </script>";
  $timKiem = $_POST['timKiem'];
  $sql = "SELECT * FROM tbl_khachhang WHERE maKH LIKE '%$timKiem%' OR hoTen LIKE '%$timKiem%'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<table class='sua' border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
                <th>Mã KH</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
                <th>Giới Tính</th>
                <th>Địa Chỉ</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Hành Động</th>
              </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
                    <form action='' method='POST'>
                        <td data-label='Mã KH'><input type='text' name='ma_kh' value='" . $row['maKH'] . "'></td>
                        <td data-label='Họ tên'><input type='text' name='hoTen' value='" . $row['hoTen'] . "'></td>
                        <td data-label='Ngày sinh'><input type='date' name='ngaySinh' value='" . $row['ngaySinh'] . "'></td>
                        <td data-label='Giới tính'>
                          <select name='gioiTinh'>
                            <option value='Nam' ".($row['gioiTinh']=='Nam'?'selected':'').">Nam</option>
                            <option value='Nữ' ".($row['gioiTinh']=='Nữ'?'selected':'').">Nữ</option>
                          </select>
                        </td>
                        <td data-label='Địa chỉ'><input type='text' name='dia_chi' value='" . $row['diaChi'] . "'></td>
                        <td data-label='Số điện thoại'><input type='text' name='sdt' value='" . $row['soDienThoai'] . "'></td>
                        <td data-label='Email'><input type='text' name='email' value='" . $row['email'] . "'></td>
                        <td><button type='submit' name='suaKH'>Cập nhật</button></td>
                    </form>
                  </tr>";
    }
    echo "</table>";
  } else {
    echo "<p class='text-white'>Không tìm thấy khách hàng nào!</p>";
  }
}

// Xử lý update
if (isset($_POST['suaKH'])) {
  $maKH = $_POST['ma_kh'];
  $hoTen = $_POST['hoTen'];
  $ngaySinh = $_POST['ngaySinh'];
  $gioiTinh = $_POST['gioiTinh'];
  $diaChi = $_POST['dia_chi'];
  $soDienThoai = $_POST['sdt'];
  $email = $_POST['email'];

  $sql_update = "UPDATE tbl_khachhang SET hoTen='$hoTen', ngaySinh='$ngaySinh', gioiTinh='$gioiTinh', diaChi='$diaChi', soDienThoai='$soDienThoai', email='$email' WHERE maKH='$maKH'";

  if (mysqli_query($conn, $sql_update)) {
    echo "<script>alert('Cập nhật thành công!');window.location.href='index.php';</script>";
  } else {
    echo "Lỗi: " . mysqli_error($conn);
  }
}
?>

<style>
  form {
    max-width: 1150px;
    border-radius: 10px;
    margin: 30px auto;
  }

  form input {
    width: 92%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
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

  .sua tr:first-child {
    background-color: #007bff;
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

  select{
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px 0px;
    }

  button {
    margin-top: 10px;
    padding: 8px 15px;
    border: none;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    font-size: 14px;
  }

  button:hover {
    background-color: #0056b3;
  }

  tbody tr:nth-child(n+2):hover {
    background-color: #f8f9fa;
  }

  p{
    margin: 20px 12px;
  }

  /* Responsive cho table mobile */
  @media (max-width: 768px) {

    .sua,
    tbody,
    th,
    td,
    tr {
      display: block;
      width: 100%;
    }

    .sua tr:first-child {
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
