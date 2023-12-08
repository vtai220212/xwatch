<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng ký</title>

</head>

<body>
    <style>
        /* CSS để làm cho form lớn hơn */


        .login-wrap h3 {

            font-size: 24px;
            /* Kích thước chữ của tiêu đề */
            margin-bottom: 20px;
            /* Khoảng cách phía dưới tiêu đề */
        }

        .header-section {
            margin-top: 50px;
        }

        .login-wrap .form-control {
            height: 50px;
            /* Độ cao của input fields */
            font-size: 16px;
            /* Kích thước chữ của input fields */
            margin-bottom: 20px;
            /* Khoảng cách phía dưới các input fields */
        }

        .login-wrap .submit {
            height: 50px;
            /* Độ cao của nút Đăng nhập */
            font-size: 18px;
            /* Kích thước chữ của nút Đăng nhập */
        }

        .checkbox-wrap {
            font-size: 16px;
            /* Kích thước chữ của checkbox */
        }

        .social a {
            font-size: 16px;
            /* Kích thước chữ của các liên kết xã hội */
            margin: 5px auto;
            /* Khoảng cách giữa các liên kết xã hội */
            padding: 10px 20px;
            /* Khoảng cách phía trong của các liên kết xã hội */
            border-radius: 5px;
            /* Bo tròn góc của các liên kết xã hội */
        }
    </style>
    <form action="index.php?act=dangki" method="POST" name="formdangki">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">ĐĂNG KÝ</h2>
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Have an account?</h3>
                            <form action="#" class="signin-form">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="username" value="<?php echo (isset($_GET['username'])) ? $_GET['username'] : "" ?>" placeholder="Nhập vào username...">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Nhập vào mật khẩu">

                                </div>
                                <div class="form-group">
                                    <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Nhập vào mật khẩu...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>" placeholder="Nhập vào email...">
                                </div>
                                <div class="form-group">
                                    <input class="form-control btn btn-primary submit px-3" type="submit" name="submit" value="Đăng ký">
                                
                                </div>
                                
                                <div class="form-group d-md-flex">
                                    <div class="w-50">
                                        <a href="" class="checkbox-wrap checkbox-primary">Đăng nhập
                                        <a>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#" style="color: #fff">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                            <div class="social d-flex text-center">
                                <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                                <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </form>
</body>

</html>



