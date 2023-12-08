<?php
    include "../model/connect.php";
    include "../model/account.php";
    connectdb();
   
    session_start();
    ob_start();

    if((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = checkAccount($username, $password);
        $_SESSION['role'] = $role;
        if($role == 1) header('location: index.php');
        else {
            $txt_erro="Tài khoản hoặc mật khẩu không đúng";
        // } header('location: login.php');

    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
    
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: rgba(170, 75, 107, 0.5);
}
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 430px;
    width: 100%;
    height: 400px;
    background: #fff;
    border-radius: 7px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
}

.container .registration {
    display: none;
}

#check:checked~.registration {
    display: block;
}

#check:checked~.login {
    display: none;
}

#check {
    display: none;
}

.container .form {
    padding: 1rem;
}

.form-value header {
    font-size: 1.5rem;
    font-weight: 500;
    text-align: center;
    margin-bottom: 1.5rem;
}

.form-value input {
    height: 50px;
    width: 90%;
    padding: 0 10px;
    font-size: 17px;
    margin-left: 21.5px;
    margin-bottom: 1.3rem;
    border: 1px solid #ddd;
    border-radius: 10px;
    outline: none;

}

.form input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

.form a {
    font-size: 16px;
    color: rgb(170, 75, 107);
    ;
    text-decoration: none;
}

.form a:hover {
    text-decoration: underline;
}

.btn {
    padding-bottom: 20px;
}

.btn .btn-log {
    color: #fff;
    width: 90%;
    height: 50px;
    border-radius: 10px;
    margin-left: 21.5px;
    background: rgb(170, 75, 107);
    ;
    font-size: 1.2rem;
    font-weight: 500;
    letter-spacing: 1px;
    margin-top: 1.7rem;
    cursor: pointer;
    transition: 0.4s;
}

.btn .btn-log:hover {
    background: #580066;
}

.signup {
    font-size: 17px;
    text-align: center;
}

.signup label {
    color: rgb(170, 75, 107);
    ;
    cursor: pointer;
}

.signup label:hover {
    text-decoration: underline;
}

.forget .qmk {
    margin-left: 21.5px;
}

.register .reg {
    display: inline;
    text-align: center;
    line-height: 15px;
    text-decoration: none;
}
</style>
<body>
    <form action="" method="POST" name="frmdangnhap">
        <div class="container">
            <!-- <input type="checkbox" id="check"> -->
            <div class="form-value">
                <header>Đăng nhập</header>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" placeholder="Nhập Vào Username">

                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <td><input type="password" name="password" placeholder="Nhập vào mật khẩu">

                    </div>

                    </div>
                    <div class="btn">
                    <input class="btn-log" type="submit" name="dangnhap" value="Đăng nhập">
                    </div>

                    <?php
                        if(isset($txt_erro) && ($txt_erro=!"")) {
                            echo "<font color='red'>".$txt_erro."";
                        }
                    ?>
            </div>
    </form>
</body>
</html>
