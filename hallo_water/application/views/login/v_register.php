<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets_login/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <!-- <div class="container"> -->

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

                    echo form_open('pelanggan/register'); ?>
                    <div class="wrap d-md-flex" ">
                        <div class="img" style="background-image: url(<?= base_url() ?>assets_login/images/bg-2.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign   Up</h3>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input name="nama_pelanggan" value="<?=set_value('nama_pelanggan')?>" type="text" class="form-control" placeholder="Nama Pelanggan">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">E-mail</label>
                                    <input type="email" value="<?=set_value('email')?>" name="email" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" value="<?=set_value('password')?>" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Ulangi Password</label>
                                    <input type="password" value="<?=set_value('ulangi_password')?>" name="ulangi_password" class="form-control" placeholder="Retype password">
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="form-control rounded submit px-3" style="background-color: #87CEEB; color: #000000; border: 1px solid #87CEEB;">Registrasi</button>
                                </div>
                                <?php echo form_close(); ?>
                                <p class="text-center">Sudah punya akun? <a href="<?= base_url('pelanggan/login') ?>" class="text-center" > Login </a></p>


                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                    
                                    </div>
                                    <!-- <div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div> -->
                                </div>
                            </form>
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