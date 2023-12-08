<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hàng</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <!-- <header>
        <div class="logo">
            <a href="">XWATCH</a>
            <img src="" alt="">
        </div>
        <div class="menu">
            <div class="menu-column">
                <li><a href="index.php">HOME</a></li>
            </div>
            <div class="menu-column">
                <li><a href="category.php">SHOP</a>
                    <ul class="sub-menu">
                        <li><a href="">Hàng mới về</a></li>
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
                        </li>


                </li>
            </div>
            <div class="menu-column custom-menu">
                <li><a href="">THÁNG 12 - SALE ĐẬM SÂU</a></li>
            </div>
            <div class="menu-column">
                <li><a href="">CONTACT</a></li>
            </div>
            <div class="menu-column">
                <li><a href="">BLOG</a>
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
                <li><a href="dangki.php">ĐĂNG KÝ</a></li>
                <li><a href="index.php?act=dangnhap" <i class="fa-solid fa-user"></i></a></li>
                <li><a href="giohang.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="index.php?act=logout"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
            <?php } ?>
        </div>
    </header> -->

    
    <section class="cate">
        <div class="container">
            <div class="category-top row">
                <p>Trang chủ</p> <span>&#10230;</span>
                <p>ROLEX</p> <span>&#10230;</span>
                <p>ROLEXXX SANG</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="category-left">
                        <ul>
                            <li class="category-left--li  "><a href="#">NỮ</a>
                                <ul>
                                    <li><a href=""></a>VERTU NAMMM</li>
                                    <li><a href=""></a>VERTU</li>
                                    <li><a href=""></a>VERTU</li>
                                    <li><a href=""></a>VERTU</li>
                                </ul>
                            </li>
                            <li class="category-left--li "><a href="#">NAM</a>
                                <ul>
                                    <li><a href=""></a>VERTU</li>
                                    <li><a href=""></a>VERTU</li>
                                    <li><a href=""></a>VERTU</li>
                                    <li><a href=""></a>VERTU</li>
                                </ul>
                            </li>
                            <li class="category-left--li"><a href="#">ROLEX VIP3</a></li>
                            <li class="category-left--li"><a href="#">ROLEX VIP4</a></li>

                        </ul>
                    </div>
                    <div class="category-right row">
                        <div class="category-right-top--item">
                            <p>HÀNG MỚI VỀ</p>
                        </div>
                        <div class="category-right-top--item">
                            <button><span>Bộ lọc</span> <i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <div class="category-right-top--item">

                            <select name="" id="">
                                <option value="">Sắp xếp</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div>

                        <div class="category-right-content row">
                            <?php
                            foreach ($dssp as $sp) {
                                echo '<div class="category-right--content-item"> <img src="./uploads/'.$sp['img'].'" alt="">
                                <h1>'.$sp['tensp'].'</h1>
                                <p>'.$sp['gia'].'</p>
                                <button>Add to cart</button>
                            </div>';
                            }
                            ?>
                        </div>

                        <div class="category-right-bottom row">
                            <div class="category-right--bottom-item">
                                <p>Hiển thị <span> | </span>4 sản phẩm</p>
                            </div>
                            <div class="category-right--bottom-item">
                                <p><span>&#8249;</span> 1 2 3 4 5 6 ...<span>&#187;</span> Trang cuối</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <script src="js/main.js"></script>

</body>

</html>