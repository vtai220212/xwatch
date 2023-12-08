<?php

session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connect.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    connectdb();
    include "view/header.php";

    if (isset($_GET['act'])) {

        switch ($_GET['act']) {

            case 'danhmuc':
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;

                // ---------------------------------------------- Xóa
            case 'deldm':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldm($id);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
                // ---------------------------------------------------Sửa
            case 'updateformdm':
                //lấy 1 record đúng với id truyền vào 
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    //1 dsdm
                    $kqone = getonedm($id);
                    $kq = getall_dm();
                    include "view/updateformdm.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    updatedm($id, $tendm);
                    //cần 1 dsdm 
                    $kq = getall_dm();
                    include "view/danhmuc.php";
                }

                break;
                // ----------------------------------------------------------------Thêm danh mục
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    themdm($tendm);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;

                // -----------------------------------------------------------------------Add  Sản phẩm

            case 'sanpham':
                $dsdm = getall_dm();

                $kq = getall_sanpham();

                include "view/sanpham.php";

                break;

                // ---------------------------------------------------------------sản phẩm

            case 'sanphamadd':
                if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];

                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }

                    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);

                    $img = $target_file;
                    insert_sanpham($iddm, $tensp, $img, $gia);

                    $dsdm = getall_dm();
                    $kq = getall_sanpham();
                    include "view/sanpham.php";
                    break;
                }
                // ----------------------------------------------------------------------------------------------

            case 'updateformsp':
                $dsdm = getall_dm();

                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $spct = getonesp($_GET['id']);
                }
                $kq = getall_sanpham();

                include "view/updateformsp.php";

                break;

            case 'sanpham_update':
                // lấy danh sách
                $dsdm = getall_dm();

                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];
                    if ($_FILES['anh']['name'] !== "") {
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                            $uploadOk = 0;
                        }

                        move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);

                        $img = $target_file;
                    } else {
                        $img = "";
                    }
                    updsp($id, $tensp, $img, $gia, $iddm);
                }
                $kq = getall_sanpham();

                include "view/sanpham.php";

                break;
                // ----------------------------------------------------------------------------------------------------
            case 'delsp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delsp($id);
                }
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
                // --------------------------------------------------------------------------------------

            case 'logout':
                if (isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login.php');



                // 
            default:
                include  "view/home.php";
        }
    } else {

        include "view/home.php";
    }


    include "view/footer.php";
} else {
    header('location: login.php');
}
