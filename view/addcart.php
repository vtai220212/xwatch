<?php
    session_start();
    ob_start();

    if(isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $img = $_POST['img'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];

        $sp = array($id, $img, $tensp, $gia);

        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
        array_push($_SESSION['cart'], $sp);

        header ('location: viewcart');
    }
?>