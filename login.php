<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_user WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
        $row = mysqli_query($conn, $sql);
        $count = mysqli_num_rows(result: $row);
        if($count > 0){
            $_SESSION['login'] = $username;
            header("Location: http://localhost/web23/index.php");
        }
        else{
            echo "
                <script>
                    alert('Tài khoản hoặc mật khẩu không đúng!');
                </script>
            ";
            header("Location: http://localhost/web23/login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .sign-in {
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
    <div class="sign-in">
        <h2>Đăng nhập</h2>
        <form method="POST" action="#">
            <div class="input-group">
                <input type="text" placeholder="Tên đăng nhập" name="username">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <p>Chưa có tài khoản? <a href="http://localhost/web23/register.php" id="register">Đăng ký ngay</a></p>
            <button type="submit" name="login">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
