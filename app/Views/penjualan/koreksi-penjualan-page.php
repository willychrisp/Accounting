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
                        <li class="breadcrumb-item"><a href="/">Penjualan</a></li>
                        <li class="breadcrumb-item active">Koreksi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Koreksi</h3>
                        <p></p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <a href="#" class="small-box-footer"><i class="fas fa-arrow-circsle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">

                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-xl">
                            Data Asal
                        </button>
                        <div class="modal fade" id="modal-xl" style="color:black">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Extra Large Modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>No. Ref</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?= $temp[0]['no_faktur_penjualan']; ?>" readonly="true" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Customer</label>
                                                    <input type="text" class="form-control" value="<?= $temp[0]['id_customer']; ?>" readonly="true" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Tempo</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?= $temp[0]['tempo']; ?>" readonly="true" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <?php
                                        $l = 1;
                                        for ($i = 0; $i < count($temp); $i++) {

                                        ?>
                                            <div class="row">

                                            </div>
                                            <div class="row" id="row1">

                                                <div class="col-sm-3"><!-- text input -->
                                                    <div class="form-group">
                                                        <label>Kode</label>
                                                        <input type="text" class="form-control" value="<?= $temp[$i]['kode_stock']; ?> - <?= $temp[$i]['nama_stock']; ?>" readonly="true" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"><!-- text input -->
                                                    <div class="form-group"><label>Gudang</label>
                                                        <div class="input-group"><input type="text" class="form-control" value="<?= $temp[$i]['gudang']; ?>" readonly="true" /></div>

                                                    </div>
                                                </div>

                                                <div class="col-sm-1">
                                                    <div class="form-group"> <label>Qty</label>
                                                        <div class="input-group"> <input type="text" class="form-control qty" value="<?= $temp[$i]['qty_penjualan']; ?>" readonly="true" /> </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-1"> <!-- text input -->
                                                    <div class="form-group"> <label>Harga</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['harga_penjualan']; ?>" readonly="true" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"> <!-- text input -->
                                                    <div class="form-group"> <label>Disc</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['diskon_penjualan']; ?>" readonly="true" /> </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-2"> <!-- text input -->
                                                    <div class="form-group"> <label>Jumlah</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['jumlah_penjualan']; ?>" readonly="true" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2"> <!-- text input -->
                                                    <div class="form-group"> <label>Jumlah Diskon</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['jumlah_penjualan']; ?>" readonly="true" /> </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php $l++;
                                        } ?>

                                    </div>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="up">
                        <form role="form" id="formUpdate" action="/updatedatapenjualan" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal Terima</label>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" name=" id_base" value="<?= $base[0]['id_bpenjualan'] ?>" />
                                            <input type="date" class="form-control" id="tgl" name="" value="<?= $base[0]['tanggal_terima'] ?>" readonly="true" />
                                            <input type="hidden" class="form-control" id="tgl" name="tanggal" value="<?= $base[0]['tanggal_terima'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Customer</label><select class="form-control select2" style="width: 100%;" id="customer" name="cutomer">
                                            <option selected="selected" value="<?= $base[0]['id_customer'] ?>"><?= $base[0]['kode_customer'] ?> <?= $base[0]['nama_customer'] ?></option><?php foreach ($cust as $cus) { ?><option value="<?= $cus->id_customer ?>"><?= $cus->kode_customer ?> <?= $cus->nama_customer ?></option><?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>No. Faktur</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="faktur" name="faktur" value="<?= $base[0]['no_faktur_penjualan']; ?>" readonly="true" />
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
                                            <input type="number" class="form-control" id="tempo" name="tempo" value="<?= $base[0]['tempo']; ?>" />
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
                                <?php
                                $l = 1;
                                for ($i = 0; $i < count($base); $i++) {

                                ?>
                                    <div class="row">

                                    </div>
                                    <div class="row" id="row1">

                                        <div class="col-sm-3"><!-- text input -->
                                            <div class="form-group">
                                                <label>Kode (Sisa stock = <?= $base[$i]['qty_stock_kum']; ?>)</label><select class="form-control select2 select" style="width: 100%;" name='nama[<?= $l; ?>]' id="nama-<?= $l; ?>">
                                                    <option selected="selected" value=<?= $base[$i]['id_stock']; ?>><?= $base[$i]['kode_stock']; ?> - <?= $base[$i]['nama_stock']; ?></option><?php foreach ($stock as $sto) { ?><option value=<?= $sto->id_stock ?>><?= $sto->kode_stock ?> - <?= $sto->nama_stock ?></option><?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"><!-- text input -->
                                            <div class="form-group"><label>Gudang</label>
                                                <div class="input-group"><input type="text" class="form-control" name='gudang[<?= $l; ?>]' id="gudang-<?= $l; ?>" value="<?= $base[$i]['gudang']; ?>" /></div>
                                                <div class="input-group"><input type="hidden" class="form-control" name='id[<?= $l; ?>]' id="id-<?= $l; ?>" value="<?= $base[$i]['id_penjualan']; ?>" /></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1">
                                            <div class="form-group"> <label id="label-<?= $l ?>" style="font-size: 12px;">Qty(<?= $base[$i]['satuan']; ?>)</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control qty" name='qty[<?= $l; ?>]' id="qty-<?= $l; ?>" value="<?= $base[$i]['qty_penjualan']; ?>" />
                                                    <input type="hidden" class="form-control" name='qtybase[<?= $l; ?>]' id="qtybase-<?= $l; ?>" value="<?= $base[$i]['qty_stock_kum']; ?>" />
                                                    <input type="hidden" class="form-control" name='qtyawal[<?= $l; ?>]' id="qtyawal-<?= $l; ?>" value="<?= $base[$i]['qty_penjualan']; ?>" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-1"> <!-- text input -->
                                            <div class="form-group"> <label>Harga</label>
                                                <div class="input-group"> <input type="text" class="form-control qty" name='harga[<?= $l; ?>]' id="harga-<?= $l; ?>" value="<?= $base[$i]['harga_penjualan']; ?>" /> </div>
                                                <div class="input-group"> <input type="hidden" class="form-control" name="satuan[<?= $l; ?>]" id="satuan-<?= $l; ?>" value="<?= $base[$i]['persatuan']; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"> <!-- text input -->
                                            <div class="form-group"> <label>Disc</label>
                                                <div class="input-group"> <input type="text" class="form-control qty disc" name='disc[<?= $l; ?>]' id="disc-<?= $l; ?>" value="<?= $base[$i]['diskon_penjualan']; ?>" /> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"> <!-- text input -->
                                            <div class="form-group"> <label>Jumlah</label>
                                                <div class="input-group"> <input type="text" class="form-control" name='jumlah[<?= $l; ?>]' id="jumlah-<?= $l; ?>" value="<?= $base[$i]['jumlah_penjualan']; ?>" readonly="true" /> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"> <!-- text input -->
                                            <div class="form-group"> <label style="font-size: 13px;">Jumlah setelah Diskon</label>
                                                <div class="input-group"> <input type="text" class="form-control" name='jumlahdisc[<?= $l; ?>]' id="jumlahdisc-<?= $l; ?>" value="<?= $base[$i]['jumlah_penjualan_diskon']; ?>" readonly="true" /> </div>
                                            </div>
                                        </div>
                                        <?php if ($i > 0) { ?>
                                            <div class="col-sm-1"> <a href="/delete-item-penj/<?= $base[$i]['id_penjualan']; ?>/<?= $base[0]['id_bpenjualan']; ?>/<?= $base[$i]['id_stock']; ?>/<?= $base[$i]['qty_penjualan']; ?>" type="button" class="btn btn-danger">
                                                    <i class="fas fa-minus" style="color: white;"></i></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row">



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
                                <?php $l++;
                                } ?>
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
                            <div class="modal-footer justify-content-between">
                                <button id="add" type="button" class="btn btn-default">Tambah Item</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->

            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url() ?>/plugins/select2/js/select2.full.min.js"></script>
<script>
    $(document).ready(function() {
        var someDate = new Date('<?= $base[0]['tanggal_terima'] ?>');
        let a = $('#tempo').val();
        var numberOfDaysToAdd = parseInt(a);
        var result = someDate.setDate(someDate.getDate() + numberOfDaysToAdd + 1);
        document.getElementById('tgl-jt').valueAsDate = new Date(result);
    });
    $(document).on('change', '#tempo', function() {
        var someDate = new Date('<?= $base[0]['tanggal_terima'] ?>');
        let a = this.value;
        var numberOfDaysToAdd = parseInt(a);
        var result = someDate.setDate(someDate.getDate() + numberOfDaysToAdd + 1);
        document.getElementById('tgl-jt').valueAsDate = new Date(result);

    });
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    var a = new Date('<?= $base[0]['tanggal_terima']; ?>');
    b = a.setDate(a.getDate() + 1);
    document.getElementById('tgl').value = a.toISOString().slice(0, 10);



    var i = <?= count($base); ?>;
    var l = i - 1;
    $(document).ready(function() {
        var x = 1;
        var frm = document.getElementById("#add");
        $("#add").click(function(u) {
            x++;
            i++;
            l++;
            $('#' + l + '').hide();
            $('#frm').append('<div class="row" id="row' + i + '"><div class="col-sm-3"><!-- text input --> <div class="form-group"> <label id="trw-' + i + '">Kode</label> <select class="form-control select2 select" style="width: 100%;" name="nama[' + i + ']" id="nama-' + i + '"> <option selected="selected"></option> <?php foreach ($stock as $sto) { ?> <option value=<?= $sto->id_stock ?>> <?= $sto->kode_stock ?> - <?= $sto->nama_stock ?> </option> <?php } ?> </select> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><label>Gudang</label> <div class="input-group"><input type="text" class="form-control" name="gudang[' + i + ']" id="gudang-' + i + '" /></div> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><label id="label-' + i + '" style="font-size: 12px;">Qty</label> <div class="input-group"><input type="text" class="form-control qty" name="qty[' + i + ']" id="qty-' + i + '" /><input type="text" class="form-control qty" name="qtybase[' + i + ']" id="qtybase-' + i + '" /></div> </div> </div><div class="col-sm-1"> <!-- text input --> <div class="form-group"> <label>Harga</label> <div class="input-group"> <input type="text" class="form-control qty" name="harga[' + i + ']" id="harga-' + i + '" /><div class="input-group"> <input type="hidden" class="form-control" name="satuan[' + i + ']" id="satuan-' + i + '" /> </div> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <label>Disc%</label> <div class="input-group"> <input type="text" class="form-control qty disc" name="disc[' + i + ']" id="disc-' + i + '" /> </div> </div> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group"> <label>Jumlah</label> <div class="input-group"> <input type="text" class="form-control" name="jumlah[' + i + ']" id="jumlah-' + i + '" readonly="true" /> </div> </div> </div><div class="col-sm-2"> <!-- text input --><div class="form-group"> <label style="font-size: 12px;">Jumlah Diskon</label> <div class="input-group"> <input type="text" class="form-control" name="jumlahdisc[' + i + ']" id="jumlahdisc-' + i + '" readonly="true" /> </div> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div> </div>');

            $('.select2').select2();
        });
    })
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    $(document).on('click', '.rm', function() {
        var button_id = $(this).attr("id");
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
            $('#satuan-' + split + '').val(stock.persatuan).change();
            $('#label-' + split + '').html("Qty(" + stock.satuan + ")");
            $('#trw-' + split + '').html("Kode (Sisa stock = " + stock.qty_stock_kum + ")");
            $('#qtybase-' + split + '').val(stock.qty_stock_kum).change();
            $('#qty-' + split + '').val("");
            $('#disc-' + split + '').val("");
            $('#jumlah-' + split + '').val("");
            $('#jumlahdisc-' + split + '').val("");
        })

    });

    $(document).on('change', '.qty', function() {
        var a = $(this).attr('name');

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

    $("#up").on({
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

    async function getStock(id) {
        let response = await fetch('/api/pemb/' + id + '/');
        let data = await response.json();

        return data;
    }

    function validateForm(e) {
        e.preventDefault();
        var k;
        for (k = 1; k <= i; k++) {
            var nama = document.getElementById("nama-" + k).value;
            var gudang = document.getElementById("gudang-" + k).value;
            var ball = Number(document.getElementById("qty-" + k).value);
            var qtybase = Number(document.getElementById("qtybase-" + k).value);
            var harga = document.getElementById("harga-" + k).value;
            var disc = document.getElementById("disc-" + k).value;
            var jumlah = document.getElementById("jumlah-" + k).value;
            console.log(ball);
            if (nama = "" || gudang == "" || ball == "" || harga == "" || jumlah == "") {
                alertify
                    .alert("Ooopss..", "Ada kolom kosong pada baris " + k);
                return false;
            } else if (ball > qtybase) {

                console.log(qtybase);
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
        if (tgl == "" || supplier == "" || ref == "" || tempo == "" || jt == "") {
            alertify
                .alert("Ooopss..", "Beberapa kolom wajib diisi.");
            return false;
        } else {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formUpdate').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
</script>