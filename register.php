<?php
    include('config/config.php');
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password_again = $_POST['password-again'];
        $sql = "SELECT * FROM tbl_user WHERE username = '".$username."' LIMIT 1";
        $row = mysqli_query($conn, $sql);
        if(mysqli_num_rows($row) > 0){
            echo '<script>alert("Tài khoản đã tồn tại!");</script>';
        }else{
            $sql_register = mysqli_query($conn, "INSERT INTO tbl_user(username, password, email, phone) 
            VALUES('".$username."', '".$password."', '".$email."', '".$phone."')");
            if($sql_register){
                echo '<script>alert("Đăng ký thành công!");</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            background: url("image/sign.jfif") no-repeat center center fixed;
            background-size: contain;
            background-color: rgb(220, 252, 166);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register {
            border: 1px solid white;
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            height: 40px;
            padding: 10px 40px 10px 10px;
            border: 1px solid white;
            border-radius: 5px;
            background: none;
            color: white;
        }

        .input-group input:focus {
            outline: none;
        }

        .input-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        p {
            text-align: center;
            color: white;
        }

        p a {
            text-decoration: none;
            color: deepskyblue;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
            background: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: white;
            color: rgb(109, 134, 66);
        }
    </style>
</head>
<body>
    <div class="register">
        <h2>Đăng ký</h2>
        <form method="POST" action="">
            <div class="input-group">
                <input type="text" placeholder="Tên đăng nhập" name="username">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Số điện thoại" name="phone">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Nhập lại mật khẩu" name="password-again">
                <i class="fa-solid fa-lock"></i>
            </div>
            <p>Đã có tài khoản? <a href="http://localhost/web23/login.php" id="sign-in">Đăng nhập ngay</a></p>
            <button type="submit" name="register">Đăng ký</button>
        </form>
    </div>
</body>
</html>
