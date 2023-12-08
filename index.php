<?php
session_start();
ob_start();
include "./model/connect.php";
connectdb();
include "./model/account.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";

$dsdm = getall_dm();
$sphome1 = getall_sanpham(0,"");

include "view/header.php";



if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = getAccount($username, $password);
                $role = $kq[0]['role'];
                if ($role == 1) {
                    $_SESSION['role'] = $role;
                    header('location: admin/index.php');
                } else {
                    $_SESSION['role'] = $role;
                    $_SESSION['iduser'] =  $kq[0]['id'];
                    $_SESSION['username'] =  $kq[0]['username'];
                    header('location: index.php');
                    break;
                }
            }

        case 'dangnhap':
            include "view/dangnhap.php";
            break;

        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header('location: index.php');
            break;

        case 'dangki';
            include "view/dangki.php";
            break;

        case 'trangchu';
            include "view/trangchu.php";
            break;

        case 'cuahang';
            include "view/category.php";
            break;

        case 'sale';
            include "view/sale.php";
            break;

        case 'lienhe';
            include "view/contact.php";
            break;

        case 'baiviet';
            include "view/blog.php";
            break;

        case 'category';
        if(isset($_GET['id']) && ($_GET['id']>0)) {
            $id = $_GET['id'];
        }
        $dssp = getall_sanpham($id, "");

            include "view/category.php";
            break;


        default:

            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
