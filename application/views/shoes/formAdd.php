<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add New Shoes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">
	<!--===============================================================================================-->
</head>
<body>

<div class="contact1">
	<div class="container-contact1" style="padding: 90px 130px 88px 90px;background: #f0c7c8">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="<?php echo base_url() ?>logo/adidasX.jpg" style="max-width: 500px;">
		</div>

		<form class="contact1-form validate-form" action="<?php echo site_url('create-shoes-success') ?>" method="post"
			  enctype="multipart/form-data">
				<span class="contact1-form-title">
					Thêm Mới Sản Phẩm
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
<script src="<?php echo base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>vendor/tilt/tilt.jquery.min.js"></script>
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
<script src="<?php echo base_url() ?>js/main.js"></script>

</body>
</html>

