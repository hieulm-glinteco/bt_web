<form action="" method="POST">
    <input type="text" name="timKiem" placeholder="Nhập mã khách hàng hoặc tên khách hàng cần tìm kiếm" required>
    <button type="submit">Tìm kiếm</button>
</form>

<?php
  include("hienThi.php");
?>

<?php
  if(isset($_POST['timKiem'])){
    echo "<script>
            document.querySelector('.hienThi').classList.add('d-none');
            document.querySelector('.hienThi-title').innerHTML = 'Thông tin của khách hàng cần tìm kiếm';
          </script>";
    $timKiem = $_POST['timKiem'];
    $sql = "SELECT * FROM tbl_khachhang WHERE maKH LIKE '%$timKiem%' OR hoTen LIKE '%$timKiem%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "<table class='timKiem' border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>
                <th>Mã KH</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
                <th>Giới Tính</th>
                <th>Địa Chỉ</th>
                <th>SĐT</th>
                <th>Email</th>
              </tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <form action='' method='POST'>
                        <td data-label='Mã KH'>".$row['maKH']."</td>
                        <td data-label='Họ tên'>".$row['hoTen']."</td>
                        <td data-label='Ngày sinh'>".$row['ngaySinh']."</td>
                        <td data-label='Giới tính'>".$row['gioiTinh']."</td>
                        <td data-label='Địa chỉ'>".$row['diaChi']."</td>
                        <td data-label='Số điện thoại'>".$row['soDienThoai']."</td>
                        <td data-label='Email'>".$row['email']."</td>
                    </form>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='text-white'>Không tìm thấy khách hàng nào!</p>";
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

  .timKiem {
    max-width: 1150px;
    margin: 20px auto;
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .timKiem tr:first-child {
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

    .timKiem,
    tbody,
    th,
    td,
    tr {
      display: block;
      width: 100%;
    }

    .timKiem tr:first-child {
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
