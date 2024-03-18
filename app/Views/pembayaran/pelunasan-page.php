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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pelunasan</li>
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

                    <!-- retail start -->
                    <div id="retailtab">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Pelunasan</h3>



                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Daftar</label>
                                                <select class="form-control select2" style="width: 100%;" id="cust" name="customer">
                                                    <option selected="selected"></option>
                                                    <?php foreach ($cust as $cus) { ?>
                                                        <option value=<?= $cus->id_customer ?>><?= $cus->kode_customer ?> - <?= $cus->nama_customer ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="/kirim-pembayaran" id="formbayar" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                    <div id="form"></div>
                                </form>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                        <div class="row">
                            <div class="col-12" id="data">
                                <div class="card">
                                    <div class="card-header">
                                        History
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nama Customer</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="nama" disabled />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Saldo</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="saldo" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <table class="table table-hover text-nowrap table-bordered">
                                            <thead id="head1">

                                            </thead>
                                            <tbody id="data1">

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


    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

    });

    //Menambahkan form dinamis untuk item
    var i = 1;
    var l = 0;







    //Form validation
    function validateForm(e) {
        e.preventDefault();
        var k;
        var notrans = document.getElementById("notrans").value;
        var bayar = document.getElementById("bayar").value;


        if (notrans == "" || bayar == "") {
            alertify
                .alert("Ooopss..", "Kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formbayar').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
    $(document).on('change', '#cust', function() {
        var id = this.value;
        console.log(id);
        var jenis = 1;
        if (id != 0) {
            ambilTransCust(id).then(cust => {
                console.log(cust);
                var baris = "";
                var head = "";
                var pesan = "";
                var l = 1;

                document.getElementById('saldo').value = "Rp. " + cust[0].saldo + ",-";
                document.getElementById('nama').value = cust[0].nama_customer;

                barhead = '<tr>' +
                    '<th>Tanggal</th>' +
                    '<th>No Faktur</th>' +
                    '<th>Tgl jatuh Tempo</th>' +
                    '<th>Total Tagihan</th>' +
                    '<th>Jumlah Pelunasan</th>' +
                    '<th>Action</th>' +
                    '</tr>';
                for (var i = 0; i < cust.length; i++) {

                    b = new Date(cust[i]['tgl_jatuh_tempo_jual']);
                    c = new Date();
                    d = c.getTime() - b.getTime();
                    var cd = 24 * 60 * 60 * 1000,
                        t = Math.floor(d / cd);
                    if (t > 0) {
                        pesan = '<strong style="color: #B22222 ;">Terlambat ' + t + ' hari</strong>';
                    } else if (t == 0) {
                        pesan = '<strong style="color: #FF8C00 ;">Hari ini jatuh tempo</strong>';
                    } else {
                        pesan = '<strong style="color: #50C878 ;">Jatuh tempo pada ' + t + ' hari lagi</strong>';
                    }
                    baris += '<tr>' +
                        '<td>' + cust[i].tanggal_terima + '</td>' +
                        '<td>' + cust[i].no_faktur_penjualan + '</td>' +
                        '<td>' + pesan + '</td>' +
                        '<td style="color: #B22222 ;">  Rp.' + cust[i].total_penjualan_diskon + ',-' +
                        '<td style="color: #50C878 ;">  Rp.' + cust[i].jumlah_pelunasan + ',-' +
                        '<td><a href="/form-pelunasan/' + cust[i].id_bpenjualan + '/' + cust[i].id_customer + '" class="btn btn-success"><i class="far fa-check-circle"></i> Form Pelunasan</a> </td>' +
                        '<tr>';
                }
                $('#head1').html(barhead);
                $('#data1').html(baris);
            })
        } else {
            barhead = "";
            $('#form').html(barhead);
        }
    });

    async function ambilTransCust(id) {
        let response = await fetch('/api/ambiltranscust/' + id + '/');
        let data = await response.json();
        return data;
    }
</script>
<!-- /.content-wrapper -->