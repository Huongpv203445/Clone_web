<?php require_once("header.php")?>

<head>
<link rel="stylesheet" href="./css/signup.css">
</head>

<body>
<div class="signup_form">
    <div class="left">
        <img src="image/s1.png" alt="">
    </div>  
    <div class="right">
        <h1>Đăng ký</h1>
        
        <form action="form_signup" method = "port">

            <p>Tên người dùng</p>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <input type="text" name ="username" placeholder ="Họ và tên" class="username">
            </div>

            <p>Địa chỉ</p>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <input type="text" name ="address" placeholder ="Địa chỉ cụ thể" class="username">
            </div>

            <p>Số điện thoại</p>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <input type="text" name ="phone" placeholder ="Số điện thoại" class="username">
            </div>

            <p>Tài Khoản</p>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <input type="text" name ="user" placeholder ="Tên đăng nhập/Email/Số điện thoại " class="username">
            </div>
    
            <p class="password_tag">Mật Khẩu</p>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name = "password" placeholder = "Mật khẩu" class= "pw1">
            </div>
            <div class="sign_up">
            <button type ="submit" class = "sign_up">Đăng ký</button>
            </div>
        </form>

        <div class="log_in">
            <a href="login.php"><p>Đăng nhập</p></a>
        </div>
    </div>    
</div>
</body>
<?php require_once("footer.php")?>