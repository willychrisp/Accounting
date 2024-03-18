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
                        <li class="breadcrumb-item active">Retur</li>
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
                        <h3>Retur</h3>
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
                        <form role="form" id="formRetur" action="/kirim-data-retur" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal Terima</label>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" name="id_base" value="<?= $base[0]['id_bpenjualan'] ?>" />
                                            <input type="date" class="form-control" id="tgl" name="" value="<?= $base[0]['tanggal_terima'] ?>" readonly="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <input type="text" class="form-control" id="faktur" name="faktur" value="<?= $base[0]['nama_customer']; ?>" readonly="true" />
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

                            <hr>
                            <div id="frm">

                                <div class="row">

                                </div>
                                <div class="row" id="row1">
                                    <div class="col-sm-4 offset-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No. Transaksi Retur</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="oke" value="<?= "RET-" . date('ydi') . "-" . rand(000, 999) ?>" />
                                                <input type="hidden" class="form-control" name="id_customer" value="<?= $temp[0]['id_customer']; ?>" readonly="true" />
                                                <input type="hidden" class="form-control" name="id_base" value="<?= $temp[0]['id_bpenjualan']; ?>" readonly="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-3 offset-sm-2"><!-- text input -->
                                        <div class="form-group">
                                            <label>Kode</label><select class="form-control select2 select" style="width: 100%;" name='nama[1]' id="nama-1">
                                                <option selected="selected"></option><?php foreach ($stock as $sto) { ?><option value=<?= $sto->id_stock ?>><?= $sto->kode_stock ?> - <?= $sto->nama_stock ?></option><?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 offset-sm-1">
                                        <div class="form-group"> <label id="label-1" style="font-size: 12px;">Qty</label>
                                            <div class="input-group"> <input type="text" class="form-control qty" name='qty[1]' id="qty-1" /> </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group"> <label id="label-1" style="font-size: 12px;">Harga</label>
                                            <div class="input-group"> <input type="text" class="form-control harga" name='harga[1]' id="harga-1" /> </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                            <hr>
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
                                <button id="add" type="button" class="btn btn-default">Retur</button>
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
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    var a = new Date('<?= $base[0]['tanggal_terima']; ?>');
    b = a.setDate(a.getDate() + 1);
    document.getElementById('tgl').value = a.toISOString().slice(0, 10);



    var i = 1;
    var l = i - 1;
    $(document).ready(function() {
        var x = 1;
        var frm = document.getElementById("#add");
        $("#add").click(function(u) {
            x++;
            i++;
            l++;
            $('#' + l + '').hide();
            $('#frm').append('<div class="row" id="row' + i + '"> <div class="col-sm-3 offset-sm-2"><!-- text input --> <div class="form-group"> <label>Kode</label><select class="form-control select2 select" style="width: 100%;" name="nama[' + i + ']" id="nama-' + i + '"> <option selected="selected"></option><?php foreach ($stock as $sto) { ?><option value=<?= $sto->id_stock ?>><?= $sto->kode_stock ?> - <?= $sto->nama_stock ?></option><?php } ?> </select> </div> </div> <div class="col-sm-2 offset-sm-1"> <div class="form-group"> <label id="label-' + i + '" style="font-size: 12px;">Qty</label> <div class="input-group"> <input type="text" class="form-control qty" name="qty[' + i + ']" id="qty-' + i + '" /> </div> </div> </div><div class="col-sm-2"> <div class="form-group"> <label id="label-1" style="font-size: 12px;">Harga</label> <div class="input-group"> <input type="text" class="form-control harga" name="harga[' + i + ']" id="harga-' + i + '" /> </div> </div> </div><div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div> </div>');

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

    $(document).on('change', '.harga', function() {
        var a = $('.harga');
        var total = 0;
        for (p = 1; p <= a.length; p++) {
            var jumlah = $('#harga-' + p + '').val();
            total += Number(jumlah);

        }
        $('#total').val(total);
    });

    function validateForm(e) {
        e.preventDefault();
        var k;
        console.log(i);
        for (k = 1; k <= i; k++) {
            var nama = document.getElementById("nama-" + k).value;
            var harga = document.getElementById("harga-" + k).value;
            if (nama = "" || harga == "") {
                alertify
                    .alert("Ooopss..", "Ada kolom kosong pada baris " + k);
                return false;
            }
        }
        if (i) {
            alertify.confirm("This is a confirm dialog.",
                function() {
                    alertify.success('Ok');
                    document.getElementById('formRetur').submit();
                },
                function() {
                    alertify.error('Cancel');
                });
        }
    }

    $(document).on('change', '.select', function() {
        var a = $(this).attr('name');
        console.log(a);
        var split = a.match(/\d+/);
        var id = $('#nama-' + split + '').val();
        console.log(id);

        alertify.success('Periode Berubah');
        stockJual(id).then(stock => {

        })

    });
    async function stockJual(id, stock) {
        // let response = await fetch('/api/stockjual/' + id + '/' + stock + '/');
        // let data = await response.json();

        // return data;
    }
</script>