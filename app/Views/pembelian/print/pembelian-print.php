<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> <?= $logo ?>
                                <small class="float-right">Date:
                                    <?php
                                    $a = date('d M Y', strtotime($data[0]['tanggal_terima']));

                                    echo $a; ?>
                                </small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-12 invoice-col" style="text-align: center;">
                            <hr>
                            <address style="font-size: 18px;">
                                <strong style="font-size: 32px;"><u>TERIMA BARANG</u></strong><br>
                                <?= $data[0]['no_ref'] ?><br>
                            </address>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>KODE</th>
                                        <th>NAMA BARANG</th>
                                        <th>QTY</th>
                                        <th>HARGA</th>
                                        <th>DISC %</th>
                                        <th>DISC Rp</th>
                                        <th>JUMLAH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $data[$i]['kode_stock'] ?></td>
                                            <td><?= $data[$i]['nama_stock'] ?></td>
                                            <td><?= $data[$i]['qty_stock'] ?></td>
                                            <td><?= $data[$i]['harga_pembelian'] ?></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><?= $data[$i]['jumlah_pembelian'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-3">
                            Penerima<br><br><br><br>
                            (...................)
                        </div>
                        <div class="col-2">
                            Mengetahui<br><br><br><br>
                            (...................)
                        </div>
                        <div class="col-3">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">

                            <div class="table-responsive">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>Rp. <?= $data[0]['total_pembelian'] ?>,-</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (0%)</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>Rp. <?= $data[0]['total_pembelian'] ?>,-</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->

                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section> <!-- /.content -->

<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>