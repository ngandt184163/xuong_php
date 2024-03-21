<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">
    <link rel="stylesheet" href="./css/product_detail.css">

</head>
<body>

    <div class="header">
        <div class="menu-1">
            <ul>
                <li><a href="#">Kenh nguoi ban</a></li>
                <li><a href="#">Tai ung dunh</a></li>
                <li><a href="#">ket noi</a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>

            <ul style="position: relative;">
                <li><a href="#">thong bao</a></li>
                <li><a href="#">ho tro</a></li>
                <li><a href="#">tieng viet</a></li>
                <li id="user"><a href="#">user</a></li>
                <div class="action hidden">
                    <ul>
                        <li><a href="register.php">Dang ki</a></li>
                        <li><a href="login.php">Dang nhap</a></li>
                        <li><a href="#">Dang xuat</a></li>
                        <li><a href="admin.php">Quan li</a></li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="menu-2">
            <div class="logo">
                <a href="index.php"><img with='100px' height="50px" src="./img/logo.png" alt="logo shopee"></a>
            </div>

            <div class="search">
                <input type="text" placeholder="Search for products...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

        <div class="menu-3">
            <ul>
                <li><a href="#">giay vs</a></li>
                <li><a href="#">ao mua</a></li>
                <li><a href="#">moc quan ao</a></li>
                <li><a href="#">giay vs cao cap</a></li>
                <li><a href="#">ruot but bi</a></li>
                <li><a href="#">bitis hunter</a></li>
                <li><a href="#">giay nam</a></li>
                <li><a href="#">ao mua</a></li>
                <li><a href="#">mu bao hiem</a></li>
            </ul>
        </div>

    </div>

    <div class="container">

        <?php
            $products = [
                [ 'id'=> 1,'img' => './img/ip.jpg',
                 'name'=> "Ip 3s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/ip.jpg',
                'name'=> "Ip 4s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/ip.jpg',
                'name'=> "Ip 5s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/ip.jpg',
                'name'=> "Ip 6s", 'price' => 20000, 'soluong' => 20,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/ip.jpg',
                'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/ip.jpg',
                'name'=> "Ip 8s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/giay.jpg',
                'name'=> "NIKE", 'price' => 2010, 'soluong' => 60,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/giay.jpg',
                'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            ];

        
            
       
        ?>

        <div class="product_detail">
            <div class="img">
                <img src="./img/giay.jpg" alt="">
            </div>

            <div class="info">
                <h3>Ten san pham</h3>
                <div class="vote">
                    <ul>
                        <li style="list-style-type: none;">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </li>
                        <li>3.1k danh gia</li>
                        <li>da ban 30.4k</li>
                    </ul>
                </div>

                <div class="price">
                    <p>9000 vnd</p>
                </div>
                <div class="dec">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, doloribus deserunt quibusdam minus sit ab repellendus ipsam ad illum minima? Sit debitis, dignissimos corporis eveniet possimus facere ex qui error.</p>
                </div>

                <div class="buy_number">
                    <p>so luong</p>
                    <button class="minus">-</button>
                    <input type="number"> 
                    <button class="plus">+</button>
                    <i>9324 san pham co san</i>
                </div>

                <p class="clear"></p>
                <div class="add-buy">
                    <button class="add">Them gio hang</button>
                    <button class="buy">Mua ngay</button>
                </div>
            </div>
        </div>
        
        
       
    </div>

    <div class="footer">
        <b>Xuong thuc hanh php</b>
    </div>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>