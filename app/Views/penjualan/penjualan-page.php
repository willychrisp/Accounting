<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Penjualan</a></li>
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
                            <h3>Penjualan</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetag"></i>
                        </div>
                        <a href="#" id="retail" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
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

                    <!-- retail start -->
                    <div id="retailtab">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Penjualan</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <button type="button" class="btn btn-primary" id="retail" data-toggle="modal" data-target="#modal-xli">
                                            Tambah Penjualan
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2 offset-sm-2">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select class="form-control select2" style="width: 100%;" id="bulan">
                                                    <option selected value=''>--Select Month--</option>
                                                    <option value='1'>Janaury</option>
                                                    <option value='2'>February</option>
                                                    <option value='3'>March</option>
                                                    <option value='4'>April</option>
                                                    <option value='5'>May</option>
                                                    <option value='6'>June</option>
                                                    <option value='7'>July</option>
                                                    <option value='8'>August</option>
                                                    <option value='9'>September</option>
                                                    <option value='10'>October</option>
                                                    <option value='11'>November</option>
                                                    <option value='12'>December</option>
                                                </select>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select class="form-control select2" style="width: 100%;" id="tahun">
                                                    <option value=''>--Select Year--</option>
                                                    <?php for ($i = 0; $i < 21; $i++) { ?>
                                                        <option value='<?= date("Y") - $i ?>'><?= date("Y") - $i; ?></option>
                                                    <?php } ?>
                                                </select>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 ">
                                        <div class="form-group" style="margin-top: 30px;">
                                            <a type="" id="filt" class="btn btn-primary" style="color: aliceblue;">Filter</a>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Daftar</label>
                                                <select class="form-control select2" style="width: 100%;" id="tampil">
                                                    <option selected="selected"></option>



                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="float-right">



                                </div>


                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                        <div class="row">
                            <div class="col-12" id="data">
                                <div class="card">
                                    <div class="card-header">

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
                                    <div class="card-body table-responsive">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Tanggal Terima</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="tglisi1" min="1997-01-01" max="2030-12-31" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Customer</label>
                                                    <input type="text" class="form-control" id="supisi1" disabled />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>No. Faktur</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="refisi1" disabled />
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
                                        <a href="/faktur-print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print Faktur</a>
                                        <a href="/sj-print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print SJ</a>
                                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                            Payment
                                        </button>
                                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- retail end -->
                    <!-- grosir start -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-xli" style="color:black">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judul">DATA PENJUALAN RETAIL</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="formbeli" action="/kirimdatapenjualan" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal Faktur</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="tgl" name="tanggal" />

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <select class="form-control select2" style="width: 100%;" id="customer" name="customer">
                                            <option selected="selected"></option>
                                            <?php foreach ($cust as $cus) { ?>
                                                <option value="<?= $cus->id_customer ?>"><?= $cus->kode_customer ?> - <?= $cus->nama_customer ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>No. Faktur</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="faktur" name="faktur" value="<?= "JL-" . date('ydi') . "-" . rand(000, 999) ?>" readonly="true" />
                                            <input type="hidden" class="form-control" id="jenis" name="jenis" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <!-- text input -->

                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tempo</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="tempo" name="tempo" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal Jatuh Tempo</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="tgl-jt" name="tanggal-jt" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="frm">
                                <div class="row">

                                </div>
                                <div class="row" id="row1">
                                    <div class="col-sm-3"><!-- text input -->
                                        <div class="form-group">
                                            <label id="trw-1">Kode</label>
                                            <select class="form-control select2 select" style="width: 100%;" name='nama[1]' id="nama-1">
                                                <option selected="selected"></option>
                                                <?php foreach ($stock as $sto) { ?>
                                                    <option value=<?= $sto->id_stock ?>>
                                                        <?= $sto->kode_stock ?> - <?= $sto->nama_stock ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-1"><!-- text input -->
                                        <div class="form-group"><label>Gudang</label>
                                            <div class="input-group"><input type="text" class="form-control" name='gudang[1]' id="gudang-1" /></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"><!-- text input -->
                                        <div class="form-group"><label id="label-1">Qty</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control qty" name='qty[1]' id="qty-1" />
                                                <input type="hidden" class="form-control" name='qtyawal[1]' id="qtyawal-1" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <div class="col-sm-1">
                                        <div class="form-group"> <label>Qty</label>
                                            <div class="input-group"> <input type="text" class="form-control" name='qty[1]' id="qty[1]" /> </div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-1"> <!-- text input -->
                                        <div class="form-group"> <label>Harga</label>
                                            <div class="input-group"> <input type="text" class="form-control harga" name='harga[1]' id="harga-1" /> </div>
                                            <div class="input-group"> <input type="hidden" class="form-control" name='satuan[1]' id="satuan-1" /> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"> <!-- text input -->
                                        <div class="form-group"> <label>Disc%</label>
                                            <div class="input-group qty disc"> <input type="text" class="form-control qty" name='disc[1]' id="disc-1" /> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"> <!-- text input -->
                                        <div class="form-group"> <label>Jumlah</label>
                                            <div class="input-group"> <input type="text" class="form-control" name='jumlah[1]' id="jumlah-1" readonly="true" /> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"> <!-- text input -->
                                        <div class="form-group"> <label>Jumlah Diskon</label>
                                            <div class="input-group"> <input type="text" class="form-control" name="jumlahdisc[1]" id="jumlahdisc-1" readonly="true" /> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"> <!-- text input -->
                                        <div class="form-group"> <label>Sales</label>
                                            <select class="form-control select2" style="width: 100%;" name='sales[1]' id="sales-1">
                                                <option selected="selected"></option>
                                                <?php foreach ($sales as $sal) { ?>
                                                    <option value=<?= $sal->id_sales ?>>
                                                        <?= $sal->nama_sales ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group"> <label>PPN%</label>
                                            <div class="input-group"> <input type="text" class="form-control" /> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group"> <label>PPN</label>
                                            <div class="input-group"> <input type="text" class="form-control" /> </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 offset-sm-7">
                                    <div class="form-group"> <label>Total</label>
                                        <div class="input-group"> <input type="text" class="form-control" name='total' id="total" readonly="true" /> </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group"> <label>Total setelah Diskon</label>
                                        <div class="input-group"> <input type="text" class="form-control" name='totaldisc' id="totaldisc" readonly="true" /> </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-1">
                                    <button id="hitung" type="button" class="btn btn-default">Hitung</button>
                                </div> -->

                            </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button id="add" type="button" class="btn btn-default">Tambah Item</button>
                        <input type="submit" class="btn btn-primary" />
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>

            <!-- /.modal-dialog -->
        </div>
    </section>
    <!-- /.content -->
</div>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
    //Otomasi inputan tanggal dan tanggal jatuh tempo
    document.getElementById('tgl').valueAsDate = new Date();
    $(document).on('change', '#tempo', function() {
        var someDate = new Date();
        let a = this.value;
        var numberOfDaysToAdd = parseInt(a);
        var result = someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
        document.getElementById('tgl-jt').valueAsDate = new Date(result);

    });
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

    });

    //Menambahkan form dinamis untuk item
    var i = 1;
    var l = 0;
    $(document).ready(function() {
        var x = 1;
        var frm = document.getElementById("#add");
        $("#add").click(function(u) {
            x++;
            i++;
            l++;
            $('#' + l + '').hide();
            $('#frm').append('<div class="row" id="row' + i + '"><div class="col-sm-3"><!-- text input --> <div class="form-group"> <label id="trw-' + i + '">Kode</label> <select class="form-control select2 select" style="width: 100%;" name="nama[' + i + ']" id="nama-' + i + '"> <option selected="selected"></option> <?php foreach ($stock as $sto) { ?> <option value=<?= $sto->id_stock ?>> <?= $sto->kode_stock ?> - <?= $sto->nama_stock ?> </option> <?php } ?> </select> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><label>Gudang</label> <div class="input-group"><input type="text" class="form-control" name="gudang[' + i + ']" id="gudang-' + i + '" /></div> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><label id="label-' + i + '">Qty</label> <div class="input-group"><input type="text" class="form-control qty" name="qty[' + i + ']" id="qty-' + i + '" /><input type="hidden" class="form-control" name="qtyawal[' + i + ']" id="qtyawal-' + i + '" /></div> </div> </div><div class="col-sm-1"> <!-- text input --> <div class="form-group"> <label>Harga</label> <div class="input-group"> <input type="text" class="form-control qty" name="harga[' + i + ']" id="harga-' + i + '" /><div class="input-group"> <input type="hidden" class="form-control" name="satuan[' + i + ']" id="satuan-' + i + '" /> </div> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <label>Disc%</label> <div class="input-group"> <input type="text" class="form-control qty disc" name="disc[' + i + ']" id="disc-' + i + '" /> </div> </div> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group"> <label>Jumlah</label> <div class="input-group"> <input type="text" class="form-control" name="jumlah[' + i + ']" id="jumlah-' + i + '" readonly="true" /> </div> </div> </div><div class="col-sm-2"> <!-- text input --><div class="form-group"> <label>Jumlah Diskon</label> <div class="input-group"> <input type="text" class="form-control" name="jumlahdisc[' + i + ']" id="jumlahdisc-' + i + '" readonly="true" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <label>Sales</label> <select class="form-control select2" style="width: 100%;" name="sales[' + i + ']" id="sales-' + i + '"> <option selected="selected"></option> <?php foreach ($sales as $sal) { ?> <option value=<?= $sal->id_sales ?>> <?= $sal->nama_sales ?> </option> <?php } ?> </select> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div> </div>');

            $('.select2').select2();
        });
    })

    //Menghapus form dinamis untuk item
    $(document).on('click', '.rm', function() {
        var button_id = $(this).attr("id");
        console.log('#row' + button_id + '');
        $('#row' + button_id + '').remove();
        $('#' + (button_id - 1) + '').show();
        i--;
        l--;
    });

    //Pemisah antara inputan retail dan grosir meski menggunakan form yang sama
    $(document).on('click', '#retail', function() {
        $('#judul').html("DATA PENJUALAN");
        $('#jenis').val("1");
    });
    //Pemanggilan API untuk auto fill
    async function getStock(id) {
        let response = await fetch('/api/pemb/' + id + '/');
        let data = await response.json();

        return data;
    }

    //Penggunaan API setelah dipanggil
    $(document).on('change', '.select', function() {
        var id = this.value.split(' ')[0];
        getStock(id).then(stock => {
            var a = $(this).attr('name');
            var split = a.match(/\d+/);
            console.log("oke");
            $('#gudang-' + split + '').val(stock.gudang).change();
            $('#harga-' + split + '').val(stock.hpp).change();
            $('#satuan-' + split + '').val(stock.persatuan).change();
            $('#label-' + split + '').html("Qty(" + stock.satuan + ")");
            $('#qtyawal-' + split + '').val(stock.qty_stock_kum).change();
            $('#trw-' + split + '').html("Kode (Sisa stock = " + stock.qty_stock_kum + ")");
            $('#qty-' + split + '').val("");
            $('#disc-' + split + '').val("");
            $('#jumlah-' + split + '').val("");
            $('#jumlahdisc-' + split + '').val("");
        })

    });

    //Otomasi jumlah

    $(document).on('change', '.qty', function() {
        var a = $(this).attr('name');
        console.log(a);
        var split = a.match(/\d+/);
        var qty = $('#qty-' + split + '').val();
        var satuan = $('#satuan-' + split + '').val();
        var harga = $('#harga-' + split + '').val();
        var jumlah = qty * satuan;
        var disc = $('#disc-' + split + '').val() / 100;
        console.log(disc);
        var jumlahdisc = (jumlah * harga) * disc;
        $('#jumlahdisc-' + split + '').val((jumlah * harga) - jumlahdisc).change();
        $('#jumlah-' + split + '').val(jumlah * harga).change();
    });

    $("#modal-xli").on({
        mouseenter: function() {
            var a = $('.disc');
            var total = 0;
            var totaldis = 0;
            for (p = 1; p <= a.length; p++) {
                var jumlah = $('#jumlah-' + p + '').val();
                var jumlahdisc = $('#jumlahdisc-' + p + '').val();
                total += Number(jumlah);
                totaldis += Number(jumlahdisc);

            }
            $('#total').val(total);
            $('#totaldisc').val(totaldis);
        }
    });
    // $(document).on('click', '#hitung', function() {
    //     var a = $('.disc');
    //     var total = 0;
    //     var totaldis = 0;
    //     for (p = 1; p <= a.length; p++) {
    //         var jumlah = $('#jumlah-' + p + '').val();
    //         var jumlahdisc = $('#jumlahdisc-' + p + '').val();
    //         total += Number(jumlah);
    //         totaldis += Number(jumlahdisc);

    //     }
    //     $('#total').val(total);
    //     $('#totaldisc').val(totaldis);

    // });

    //Form validation
    function validateForm(e) {
        e.preventDefault();
        var k;
        for (k = 1; k <= i; k++) {
            var nama = document.getElementById("nama-" + k).value;
            var gudang = document.getElementById("gudang-" + k).value;
            var qtyawal = Number(document.getElementById("qtyawal-" + k).value);
            var ball = Number(document.getElementById("qty-" + k).value);
            var harga = document.getElementById("harga-" + k).value;
            var disc = document.getElementById("disc-" + k).value;
            var jumlah = document.getElementById("jumlah-" + k).value;
            var sales = document.getElementById("sales-" + k).value;

            console.log(ball);
            console.log(qtyawal);
            if (nama = "" || gudang == "" || ball == "" || harga == "" || jumlah == "" || sales == "") {
                alertify
                    .alert("Ooopss..", "Ada kolom kosong pada baris " + k);
                return false;
            }
            if (ball > qtyawal) {
                alertify
                    .alert("Ooopss..", "Barang melebihi jumlah stok pada baris " + k);
                return false;
            }
        }

        var tgl = document.getElementById("tgl").value;
        var supplier = document.getElementById("customer").value;
        var ref = document.getElementById("faktur").value;
        var tempo = document.getElementById("tempo").value;
        var jt = document.getElementById("tgl-jt").value;
        var stock = document.getElementsByClassName("stock").value;
        if (tgl == "" || supplier == "" || ref == "" || tempo == "" || jt == "") {
            alertify
                .alert("Ooopss..", "Beberapa kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formbeli').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }

    $(document).on('change', '#tampil', function() {
        var id = this.value;

        var jenis = 1;
        ambilData(id, jenis).then(jual => {
            console.log(jual);
            var baris = "";
            var head = "";
            var l = 1;
            barhead = '<tr>' +
                '<th>No</th>' +
                '<th>Kode</th>' +
                '<th>Nama</th>' +
                '<th>Gudang</th>' +
                '<th>Qty</th>' +
                '<th>Harga</th>' +
                '<th>Disc%</th>' +
                '<th>Jumlah</th>' +
                '</tr>';

            var a = new Date(jual[0].tanggal_terima);
            b = a.setDate(a.getDate() + 1);

            if (jenis == 1) {
                $('#head1').html(barhead);

                document.getElementById('tglisi1').value = a.toISOString().slice(0, 10);
                $('#supisi1').val(jual[0].nama_customer).change();
                $('#refisi1').val(jual[0].no_faktur_penjualan).change();
            } else if (jenis == 2) {
                $('#head2').html(barhead);

                document.getElementById('tglisi2').value = a.toISOString().slice(0, 10);
                $('#supisi2').val(jual[0].nama_customer).change();
                $('#refisi2').val(jual[0].no_faktur).change();
            }

            for (var i = 0; i < jual.length; i++) {

                baris += '<tr>' +
                    '<td>' + l + '</td>' +
                    '<td>' + jual[i].kode_stock + '</td>' +
                    '<td>' + jual[i].nama_stock + '</td>' +
                    '<td>' + jual[i].gudang + ' </td>' +
                    '<td>' + jual[i].qty_penjualan + ' ' + jual[i].satuan + '</td>' +
                    '<td>' + jual[i].jumlah_penjualan + ' </td>' +
                    '<td>' + jual[i].diskon_penjualan + ' </td>' +
                    '<td>' + jual[i].jumlah_penjualan + '</td>' +


                    '<tr>';
                l++;
            }
            total = '<tr>' +
                '<td colspan = "7" >Sub Total Penjualan </td>' +
                '<td>' + jual[0].total_penjualan + '</td>' +
                '<tr>' +
                '<tr>' +
                '<td colspan = "7" >Total Diskon </td>' +
                '<td>' + (parseInt(jual[0].total_penjualan) - parseInt(jual[0].total_penjualan_diskon)) + '</td>' +
                '<tr>' +
                '<tr>' +
                '<td colspan = "7" >Total Penjualan </td>' +
                '<td>' + jual[0].total_penjualan_diskon + '</td>' +
                '<tr>' +
                '<tr>' +
                '<td colspan = "5" ><a type="button" href="/koreksi-penjualan/' + jual[0].id_bpenjualan + '/0" class="btn btn-primary disable" style="color: aliceblue;">Koreksi</a> <a type="button" href="/retur-penjualan-page/' + jual[0].id_bpenjualan + '/0" class="btn btn-primary disable" style="color: aliceblue;">Retur</a></td>' +
                '<td colspan="5"><form action="/faktur-print" method="post" target="_blank"><div class="row no-print"> <div class="col-sm-3"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name="logo" value="PRJ" /><input type="hidden" class="form-control" name="id" value="' + jual[0].id_bpenjualan + '" /> </div> </div> </div> <div class="col-3"> <button type="submit" href="/pembelian-print" class="btn btn-default"><i class="fas fa-print"></i> Print</button> </div> </div> </form></td>' +

                '<tr>';


            if (jenis == 1) {
                $('#data1').html(baris);
                $('#total1').html(total);
            } else if (jenis == 2) {
                $('#data1').html(baris);
                $('#total1').html(total);
            }
        })

    });
    $(document).on('click', '#filt', function() {
        var bulan = $('#bulan').val();
        var tahun = $('#tahun').val();
        if (bulan == "" || tahun == "") {
            alertify.alert('bulan atau tahun kosong');
            return;
        }
        alertify.success('Periode Berubah');
        daftarData(bulan, tahun).then(daftar => {
            var baris = "'<option></option>'";
            var t = daftar.length;
            for (var f = 0; f < t; f++) {
                var a = new Date(daftar[f].tanggal_terima);
                baris += '<option value=' + daftar[f].id_bpenjualan + '>' + a.toLocaleDateString() + " - " + daftar[f].kode_customer + " - " + daftar[f].nama_customer + '</option>';

            }
            $('#tampil').html(baris);

        })

    });

    async function ambilData(id, jenis) {
        let response = await fetch('/api/penjdat/' + id + '/' + jenis + '/');
        let data = await response.json();

        return data;
    }
    async function daftarData(bulan, tahun) {
        let response = await fetch('/api/fildatpenj/' + bulan + '/' + tahun + '/');
        let data = await response.json();

        return data;
    }
</script>
<!-- /.content-wrapper -->