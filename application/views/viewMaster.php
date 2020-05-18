<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Trang Chủ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('css/viewMaster.css') ?>">g
</head>
<body>
<div class="header">
	<div class="container">
		<div id="logo">
			<a href=""><img src="<?php echo base_url('logo/logo.png') ?>" alt=""></a>
		</div>
		<div id="support">
			<img src="https://img.icons8.com/carbon-copy/30/000000/phone-not-being-used.png"/>
			<div id="hotline">
				<p>Hotline</p>
				<h5>0975.977.498</h5>
			</div>
		</div>
		<div id="search">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit"><img
							src="https://img.icons8.com/ios-filled/23/000000/search.png"/></button>
			</form>
		</div>
		<div id="login">
			<a href="">Đăng Nhập</a>
		</div>
	</div>
	<div id="menu">
		<div class="container">
			<ul>
				<li>
					<a href="">Trang chủ</a>
				</li>
				<li>
					<a href="">Áo CLB</a>
				</li>
				<li>
					<a href="">Áo tuyển quốc gia</a>
				</li>
				<li>
					<a href="">Áo không logo</a>
				</li>
				<li>
					<a href="">Giày bóng đá</a>
				</li>
				<li>
					<a href="">Phụ kiện</a>
				</li>
				<li>
					<a href="">Áo khoác</a>
				</li>
				<li>
					<a href="">Áo dài tay</a>
				</li>
				<li>
					<a href="">Bóng</a>
				</li>
				<li>
					<a href="<?php echo site_url('create-new-clothes') ?>">upload</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="slide">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="container">
				<div class="carousel-item active">
					<img src="<?php echo base_url('logo/slide1.png')?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('logo/slide2.png')?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('logo/slide3.png')?>" class="d-block w-100" alt="...">
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="list">

	</div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
