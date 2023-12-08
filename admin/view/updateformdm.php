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
    <h2>CẬP NHẬT DANH MỤC</h2>

       
    <form action="index.php?act=updateformdm" method="POST">
        <input type="text" name="tendm" id="" value="<?=$kqone{0}['tendm']?>">
         <input type="hidden" name="id" value="<?=$kqone{0}['id']?>">
        <input type="submit" name="capnhat" value="CẬP NHẬT">
    </form>

    <br>
    <table class="data-table">
        <thead>
    <tr>
      <th>ID</th>
      <th>Tên</th>
      <th>Action</th>
    </tr>
  </thead>

        <?php
        if(isset($kq)&&(count($kq)>0)){
        $i=1;
            foreach($kq as $dm) {
                echo ' <tr>
                        <th >'.$i.'</th>
                        <th>'.$dm['tendm'].'</th>
                        <th><button><a href="index.php?act=updateformdm&id='.$dm['id'].'">Sửa</a></button> <button> <a href="index.php?act=deldm&id='.$dm['id'].'"> Xóa </a></button></th>
                      </tr>';
                      $i++;
            }
        }
        ?>
    
    </table>
</div>

</body>
</html>


