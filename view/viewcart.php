<?php
    session_start();
    ob_start();
    
    if(isset($_SESSION['cart'])) {
        echo var_dump($_SESSION['cart']);
        echo '<br>Bạn có muốn <a href"category.php"> tiếp tục mua hàng </a>?';
    }
?>