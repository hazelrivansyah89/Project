<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row ">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-check"></i> Success ';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
            </div>
            <div class="col-sm-12">
                <?php
                echo form_open('belanja/update'); ?>

                <table class="table text-align" cellpadding="6" cellspacing="1" style="width:100%">

                    <tr>
                        <th width="100px">QTY</th>
                        <th width="180px">Nama Barang</th>
                        <th width="180px" style="text-align:left">Harga</th>
                        <th width="130px" style="text-align:left">Sub-Total</th>
                        <th width="100px" style="text-align:center">Berat</th>
                        <th width="100px" style="text-align:center">Action</th>
                    </tr>

                    <?php $i = 1; ?>

                    <?php
                    $tot_berat = 0;
                    foreach ($this->cart->contents() as $items) {
                        $barang = $this->m_home->detail_barang($items['id']);
                        $berat = $items['qty'] * $barang->berat;
                        $tot_berat = $tot_berat + $berat;
                    ?>

                        <tr>
                            <td>
                                <?php
                                echo form_input(array(
                                    'name' => $i . '[qty]',
                                    'value' => $items['qty'],
                                    'maxlength' => '3',
                                    'min' => '0',
                                    'size' => '5',
                                    'type' => 'number',
                                    'class' => 'form-control'
                                )); ?></td>
                            <td>
                                <?php echo $items['name']; ?>
                            </td>
                            <td style="text-align:left">Rp. <?php echo number_format($items['price']); ?></td>
                            <td style="text-align:left">Rp. <?php echo number_format($items['subtotal']); ?></td>
                            <td style="text-align:center"><?= $berat ?> gr</td>
                            <td style="text-align:center">
                                <a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php $i++; ?>

                    <?php } ?>
                    <div class="align-center">

                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td colspan="2"> </td> -->
                            <th>
                                <h5>Total Berat :</h5>
                            </th>
                            <th>
                                <h5><?= $tot_berat ?> gr</h5>
                                <hr>
                            </th>


                        </tr>
                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td colspan="2"> </td> -->
                            <th class="text-bold">
                                <h5>Total Harga :</h5>
                            </th>
                            <th>
                                <h5><?php echo number_format($this->cart->total()); ?></h5>
                                <hr>
                            </th>


                        </tr>
                    </div>



                </table>

                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Update Cart</button>

                <a href="<?= base_url('belanja/cekout') ?>" class="btn btn-success btn-flat"><i class="fa fa-check-square"></i> Check Out</a>

                <a href="<?= base_url('belanja/clear') ?>" class="btn btn-danger btn-flat"><i class="fa fa-recycle"></i> Clear all</a>

                <?php echo form_close(); ?>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->
<script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>