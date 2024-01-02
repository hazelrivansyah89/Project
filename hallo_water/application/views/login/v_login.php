<!doctype html>
<html lang="en">

<head>
	<title>Login 04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets_login/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<?php

					echo validation_errors('<div class="alert alert-warning alert-dismissible">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');

					if (
						$this->session->flashdata('pesan')
					) {
						echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}

					if (
						$this->session->flashdata('erorr')
					) {
						echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	';
						echo $this->session->flashdata('erorr');
						echo '</div>';
					}

					echo form_open('pelanggan/login'); ?>
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(<?= base_url() ?>assets_login/images/bg-2.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
								<h3 class="mb-4" style="text-align: center; color: #87CEEB;">Login</h3>


								</div>
								<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
							</div>
							<form action="#" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">E-mail</label>
									<input name="email" type="text" class="form-control" placeholder="E-mail" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input name="password" type="password" class="form-control" placeholder="Password" required>
								</div>
								<!-- <div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
								</div> -->
								<div class="form-group" >
								<button type="submit" class="form-control rounded submit px-3" style="background-color: #87CEEB; color: #000000; border: 1px solid #87CEEB;">Sign In</button>

								
								<?php echo form_close(); ?>

								
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">	
									</div>
									<!-- <div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div> -->
								</div>
							</form>
							<p class="text-center">Belum punya akun? <a href="<?= base_url('pelanggan/register') ?>" class="text-center"> sign-up</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url() ?>assets_login/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets_login/js/popper.js"></script>
	<script src="<?= base_url() ?>assets_login/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets_login/js/main.js"></script>

</body>

</html>