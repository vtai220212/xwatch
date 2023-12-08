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
    <h2>SẢN PHẨM</h2>
    <form action="index.php?act=sanphamadd" method="POST" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            if(isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" placeholder="Tên sản phẩm..." id="">
        <input type="file" name="anh" id="">
        <?php
        if(isset($uploadOk) && ($uploadOk==0)) {
            echo "Vui lòng nhập đúng định dạng file";
        }

        ?>
        <input type="text" name="gia" placeholder="Giá sản phẩm..." id="">
        <input type="submit" name="themmoi" value="THÊM">
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
                        <th><img src="'.$item['img'].'" width="150px"></th>
                        <th>'.$item['gia'].'</th>
                        <th>'.$item['iddm'].'</th>
                        <th><button><a href="index.php?act=updateformsp&id='.$item['id'].'">Sửa</a></button> <button> <a href="index.php?act=delsp&id='.$item['id'].'">Xóa</a></button></th>
                      </tr>';
                      $i++;
            }
        }
        ?>
    
    </table>
</div>
</body>
</html>