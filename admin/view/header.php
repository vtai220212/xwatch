<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/view/admin.css">
    <title>Document</title>
</head>

<body>


    <header>
        <h1> ADMIN</h1>
    <nav>
        <a href="">Trang chủ</a>
        <a href="">Danh Mục</a>
        <a href="">Sản phẩm</a>
        <a href="">Tài khoản</a>
        <a href="">Đơn hàng</a>
    </nav>
    </header> -->

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
<style>
	body {
		background: #eeeeee;
		font-family: 'Montserrat', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar {
		font-size: 14px;
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);		
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
		text-transform: uppercase;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #f04f01;
        
	}
    .navbar .navbar-brand b1 {
		font-weight: bold;
		color: rgb(170, 75, 107);
        
	}
	.navbar ul.nav li {
		font-size: 96%;
		font-weight: bold;		
		text-transform: uppercase;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
		color: #f04f01 !important;
		background: transparent !important;
	}
	.search-box {
        position: relative;
    }
	.search-box input.form-control, .search-box .btn {
		font-size: 14px;
		border-radius: 2px !important;
	}
	.search-box .input-group-btn {
		padding-left: 4px;		
	}
	.search-box input.form-control:focus {
		border-color: #f04f01;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn-primary, .search-box .btn-primary:active {
		font-weight: bold;
		background: #f04f01;
		border-color: #f04f01;
		text-transform: uppercase;
		min-width: 90px;
	}
	.search-box .btn-primary:focus {
		outline: none;
		background: #eb4e01;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn span {
		transform: scale(0.9);
		display: inline-block;
	}
	.navbar ul li i {
		font-size: 18px;
	}
	.navbar .dropdown-menu i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .dropdown.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
		font-size: 14px;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}
	.navbar .navbar-form {
		border: none;
	}
	@media (min-width: 992px){
		.form-inline .input-group .form-control {
			width: 225px;			
		}
	}
	@media (max-width: 992px){
		.form-inline {
			display: block;
		}
	}
</style>


<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Eats <b1>&</b1> <b>Treats</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="index.php">HOME</a></li>
			<li><a href="index.php?act=danhmuc">CATEGORY</a></li>			
			<!-- <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">ACCOUNT<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					
				</ul>
			</li> -->
			<li class="active"><a href="index.php?act=sanpham">PRODUCT</a></li>
			<li><a href="index.php?act=taikhoan">ACCOUNT</a></li>
			<li><a href="index.php?act=donhang">DONHANG</a></li>
			<li><a href="index.php?act=logout">LOG OUT</a></li>
		</ul>
		<form class="navbar-form form-inline navbar-right ml-auto">
			<div class="input-group search-box">
				<input type="text" class="form-control">
				<span class="input-group-btn">
					<button type="button" class="btn btn-primary"><span>Search</span></button>
				</span>
			</div>
		</form>		
	</div>
</nav>











































    <!-- <nav>
            <a href="index.php">Trang chủ</a>
            <a href="index.php?act=danhmuc">Danh mục</a>
            <a href="index.php?act=sanpham">Sản phẩm</a>
            <a href="#">Tài khoản</a>
            <a href="#">Đơn hàng</a>
        </nav> -->