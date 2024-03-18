<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pelunasan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pelunasan-page">Pelunasan</a></li>
                        <li class="breadcrumb-item active">Kartu Pelunasan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">

                    <!-- /.card -->
                    <div class="row">
                        <div class="col-12" id="data">
                            <div class="card">
                                <div class="card-header">
                                    Kartu Pelunasan
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Nama Customer</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?= $cust->nama_customer ?>" id="nama" disabled />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Saldo</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value=" Rp. <?= $cust->saldo ?>,-" id="saldo" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Tanggal Transaksi</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?= date_format(date_create($base->tanggal_terima), "D, d M  Y") ?>" id="tgl" disabled />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>No. Faktur</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?= $base->no_faktur_penjualan ?>" id="faktur" disabled />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Tagihan Yang Harus Dibayarkan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value=" Rp. <?= $base->total_penjualan_diskon - $base->jumlah_pelunasan  ?>,-" id="tagihan" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Jumlah Yang Sudah Dibayarkan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value=" Rp. <?= $base->jumlah_pelunasan ?>,-" id="bayar" disabled />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  mt-5">
                                        <div class="card-header"> Form Pelunasan <?= $cust->nama_customer ?></div>
                                        <div class="card-body table-responsive">
                                            <form action="/kirim-pelunasan" id="formlunas" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                                <div class="row">



                                                    <div class="col-sm-3">
                                                        <div class="form-group"> <label>Tgl Pelunasan</label>
                                                            <div class="input-group"> <input type="date" class="form-control" id="tgl1" min="1997-01-01" max="2030-12-31" disabled /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"> <label>No. Pelunasan</label>
                                                            <div class="input-group"> <input type="text" class="form-control" id="notrans" name="notrans" value="<?= "PL-" . date('ydi') . "-" . rand(000, 999) . "-" . $cust->id_customer; ?>" readonly="true" />
                                                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $cust->id_customer ?>" />
                                                                <input type="hidden" class="form-control" id="base" name="base" value="<?= $base->id_bpenjualan ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"> <label>Jumlah Pelunasan</label>
                                                            <div class="input-group"> <input type="text" class="form-control" id="jumlah" name="jumlah" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="input-group"> <input type="submit" class="btn btn-primary" id="bayar" name="bayar" value="kirim" style="margin-top:30px;" /> </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form> <br>
                                        </div>
                                    </div>
                                    <br>
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead id="head1">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>No Transaksi</th>
                                                <th>Jumlah Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data1">
                                            <?php foreach ($hist as $his) { ?>
                                                <tr>
                                                    <td><?= date_format(date_create($his['tanggal_pelunasan']), "D, d M  Y")  ?></td>
                                                    <td><?= $his['no_transaksi'] ?></td>
                                                    <td style="color: #50C878 ;">Rp. <?= $his['jumlah_pelunasan'] ?>,-</td>
                                                <tr>
                                                <?php } ?>
                                        </tbody>
                                        <tfoot id="total1">
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print Faktur</a>
                                    <a href="" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print SJ</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- retail end -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
    //Otomasi inputan tanggal dan tanggal jatuh tempo
    document.getElementById('tgl1').valueAsDate = new Date();


    //Menambahkan form dinamis untuk item
    var i = 1;
    var l = 0;







    //Form validation
    function validateForm(e) {
        e.preventDefault();
        var k;
        var notrans = document.getElementById("notrans").value;
        var bayar = document.getElementById("jumlah").value;


        if (notrans == "" || bayar == "") {
            alertify
                .alert("Ooopss..", "Kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formlunas').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
</script>
<!-- /.content-wrapper -->