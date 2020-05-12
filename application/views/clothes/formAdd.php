<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('css/add.css') ?>">
	<link href="<?php echo base_url() ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
		  media="all">
	<link href="<?php echo base_url() ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		  rel="stylesheet">
	<link href="<?php echo base_url() ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url() ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

</head>
<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
	<div class="wrapper wrapper--w780">
		<div class="card card-3">
			<div class="card-heading"></div>
			<div class="card-body">
				<h2 class="title">Thêm Mới Sản Phẩm</h2>
				<form method="POST">
					<div class="input-group">
						<input class="input--style-3" type="text" placeholder="Tiêu đề sản phẩm" name="title">
					</div>
					<div class="input-group">
						<input class="input--style-3 js-datepicker" type="text" placeholder="Giá sản phẩm" name="Price">
					</div>
					<div class="input-group">
						<input class="input--style-3" type="email" placeholder="Số lượng sản phẩm" name="numbers">
					</div>
					<div class="input-group">
						<input class="input--style-3" type="text" placeholder="Loại sản phẩm" name="type_id">
					</div>
					<div class="input-group">
						<input class="input--style-3" type="file" name="image">
					</div>
					<div class="p-t-10">
						<a href="<?php echo site_url('home')?>" class="btn btn--pill btn--blue" type="submit">Hủy</a>
						<button class="btn btn--pill btn--green" type="submit">Tải Lên</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<script src="<?php echo base_url('vendor/select2/select2.min.js') ?>"></script>
<script src="<?php echo base_url('vendor/datepicker/moment.min.js') ?>"></script>
<script src="<?php echo base_url('vendor/datepicker/daterangepicker.js') ?>"></script>
