<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Harian</h3>
        </div>
        <div class="card-body" style="text-align: center;">
            <?php echo form_open('laporan/lap_harian') ?>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tanggal</label>
                        <select name="tanggal" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < 32; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < 13; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"> </i> Cetak Laporan</button>
                    </div>
                </div>

            </div>
            <?php echo form_close() ?>
        </div>

    </div>

</div>

<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Bulanan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="text-align: center;">
            <?php echo form_open('laporan/lap_bulanan') ?>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < 13; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"> </i> Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Tahunan</h3>


            <!-- /.card-tools -->
        </div><?php echo form_open('laporan/lap_tahunan') ?>
        <div class="row">


            <!-- /.card-header -->
            <div class="card-body">
                <div class="col-sm-12" style="text-align: center;">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                // $sel = $i==date('Y') ?'selected="selected"':'';
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"> </i> Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->