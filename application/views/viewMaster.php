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
	<link rel="stylesheet" href="<?php echo base_url('css/viewMaster.css') ?>">
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
		<!--		<div class="container"></div>-->
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="container">
					<div class="carousel-item active">
						<img src="<?php echo base_url('logo/slide1.png') ?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('logo/slide2.png') ?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('logo/slide3.png') ?>" class="d-block w-100" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="list">
		<div class="container">
			<div class="row mt-5">
				<div class="container">
					<div id="menu-list-clothes-left" class="col-lg-3"
						 style="width: 100%; height: 60px; background: blue; float: left">
						<h5 style="color: white; text-align: center; margin-top: 6%; font-size: 20px">Áo Câu Lạc Bộ
							2020</h5>
					</div>
					<div class="col-lg-9" style="width: 100%; height: 60px; background: gainsboro; float: left">
						<div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" style="text-align: center">
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Ngoại Hạng
										Anh</a>
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Tây Ban
										Nha</a>
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Đức</a>
								</div>
								<div class="carousel-item" style="text-align: center">
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Ý</a>
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										MLS</a>
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Hà Lan</a>
									<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Giải
										Pháp</a>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
							   data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button"
							   data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="list-clothes-clb">
				<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="card center " style="width: 17.33rem; float: left;">
								<img class="card-img-top"
									 src="<?php echo base_url() ?>clothes/<?php echo $clothesClbs[0]->image ?>"
									 alt="Card image cap" style="max-width: 200px; margin: 0 auto">
								<div class="card-body">
									<h5 class="card-title">
										<a href="<?php echo site_url('clothes-detail') ?>/<?php echo $clothesClbs[0]->id ?>"
										   style="text-decoration: none; color: black;">
											<?php echo $clothesClbs[0]->title ?>
										</a>
									</h5>
									<div style="text-align: left" class="ml-2">
										<div>
											<span class="price">30.000 đ </span>
											<span>(Vải gai xốp)</span>
										</div>
										<div>
											<span class="price">70.000 đ</span>
											<span>(Vai thun mịn)</span>
										</div>
										<div>
											<span class="price">100.000 đ</span>
											<span>(Hàng ST)</span>
										</div>
										<div>
											<span class="price">160.000 đ</span>
											<span>(Hàng ET)</span>
										</div>
										<div>
											<span class="price">200.000 đ</span>
											<span>(Hàng body fit player)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card center " style="width: 17.33rem; float: left;">
								<img class="card-img-top"
									 src="<?php echo base_url() ?>clothes/<?php echo $clothesClbs[1]->image ?>"
									 alt="Card image cap" style="max-width: 200px; margin: 0 auto">
								<div class="card-body">
									<h5 class="card-title">
										<a href="<?php echo site_url('clothes-detail') ?>/<?php echo $clothesClbs[1]->id ?>"
										   style="text-decoration: none; color: black;">
											<?php echo $clothesClbs[1]->title ?>
										</a>
									</h5>
									<div style="text-align: left" class="ml-2">
										<div>
											<span class="price">30.000 đ </span>
											<span>(Vải gai xốp)</span>
										</div>
										<div>
											<span class="price">70.000 đ</span>
											<span>(Vai thun mịn)</span>
										</div>
										<div>
											<span class="price">100.000 đ</span>
											<span>(Hàng ST)</span>
										</div>
										<div>
											<span class="price">160.000 đ</span>
											<span>(Hàng ET)</span>
										</div>
										<div>
											<span class="price">200.000 đ</span>
											<span>(Hàng body fit player)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card center" style="width: 17.33rem; float: left;">
								<img class="card-img-top"
									 src="<?php echo base_url() ?>clothes/<?php echo $clothesClbs[2]->image ?>"
									 alt="Card image cap" style="max-width: 200px; margin: 0 auto">
								<div class="card-body">
									<h5 class="card-title">
										<a href="<?php echo site_url('clothes-detail') ?>/<?php echo $clothesClbs[2]->id ?>"
										   style="text-decoration: none; color: black;">
											<?php echo $clothesClbs[2]->title ?>
										</a>
									</h5>
									<div style="text-align: left" class="ml-2">
										<div>
											<span class="price">30.000 đ </span>
											<span>(Vải gai xốp)</span>
										</div>
										<div>
											<span class="price">70.000 đ</span>
											<span>(Vai thun mịn)</span>
										</div>
										<div>
											<span class="price">100.000 đ</span>
											<span>(Hàng ST)</span>
										</div>
										<div>
											<span class="price">160.000 đ</span>
											<span>(Hàng ET)</span>
										</div>
										<div>
											<span class="price">200.000 đ</span>
											<span>(Hàng body fit player)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card center " style="width: 17.33rem; float: left;">
								<img class="card-img-top"
									 src="<?php echo base_url() ?>clothes/<?php echo $clothesClbs[3]->image ?>"
									 alt="Card image cap" style="max-width: 200px; margin: 0 auto">
								<div class="card-body">
									<h5 class="card-title">
										<a href="<?php echo site_url('clothes-detail') ?>/<?php echo $clothesClbs[3]->id ?>"
										   style="text-decoration: none; color: black;">
											<?php echo $clothesClbs[3]->title ?>
										</a>
									</h5>
									<div style="text-align: left" class="ml-2">
										<div>
											<span class="price">30.000 đ </span>
											<span>(Vải gai xốp)</span>
										</div>
										<div>
											<span class="price">70.000 đ</span>
											<span>(Vai thun mịn)</span>
										</div>
										<div>
											<span class="price">100.000 đ</span>
											<span>(Hàng ST)</span>
										</div>
										<div>
											<span class="price">160.000 đ</span>
											<span>(Hàng ET)</span>
										</div>
										<div>
											<span class="price">200.000 đ</span>
											<span>(Hàng body fit player)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="list-clothes-CT">
					<div class="row">
						<div class="container">
							<div class="col-lg-3" id="menu-clothes-CT-left">
								<h5 style="color: white; text-align: center; margin-top: 6%">Áo Đội Tuyển Quốc Gia</h5>
							</div>
							<div class="col-lg-9" id="menu-clothes-CT-right">
								<div id="carouselExampleControls2" class="carousel slide mt-3" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active" style="text-align: center">
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Anh</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Pháp</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Tây Ban Nha</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Bỉ</a>
										</div>
										<div class="carousel-item" style="text-align: center">
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Ý</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Đức</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Bồ Đào Nha</a>
											<a href="" style="text-decoration: none; color: black; padding: 0px 20px 0px 20px">Đội tuyển Hà Lan</a>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls2" role="button"
									   data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls2" role="button"
									   data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
