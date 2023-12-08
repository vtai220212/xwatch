<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hàng</title>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <header class="row">
        <div class="logo">
            <a href="">XWATCH</a>
            <img src="" alt="">
        </div>
        <div class="menu">
            <div class="menu-column">
                <li><a href="index.php">TRANG CHỦ</a></li>
            </div>
            <div class="menu-column">
                <li><a href="index.php?act=cuahang">CỬA HÀNG</a>
                    <ul class="sub-menu">

                        <?php
                            foreach($dsdm as $dm) {
                                echo ' <li><a href="index.php?act=category&id='.$dm['id'].'">'.$dm['tendm'].'</a></li>';
                            }
                        
                        ?>
                        <!-- <li><a href="">Hàng mới về</a></li>
                        <li><a href="">ROLEX</a>
                            <ul>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                            </ul>
                        </li>
                        <li><a href="">ROLEX</a>
                            <ul>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                            </ul>
                        </li>
                        <li><a href="">ROLEX</a>
                            <ul>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                            </ul>
                        </li>
                        <li><a href="">ROLEX</a>
                            <ul>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                                <li><a href="">ROLEX1</a></li>
                            </ul>
                        </li> -->
                    </ul>

                </li>
            </div>
            <div class="menu-column custom-menu">
                <li><a href="index.php?act=sale">THÁNG 12 - SALE ĐẬM SÂU</a></li>
            </div>
            <div class="menu-column">
                <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
            </div>
            <div class="menu-column">
                <li><a href="index.php?act=baiviet">BLOG</a>
                    <ul class="sub-menu">
                        <li><a href="">Hàng mới về</a></li>
                        <li><a href="">ROLEX</a></li>
                        <li><a href="">ROLEX2222</a></li>
                    </ul>
                </li>
            </div>
        </div>

        <div class="orther">

            <form action="/search" method="get" class="search-form">
                <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <?php
            if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                echo '<li><a href="index.php?act=userinfo">' . $_SESSION['username'] . '</a></li>';
                echo '<li><a href="index.php?act=logout">Thoát</a></li>';
            } else {

            ?>
                <li><a href="index.php?act=dangki">ĐĂNG KÝ</a></li>
                <li><a href="index.php?act=dangnhap" <i class="fa-solid fa-user"></i></a></li>
                <li><a href="giohang.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            <?php } ?>
        </div>

        

        </div>
    </header>