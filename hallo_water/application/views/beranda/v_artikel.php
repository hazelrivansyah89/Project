<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Artikel</h3>

            <div class="card-tools">
                <a href="<?= base_url('artikel/add') ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-check"></i> Success ';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }

            ?>
            <table id="example1" class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Teks Artikel</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1;
                    foreach ($artikel as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_artikel ?></td>
                            <td><?= $value->teks_artikel ?></td>

                            <td><img src="<?= base_url('assets/gambar_artikel/' . $value->gambar) ?>" width="150px" height="150px" alt=""></td>

                            <td>
                                <a href="<?= base_url('artikel/edit/' . $value->id_artikel) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <button data-toggle="modal" data-target="#delete<?= $value->id_artikel ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- modal delete -->
<?php foreach ($artikel as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_artikel ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->judul_artikel ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah anda ingin menghapus data bernama <?= $value->judul_artikel ?>?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('artikel/delete/' . $value->id_artikel) ?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog
    </div>
<?php } ?> 
<!-- /.modal -->