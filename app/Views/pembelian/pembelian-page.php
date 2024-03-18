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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Pembelian</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Pembelian</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circsle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">General Elements</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xli">
                                    Tambah Pembelian
                                </button>

                                <div class="modal fade" id="modal-xli" style="color:black">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Extra Large Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" id="formbeli" action="/kirimdatapembelian" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>Tanggal Terima</label>
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" id="tgl" name="tanggal" readonly="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Supplier</label>
                                                                <select class="form-control select2" style="width: 100%;" id="supplier" name="supplier">
                                                                    <option selected="selected">

                                                                    </option>
                                                                    <?php foreach ($supp as $sup) { ?>
                                                                        <option value="<?= $sup->id_supplier ?>"><?= $sup->kode_supplier ?> <?= $sup->nama_supplier ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>No. Ref</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="ref" name="ref" value="<?= "BL-" . date('ydi') . "-" . rand(000, 999) ?>" readonly="true" />
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
                                                                    <input type="date" class="form-control" id="tgl-jt" name="tanggal-jt" readonly="true" />
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
                                                                    <label>Kode</label>
                                                                    <select class="form-control select2 select" style="width: 100%;" name='nama[1]' id="nama-1">
                                                                        <option selected="selected">

                                                                        </option>
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

                                                            <div class="col-sm-1">
                                                                <div class="form-group"> <label>Ball</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name="satuan[1]" id="satuan-1" /> </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="form-group"> <label id="label-1">Qty</label>
                                                                    <div class="input-group"> <input type="text" class="form-control qty" name='qty[1]' id="qty-1" /> </div>

                                                                </div>
                                                            </div>



                                                            <div class="col-sm-2"> <!-- text input -->
                                                                <div class="form-group"> <label>Harga</label>
                                                                    <div class="input-group"> <input type="text" class="form-control qty" name='harga[1]' id="harga-1" /> </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-sm-1">
                                                                <div class="form-group"> <label>PPN%</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" /> </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-2"> <!-- text input -->
                                                                <div class="form-group"> <label>Jumlah</label>
                                                                    <div class="input-group"> <input type="text" class="form-control juml" name='jumlah[1]' id="jumlah-1" /> </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-2 offset-sm-9">
                                                            <div class="form-group"> <label>Total</label>
                                                                <div class="input-group"> <input type="text" class="form-control" name='totalpem' id="totalpem" readonly="true" /> </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-sm-2">
                                                            <div class="form-group"> <label>Total setelah Diskon</label>
                                                                <div class="input-group"> <input type="text" class="form-control" name='totaldisc' id="totaldisc" readonly="true" /> </div>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-sm-1">
                                    <button id="hitung" type="button" class="btn btn-default">Hitung</button>
                                </div> -->

                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button id="add" type="button" class="btn btn-default">Tambah Item</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pembelian</h3>

                                <!-- <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Tanggal Terima</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="tglisi" min="1997-01-01" max="2030-12-31" disabled />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <input type="text" class="form-control" id="supisi" disabled />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No. Ref</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="refisi" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead id="head">

                                    </thead>
                                    <tbody id="data">

                                    </tbody>
                                    <tfoot id="total">

                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                        <br>
                        <br>



                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
    document.getElementById('tgl').valueAsDate = new Date();
    $(document).on('change', '#tempo', function() {
        var someDate = new Date();
        let a = this.value;
        var numberOfDaysToAdd = parseInt(a);
        var result = someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
        document.getElementById('tgl-jt').valueAsDate = new Date(result);

    });
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
            $('#frm').append('<div class="row" id="row' + i + '"><div class="col-sm-3"><!-- text input --> <div class="form-group"> <label>Kode</label> <select class="form-control select2 select" style="width: 100%;" name="nama[' + i + ']" id="nama-' + i + '"> <option selected="selected"> </option> <?php foreach ($stock as $sto) { ?> <option value=<?= $sto->id_stock ?>> <?= $sto->kode_stock ?> - <?= $sto->nama_stock ?> </option> <?php } ?> </select> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><label>Gudang</label> <div class="input-group"><input type="text" class="form-control" name="gudang[' + i + ']" id="gudang-' + i + '" /></div> </div> </div><div class="col-sm-1"> <div class="form-group"> <label>Ball</label> <div class="input-group"> <input type="text" class="form-control" name="satuan[' + i + ']" id="satuan-' + i + '" /> </div> </div> </div> <div class="col-sm-1"> <div class="form-group"> <label id="label-' + i + '">Qty</label> <div class="input-group"> <input type="text" class="form-control qty" name="qty[' + i + ']" id="qty-' + i + '" /> </div> </div> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group"> <label>Harga</label> <div class="input-group"> <input type="text" class="form-control qty" name="harga[' + i + ']" id="harga-' + i + '" /> </div> <div class="input-group">  </div> </div> </div> <div class="col-sm-1"> <div class="form-group"> <label>PPN%</label> <div class="input-group"> <input type="text" class="form-control" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group"> <label>Jumlah</label> <div class="input-group"> <input type="text" class="form-control juml" name="jumlah[' + i + ']" id="jumlah-' + i + '" /> </div> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div> </div>');
            $('.select2').select2();
        });
    })
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    $(document).on('click', '.rm', function() {
        var button_id = $(this).attr("id");
        console.log(button_id);
        console.log('#row' + button_id + '');
        $('#row' + button_id + '').remove();
        $('#' + (button_id - 1) + '').show();
        i--;
        l--;
    });

    $(document).on('change', '.select', function() {
        var id = this.value.split(' ')[0];
        getStock(id).then(stock => {
            var a = $(this).attr('name');
            var split = a.match(/\d+/);
            console.log("oke");
            $('#gudang-' + split + '').val(stock.gudang).change();
            $('#harga-' + split + '').val(stock.hpp).change();
            $('#label-' + split + '').html("Qty(" + stock.satuan + ")");
            $('#qty-' + split + '').val("");

            $('#jumlah-' + split + '').val("");

        })

    });

    //Perhitungan total
    $("#frm").on({
        mouseenter: function() {
            var a = $('.juml');
            var ttl = 0;
            for (p = 1; p <= a.length; p++) {
                var jumlah = $('#jumlah-' + p + '').val();
                ttl += Number(jumlah);

            }
            $('#totalpem').val(ttl);
        }
    });

    $(document).on('change', '.qty', function() {
        var a = $(this).attr('name');
        var split = a.match(/\d+/);
        var qty = $('#qty-' + split + '').val();
        var harga = $('#harga-' + split + '').val();
        var satuan = $('#satuan-' + split + '').val();
        var jumlah = qty * satuan;
        $('#jumlah-' + split + '').val(jumlah * harga).change();
    });
    // $(document).on('change', '.satuan', function() {
    //     var a = $(this).attr('name');
    //     var split = a.match(/\d+/);
    //     var satuan = $('#satuan-' + split + '').val();
    //     var qty = $('#qty-' + split + '').val()
    //     var harga = $('#harga-' + split + '').val()
    //     var jumlah = qty * ball;
    //     $('#jumlah-' + split + '').val(jumlah * harga).change();
    // });

    async function getStock(id) {
        let response = await fetch('/api/pemb/' + id + '/');
        let data = await response.json();

        return data;
    }

    function validateForm(e) {
        e.preventDefault();
        var k;
        for (k = 1; k <= i; k++) {
            console.log(document.getElementById("gudang-" + k).value);
            var gudang = document.getElementById("gudang-" + k).value;
            var kode = document.getElementById("nama-" + k).value;
            var qty = document.getElementById("qty-" + k).value;
            var harga = document.getElementById("harga-" + k).value;
            var jumlah = document.getElementById("jumlah-" + k).value;
            if (kode == "" || gudang == "" || qty == "" || harga == "" || jumlah == "") {
                alertify
                    .alert("Ooopss..", "Ada kolom kosong pada baris " + k);
                return false;
            }
        }

        var tgl = document.getElementById("tgl").value;
        var supplier = document.getElementById("supplier").value;
        var ref = document.getElementById("ref").value;
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
        var id = this.value
        ambilData(id).then(beli => {
            console.log(beli);
            var baris = "";
            var head = "";
            var t = 1;
            barhead = '<tr>' +
                '<th>No</th>' +
                '<th>Kode</th>' +
                '<th>Nama</th>' +
                '<th>Qty</th>' +
                '<th>PPN</th>' +
                '<th>Jumlah</th>' +
                '</tr>';

            $('#head').html(barhead);
            var a = new Date(beli[0].tanggal_terima);
            b = a.setDate(a.getDate() + 1);
            document.getElementById('tglisi').value = a.toISOString().slice(0, 10);
            $('#supisi').val(beli[0].id_supplier).change();
            $('#refisi').val(beli[0].no_ref).change();
            for (var i = 0; i < beli.length; i++) {

                baris += '<tr>' +
                    '<td>' + t + '</td>' +
                    '<td>' + beli[i].kode_stock + '</td>' +
                    '<td>' + beli[i].nama_stock + '</td>' +
                    '<td>' + beli[i].qty_stock + '</td>' +
                    '<td> </td>' +
                    '<td>' + beli[i].jumlah_pembelian + '</td>' +


                    '<tr>';
                t++;
            }
            total = '<tr>' +
                '<td colspan = "5" >Total Pembelian </td>' +
                '<td>' + beli[0].total_pembelian + '</td>' +
                '<tr>' +
                '<tr>' +
                '<td colspan = "1" ><a type="button" href="/koreksi-pembelian/' + beli[0].id_bp + '/0" class="btn btn-primary" style="color: aliceblue;">Koreksi</a> </td>' +
                '<td colspan="5"><form action="/pembelian-print" method="post" target="_blank"><div class="row no-print"> <div class="col-sm-3"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name="logo" value="PRJ" /><input type="hidden" class="form-control" name="id" value="' + beli[0].id_bp + '" /> </div> </div> </div> <div class="col-3"> <button type="submit" href="/pembelian-print" class="btn btn-default"><i class="fas fa-print"></i> Print</button> </div> </div> </form></td>' +
                '<tr>' +

                $('#data').html(baris);
            $('#total').html(total);
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
                baris += '<option value=' + daftar[f].id_bp + '>' + a.toLocaleDateString() + " - " + daftar[f].no_ref + " - " + daftar[f].kode_supplier + '</option>';

            }
            $('#tampil').html(baris);

        })

    });



    async function ambilData(id) {
        let response = await fetch('/api/pembdat/' + id + '/');
        let data = await response.json();

        return data;
    }

    async function daftarData(bulan, tahun) {
        let response = await fetch('/api/fildatpem/' + bulan + '/' + tahun + '/');
        let data = await response.json();

        return data;
    }
</script>