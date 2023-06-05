<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giày Timan </title>

    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/cart_shop.js"></script>
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
    
</body>
<div class="header">
    <div class ="header_1">
         <div class="logo">
            <a href="home.php"><img src="image/Thumb.webp"></a>
        </div>
        <div class="search">
                <input type="text1" placeholder="Tìm kiếm trên Timan....">
                <a class = "search_icon"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>

            <div class="order_tracking">
                <a class = "tile_ot" href="ordertracking.php">Theo dõi đơn hàng</a>
            </div>

            <div class="icon_main">
                <ul class = "main_home">
                    <li class = "i_icon_1"><a class = "icon_1" href="#"><i class="fa-solid fa-heart" ></i></a></li>
                    <li class = "i_icon_1"><a class = "icon_1" id="myLink" href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li class = "drop_down">
                    <div class = "menu"><i class="fa-solid fa-bars"></i></div>
                    <div class = "down_content">
                        <a class = "icon_2" href="#"><i class="fa-solid fa-circle-user"></i> <p>Thông tin người dùng</p></a>
                        <a class = "icon_2" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> <p>Đăng nhập</p></a>
                        <a class = "icon_2" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> <p>Đăng xuất</p></a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="shopcart" id = "showcart">
        <table id="cart-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Các mục giỏ hàng sẽ được thêm vào đây bằng JavaScript -->
            </tbody>
        </table>
        <div id="cart-summary">
            <p>Tổng số lượng: <span id="total-quantity">0</span></p>
            <p>Tổng giá trị: <span id="total-price">0</span></p>
        </div>
    </div>    


    <div class = "header_2">
        <ul class ="main_menu">
             <li class = "body_menu"><a href="home.php" class = "none_btn">Trang chủ</a></li>
             <li  class ="body_menu topic_down">
                 <a href="man.php" class = down_btn>Giày Nam</a>
                 <div class="drop_down_1">
                    <a class ="icon_3" href="#">Giày da nam</a>
                    <a class ="icon_3" href="#">Giày thể thao nam</a>
                    <a class ="icon_3" href="#">Giày lười nam</a>
                 </div>
             </li>
             <li class ="body_menu topic_down">
                 <a href="woman.php" class = down_btn> Giày Nữ</a>
                 <div class="drop_down_1">
                     <a class = "icon_3" href="#">Giày cao gót</a>
                     <a class = "icon_3" href="#">Giày thể thao nữ</a>
                     <a class = "icon_3" href="#">Giày lười nữ</a>
                 </div>
             </li>
             <li class ="body_menu topic_down">
                 <a href="kids.php" class = down_btn>Trẻ em</a>
                 <div class="drop_down_1">
                     <a class = "icon_3" href="#">Giày bé trai</a>
                     <a class = "icon_3" href="#">Giày bé gái</a>
                 </div>
             </li>
             <li class = "body_menu"><a href="review.php" class = "none_btn">Tin tức</a> </li>
             <li class = "body_menu"><a href="contact.php" class = "none_btn">Liên Hệ</a> </li>
        </ul>
    </div>
</div>
<body>


<input type="hidden" id="langCode" value="@ViewBag.LangCode" />