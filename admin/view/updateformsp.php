<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="view/admin.css">
</head>
<body>
    <div class="main">
    <h2>CẬP NHẬT SẢN PHẨM</h2>
    <form action="index.php?act=sanpham_update" method="POST" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            $iddmcur = $spct[0] ['iddm'];
            if(isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if($dm['id']== $iddmcur)
                    echo ' <option value="'.$dm['id'].'" selected>'.$dm['tendm'].'</option>';
                    else 
                    echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" value="<?=$spct[0] ['tensp']?>" placeholder="Tên sản phẩm..." id="">
        <input type="file" name="anh" id="">
        <img src="<?=$spct[0] ['img']?>" width="300px" alt="">
        <?php
        if(isset($uploadOk) && ($uploadOk==0)) {
            echo "Vui lòng nhập đúng định dạng file";
        }

        ?>
        <input type="text" name="gia" value="<?=$spct[0] ['gia']?>" placeholder="Giá sản phẩm..." id="">
         <input type="hidden" name="id" value="<?=$spct[0] ['id']?>" id="">
        <input type="submit" name="capnhat" value="Cập nhật">
    </form>

    <br>
    <table class="data-table">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>ID Danh Mục</th>
            <th>Acction</th>
        </tr>

        <?php
            // var_dump($kq)
        ?>

        <?php
        if(isset($kq)&&(count($kq)>0)){
        $i=1;
            foreach($kq as $item) {
                echo ' <tr>
                        <th>'.$i.'</th>
                        <th>'.$item['tensp'].'</th>
                        <th> <img src="'.$item['img'].'" width="150"></th>
                        <th>'.$item['gia'].'</th>
                        <th>'.$item['iddm'].'</th>
                        <th><button><a href="index.php?act=updateformsp&id='.$item['id'].'">Sửa</a></button> <button> <a href="index.php?act=delsp&id='.$item['id'].'">Xóa</a></button></th>
                        </tr>';
                    
            }
        }
        ?>
    
    </table>

</div>
</body>
</html>