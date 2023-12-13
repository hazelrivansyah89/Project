<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="register-box">
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register</p>

                    <?php

                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');

                    if (
                        $this->session->flashdata('pesan')
                    ) {
                        echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    }

                    echo form_open('pelanggan/register'); ?>
                    <div class="input-group mb-3">
                        <input name="nama_pelanggan" value="<?=set_value('nama_pelanggan')?>" type="text" class="form-control" placeholder="Nama Pelanggan">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" value="<?=set_value('email')?>" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" value="<?=set_value('password')?>" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" value="<?=set_value('ulangi_password')?>" name="ulangi_password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <?php echo form_close(); ?>

                    <a href="<?= base_url('pelanggan/login')?>" class="text-center">Sudah punya akun !!!</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div><!-- /.card -->
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>