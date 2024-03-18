<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hutang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active">Stock</li>
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
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Master Stock</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">

                    <div id="rekaptab">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <!-- general form elements disabled -->
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Filter Rekap Hutang</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form role="form" id="formstock" action="/kirimmasterstock" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Kode</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="kode" name="kode" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="nama" name="nama" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>HPP</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="hpp" name="hpp" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Gudang</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="gudang" name="gudang" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2 offset-5">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Satuan</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="satuan" name="satuan" />

                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div id="row">
                                                <div class="col-sm-3 offset-5">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="submit" class="btn btn-primary" value="Kirim Master Stock" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <!-- /.card -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Master Stock</h3>

                                                <div class="card-tools">

                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap table-bordered elevation-4">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>HPP</th>
                                                            <th>QTY</th>
                                                            <th>Satuan </th>
                                                            <th>Gudang</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($stock as $sto) { ?>
                                                            <tr>
                                                                <td><?= $sto['kode_stock'] ?></td>
                                                                <td><?= $sto['nama_stock'] ?></td>
                                                                <td><?= $sto['hpp'] ?></td>
                                                                <td><?= $sto['qty_stock_kum'] ?></td>
                                                                <td><?= $sto['satuan'] ?> (<?= $sto['persatuan'] ?>)</td>
                                                                <td><?= $sto['gudang'] ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    function validateForm(e) {
        e.preventDefault();
        var k;
        var kode = document.getElementById("kode").value;
        var nama = document.getElementById("nama").value;
        var hpp = document.getElementById("hpp").value;
        var gudang = document.getElementById("gudang").value;
        var satuan = document.getElementById("satuan").value;
        var persatuan = document.getElementById("persatuan").value;


        if (kode == "" || nama == "" || hpp == "" || gudang == "" || satuan == "" || persatuan == "") {
            alertify
                .alert("Ooopss..", "Kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formstock').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
</script>
<!-- /.content-wrapper -->