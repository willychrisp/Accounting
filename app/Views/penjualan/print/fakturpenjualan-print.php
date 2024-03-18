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

                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-2 invoice-col">
                            <br><small class="float-right">Tgl Kirim:
                                <?php
                                $a = date('d M Y', strtotime($data[0]['tanggal_terima']));

                                echo $a; ?></small><br><small class="float-right">Tgl JT:
                                <?php
                                $a = date('d M Y', strtotime($data[0]['tgl_jatuh_tempo_jual']));

                                echo $a; ?></small>
                        </div>
                        <div class="col-sm-8 invoice-col" style="text-align: center;">
                            <hr>
                            <address style="font-size: 18px;">
                                <strong style="font-size: 32px;"><u>Faktur</u></strong><br>
                                <?= $data[0]['no_faktur'] ?><br>
                            </address>
                        </div>
                        <div class="col-sm-2 invoice-col" style="text-align: right;">
                            <address style="font-size: 18px;">
                                <strong><u>YTH.</u></strong><br>
                                <?= $data[0]['nama_customer'] ?> - Dampit<br> Jawa Timur
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
                                        <th>JUMLAH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $data[0]['id_stock'] ?></td>
                                            <td><?= $data[0]['nama_stock'] ?></td>
                                            <td><?= $data[0]['qty_penjualan'] ?></td>
                                            <td><?= $data[0]['harga_penjualan'] ?></td>
                                            <td><?= $data[0]['diskon_penjualan'] ?></td>
                                            <td><?= $data[0]['jumlah_penjualan'] ?></td>
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
                        <div class="col-2">
                            Penerima<br><br><br><br>
                            (...................)
                        </div>
                        <div class="col-2">
                            Mengetahui<br><br><br><br>
                            (...................)
                        </div>
                        <div class="col-4">
                            Bag. Penjualan<br><br><br><br>
                            Cintya
                        </div>
                        <!-- /.col -->
                        <div class="col-4">

                            <div class="table-responsive">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td><?= $data[0]['total_penjualan'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Discount (Rp)</th>
                                            <td><?= $data[0]['total_penjualan'] - $data[0]['total_penjualan_diskon']  ?></td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td><?= $data[0]['total_penjualan_diskon'] ?></td>
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