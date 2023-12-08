<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hàng</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <style>
        /*//////////////////////////////////////////////////////////////////
[ FONT ]*/
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        /*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: 'Montserrat', sans-serif;
        }

        /*---------------------------------------------*/
        .logo a {
                font-size: 30px;
                color: #000000;
                font-weight: normal;
                display: flex;
                font-weight: 800;
                padding: 10px 20px;
                justify-content: center;

            

        }

        a {
            font-family: 'Montserrat', sans-serif;
            font-size: 17px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #57b846;
        }

        /*---------------------------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input::-webkit-input-placeholder {
            color: #999999;
        }

        input:-moz-placeholder {
            color: #999999;
        }

        input::-moz-placeholder {
            color: #999999;
        }

        input:-ms-input-placeholder {
            color: #999999;
        }

        textarea::-webkit-input-placeholder {
            color: #999999;
        }

        textarea:-moz-placeholder {
            color: #999999;
        }

        textarea::-moz-placeholder {
            color: #999999;
        }

        textarea:-ms-input-placeholder {
            color: #999999;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }




        /*//////////////////////////////////////////////////////////////////
[ Contact 1 ]*/

        .contact1 {
            width: 100%;
            min-height: 100%;
            padding: 15px;

            background: #009bff;
            background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
            background: -o-linear-gradient(left, #0072ff, #00c6ff);
            background: -moz-linear-gradient(left, #0072ff, #00c6ff);
            background: linear-gradient(left, #0072ff, #00c6ff);

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .container-contact1 {
            width: 1163px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;

            padding: 90px 130px 88px 148px;
        }

        /*------------------------------------------------------------------
[  ]*/
        .contact1-pic {
            width: 296px;
        }

        .contact1-pic img {
            max-width: 100%;
        }


        /*------------------------------------------------------------------
[  ]*/
        .contact1-form {
            width: 390px;
        }

        .contact1-form-title {
            display: block;
            font-family: 'Montserrat', sans-serif;
            ;
            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 44px;
        }

        input.input1 {
            height: 50px;
            border-radius: 25px;
            padding: 0 30px;
        }

        input.input1+.shadow-input1 {
            border-radius: 25px;
        }

        textarea.input1 {
            min-height: 150px;
            border-radius: 25px;
            padding: 12px 30px;
        }

        textarea.input1+.shadow-input1 {
            border-radius: 25px;
        }

        /*---------------------------------------------*/
        .wrap-input1 {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 20px;
        }

        .input1 {
            display: block;
            width: 100%;
            background: #e6e6e6;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;
        }

        .shadow-input1 {
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(87, 184, 70, 0.5);
        }

        .input1:focus+.shadow-input1 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        /*---------------------------------------------*/
        .container-contact1-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .contact1-form-btn {
            min-width: 193px;
            height: 50px;
            border-radius: 25px;
            background: #57b846;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contact1-form-btn i {
            margin-left: 7px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contact1-form-btn:hover {
            background: #333333;
        }

        .contact1-form-btn:hover i {
            -webkit-transform: translateX(10px);
            -moz-transform: translateX(10px);
            -ms-transform: translateX(10px);
            -o-transform: translateX(10px);
            transform: translateX(10px);
        }




        /*------------------------------------------------------------------
[ Responsive ]*/

        @media (max-width: 1200px) {
            .contact1-pic {
                width: 33.5%;
            }

            .contact1-form {
                width: 44%;
            }
        }

        @media (max-width: 992px) {
            .container-contact1 {
                padding: 90px 80px 88px 90px;
            }

            .contact1-pic {
                width: 35%;
            }

            .contact1-form {
                width: 55%;
            }
        }

        @media (max-width: 768px) {
            .container-contact1 {
                padding: 90px 80px 88px 80px;
            }

            .contact1-pic {
                display: none;
            }

            .contact1-form {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .container-contact1 {
                padding: 90px 15px 88px 15px;
            }
        }


        /*------------------------------------------------------------------
[ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: white;
            border: 1px solid #c80000;
            border-radius: 13px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 8px;
            pointer-events: none;

            font-family: 'Montserrat', sans-serif;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: 'Montserrat', sans-serif;
            display: block;
            position: absolute;
            color: #c80000;
            font-size: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 13px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>

    <body>

        <div class="contact1">
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="images/gwen.png" alt="IMG">
                </div>

                <form class="contact1-form validate-form">
                    <span class="contact1-form-title">
                        Get in touch
                    </span>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <input class="input1" type="text" name="name" placeholder="Name">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input1" type="text" name="email" placeholder="Email">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        <input class="input1" type="text" name="subject" placeholder="Subject">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <textarea class="input1" name="message" placeholder="Message"></textarea>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn">
                            <span>
                                Send Email
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>




        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</body>

</html>