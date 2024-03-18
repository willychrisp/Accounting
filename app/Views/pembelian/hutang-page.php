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
                        <li class="breadcrumb-item"><a href="#">Pembelian</a></li>
                        <li class="breadcrumb-item active">Hutang</li>
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
                            <h3>Kartu Hutang</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="#" id="kartu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Rekap Hutang</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-paper"></i>
                        </div>
                        <a href="#" id="rekap" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <div id="kartutab">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <!-- general form elements disabled -->
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Filter Kartu Hutang</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form role="form">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Tanggal Mulai</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tanggal Akhir</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>No. Ref</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control">
                                                            <option>Lunas</option>
                                                            <option>Belum Lunas</option>
                                                            <option>Semua</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Kriteria</label>
                                                        <select class="form-control" disabled>
                                                            <option>Saldo 0</option>
                                                            <option>Saldo Kurang 0</option>
                                                        </select>
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
                                                <h3 class="card-title">Data Hutang</h3>

                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Tanggal</th>
                                                            <th>Supplier</th>
                                                            <th>Nama</th>
                                                            <th>Uraian</th>
                                                            <th>No. Ref</th>
                                                            <th>Hutang</th>
                                                            <th>Pembayaran</th>
                                                            <th>Saldo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>12 Maret 2022</td>
                                                            <td>EXM-001</td>
                                                            <td>EXAMPLE SUPPLIER</td>
                                                            <td>PELUNASAN EXAMPLE SUPPLIER </td>
                                                            <td>BL22.0000063</td>
                                                            <td>26.520.000</td>
                                                            <td>-</td>
                                                            <td>47.460.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td>5 Juli 2022</td>
                                                            <td>EXM-002</td>
                                                            <td>DUMMY SUPPLIER</td>
                                                            <td>BAYAR HUTANG DUMMY SUPPLIER </td>
                                                            <td>K-0020</td>
                                                            <td>-</td>
                                                            <td>17.600.000</td>
                                                            <td>134.679.900</td>

                                                        </tr>
                                                        <tr>
                                                            <td>12 Maret 2022</td>
                                                            <td>EXM-001</td>
                                                            <td>EXAMPLE SUPPLIER</td>
                                                            <td>PELUNASAN EXAMPLE SUPPLIER </td>
                                                            <td>BL22.0000063</td>
                                                            <td>26.520.000</td>
                                                            <td>-</td>
                                                            <td>47.460.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td>5 Juli 2022</td>
                                                            <td>EXM-002</td>
                                                            <td>DUMMY SUPPLIER</td>
                                                            <td>BAYAR HUTANG DUMMY SUPPLIER </td>
                                                            <td>K-0020</td>
                                                            <td>-</td>
                                                            <td>17.600.000</td>
                                                            <td>134.679.900</td>

                                                        </tr>
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
                                        <form role="form">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Tanggal Mulai</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tanggal Akhir</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>No. Ref</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control">
                                                            <option>Lunas</option>
                                                            <option>Belum Lunas</option>
                                                            <option>Semua</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Kriteria</label>
                                                        <select class="form-control" disabled>
                                                            <option>Saldo 0</option>
                                                            <option>Saldo Kurang 0</option>
                                                        </select>
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
                                                <h3 class="card-title">Data Hutang</h3>

                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap table-bordered elevation-4">
                                                    <thead>
                                                        <tr>
                                                            <th>Supplier</th>
                                                            <th>Nama</th>
                                                            <th>Saldo Awal</th>
                                                            <th>Hutang</th>
                                                            <th>Pembayaran</th>
                                                            <th>Saldo Akhir</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>EXM-001</td>
                                                            <td>EXAMPLE SUPPLIER</td>
                                                            <td>-</td>
                                                            <td>47.460.000</td>
                                                            <td>26.520.000</td>
                                                            <td>20.940.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EXM-002</td>
                                                            <td>DUMMY SUPPLIER</td>
                                                            <td>1.228.830.231</td>
                                                            <td>328.101.990</td>
                                                            <td>601.500.000</td>
                                                            <td>955.432.221</td>

                                                        </tr>
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
    $(document).ready(function() {
        $("#rekaptab").hide();
        $("#kartu").click(function() {
            $("#kartutab").toggle(1000);
            $("#rekaptab").hide(300);
        });
    });
    $(document).ready(function() {
        $("#rekap").click(function() {
            $("#rekaptab").toggle(1000);
            $("#kartutab").hide(300);
        });
    });
</script>
<!-- /.content-wrapper -->