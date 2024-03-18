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
                        <li class="breadcrumb-item"><a href="/">Pembelian</a></li>
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
                                                        <input type="text" class="form-control" value="<?= $temp[0]['no_ref']; ?>" readonly="true" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Supplier</label>
                                                    <input type="text" class="form-control" value="<?= $temp[0]['id_supplier']; ?>" readonly="true" />
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
                                                        <input type="text" class="form-control" value="<?= $temp[0]['kode_stock']; ?> - <?= $temp[$i]['nama_stock']; ?>" readonly="true" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"><!-- text input -->
                                                    <div class="form-group"><label>Gudang</label>
                                                        <div class="input-group"><input type="text" class="form-control" value="<?= $temp[$i]['gudang']; ?>" readonly="true" /></div>

                                                    </div>
                                                </div>

                                                <div class="col-sm-1">
                                                    <div class="form-group"> <label>Qty</label>
                                                        <div class="input-group"> <input type="text" class="form-control qty" value="<?= $temp[$i]['qty_stock']; ?>" readonly="true" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-1"><!-- text input -->
                                                    <label>Satuan</label>
                                                    <div class="input-group"> <input type="text" class="form-control qty" value="<?= $temp[$i]['ball_pembelian']; ?>" readonly="true" /> </div>
                                                </div>
                                                <div class="col-sm-2"> <!-- text input -->
                                                    <div class="form-group"> <label>Harga</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['harga_pembelian']; ?>" readonly="true" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"> <!-- text input -->

                                                </div>
                                                <div class="col-sm-2"> <!-- text input -->
                                                    <div class="form-group"> <label>Jumlah</label>
                                                        <div class="input-group"> <input type="text" class="form-control" value="<?= $temp[$i]['jumlah_pembelian']; ?>" readonly="true" /> </div>
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
                        <form role="form" id="formUpdate" action="/updatedatapembelian" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal Terima</label>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" name=" id_base" value="<?= $base[0]['id_bp'] ?>" />
                                            <input type="date" class="form-control" id="tgl" name="" value="<?= $base[0]['tanggal_terima'] ?>" readonly="true" />
                                            <input type="hidden" class="form-control" id="tgl" name="tanggal" value="<?= $base[0]['tanggal_terima'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Supplier</label><select class="form-control select2" style="width: 100%;" id="supplier" name="supplier">
                                            <option selected="selected" value="<?= $base[0]['id_supplier'] ?>"><?= $base[0]['kode_supplier'] ?> - <?= $base[0]['nama_supplier'] ?></option><?php foreach ($supp as $sup) { ?><option value="<?= $sup->id_supplier ?>"><?= $sup->kode_supplier ?> <?= $sup->nama_supplier ?></option><?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>No. Ref</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ref" name="ref" value="<?= $base[0]['no_ref']; ?>" readonly="true" />
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
                                                <label>Kode</label><select class="form-control select2 select" style="width: 100%;" name='nama[<?= $l; ?>]' id="selectkod">
                                                    <option selected="selected" value=<?= $base[$i]['id_stock']; ?>><?= $base[$i]['kode_stock']; ?> - <?= $base[$i]['nama_stock']; ?></option><?php foreach ($stock as $sto) { ?><option value=<?= $sto->id_stock ?>><?= $sto->kode_stock ?> - <?= $sto->nama_stock ?></option><?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"><!-- text input -->
                                            <div class="form-group"><label>Gudang</label>
                                                <div class="input-group"><input type="text" class="form-control" name='gudang[<?= $l; ?>]' id="gudang-<?= $l; ?>" value="<?= $base[$i]['gudang']; ?>" /></div>
                                                <div class="input-group"><input type="hidden" class="form-control" name='id[<?= $l; ?>]' id="id-<?= $l; ?>" value="<?= $base[$i]['id_pembelian']; ?>" /></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group"> <label>Ball</label>
                                                <div class="input-group"> <input type="text" class="form-control" name="satuan[1]" id="satuan-1" /> </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group"> <label>Qty</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control qty" name='qty[<?= $l; ?>]' id="qty-<?= $l; ?>" value="<?= $base[$i]['qty_stock']; ?>" />
                                                    <input type="hidden" class="form-control qty" name='qtyawal[<?= $l; ?>]' value="<?= $base[$i]['qty_stock']; ?>" />

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-2"> <!-- text input -->
                                            <div class="form-group"> <label>Harga</label>
                                                <div class="input-group"> <input type="text" class="form-control" name='harga[<?= $l; ?>]' id="harga-<?= $l; ?>" value="<?= $base[$i]['harga_pembelian']; ?>" /> </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2"> <!-- text input -->
                                            <div class="form-group"> <label>Jumlah</label>
                                                <div class="input-group"> <input type="text" class="form-control juml" name='jumlah[<?= $l; ?>]' id="jumlah-<?= $l; ?>" value="<?= $base[$i]['jumlah_pembelian']; ?>" readonly="true" /> </div>
                                            </div>
                                        </div>
                                        <?php if ($i > 0) { ?>
                                            <div class="col-sm-1"> <a href="/delete-item-pemb/<?= $base[$i]['id_pembelian']; ?>/<?= $base[0]['id_bp']; ?>/<?= $base[$i]['id_stock']; ?>/<?= $base[$i]['qty_stock']; ?>" type="button" class="btn btn-danger">
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
                            <div class="row">
                                <div class="col-sm-2 offset-sm-8">
                                    <div class="form-group"> <label>Total</label>
                                        <div class="input-group"> <input type="text" class="form-control" name='total' id="total" readonly="true" /> </div>
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
            $('#frm').append('<div class="row" id="row' + i + '"> <div class="col-sm-3"><!-- text input --> <div class="form-group"><div class="input-group"><select class="form-control select2 select" style="width: 100%;" name="nama[' + i + ']" id="nama-' + i + '" > <option selected="selected"></option><?php foreach ($stock as $sto) { ?><option value=<?= $sto->id_stock ?>><?= $sto->kode_stock ?> - <?= $sto->nama_stock ?></option><?php } ?> </select></div> </div>  </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"> <div class="input-group"><input type="text" class="form-control" name="gudang[' + i + ']" id="gudang-' + i + '"/></div> </div> </div> <div class="col-sm-1"> <div class="form-group">  <div class="input-group"> <input type="text" class="form-control qty" name="qty[' + i + ']" id="qty-' + i + '"/><input type="hidden" class="form-control qty" name="satuan[' + i + ']" id="satuan-' + i + '"/> </div> </div> </div>  <div class="col-sm-2"> <!-- text input --> <div class="form-group">  <div class="input-group"> <input type="text" class="form-control" name="harga[' + i + ']" id="harga-' + i + '" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group">  <div class="input-group"> <input type="text" class="form-control juml" name="jumlah[' + i + ']" id="jumlah-' + i + '" /> </div> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div> </div>');

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

    $("#up").on({
        mouseenter: function() {
            var a = $('.juml');
            var total = 0;
            for (p = 1; p <= a.length; p++) {
                var jumlah = $('#jumlah-' + p + '').val();
                total += Number(jumlah);

            }
            $('#total').val(total);
        }
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
        })

    });

    $(document).on('change', '.qty', function() {
        var a = $(this).attr('name');
        var split = a.match(/\d+/);
        var qty = this.value;
        var ball = $('#satuan-' + split + '').val()
        var harga = $('#harga-' + split + '').val()
        var jumlah = qty * ball;
        $('#jumlah-' + split + '').val(jumlah * harga).change();
    });
    $(document).on('change', '.satuan', function() {
        var a = $(this).attr('name');
        var split = a.match(/\d+/);
        var ball = this.value;
        var qty = $('#qty-' + split + '').val()
        var harga = $('#harga-' + split + '').val()
        var jumlah = qty * ball;
        $('#jumlah-' + split + '').val(jumlah * harga).change();
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
            console.log(document.getElementById("gudang-" + k).value);
            var gudang = document.getElementById("gudang-" + k).value;
            var ball = document.getElementById("satuan-" + k).value;
            var qty = document.getElementById("qty-" + k).value;
            var harga = document.getElementById("harga-" + k).value;
            var jumlah = document.getElementById("jumlah-" + k).value;
            if (gudang == "" || ball == "" || qty == "" || harga == "" || jumlah == "") {
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
                    document.getElementById('formUpdate').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }
</script>