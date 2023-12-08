


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
    <h2>DANH MỤC</h2>
    <form action="index.php?act=adddm" method="POST">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="THÊM">
    </form>

    <br>
    <table class="data-table">
        <tr>
            <th style="padding: 0 10px;">STT</th>
            <th style="padding: 0 10px;">Tên danh mục</th>
            <th style="padding: 0 10px;">Hành động</th>
        </tr>

        <?php
            // var_dump($kq)
        ?>

        <?php
        if(isset($kq)&&(count($kq)>0)){
        $i=1;
            foreach($kq as $dm) {
                echo ' <tr>
                        <th>'.$i.'</th>
                        <th>'.$dm['tendm'].'</th>
                        <th><button><a href="index.php?act=updateformdm&id='.$dm['id'].'">Sửa</a></button> <button> <a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></button></th>
                      </tr>';
                      $i++;
            }
        }
        ?>
    
    </table>
</div>
</body>
</html>