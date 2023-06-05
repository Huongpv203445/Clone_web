<?php require_once("header.php")?>
<!--Links -->
<head>
<link rel="stylesheet" href="./css/login.css">
</head>



    <!-- Jquery -->
    <script src="lib/Jquery/Jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        
function kiemTraDangNhap(){
    a=document.getElementById("username").value;
    b=document.getElementById("password").value;
    if(a == "")
        {
            alert("Tài khoản không được để trống!Vui lòng nhập tài khoản.");
            form.username.focus();
            return false;
        }
    if(b == "")
        {
            alert("Mật khẩu không được để trống!Vui lòng nhập mật khẩu.");
            form.password.focus();
            return false;
        }
    $.ajax({
        url:"php/xulidangnhapadmin.php",
        type:"post",
        data: {
            data_username:a,
            data_password:b
        },
        //async:true,
        success:function(kq){
            if(kq.indexOf("yes")!= -1) 
                {
                    alert("Đăng nhập thành công");
                    window.location="admin.php";
                }
             else {
                alert("Vui lòng kiểm tra lại");
                document.getElementById("username").value="";
                document.getElementById("password").value="";
                form.username.focus();
             }
            // }
        }

    });
}
    </script>

<div class="login_form">
    <div class="left">
      <img src="image/logshoes.png" alt="">
    </div>

    <div class="right">
        <h1>Đăng nhập</h1>
        
        <form action="form_login" method = "port">
    
            <p>Tài Khoản</p>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <input type="text" name ="user" id ="username" placeholder ="Tên đăng nhập/Email/Số điện thoại " class="username">
            </div>
    
            <p class="password_tag">Mật Khẩu</p>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name = "password" id ="password" placeholder = "Mật khẩu" class= "pw1">
            </div>

            <div class="forget">
                <input type="checkbox" name ="checkbox">
                <label for="checkbox"> Ghi nhớ mật khẩu</label> 
                <p class = "forget1">Quên mật khẩu ?</p>
            </div>
            <div class="log_in">
            <button type ="submit" class = "log_in">Đăng nhập</button>
            </div>
            <div class="login_icon">
                <a href="#"><img src="image/google.png" alt="google"><p>Google</p></a>
                <a href="#"><img src="image/facebook.png" alt="facebook"><p>Facebook</p></a>
            </div>
        </form>
        <div class="sign_up">
            <!-- <button type ="submit" class= "sign_up">Tạo tài khoản mới </button> -->
            <a href="signup.php"><p>Tạo tài khoản mới</p></a>
        </div>
        
    </div>
</div>

<?php require_once("footer.php")?>