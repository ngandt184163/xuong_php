<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">

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
                        <?php
                            // session_set_cookie_params(3600);
                            session_start();
                            // echo $_SESSION['username'];
                            function isLogin() {
                                $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
                                echo "username:".$username;
                                // die();
                                if($username) {
                                    return true;
                                }
                                return false;
                            }

                            if(isLogin()) {
                                ?>
                                <li><a href="logout.php">Dang xuat</a></li>
                                <?php
                                    $role = $_SESSION['role'];
                                    if($role == 'admin') {
                                        ?>
                                        <li><a href="admin.php">Quan li</a></li>
                                        <?php
                                    }
                                ?>
                                <?php
                            }else {
                                ?>
                                <li><a href="register.php">Dang ki</a></li>
                                <li><a href="login.php">Dang nhap</a></li>
                                <?php
                            }
                        ?>
                        
                        
                        
                    </ul>
                </div>
            </ul>
        </div>

        <div class="menu-2">
            <div class="logo">
                <img onclick="handleClick()" with='100px' height="50px" src="./img/logo.png" alt="logo shopee">
            </div>

            <div class="search">
                <form action="" method="GET" enctype='multipart/form-data'>
                    <input name="search" type="text" placeholder="Search for products...">
            

                    <input type="submit" name="tim" value="Tìm">
                    <!-- <button id="add_product" type="submit" name="add_product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button> -->

                </form>

                <?php

                    


                //     session_start();

                //    unset($_SESSION['username']);

                ?>
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
            // include "connect.php";

            // // query ra du lieu
            // $sql = "SELECT * FROM product";

            // $arr = $conn->query($sql);
            // if($arr->rowCount() > 0){
            //     while($row = $arr->fetch(PDO::FETCH_ASSOC)){
            //         var_dump($row);
            //         echo "<br>";
            //     }
            // }
            // die();
            $products = [
                [ 'id'=> 1,'img' => './img/ip.jpg',
                 'name'=> "Ip 3s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/ip.jpg',
                'name'=> "Ip 4s pro", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/ip.jpg',
                'name'=> "Ip 5s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/ip.jpg',
                'name'=> "Ip 6s pro", 'price' => 20000, 'soluong' => 20,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/ip.jpg',
                'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/ip.jpg',
                'name'=> "Ip 8s pro", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/giay.jpg',
                'name'=> "NIKE", 'price' => 2010, 'soluong' => 60,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/giay.jpg',
                'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            ];

           
        function searchProduct($search, $products) {
            $product_search=[];
            foreach($products as $key =>$product) {
                if(strpos(strtolower($product['name']), strtolower($search)) !== FALSE){
                    $product_search[$key] = $product;
                }
            }

            return $product_search;
        }

        if(isset($_GET['tim'])){
            $search = $_GET['search'];
            if(!empty($search)) {
                $product_search = searchProduct($search, $products);

                if(!empty($product_search)) {

                    foreach($product_search as $key=> $item){
                        echo '<div class="product">
                        <div class="img">
                            <img width="100px" height="50px" src="'.$item['img'].'" alt="" />
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?index='.$key.'&message=hihi&number=100">'.$item['name'].'</a></h2>
                        </div>

                        <div class="info">
                            <b>'.$item['price'].'</b>
                            <i>'.$item['soluong'].'</i>
                        </div>
                    </div>';
                    }
                    
                }
                else {
                    echo "<h1?>Khong tim thay san pham nao</h1>";
                }
                

            } else {
                // cach 1
                foreach($products as $index => $product) {
                    ?>
                    <div class="product">
                        <div class="img">
                            <img width="100px" height="50px" src="<?php echo $product['img']; ?>" alt="">
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?index=<?php echo $index; ?>"><?php echo $product['name']; ?></a></h2>
                        </div>

                        <div class="info">
                            <b><?php echo $product['price']; ?></b>
                            <i><?php echo $product['soluong']; ?></i>
                        </div>

                        <div class="giamgia">
                            <?php
                            if(strlen($product['giamgia']) != 0) {
                                echo "<i>co giam gia</i>";
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }

        } else {
            // cach 1
            foreach($products as $index => $product) {
                ?>
                <div class="product">
                    <div class="img">
                        <img width="100px" height="50px" src="<?php echo $product['img']; ?>" alt="">
                    </div>

                    <div class="title">
                        <h2><a href="product_detail.php?index=<?php echo $index; ?>"><?php echo $product['name']; ?></a></h2>
                    </div>

                    <div class="info">
                        <b><?php echo $product['price']; ?></b>
                        <i><?php echo $product['soluong']; ?></i>
                    </div>

                    <div class="giamgia">
                        <?php
                        if(strlen($product['giamgia']) != 0) {
                            echo "<i>co giam gia</i>";
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        }
            
        

        // cach 2

        // foreach($products as $index => $product ) {
        //     echo '<div class="product">
        //     <div class="img">
        //         <img width="100px" height="50px" src="'.$product['img'].'" alt="" />
        //     </div>

        //     <div class="title">
        //         <h2><a href="product_detail.php?index='.$index.'&message=hihi&number=100">'.$product['name'].'</a></h2>
        //     </div>

        //     <div class="info">
        //         <b>'.$product['price'].'</b>
        //         <i>'.$product['soluong'].'</i>
        //     </div>
        // </div>';
        // }


        // $first_name = 'Ngan';
        // $last_name = "dinh";
        // $dem = 'Thi';

        // in ra ho va ten
        // echo $first_name;
        // echo $dem;
        // echo $last_name;

        // echo $last_name . $dem . $first_name;

        ?>
        
        
        <!-- <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div> -->
    </div>

    <div class="footer">
        <b>Xuong thuc hanh php</b>
    </div>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>